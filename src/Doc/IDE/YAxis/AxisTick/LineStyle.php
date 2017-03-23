<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\YAxis\AxisTick;

class LineStyle
{            
        
    /**
     * @var string Color of axis label is set to be axisLine.lineStyle.color by default.
     */
    public $color;        
        
    /**
     * @var int axisTick line width.
     */
    public $width = 1;        
        
    /**
     * @var string axisTick line type.
     * Options are: 
     * 
     * solid
     * dashed
     * dotted
     */
    public $type = 'solid';        
        
    /**
     * @var int Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
     * For example:
     * {
     *     shadowColor: rgba(0, 0, 0, 0.5),
     *     shadowBlur: 10
     * }
     */
    public $shadowBlur;        
        
    /**
     * @var string Shadow color. Support same format as color.
     */
    public $shadowColor;        
        
    /**
     * @var int Offset distance on the horizontal direction of shadow.
     */
    public $shadowOffsetX = 0;        
        
    /**
     * @var int Offset distance on the vertical direction of shadow.
     */
    public $shadowOffsetY = 0;        
        
    /**
     * @var int Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
     */
    public $opacity;

}