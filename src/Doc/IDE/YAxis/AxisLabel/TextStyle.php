<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\YAxis\AxisLabel;

class TextStyle
{            
        
    /**
     * @var string|callable 刻度标签文字的颜色，默认取 axisLine.lineStyle.color。支持回调函数，格式如下
     * (val: string) =&gt; Color
     * 
     * 参数是标签的文本，返回颜色值，如下示例：
     * textStyle: {
     *     color: function (val) {
     *         return val &gt;= 0 ? green : red;
     *     }
     * }
     */
    public $color;        
        
    /**
     * @var string 文字字体的风格
     * 可选：
     * 
     * normal
     * italic
     * oblique
     */
    public $fontStyle = 'normal';        
        
    /**
     * @var string 文字字体的粗细
     * 可选：
     * 
     * normal
     * bold
     * bolder
     * lighter
     * 100 | 200 | 300 | 400...
     */
    public $fontWeight = 'normal';        
        
    /**
     * @var string 文字的字体系列
     */
    public $fontFamily = 'sans-serif';        
        
    /**
     * @var int 文字的字体大小
     */
    public $fontSize = 12;

}