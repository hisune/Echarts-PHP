<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

class AxisLabel
{            
        
    /**
     * @var boolean 是否显示标签。
     */
    public $show = true;        
        
    /**
     * @var int 标签与刻度线的距离。
     */
    public $distance = 5;        
        
    /**
     * @var string|callable 刻度标签的内容格式器，支持字符串模板和回调函数两种形式。
     * 示例:
     * // 使用字符串模板，模板变量为刻度默认标签 {value}
     * formatter: {value} kg
     * 
     * // 使用函数模板，函数参数分别为刻度数值
     * formatter: function (value) {
     *     return value + km/h;
     * }
     */
    public $formatter;        
        
    /**
     * @var AxisLabel\TextStyle 
     */
    public $textStyle;        
        
    /**
     * @var string 刻度颜色
     */
    public $color = 'auto';

}