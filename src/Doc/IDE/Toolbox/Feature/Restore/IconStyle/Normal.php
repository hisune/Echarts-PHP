<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature\Restore\IconStyle;

class Normal
{            
        
    /**
     * @var string  color. 
     * 
     * Color can be represented in RGB, for example rgb(128, 128, 128). RGBA can be used when you need alpha channel, for example rgba(128, 128, 128, 0.5). You may also use hexadecimal format, for example #ccc. Gradient color and texture are also supported besides single colors.
     * // Linear gradient. First four parameters are x0, y0, x2, and y2, each ranged from 0 to 1, standing for percentage in the bounding box. If another parameter is passed in as `true`, then the first four parameters are in absolute pixel positions.
     * color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
     *   offset: 0, color: red // color at 0% position
     * }, {
     *   offset: 1, color: blue // color at 100% position
     * }], false)
     * // Radial gradient. First three parameters are x and y positions of center, and radius, similar to linear gradient.
     * color: new echarts.graphic.RadialGradient(0.5, 0.5, 0.5, [...], false)
     * // Fill with texture
     * color: new echarts.graphic.Pattern(
     *   imageDom, // HTMLImageElement, and HTMLCanvasElement are supported, while string path is not supported
     *   repeat // whether to repeat texture, whose value can be repeat-x, repeat-y, or no-repeat
     * )
     */
    public $color;        
        
    /**
     * @var string  border color, whose format is similar to that of color.
     */
    public $borderColor = '#666';        
        
    /**
     * @var int  border width. No border when it is set to be 0.
     */
    public $borderWidth = 1;        
        
    /**
     * @var string Border type, which can be solid, dashed, or dotted. solid by default.
     */
    public $borderType = 'solid';        
        
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
        
    /**
     * @var string Position of label: left / right / top / bottom.
     */
    public $textPosition;        
        
    /**
     * @var string Align of label text: left / right.
     */
    public $textAlign;

}