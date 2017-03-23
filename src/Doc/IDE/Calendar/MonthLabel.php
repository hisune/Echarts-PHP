<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Calendar;

class MonthLabel
{            
        
    /**
     * @var boolean Whether to show monthLabel.
     */
    public $show = true;        
        
    /**
     * @var string Set the month text location in the month interval.
     * Options:
     * 
     * center
     * left
     */
    public $align = 'center';        
        
    /**
     * @var int The margin between the month label and the axis line.
     */
    public $margin = 5;        
        
    /**
     * @var string Position of week, at the beginning or end of the range.
     * Options:
     * 
     * start
     * end
     */
    public $position = 'start';        
        
    /**
     * @var string|array Month text content, defaults to en;
     * It supports Chinese, English, and custom;
     * Index 0 always means Jan;
     * Examples:
     * // Shortcut to English [
     *                 Jan, Feb, Mar,
     *                 Apr, May, Jun,
     *                 Jul, Aug, Sep,
     *                 Oct, Nov, Dec
     *             ],
     * nameMap: en
     * 
     * // Shortcut to Chinese [
     *                 一月, 二月, 三月,
     *                 四月, 五月, 六月,
     *                 七月, 八月, 九月,
     *                 十月, 十一月, 十二月
     *             ]
     * nameMap: cn
     * 
     * // Custom settings: mixed in English and Chinese or not displayed
     * nameMap: [
     *             一月, Feb, 三月,
     *             四月, May, 六月,
     *             七月, 八月, ,
     *             十月, Nov, 十二月
     *         ],
     * 
     * 
     * calendar: [{
     *     monthLabel: {
     *         nameMap: en
     *     }
     * }]
     */
    public $nameMap = 'en';        
        
    /**
     * @var string|callable Formatter of month text label, which supports string template and callback function.
     * Examples:
     * // Use string template; eg: 2017-02
     * 
     *     template variables:
     *     {nameMap} default nameMap eg：Feb
     *     {yyyy}   four-digit years eg: 2017
     *     {yy}   two-digit years eg: 17
     *     {MM}   two-digit month eg: 02
     *     {M}   single-digit month eg: 2
     * 
     * formatter: {yyyy}-{MM}
     * 
     * // Use callback function;
     * 
     *     function parameters:
     *     param.nameMap default nameMap eg：Feb
     *     param.yyyy   four-digit years eg: 2017
     *     param.yy   two-digit years eg: 17
     *     param.MM   two-digit month eg: 02
     *     param.M   single-digit eg: 2
     * 
     * formatter: function (param) {
     *     // ...
     *     return param.MM;
     * }
     */
    public $formatter;        
        
    /**
     * @var MonthLabel\TextStyle Style of text in normal state.
     */
    public $textStyle;

}