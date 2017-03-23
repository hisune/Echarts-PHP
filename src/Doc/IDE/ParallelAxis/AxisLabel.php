<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\ParallelAxis;

class AxisLabel
{            
        
    /**
     * @var boolean Whether to show the label of axis label or not.
     */
    public $show = true;        
        
    /**
     * @var int|callable 
     */
    public $interval = 'auto';        
        
    /**
     * @var boolean Specifies whether the axis label faces Inside. False by default.
     */
    public $inside = false;        
        
    /**
     * @var int Rotation degree of axis label, which is especially useful when there is no enough space for category axis.
     * Rotation degree is from -90 to 90.
     */
    public $rotate = 0;        
        
    /**
     * @var int The margin between the axis label and the axis line.
     */
    public $margin = 8;        
        
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
     * @var AxisLabel\TextStyle 
     */
    public $textStyle;

}