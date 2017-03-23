<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\SingleAxis\Tooltip;

class AxisPointer
{            
        
    /**
     * @var string Indicator type.
     * Options:
     * 
     * line line indicator
     * 
     * shadow shadow crosshair indicator
     * 
     * cross crosshair indicator, which is actually the shortcut of enable two axisPointers of two orthometric axes.
     */
    public $type = 'line';        
        
    /**
     * @var string The coordinate axis, which could be x, y, radius, or angle. By default, each coordinate system will automatically chose the axes whose will display its axisPointer (category axis or time axis is used by default).
     */
    public $axis = 'auto';        
        
    /**
     * @var boolean Whether snap to point automatically. The default value is auto determined.
     * This feature usually makes sense in value axis and time axis, where tiny points can be seeked automatically.
     */
    public $snap;        
        
    /**
     * @var int z value, which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
     */
    public $z;        
        
    /**
     * @var AxisPointer\Label label of axisPointer
     */
    public $label;        
        
    /**
     * @var AxisPointer\LineStyle It is valid when axisPointer.type is line.
     */
    public $lineStyle;        
        
    /**
     * @var AxisPointer\ShadowStyle It is valid when axisPointer.type is shadow.
     */
    public $shadowStyle;        
        
    /**
     * @var AxisPointer\CrossStyle It is valid when axisPointer.type is cross.
     */
    public $crossStyle;

}