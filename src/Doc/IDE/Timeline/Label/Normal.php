<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline\Label;

class Normal
{            
        
    /**
     * @var boolean Whether to show the label.
     */
    public $show = true;        
        
    /**
     * @var string|int Interval of label. When it is assigned with a numerical value, such as  2, a label would show every 2 items.
     */
    public $interval = 'auto';        
        
    /**
     * @var prefix Rotation angle of label, in which positive values refer to counter clockwise rotation.
     */
    public $rotate = '0';        
        
    /**
     * @var string|callable Formatter of axis label, which supports string template and callback function.
     * Example:
     * // Use string template; template variable is the default label of axis {value}
     * formatter: {value} kg
     * 
     * // Use callback function; function parameters are axis index
     * formatter: function (value, index) {
     *     // Formatted to be month/day; display year only in the first label
     *     var date = new Date(value);
     *     var texts = [(date.getMonth() + 1), date.getDate()];
     *     if (idx === 0) {
     *         texts.unshift(date.getYear());
     *     }
     *     return texts.join(/);
     * }
     */
    public $formatter;        
        
    /**
     * @var Normal\TextStyle 
     */
    public $textStyle;

}