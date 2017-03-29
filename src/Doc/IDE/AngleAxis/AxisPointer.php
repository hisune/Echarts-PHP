<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\AngleAxis;

class AxisPointer
{            
        
    /**
     * @var boolean 默认不显示。但是如果 tooltip.trigger 设置为 axis 或者 tooltip.axisPointer.type 设置为 cross，则自动显示 axisPointer。坐标系会自动选择显示显示哪个轴的 axisPointer，也可以使用 tooltip.axisPointer.axis 改变这种选择。
     */
    public $show = false;        
        
    /**
     * @var string 指示器类型。
     * 可选
     * 
     * line 直线指示器
     * 
     * shadow 阴影指示器
     */
    public $type = 'line';        
        
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
     * @var boolean 是否触发 tooltip。如果不想触发 tooltip 可以关掉。
     */
    public $tiggerTooltip = true;        
        
    /**
     * @var int 当前的 value。在使用 axisPointer.handle 时，可以设置此值进行初始值设定，从而决定 axisPointer 的初始位置。
     */
    public $value;        
        
    /**
     * @var boolean 当前的状态，可取值为 show 和 hide。
     */
    public $status;        
        
    /**
     * @var AxisPointer\Handle 拖拽手柄，适用于触屏的环境。参见 例子。
     */
    public $handle;

}