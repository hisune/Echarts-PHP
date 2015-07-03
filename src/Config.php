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
    public static $dist = 'https://cdnjs.cloudflare.com/ajax/libs/echarts/2.2.5';
    public static $method = array();

    public static function scriptCdn()
    {
        return array(
            'bar' => 'chart/bar.js',
        );
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
                $replace = str_replace(array("\t","\r","\n","\0","\x0B", ' '), '', $v);
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

        $dist = self::$dist;
        $require = self::_require($option);
        $option = self::_jsonEncode($option);
        $attribute = self::_renderAttribute($attribute);
        is_null($theme) && $theme = 'null';

        return <<<HTML
<div id="$id" style="height:400px" $attribute></div>
<script src="{$dist}/echarts.js"></script>
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
			var myChart = ec.init(document.getElementById('$id'), $theme);
			var option = $option;
			myChart.setOption(option);
		}
	);
</script>
HTML;
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

        foreach ($attribute as $k => $v) {
            $attributeString .= " $k=\"" . self::_h($v) . '"';
        }

        return $attributeString;
    }

    private static function _h($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
    }

}
