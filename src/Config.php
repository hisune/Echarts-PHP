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
    public static $dist = '//cdn.bootcss.com/echarts/4.0.4';
    public static $version = '4.0.4';
    public static $method = array();
    public static $renderScript = true;
    public static $distType = ''; // Empty is full, other options: simple, common
    public static $minify = true; // Whether or not load minify js file
    public static $extraScript = array();
    public static $jsVar = '';
    public static $scripts = [];
    public static $prefix = 'chart_';

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
    public static function optionMethod(&$option)
    {
        foreach($option as $k => $v){
            if(is_string($v)) {
                $replace = str_replace(array("\t", "\r", "\n", "\0", "\x0B", ' '), '', $v);
                if (strpos($replace, 'function(') === 0)
                    $option[$k] = self::_jsMethod($v);
            }elseif(is_array($v))
                self::optionMethod($option[$k]);
        }
    }

    public static function eventMethod($name)
    {
        return $name . '(params);';
    }

    // 替换回js的函数
    public static function jsonEncode($option)
    {
        $option = json_encode($option);
        if(self::$method){
            $option = str_replace(array_keys(self::$method), array_values(self::$method), $option);
        }
        return $option;
    }

    public static function render($id, $option, $theme = null, array $attribute = array(), array $events = array())
    {
        $attribute = self::_renderAttribute($attribute);
        is_null($theme) && $theme = 'null';

        $js = '';
        if(static::$renderScript){
            $src = self::$dist . '/echarts' . (self::$distType ? '.' . self::$distType : '') . (self::$minify ? '.min' : '') . '.js';

            self::_renderScript($src, $js);

            if(static::$extraScript){
                foreach(static::$extraScript as $k => $v){
                    $src = $v . '/' . $k;
                    self::_renderScript($src, $js);
                }
            }
        }

        $jsVar = static::$jsVar;

        if(version_compare(self::$version, '3.0.0') < 0){
            $dist = self::$dist;
            $require = self::_require($option);
            $option = self::jsonEncode($option);
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
            $eventsHtml = '';
            $prefix = self::$prefix;
            if($events){
                foreach($events as $event => $call){
                    $eventsHtml .= $prefix . $jsVar . '.on(\'' . $event . '\', function (params) {' . $call . '});';
                }
            }
            $option = self::jsonEncode($option);
            return <<<HTML
<div id="$id" $attribute></div>
$js
<script type="text/javascript">
    var $prefix$jsVar = echarts.init(document.getElementById('$id'), '$theme');
    $prefix$jsVar.setOption($option);$eventsHtml
</script>
HTML;
        }
    }

    private static function _renderScript($src, &$js)
    {
        if(!isset(self::$scripts[$src])){
            $js .= '<script type="text/javascript" src="' . $src . '"></script>';
            self::$scripts[$src] = true;
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
