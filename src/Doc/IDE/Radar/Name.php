<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Radar;

class Name
{            
        
    /**
     * @var boolean 是否显示指示器名称。
     */
    public $show = true;        
        
    /**
     * @var string|callable 指示器名称显示的格式器。支持字符串和回调函数，如下示例：
     * // 使用字符串模板，模板变量为指示器名称 {value}
     * formatter: 【{value}】
     * // 使用回调函数，第一个参数是指示器名称，第二个参数是指示器配置项
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