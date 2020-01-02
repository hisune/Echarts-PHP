<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\MarkPoint\ItemStyle;

use Hisune\EchartsPHP\Property;

/**
 * @property string $color
 *     color. 
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
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property string $color
 *     color. 
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
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 * {_more_}
 */
class Emphasis extends Property {}