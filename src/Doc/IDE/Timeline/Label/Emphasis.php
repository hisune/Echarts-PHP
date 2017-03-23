<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline\Label;

class Emphasis
{            
        
    /**
     * @var boolean 是否显示 label。
     */
    public $show = true;        
        
    /**
     * @var string|int label 的间隔。当指定为数值时，例如指定为 2，则每隔两个显示一个 label。
     */
    public $interval = 'auto';        
        
    /**
     * @var prefix label 的旋转角度。正值表示逆时针旋转。
     */
    public $rotate = '0';        
        
    /**
     * @var string|callable 刻度标签的内容格式器，支持字符串模板和回调函数两种形式。
     * 示例:
     * // 使用字符串模板，模板变量为刻度默认标签 {value}
     * formatter: {value} kg
     * 
     * // 使用函数模板，函数参数分别为刻度数值（类目），刻度的索引
     * formatter: function (value, index) {
     *     // 格式化成月/日，只在第一个刻度显示年份
     *     var date = new Date(value);
     *     var texts = [(date.getMonth() + 1), date.getDate()];
     *     if (index === 0) {
     *         texts.unshift(date.getYear());
     *     }
     *     return texts.join(/);
     * }
     */
    public $formatter;        
        
    /**
     * @var Emphasis\TextStyle 
     */
    public $textStyle;

}