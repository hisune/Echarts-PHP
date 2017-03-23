<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Calendar;

class YearLabel
{            
        
    /**
     * @var boolean Whether to show yearLabel.
     */
    public $show = true;        
        
    /**
     * @var int The margin between the month label and the axis line.
     */
    public $margin = 30;        
        
    /**
     * @var string Position of year.
     * Default:
     * when orient is set as horizontal, position is left
     * when orient is set as vertical, position is top
     * Options:
     * 
     * top
     * bottom
     * left
     * right
     */
    public $position;        
        
    /**
     * @var string|callable Formatter of year text label, which supports string template and callback function.
     * By default, the current range of the year, if the interval across the year, showing the first year and the last year
     * Examples:
     * // Use string template; eg: [2017-10-11, 2018-01-21]
     * 
     *     template variables:
     *     {nameMap} default nameMap eg：2017-2018
     *     {start}   start year eg: 2017
     *     {end}   end year eg: 2018
     * 
     * 
     * formatter: {start}-{end}
     * 
     * // Use callback function;
     * 
     *     function parameters:
     *     param.nameMap default nameMap eg：2017-2018
     *     param.start   start year eg: 2017
     *     param.end   end year eg: 2018
     * 
     * formatter: function (param) {
     *     // ...
     *     return param.end;
     * }
     */
    public $formatter;        
        
    /**
     * @var YearLabel\TextStyle Style of text in normal state.
     */
    public $textStyle;

}