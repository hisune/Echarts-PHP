<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\ParallelAxis;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    
 *     
 *     Set this to false to prevent the axis label from appearing.
 *
 * @property int|callable $interval Default: 'auto'
 *    
 *     
 *     
 *     
 *     Interval of Axis label, which is available in category axis. 
 *     It uses a strategy that labels do not overlap by default.
 *     You may set it to be 0 to display all labels compulsively.
 *     If it is set to be 1, it means that labels are shown once after one label. And if it is set to be 2, it means labels are shown once after two labels, and so on.
 *     On the other hand, you can control by callback function, whose format is shown below:
 *     (index:number, value: string) =&gt; boolean
 *     
 *     The first parameter is index of category, and the second parameter is the name of category. The return values decides whether to display label.
 *
 * @property boolean $inside Default: false
 *    
 *     
 *     Set this to true so the axis labels face the inside direction.
 *
 * @property int $rotate Default: 0
 *    
 *     
 *     Rotation degree of axis label, which is especially useful when there is no enough space for category axis.
 *     Rotation degree is from -90 to 90.
 *
 * @property int $margin Default: 8
 *    
 *     
 *     The margin between the axis label and the axis line.
 *
 * @property string|callable $formatter
 *    Formatter of axis label, which supports string template and callback function.
 *     Example:
 *     // Use string template; template variable is the default label of axis {value}
 *     formatter: {value} kg
 *     // Use callback.
 *     formatter: function (value, index) {
 *         return value + kg;
 *     }
 *     
 *     
 *     For axes of time type: time, formatter supports the following forms:
 *     
 *     String Templates: an easy and fast way to make frequently used date/time template, formed in string
 *     Callback Functions: customized formatter to make complex format, formed in Function
 *     Cascading Templates: to adopt different formatters for different time granularity, formed in object
 *     
 *     Next, we are going to introduce these three forms one by one.
 *      String Templates 
 *     Using string templates is an easy way to format date/time with frequently used formats. If it can be used to make what you want, you are advised to do so. If not, you could then consider the others. Supported formats are:
 *     
 *     
 *     
 *     Group
 *     Template
 *     Value (EN)
 *     Value (ZH)
 *     
 *     
 *     
 *     
 *     Year
 *     {yyyy}
 *     e.g., 2020, 2021, ...
 *     例：2020, 2021, ...
 *     
 *     
 *     
 *     {yy}
 *     00-99
 *     00-99
 *     
 *     
 *     Quarter
 *     {Q}
 *     1, 2, 3, 4
 *     1, 2, 3, 4
 *     
 *     
 *     Month
 *     {MMMM}
 *     e.g., January, February, ...
 *     一月、二月、……
 *     
 *     
 *     
 *     {MMM}
 *     e.g., Jan, Feb, ...
 *     1月、2月、……
 *     
 *     
 *     
 *     {MM}
 *     01-12
 *     01-12
 *     
 *     
 *     
 *     {M}
 *     1-12
 *     1-12
 *     
 *     
 *     Day of Month
 *     {dd}
 *     01-31
 *     01-31
 *     
 *     
 *     
 *     {d}
 *     1-31
 *     1-31
 *     
 *     
 *     Day of Week
 *     {eeee}
 *     Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday
 *     星期日、星期一、星期二、星期三、星期四、星期五、星期六
 *     
 *     
 *     
 *     {ee}
 *     Sun, Mon, Tues, Wed, Thu, Fri, Sat
 *     日、一、二、三、四、五、六
 *     
 *     
 *     
 *     {e}
 *     1-54
 *     1-54
 *     
 *     
 *     Hour
 *     {HH}
 *     00-23
 *     00-23
 *     
 *     
 *     
 *     {H}
 *     0-23
 *     0-23
 *     
 *     
 *     
 *     {hh}
 *     01-12
 *     01-12
 *     
 *     
 *     
 *     {h}
 *     1-12
 *     1-12
 *     
 *     
 *     Minute
 *     {mm}
 *     00-59
 *     00-59
 *     
 *     
 *     
 *     {m}
 *     0-59
 *     0-59
 *     
 *     
 *     Second
 *     {ss}
 *     00-59
 *     00-59
 *     
 *     
 *     
 *     {s}
 *     0-59
 *     0-59
 *     
 *     
 *     Millisecond
 *     {SSS}
 *     000-999
 *     000-999
 *     
 *     
 *     
 *     {S}
 *     0-999
 *     0-999
 *     
 *     
 *     
 *     
 *     Templates of other languages can be found in the language package. Please refer to echarts.registerLocale to register a language.
 *     
 *     Example:
 *     formatter: {yyyy}-{MM}-{dd} // gets labels like 2020-12-02
 *     formatter: Day {d} // gets labels like Day 2
 *     
 *      Callback Functions 
 *     Callback functions can be used to get different formats for different axis tick values. Sometimes, if you have complex date/time formatting requirement, third-party libraries like Moment.js or date-fns can be used to return formatted labels.
 *     Example:
 *     // Use callback function; function parameters are axis index
 *     formatter: function (value, index) {
 *         // Formatted to be month/day; display year only in the first label
 *         var date = new Date(value);
 *         var texts = [(date.getMonth() + 1), date.getDate()];
 *         if (index === 0) {
 *             texts.unshift(date.getYear());
 *         }
 *         return texts.join(/);
 *     }
 *     
 *      Cascading Templates 
 *     Sometimes, we wish to use different formats for different time granularity. For example, in a quarter-year chart, we may wish to see the month name with the first date of the month, while see the date name with others. This can be made with:
 *     Example:
 *     formatter: {
 *         month: {MMMM}, // Jan, Feb, ...
 *         day: {d} // 1, 2, ...
 *     }
 *     
 *     Supported levels and their default formatters are:
 *     {
 *         year: {yyyy},
 *         month: {MMM},
 *         day: {d},
 *         hour: {HH}:{mm},
 *         minute: {HH}:{mm},
 *         second: {HH}:{mm}:{ss},
 *         millisecond: {hh}:{mm}:{ss} {SSS},
 *         none: {yyyy}-{MM}-{dd} {hh}:{mm}:{ss} {SSS}
 *     }
 *     
 *     Lets take day for example. When a tick value is 0 for its hour, minute, second, and millisecond, day level will be used to make formatter. none is used when no other level fulfills, which is for tick values with millisecond values other than 0.
 *      Rich Text 
 *     The above three forms all support rich text, so it can be used to make some complex effects.
 *     Example:
 *     xAxis: {
 *         type: time,
 *         axisLabel: {
 *             formatter: {
 *                 // Display year and month information on the first data of a year
 *                 year: {yearStyle|{yyyy}}\n{monthStyle|{MMM}},
 *                 month: {monthStyle|{MMM}}
 *             },
 *             rich: {
 *                 yearStyle: {
 *                     // Make yearly text more standing out
 *                     color: #000,
 *                     fontWeight: bold
 *                 },
 *                 monthStyle: {
 *                     color: #999
 *                 }
 *             }
 *         }
 *     },
 *     
 *     The above example can also be made with a callback function:
 *     Example:
 *     xAxis: {
 *         type: time,
 *         axisLabel: {
 *             formatter: function (value) {
 *                 const date = new Date(value);
 *                 const yearStart = new Date(value);
 *                 yearStart.setMonth(0);
 *                 yearStart.setDate(1);
 *                 yearStart.setHours(0);
 *                 yearStart.setMinutes(0);
 *                 yearStart.setSeconds(0);
 *                 yearStart.setMilliseconds(0);
 *                 // Whether a tick value is the start of a year
 *                 if (date.getTime() === yearStart.getTime()) {
 *                     return {year| + date.getFullYear() + }\n
 *                         + {month| + (date.getMonth() + 1) + 月};
 *                 }
 *                 else {
 *                     return {month| + (date.getMonth() + 1) + 月}
 *                 }
 *             },
 *             rich: {
 *                 year: {
 *                     color: #000,
 *                     fontWeight: bold
 *                 },
 *                 month: {
 *                     color: #999
 *                 }
 *             }
 *         }
 *     },
 *
 * @property boolean $showMinLabel
 *    
 *     
 *     Whether to show the label of the min tick. Optional values: true, false, null. It is auto determined by default, that is, if labels are overlapped, the label of the min tick will not be displayed.
 *
 * @property boolean $showMaxLabel
 *    
 *     
 *     Whether to show the label of the max tick. Optional values: true, false, null. It is auto determined by default, that is, if labels are overlapped, the label of the max tick will not be displayed.
 *
 * @property boolean $hideOverlap
 *    
 *     
 *     
 *     
 *     
 *     Since v5.2.0
 *     
 *     Whether to hide overlapped labels.
 *
 * @property string|callable $color
 *    
 *     
 *     Color of axis label is set to be axisLine.lineStyle.color by default. Callback function is supported, in the following format:
 *     (val: string) =&gt; Color
 *     
 *     Parameter is the text of label, and return value is the color. See the following example:
 *     textStyle: {
 *         color: function (value, index) {
 *             return value &gt;= 0 ? green : red;
 *         }
 *     }
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
 *
 * @property string $borderColor
 *    
 *     
 *     Border color of the text fragment.
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
 * @property AxisLabel\Rich $rich
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
class AxisLabel extends Property {}