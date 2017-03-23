<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Radar;

class AxisLabel
{            
        
    /**
     * @var boolean 是否显示刻度标签。
     */
    public $show = false;        
        
    /**
     * @var boolean 刻度标签是否朝内，默认朝外。
     */
    public $inside = false;        
        
    /**
     * @var int 刻度标签旋转的角度，在类目轴的类目标签显示不下的时候可以通过旋转防止标签之间重叠。
     * 旋转的角度从 -90 度到 90 度。
     */
    public $rotate = 0;        
        
    /**
     * @var int 刻度标签与轴线之间的距离。
     */
    public $margin = 8;        
        
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
     * @var AxisLabel\TextStyle 
     */
    public $textStyle;

}