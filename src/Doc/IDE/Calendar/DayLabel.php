<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Calendar;

class DayLabel
{            
        
    /**
     * @var boolean Whether to show the dayLabel.
     */
    public $show = true;        
        
    /**
     * @var int A week from the beginning of the week, the default starting on Sunday.
     * Examples:
     * 
     * calendar: [{
     *     dayLabel: {
     *         firstDay: 1 // start on Monday
     *     }
     * }]
     */
    public $firstDay = 0;        
        
    /**
     * @var int The margin between the day label and the axis line.
     */
    public $margin = 0;        
        
    /**
     * @var string Position of week, at the beginning or end of the range.
     * Options:
     * 
     * start
     * end
     */
    public $position = 'start';        
        
    /**
     * @var string|array Week text content, defaults to en;
     * It supports Chinese, English, and custom;
     * index 0 always means Sunday;
     * Examples:
     * 
     * // shortcut to English  [S, M, T, W, T, F, S],
     * nameMap: en
     * 
     * // shortcut to Chinese [日, 一, 二, 三, 四, 五, 六]
     * nameMap: cn
     * 
     * // Custom settings: mixed in English and Chinese or not displayed
     * nameMap: [S, 一, T, 三, , 五, S],
     * 
     * calendar: [{
     *     dayLabel: {
     *         nameMap: en
     *     }
     * }]
     */
    public $nameMap = 'en';        
        
    /**
     * @var DayLabel\TextStyle Style of text in normal state.
     */
    public $textStyle;

}