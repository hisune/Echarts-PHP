<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Grid\Tooltip\AxisPointer;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    Whether show label. Label will not show by default. But if tooltip.axisPointer.type is set as  cross, label will be displayed automatically.
 *
 * @property int|string $precision Default: 'auto'
 *    The precision of value in label. It is auto determined by default. You can also set it as 2, which indicates that two decimal fractions are reserved.
 *
 * @property string|callable $formatter
 *    The formatter of label.
 *     If set as string, for example it can be: formatter: some text {value} some text, where {value} will be replaced by axis value automatically.
 *     If set as function:
 *     Parameters:
 *     {Object} params: Including fields as follows:
 *     {Object} params.value: current value of this axis. If axis.type is category, it is one of the value in axis.data. If axis.type is time, it is a timestamp.
 *     {Array.&lt;Object&gt;} params.seriesData: An array, containing info of nearest points. Each item is:
 *     {string} params.axisDimension: The dimension name of the axis. For example, in catesian it will be x, y, and in polar it will be radius, angle.
 *     {number} params.axisIndex: The index of the axis, for example, 0,1, 2, ...
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
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     
 *     
 *     
 *     
 *     
 *     
 *     Each item also includes axis infomation:
 *     
 *     ```ts
 *     {
 *         axisDim: x, // x, y, angle, radius, single
 *         axisId: xxx,
 *         axisName: xxx,
 *         axisIndex: 3,
 *         axisValue: 121, // The current value of axisPointer
 *         axisValueLabel: text of value
 *     }
 *     
 *     Return:
 *     The string to be displayed.
 *     For example:
 *     formatter: function (params) {
 *         // If axis.type is time
 *         return some text + echarts.format.formatTime(params.value);
 *     }
 *
 * @property int $margin Default: 3
 *    Distance between label and axis.
 *
 * @property string $color Default: '#fff'
 *    
 *     
 *      text color.
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
 * @property string|array $padding Default: '[5, 7, 5, 7]'
 *    
 *     
 *     axisPointer space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
 *     Examples:
 *     // Set padding to be 5
 *     padding: 5
 *     // Set the top and bottom paddings to be 5, and left and right paddings to be 10
 *     padding: [5, 10]
 *     // Set each of the four paddings seperately
 *     padding: [
 *         5,  // up
 *         10, // right
 *         5,  // down
 *         10, // left
 *     ]
 *
 * @property string $backgroundColor Default: 'auto'
 *    Background color of label, the same as axis.axisLine.lineStyle.color by default.
 *
 * @property string $borderColor
 *    Border color of label.
 *
 * @property string $borderWidth Default: '0'
 *    Border width of label.
 *
 * @property int $shadowBlur Default: 3
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor Default: '#aaa'
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
 * {_more_}
 */
class Label extends Property {}