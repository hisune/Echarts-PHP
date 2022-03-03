<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Geo\Blur;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    
 *     
 *     Whether to show label.
 *
 * @property string|array $position
 *    
 *     
 *     
 *     
 *     Label position.
 *     Followings are the options: 
 *     
 *     [x, y]
 *       Use relative percentage, or absolute pixel values to represent position of label relative to top-left corner of bounding box.
 *       For example:
 *       // Absolute pixel values
 *       position: [10, 10],
 *       // Relative percentage
 *       position: [50%, 50%]
 *     
 *     
 *     top
 *     
 *     left
 *     right
 *     bottom
 *     inside
 *     insideLeft
 *     insideRight
 *     insideTop
 *     insideBottom
 *     insideTopLeft
 *     insideBottomLeft
 *     insideTopRight
 *     insideBottomRight
 *     
 *     See: label position.
 *
 * @property int $distance Default: 5
 *    
 *     
 *     Distance to the host graphic element.
 *     It is valid only when position is string value (like top、insideRight).
 *     See: label position.
 *
 * @property int $rotate
 *    
 *     
 *     Rotate label, from -90 degree to 90, positive value represents rotate anti-clockwise.
 *     See: label rotation.
 *
 * @property array $offset
 *    
 *     
 *     Whether to move text slightly. For example: [30, 40] means move 30 horizontally and move 40 vertically.
 *
 * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {@xxx}: the value of a dimension named xxx, for example, {@product} refers the value of product dimension.
 *     {@[n]}: the value of a dimension at the index of n, for example, {@[3]} refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {@score}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     `ts
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in radar series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *
 * @property string $color Default: '#fff'
 *    
 *     
 *      text color.
 *     If set as inherit, the color will assigned as visual color, such as series color.
 *
 * @property string $fontStyle Default: 'normal'
 *    
 *     
 *      font style.
 *     Options are:
 *     
 *     normal
 *     italic
 *     oblique
 *
 * @property string|int $fontWeight Default: 'normal'
 *    
 *     
 *      font thick weight.
 *     Options are:
 *     
 *     normal
 *     bold
 *     bolder
 *     lighter
 *     100 | 200 | 300 | 400...
 *
 * @property string $fontFamily Default: 'sans-serif'
 *    
 *     
 *      font family.
 *     Can also be serif , monospace, ...
 *
 * @property int $fontSize Default: 12
 *    
 *     
 *      font size.
 *
 * @property string $align
 *    
 *     
 *     Horizontal alignment of text, automatic by default.
 *     Options are:
 *     
 *     left
 *     center
 *     right
 *     
 *     If align is not set in rich, align in parent level will be used. For example:
 *     {
 *         align: right,
 *         rich: {
 *             a: {
 *                 // `align` is not set, then it will be right
 *             }
 *         }
 *     }
 *
 * @property string $verticalAlign
 *    
 *     
 *     Vertical alignment of text, automatic by default.
 *     Options are:
 *     
 *     top
 *     middle
 *     bottom
 *     
 *     If verticalAlign is not set in rich, verticalAlign in parent level will be used. For example:
 *     {
 *         verticalAlign: bottom,
 *         rich: {
 *             a: {
 *                 // `verticalAlign` is not set, then it will be bottom
 *             }
 *         }
 *     }
 *
 * @property int $lineHeight
 *    
 *     
 *     Line height of the text fragment.
 *     If lineHeight is not set in rich, lineHeight in parent level will be used. For example:
 *     {
 *         lineHeight: 56,
 *         rich: {
 *             a: {
 *                 // `lineHeight` is not set, then it will be 56
 *             }
 *         }
 *     }
 *
 * @property string|array $backgroundColor Default: 'transparent'
 *    
 *     
 *     Background color of the text fragment.
 *     Can be color string, like #123234, red, rgba(0,23,11,0.3).
 *     Or image can be used, for example:
 *     backgroundColor: {
 *         image: xxx/xxx.png
 *         // It can be URL of a image,
 *         // or dataURI,
 *         // or HTMLImageElement,
 *         // or HTMLCanvasElement.
 *     }
 *     
 *     width or height can be specified when using background image, or
 *     auto adapted by default.
 *     If set as inherit, the color will assigned as visual color, such as series color.
 *
 * @property string $borderColor
 *    
 *     
 *     Border color of the text fragment.
 *     If set as inherit, the color will assigned as visual color, such as series color.
 *
 * @property int $borderWidth Default: 0
 *    
 *     
 *     Border width of the text fragment.
 *
 * @property string|int|array $borderType Default: 'solid'
 *    
 *     
 *     
 *     the text fragment border type.
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
 * @property int $borderRadius Default: 0
 *    
 *     
 *     Border radius of the text fragment.
 *
 * @property int|array $padding Default: 0
 *    
 *     
 *     Padding of the text fragment, for example:
 *     
 *     padding: [3, 4, 5, 6]: represents padding of [top, right, bottom, left].
 *     padding: 4: represents padding: [4, 4, 4, 4].
 *     padding: [3, 4]: represents padding: [3, 4, 3, 4].
 *     
 *     Notice, width and height specifies the width and height of the content, without padding.
 *
 * @property string $shadowColor Default: 'transparent'
 *    
 *     
 *     Shadow color of the text block.
 *
 * @property int $shadowBlur Default: 0
 *    
 *     
 *     Show blur of the text block.
 *
 * @property int $shadowOffsetX Default: 0
 *    
 *     
 *     Shadow X offset of the text block.
 *
 * @property int $shadowOffsetY Default: 0
 *    
 *     
 *     Shadow Y offset of the text block.
 *
 * @property int $width
 *    
 *     
 *     Width of text block.
 *
 * @property int $height
 *    
 *     
 *     Height of text block.
 *
 * @property string $textBorderColor
 *    
 *     
 *     Storke color of the text.
 *     If set as inherit, the color will assigned as visual color, such as series color.
 *
 * @property int $textBorderWidth
 *    
 *     
 *     Storke line width of the text.
 *
 * @property string|int|array $textBorderType Default: 'solid'
 *    
 *     
 *     
 *     Stroke line type of the text.
 *     Possible values are:
 *     
 *     solid
 *     dashed
 *     dotted
 *     
 *     Since v5.0.0, it can also be a number or a number array to specify the dash array of the line. With 
 *     textBorderDashOffset
 *     , we can make the line style more flexible.
 *     For example：
 *     {
 *     
 *     textBorderType: [5, 10],
 *     
 *     textBorderDashOffset: 5
 *     }
 *
 * @property int $textBorderDashOffset Default: 0
 *    
 *     Since v5.0.0
 *     
 *     
 *     
 *     To set the line dash offset. With 
 *     textBorderType
 *     , we can make the line style more flexible.
 *     Refer to MDN lineDashOffset for more details.
 *
 * @property string $textShadowColor Default: 'transparent'
 *    
 *     
 *     Shadow color of the text itself.
 *
 * @property int $textShadowBlur Default: 0
 *    
 *     
 *     Shadow blue of the text itself.
 *
 * @property int $textShadowOffsetX Default: 0
 *    
 *     
 *     Shadow X offset of the text itself.
 *
 * @property int $textShadowOffsetY Default: 0
 *    
 *     
 *     Shadow Y offset of the text itself.
 *
 * @property string $overflow Default: 'none'
 *    
 *     
 *     Determine how to display the text when its overflow. Available when width is set.
 *     
 *     truncate Truncate the text and trailing with ellipsis.
 *     break Break by word
 *     breakAll Break by character.
 *
 * @property string $ellipsis Default: '...'
 *    Ellipsis to be displayed when overflow is set to truncate.
 *     
 *     truncate Truncate the overflow lines.
 *
 * @property Label\Rich $rich
 *    Rich text styles can be defined in this rich property. For example:
 *     label: {
 *         // Styles defined in rich can be applied to some fragments
 *         // of text by adding some markers to those fragment, like
 *         // `{styleName|text content text content}`.
 *         // `\n` is the newline character.
 *         formatter: [
 *             {a|Style a is applied to this snippet}
 *             {b|Style b is applied to this snippet}This snippet use default style{x|use style x}
 *         ].join(\n),
 *     
 *         rich: {
 *             a: {
 *                 color: red,
 *                 lineHeight: 10
 *             },
 *             b: {
 *                 backgroundColor: {
 *                     image: xxx/xxx.jpg
 *                 },
 *                 height: 40
 *             },
 *             x: {
 *                 fontSize: 18,
 *                 fontFamily: Microsoft YaHei,
 *                 borderColor: #449933,
 *                 borderRadius: 4
 *             },
 *             ...
 *         }
 *     }
 *     
 *     For more details, see Rich Text please.
 *
 * {_more_}
 */
class Label extends Property {}