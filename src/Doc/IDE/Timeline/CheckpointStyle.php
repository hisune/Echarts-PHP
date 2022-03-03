<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

use Hisune\EchartsPHP\Property;

/**
 * @property string $symbol Default: 'circle'
 *    
 *     
 *     Symbol of timeline.checkpointStyle .
 *     Icon types provided by ECharts includes
 *     circle, rect, roundRect, triangle, diamond, pin, arrow, none
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *
 * @property int|array $symbolSize Default: 13
 *    
 *     
 *     timeline.checkpointStyle  symbol size. It can be set to single numbers like 10, or use an array to represent width and height. For example, [20, 10] means symbol width is 20, and height is10.
 *
 * @property int $symbolRotate
 *    
 *     
 *     Rotate degree of timeline.checkpointStyle  symbol. The negative value represents clockwise. Note that when symbol is set to be arrow in markLine, symbolRotate value will be ignored, and compulsively use tangent angle.
 *
 * @property boolean $symbolKeepAspect Default: false
 *    
 *     
 *     Whether to keep aspect for symbols in the form of path://.
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    
 *     
 *     Offset of timeline.checkpointStyle  symbol relative to original position. By default, symbol will be put in the center position of data. But if symbol is from user-defined vector path or image, you may not expect symbol to be in center. In this case, you may use this attribute to set offset to default position. It can be in absolute pixel value, or in relative percentage value.
 *     For example, [0, -50%] means to move upside side position of symbol height. It can be used to make the arrow in the bottom to be at data position when symbol is pin.
 *
 * @property string $color Default: '#316bf3'
 *    
 *     
 *      color. 
 *     
 *     Supports setting as solid color using rgb(255,255,255), rgba(255,255,255,1), #fff, etc. Also supports setting as gradient color and pattern fill, see option.color for details
 *
 * @property string $borderColor Default: '#fff'
 *    
 *     
 *      border color, whose format is similar to that of color.
 *
 * @property int $borderWidth Default: 2
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
 * @property int $shadowBlur Default: 2
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor Default: 'rgba(0, 0, 0, 0.3)'
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property int $shadowOffsetX Default: 1
 *    
 *     
 *     Offset distance on the horizontal direction of shadow.
 *
 * @property int $shadowOffsetY Default: 1
 *    
 *     
 *     Offset distance on the vertical direction of shadow.
 *
 * @property int $opacity
 *    
 *     
 *     Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 * @property boolean $animation Default: true
 *    
 *     
 *     In timeline component, whether there is animation in checkpoint moving during the process of timeline playing and switching.
 *
 * @property int $animationDuration Default: 300
 *    
 *     
 *     The animation duration of checkpoint in timeline component.
 *
 * @property string $animationEasing Default: 'quinticInOut'
 *    
 *     
 *     The easing effect of animation of checkpoint in timeline component. Refers to easing sample for different easing effects.
 *
 * {_more_}
 */
class CheckpointStyle extends Property {}