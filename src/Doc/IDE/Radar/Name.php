<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Radar;

class Name
{            
        
    /**
     * @var boolean Whether to display the indicators name.
     */
    public $show = true;        
        
    /**
     * @var string|callable The formatter of indicators name, in which the string and callback function are supported. See the following example: 
     * // using string template, the template variable should be the indicators name {value}
     * formatter: 【{value}】
     * // using callback function, the first parameter is the indicators name, and the second parameter id the indicators cinfiguration item 
     * formatter: function (value, indicator) {
     *     return 【 + value + 】;
     * }
     */
    public $formatter;        
        
    /**
     * @var Name\TextStyle 
     */
    public $textStyle;

}