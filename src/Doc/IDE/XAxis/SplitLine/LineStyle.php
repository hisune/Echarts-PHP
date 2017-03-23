<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\XAxis\SplitLine;

class LineStyle
{            
        
    /**
     * @var array|string The color of the splitLine, which could be set separately.
     * SplitLine color could also be set in color array, which the split lines would take as their colors in turns.
     * Example:
     * splitLine: {
     *     lineStyle: {
     *         // Dark and light colors will be used in turns
     *         color: [#aaa, #ddd]
     *     }
     * }
     */
    public $color = '[\'#ccc\']';        
        
    /**
     * @var int splitLine line width.
     */
    public $width = 1;        
        
    /**
     * @var string splitLine line type.
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