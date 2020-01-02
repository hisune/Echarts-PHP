<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string|callable $color
 *     color.  Color is taken from option.color Palette by default. 
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
 *     
 *     Supports callback functions, in the form of:
 *     (params: Object) =&gt; Color
 *     
 *     Input parameters are seriesIndex, dataIndex, data, value, and etc. of data item.
 *
 * @property string $borderColor Default: '"#000"'
 *     border color, whose format is similar to that of color.
 *
 * @property int $borderWidth Default: 0
 *     border width. No border when it is set to be 0.
 *
 * @property string $borderType Default: 'solid'
 *    Border type, which can be solid, dashed, or dotted. solid by default.
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
 *  * @property string $color Default: 'auto'
 *    Bar color. defaults to acquire colors from global palette option.color .
 *
 * @property string $barBorderColor Default: '#000'
 *    The border color of bar.
 *
 * @property int $barBorderWidth Default: 0
 *    The border width of bar. defaults to have no border.
 *
 * @property int|array $barBorderRadius Default: 0
 *    The radius of rounded corner. Its unit is px. And it supports use array to respectively specify the 4 corner radiuses.
 *     For example:
 *     barBorderRadius: 5, // consistently set the size of 4 rounded corners
 *     barBorderRadius: [5, 5, 0, 0] // (clockwise upper left, upper right, bottom right and bottom left)
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property int $shadowBlur
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property int $shadowBlur
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property int $shadowBlur
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property int $shadowBlur
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property int $shadowBlur
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property int $colorAlpha
 *    The tranparent rate of a node, the range is between 0 ~ 1.
 *
 * @property int $colorSaturation
 *    The color saturation of a node. The range is between 0 ~ 1.
 *
 * @property int $gapWidth Default: 0
 *    Gaps between child nodes.
 *
 * @property string $borderColorSaturation
 *    The color saturation of a border or gap. The value range is between 0 ~ 1.
 *     Tips:
 *     When borderColorSaturation is set, the borderColor is disabled, and, instead, the final border color is calculated based on the color of this node (this color could be sepcified explicitly or inherited from its parent node) and mixing with borderColorSaturation.
 *     In this way, a effect can be implemented: different sections have different hue of gap color repectively, which makes users easy to distinguish both sections and levels.
 *     
 *     How to avoid confusion by setting border/gap of node
 *     If all of the border/gaps are set with the same color, confusion might occur when rectangulars in different levels display at the same time.
 *     See the example. Noticed that the child rectangles in the red area are in the deeper level than rectangles that are saparated by white gap. So in the red area, basically we set gap color with red, and use borderColorSaturation to lift the saturation.
 *
 * @property string $strokeColor
 *    Stroke color of each rect.
 *
 * @property int $strokeWidth
 *    Stroke width of each rect.
 *
 *  * @property int $shadowBlur
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
 * @property int $opacity Default: 1
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property int $shadowBlur
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
 *  * @property string $color0 Default: '#314656'
 *    Fill color of bearish candle stick.
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
 * @property string $borderColor0 Default: '#314656'
 *    Border color of bearish candle stick.
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
 *  * @property int $shadowBlur
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
 *  * @property ItemStyle\AreaColor $areaColor Default: '#eee'
 *    Area filling color.
 *
 * @property ItemStyle\Emphasis $emphasis
 *    Map area style in highlighted state.
 *
 *  * @property int $shadowBlur
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
 *  * @property int $shadowBlur
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
 *  * @property int $shadowBlur
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
 *  * @property int $shadowBlur
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
 *  * @property int $shadowBlur
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
 *  * @property int $shadowBlur
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
 *  * @property int $shadowBlur
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
 * {_more_}
 */
class ItemStyle extends Property {}