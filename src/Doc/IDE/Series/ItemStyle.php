<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string|callable $color
 *    
 *     
 *      color. Color is taken from option.color Palette by default. 
 *     
 *     Supports setting as solid color using rgb(255,255,255), rgba(255,255,255,1), #fff, etc. Also supports setting as gradient color and pattern fill, see option.color for details
 *     
 *     Supports callback functions, in the form of:
 *     (params: Object) =&gt; Color
 *     
 *     Input parameters are seriesIndex, dataIndex, data, value, and etc. of data item.
 *
 * @property string $borderColor Default: '#000'
 *    
 *     
 *      border color, whose format is similar to that of color.
 *
 * @property int $borderWidth Default: 0
 *    
 *     
 *      border width. No border when it is set to be 0.
 *      border width. No border when it is set to be 0.
 *
 * @property string|int|array $borderType Default: 'solid'
 *    
 *     
 *     
 *      border type.
 *     Possible values are:
 *     
 *     solid
 *     dashed
 *     dotted
 *     
 *     Since v5.0.0, it can also be a number or a number array to specify the dash array of the line. With 
 *     borderDashOffset
 *     , we can make the line style more flexible.
 *     For example：
 *     {
 *     
 *     borderType: [5, 10],
 *     
 *     borderDashOffset: 5
 *     }
 *
 * @property int $borderDashOffset Default: 0
 *    
 *     Since v5.0.0
 *     
 *     
 *     
 *     To set the line dash offset. With 
 *     borderType
 *     , we can make the line style more flexible.
 *     Refer to MDN lineDashOffset for more details.
 *
 * @property string $borderCap Default: 'butt'
 *    
 *     Since v5.0.0
 *     
 *     
 *     
 *     To specify how to draw the end points of the line.
 *     Possible values are:
 *     
 *     butt: The ends of lines are squared off at the endpoints.
 *     round: The ends of lines are rounded.
 *     square: The ends of lines are squared off by adding a box with an equal width and half the height of the lines thickness.
 *     
 *     Default value is butt. Refer to MDN lineCap for more details.
 *
 * @property string $borderJoin Default: 'bevel'
 *    
 *     Since v5.0.0
 *     
 *     
 *     
 *     To determine the shape used to join two line segments where they meet.
 *     Possible values are:
 *     
 *     bevel: Fills an additional triangular area between the common endpoint of connected segments, and the separate outside rectangular corners of each segment.
 *     round: Rounds off the corners of a shape by filling an additional sector of disc centered at the common endpoint of connected segments. The radius for these rounded corners is equal to the line width.
 *     miter: Connected segments are joined by extending their outside edges to connect at a single point, with the effect of filling an additional lozenge-shaped area. This setting is affected by the 
 *     borderMiterLimit
 *     property.
 *     
 *     Default value is bevel. Refer to MDN lineJoin for more details.
 *
 * @property int $borderMiterLimit Default: 10
 *    
 *     Since v5.0.0
 *     
 *     
 *     
 *     To set the miter limit ratio. Only works when 
 *     borderJoin
 *      is set as miter.
 *     Default value is 10. Negative、0、Infinity and NaN values are ignored.
 *     Refer to MDN miterLimit for more details.
 *
 * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property int $shadowOffsetX Default: 0
 *    
 *     
 *     Offset distance on the horizontal direction of shadow.
 *
 * @property int $shadowOffsetY Default: 0
 *    
 *     
 *     Offset distance on the vertical direction of shadow.
 *
 * @property int $opacity
 *    
 *     
 *     Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *     It works only if areaStyle is set.
 *
 *  * @property string $color Default: 'auto'
 *    
 *     
 *     Bar color. By default, colors from global palette option.color is used.
 *     
 *     Supports setting as solid color using rgb(255,255,255), rgba(255,255,255,1), #fff, etc. Also supports setting as gradient color and pattern fill, see option.color for details
 *
 * @property int|array $borderRadius Default: 0
 *    
 *     
 *     The radius of rounded corner. Its unit is px. And it supports use array to respectively specify the 4 corner radiuses.
 *     For example:
 *     borderRadius: 5, // consistently set the size of 4 rounded corners
 *     borderRadius: [5, 5, 0, 0] // (clockwise upper left, upper right, bottom right and bottom left)
 *
 * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property int $opacity
 *    
 *     
 *     Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property int $opacity
 *    
 *     
 *     Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property int $opacity Default: 0.8
 *    
 *     
 *     Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *     It works only if areaStyle is set.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 *  * @property int $colorAlpha
 *    
 *     
 *     The tranparent rate of a node, the range is between 0 ~ 1.
 *
 * @property int $colorSaturation
 *    
 *     
 *     The color saturation of a node. The range is between 0 ~ 1.
 *
 * @property int $gapWidth Default: 0
 *    
 *     
 *     Gaps between child nodes.
 *
 * @property string $borderColorSaturation
 *    
 *     
 *     The color saturation of a border or gap. The value range is between 0 ~ 1.
 *     Tips:
 *     When borderColorSaturation is set, the borderColor is disabled, and, instead, the final border color is calculated based on the color of this node (this color could be sepcified explicitly or inherited from its parent node) and mixing with borderColorSaturation.
 *     In this way, a effect can be implemented: different sections have different hue of gap color repectively, which makes users easy to distinguish both sections and levels.
 *     How to avoid confusion by setting border/gap of node
 *     If all of the border/gaps are set with the same color, confusion might occur when rectangulars in different levels display at the same time.
 *     See the example. Notice that the child rectangles in the red area are in the deeper level than rectangles that are saparated by white gap. So in the red area, basically we set gap color with red, and use borderColorSaturation to lift the saturation.
 *
 * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property string $color0 Default: '#314656'
 *    
 *     
 *     Fill color of bearish candle stick.
 *     
 *     Supports setting as solid color using rgb(255,255,255), rgba(255,255,255,1), #fff, etc. Also supports setting as gradient color and pattern fill, see option.color for details
 *
 * @property string $borderColor0 Default: '#314656'
 *    
 *     
 *     Border color of bearish candle stick.
 *     
 *     Supports setting as solid color using rgb(255,255,255), rgba(255,255,255,1), #fff, etc. Also supports setting as gradient color and pattern fill, see option.color for details
 *
 * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 *  * @property string $areaColor Default: '#eee'
 *    Area filling color.
 *     
 *     Supports setting as solid color using rgb(255,255,255), rgba(255,255,255,1), #fff, etc. Also supports setting as gradient color and pattern fill, see option.color for details
 *
 * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 *  * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property ItemStyle\Decal $decal
 *    The style of the decal pattern. It works only if aria.enabled and aria.decal.show are both set to be true.
 *     If it is set to be none, no decal will be used.
 *
 * {_more_}
 */
class ItemStyle extends Property {}