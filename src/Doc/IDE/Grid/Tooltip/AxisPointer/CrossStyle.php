<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Grid\Tooltip\AxisPointer;

use Hisune\EchartsPHP\Property;

/**
 * @property string $color Default: '#555'
 *    Line color. 
 *     
 *     Color can be represented in RGB, for example rgb(128, 128, 128). RGBA can be used when you need alpha channel, for example rgba(128, 128, 128, 0.5). You may also use hexadecimal format, for example #ccc. Gradient color and texture are also supported besides single colors.
 *     // Linear gradient. First four parameters are x0, y0, x2, and y2, each ranged from 0 to 1, standing for percentage in the bounding box. If global is `true`, then the first four parameters are in absolute pixel positions.
 *     color: {
 *         type: linear,
 *         x: 0,
 *         y: 0,
 *         x2: 0,
 *         y2: 1,
 *         colorStops: [{
 *             offset: 0, color: red // color at 0% position
 *         }, {
 *             offset: 1, color: blue // color at 100% position
 *         }],
 *         global: false // false by default
 *     }
 *     // Radial gradient. First three parameters are x and y positions of center, and radius, similar to linear gradient.
 *     color: {
 *         type: radial,
 *         x: 0.5,
 *         y: 0.5,
 *         r: 0.5,
 *         colorStops: [{
 *             offset: 0, color: red // color at 0% position
 *         }, {
 *             offset: 1, color: blue // color at 100% position
 *         }],
 *         global: false // false by default
 *     }
 *     // Fill with texture
 *     color: {
 *         image: imageDom, // HTMLImageElement, and HTMLCanvasElement are supported, while string path is not supported
 *         repeat: repeat // whether to repeat texture, whose value can be repeat-x, repeat-y, or no-repeat
 *     }
 *
 * @property int $width Default: 1
 *     line width.
 *
 * @property string $type Default: 'dashed'
 *     line type.
 *     Options are: 
 *     
 *     solid
 *     dashed
 *     dotted
 *
 * @property int $shadowBlur
 *    Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    Shadow color. Support same format as color.
 *
 * @property int $shadowOffsetX Default: 0
 *    Offset distance on the horizontal direction of shadow.
 *
 * @property int $shadowOffsetY Default: 0
 *    Offset distance on the vertical direction of shadow.
 *
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 * {_more_}
 */
class CrossStyle extends Property {}