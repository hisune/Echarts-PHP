<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\YAxis\AxisPointer;

class ShadowStyle
{            
        
    /**
     * @var string Fill color. 
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
    public $color = 'rgba(150,150,150,0.3)';        
        
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
     * { target: partial-axis-interval }}
     * Interval of , which is available in category axis.  is set to be the same as axisLabel.interval by default.
     * It uses a strategy that labels do not overlap by default.
     * You may set it to be 0 to display all labels compulsively.
     * If it is set to be 1, it means that labels are shown once after one label. And if it is set to be 2, it means labels are shown once after two labels, and so on.
     * On the other hand, you can control by callback function, whose format is shown below:
     * (index:number, value: string) =&gt; boolean
     * 
     * The first parameter is index of category, and the second parameter is the name of category. The return values decides whether to display label.
     */
    public $opacity;

}