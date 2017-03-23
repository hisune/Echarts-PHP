<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Radar\AxisLabel;

class TextStyle
{            
        
    /**
     * @var string|callable Color of axis label is set to be axisLine.lineStyle.color by default. Callback function is supported, in the following format:
     * (val: string) =&gt; Color
     * 
     * Parameter is the text of label, and return value is the color. See the following example:
     * textStyle: {
     *     color: function (value, index) {
     *         return value &gt;= 0 ? green : red;
     *     }
     * }
     */
    public $color;        
        
    /**
     * @var string  font style
     * Options are: 
     * 
     * normal
     * italic
     * oblique
     */
    public $fontStyle = 'normal';        
        
    /**
     * @var string  font thick weight
     * Options are: 
     * 
     * normal
     * bold
     * bolder
     * lighter
     * 100 | 200 | 300 | 400...
     */
    public $fontWeight = 'normal';        
        
    /**
     * @var string  font family
     */
    public $fontFamily = 'sans-serief';        
        
    /**
     * @var int  font size
     */
    public $fontSize = 12;        
        
    /**
     * @var string Label text align, can be left, right, center. Defaultly will choose one of them automatically.
     */
    public $align;        
        
    /**
     * @var string Label text vertical align, can be top, middle, bottom. Defaultly will choose one of them automatically.
     */
    public $baseline;

}