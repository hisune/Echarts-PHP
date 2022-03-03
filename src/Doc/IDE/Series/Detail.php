<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    
 *     
 *     Whether to show the details.
 *
 * @property string $color Default: '#464646'
 *    
 *     
 *     The text color. Defaults to use the color of section where the numerical value belongs to.
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
 * @property string|int $fontWeight Default: 'bold'
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
 * @property int $fontSize Default: 30
 *    
 *     
 *      font size.
 *
 * @property int $lineHeight Default: 30
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
 * @property string $backgroundColor Default: 'transparent'
 *    
 *     
 *     The background color of detail.
 *
 * @property string $borderColor Default: '#ccc'
 *    
 *     
 *     The border color of detail.
 *
 * @property int $borderWidth Default: 0
 *    
 *     
 *     The border width of detail.
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
 * @property int $width Default: 100
 *    
 *     
 *     The width of detail.
 *
 * @property int $height Default: 40
 *    
 *     
 *     The height of detail.
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
 * @property Detail\Rich $rich
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
 * @property boolean $valueAnimation Default: true
 *    
 *     Since v5.0.0
 *     
 *     Whether to enable text animation of value change.
 *
 * @property array $offsetCenter Default: '[0, \'40%\']'
 *    
 *     
 *     The offset position relative to the center of gauge chart. The first item of array is the horizontal offset; the second item of array is the vertical offset. It could be absolute value and also the percentage relative to the radius of gauge chart.
 *
 * @property callable|string $formatter
 *    Formatter is used to format detail, which supports string template and callback function.
 *     formatter: function (value) {
 *         return value.toFixed(0);
 *     }
 *
 * {_more_}
 */
class Detail extends Property {}