<?php
/**
 * Created by Hisune.
 * User: hi@hisune.com
 * Date: 2015/7/3
 * Time: 14:10
 */

namespace Hisune\EchartsPHP;

class Config
{
    public static $dist = '//cdnjs.cloudflare.com/ajax/libs/echarts/3.2.3';
    public static $method = array();
    public static $isOutputJs = false;
    public static $distType = ''; // Empty is full, other options: simple, common
    public static $minify = true; // Whether or not load minify js file
    public static $extraScript = array();

    public static function jsExpr($string)
    {
        return self::_jsMethod($string);
    }

    private static function _jsMethod($value)
    {
        $md5 = '{%' . md5($value) . '%}';
        self::$method['"' . $md5 . '"'] = $value;
        return $md5;
    }

    // 替换js的function
    private static function _optionMethod(&$option)
    {
        foreach($option as $k => $v){
            if(is_string($v)){
                $replace = str_replace(array("\t","\r","\n","\0","\x0B",' '), '', $v);
                if(strpos($replace, 'function(') === 0)
                    $option[$k] = self::_jsMethod($v);

            }elseif(is_array($v))
                self::_optionMethod($option[$k]);
        }
    }

    // 替换回js的函数
    private static function _jsonEncode($option)
    {
        $option = json_encode($option);
        if(self::$method){
            $option = str_replace(array_keys(self::$method), array_values(self::$method), $option);
        }
        return $option;
    }

    public static function render($id, $option, $theme = null, array $attribute = array())
    {
        self::_optionMethod($option);

        $attribute = self::_renderAttribute($attribute);
        is_null($theme) && $theme = 'null';
        if(!static::$isOutputJs){
            $js = '<script src="' . self::$dist . '/echarts' . (self::$distType ? '.' . self::$distType : '') . (self::$minify ? '.min' : '') . '.js"></script>';

            if(static::$extraScript)
                foreach(static::$extraScript as $k => $v)
                    $js .= '<script src="' . $v . '/' . $k . '"></script>';

            static::$isOutputJs = true;
        } else
            $js = '';

        $distArray = explode('/', trim(self::$dist, '/'));
        if(version_compare(end($distArray), '3.0.0') < 0){
            $dist = self::$dist;
            $require = self::_require($option);
            $option = self::_jsonEncode($option);
            return <<<HTML
<div id="$id" $attribute></div>
$js
<script type="text/javascript">
	require.config({
		paths: {
			echarts: '{$dist}'
		}
	});
	require(
		[
			$require
		],
		function (ec) {
			var myChart = ec.init(document.getElementById('$id'), '$theme');
			var option = $option;
			myChart.setOption(option);
		}
	);
</script>
HTML;
        }else{
            $option = self::_jsonEncode($option);
            return <<<HTML
<div id="$id" $attribute></div>
$js
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('$id'), '$theme');
    var option = $option;
    myChart.setOption(option);
</script>
HTML;
        }
    }

    private static function _require($option)
    {
        $requireString = "'echarts',";

        if (isset($option['series'])) {
            foreach ($option['series'] as $v) {
                if (isset($v['type'])) {
                    $requireString .= "'echarts/chart/" . $v['type'] . "',";
                }
            }

            $requireString = rtrim($requireString, ',');
        }

        return $requireString;
    }

    private static function _renderAttribute(array $attribute = array())
    {
        $attributeString = '';

        if(!isset($attribute['style']))
            $attribute['style'] = 'height:400px';
        foreach ($attribute as $k => $v) {
            $attributeString .= " $k=\"" . self::_h($v) . '"';
        }

        return $attributeString;
    }

    private static function _h($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
    }

    public static function addExtraScript($file, $dist = null)
    {
        !$dist && $dist = self::$dist;
        self::$extraScript[$file] = $dist;
    }

}
