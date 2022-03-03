<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Calendar;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    
 *     
 *     Set this to false to prevent monthLabel from showing.
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
 * @property int $margin Default: 5
 *    
 *     
 *     The margin between the month label and the axis line.
 *
 * @property string $position Default: 'start'
 *    
 *     
 *     Position of week, at the beginning or end of the range.
 *     Options:
 *     
 *     start
 *     end
 *
 * @property string|array $nameMap
 *    
 *     
 *     Month text content, defaults to en. Since v5.2.2, it defaults to the specified locale name when initializing charts. If not specified, it defaults to the auto-detected locale by the browser language.
 *     It supports Chinese(cn), English(en), and customized array. Since v5.2.2, it also supports any built-in(EN/ZH) or other registered locale names (case-sensitive).
 *     The index 0 always means Jan.
 *     Examples:
 *     
 *     // Before v5.2.2
 *     
 *     // Shortcut to English
 *     // [Jan, Feb, Mar,Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec]
 *     nameMap: en,
 *     // Shortcut to Chinese
 *     // [一月, 二月, 三月, 四月, 五月, 六月, 七月, 八月, 九月, 十月, 十一月, 十二月]
 *     nameMap: cn,
 *     
 *     // Since v5.2.2
 *     
 *     // Shortcut to English
 *     // [Jan, Feb, Mar,Apr, May, Jun, Jul, Aug, Sep, Oct, Nov, Dec]
 *     nameMap: EN,
 *     // Shortcut to Chinese
 *     // [1月, 2月, 3月, 4月, 5月, 6月, 7月, 8月, 9月, 10月, 11月, 12月]
 *     nameMap: ZH,
 *     
 *     // Customized settings: mixed in English, Chinese, Russian or not displayed
 *     nameMap: [
 *         一月, Feb, 三月,
 *         四月, May, 六月,
 *         Июль, 八月, ,
 *         十月, Nov, 十二月
 *     ],
 *     
 *     calendar: [{
 *         monthLabel: {
 *             // nameMap: en // Before v5.2.2
 *             nameMap: EN    // Since v5.2.2
 *         }
 *     }]
 *
 * @property string|callable $formatter
 *    Formatter of month text label, which supports string template and callback function.
 *     Examples:
 *     // Use string template; eg: 2017-02
 *     
 *         template variables:
 *         {nameMap} default nameMap eg：Feb
 *         {yyyy}   four-digit years eg: 2017
 *         {yy}   two-digit years eg: 17
 *         {MM}   two-digit month eg: 02
 *         {M}   single-digit month eg: 2
 *     
 *     formatter: {yyyy}-{MM}
 *     
 *     // Use callback function;
 *     
 *         function parameters:
 *         param.nameMap default nameMap eg：Feb
 *         param.yyyy   four-digit years eg: 2017
 *         param.yy   two-digit years eg: 17
 *         param.MM   two-digit month eg: 02
 *         param.M   single-digit eg: 2
 *     
 *     formatter: function (param) {
 *         // ...
 *         return param.MM;
 *     }
 *
 * @property string $color Default: '#000'
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
 * @property MonthLabel\Rich $rich
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
class MonthLabel extends Property {}