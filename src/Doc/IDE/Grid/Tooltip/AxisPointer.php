<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Grid\Tooltip;

class AxisPointer
{            
        
    /**
     * @var string 指示器类型。
     * 可选
     * 
     * line 直线指示器
     * 
     * shadow 阴影指示器
     * 
     * cross 十字准星指示器。其实是种简写，表示启用两个正交的轴的 axisPointer。
     */
    public $type = 'line';        
        
    /**
     * @var string 指示器的坐标轴。
     * 默认情况，坐标系会自动选择显示显示哪个轴的 axisPointer（默认取类目轴或者时间轴）。
     * 可以是 x, y, radius, angle。
     */
    public $axis = 'auto';        
        
    /**
     * @var boolean 坐标轴指示器是否自动吸附到点上。默认自动判断。
     * 这个功能在数值轴和时间轴上比较有意义，可以自动寻找细小的数值点。
     */
    public $snap;        
        
    /**
     * @var int 坐标轴指示器的 z 值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
     */
    public $z;        
        
    /**
     * @var AxisPointer\Label 坐标轴指示器的文本标签。
     */
    public $label;        
        
    /**
     * @var AxisPointer\LineStyle axisPointer.type 为 line 时有效。
     */
    public $lineStyle;        
        
    /**
     * @var AxisPointer\ShadowStyle axisPointer.type 为 shadow 时有效。
     */
    public $shadowStyle;        
        
    /**
     * @var AxisPointer\CrossStyle axisPointer.type 为 cross 时有效。
     */
    public $crossStyle;

}