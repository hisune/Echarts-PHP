<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Title;

use Hisune\EchartsPHP\Property;

/**
 * @property string $color Default: '#aaa'
 *    副标题文字的颜色。
 *
 * @property string $fontStyle Default: 'normal'
 *    副标题文字字体的风格
 *     可选：
 *     
 *     normal
 *     italic
 *     oblique
 *
 * @property string $fontWeight Default: 'normal'
 *    副标题文字字体的粗细
 *     可选：
 *     
 *     normal
 *     bold
 *     bolder
 *     lighter
 *     100 | 200 | 300 | 400...
 *
 * @property string $fontFamily Default: 'sans-serif'
 *    副标题文字的字体系列
 *     还可以是 serif , monospace, Arial, Courier New, Microsoft YaHei, ...
 *
 * @property int $fontSize Default: 12
 *    副标题文字的字体大小
 *
 * @property string $align
 *    文字水平对齐方式，默认自动。
 *     可选：
 *     
 *     left
 *     center
 *     right
 *     
 *     rich 中如果没有设置 align，则会取父层级的 align。例如：
 *     {
 *         align: right,
 *         rich: {
 *             a: {
 *                 // 没有设置 `align`，则 `align` 为 right
 *             }
 *         }
 *     }
 *
 * @property string $verticalAlign
 *    文字垂直对齐方式，默认自动。
 *     可选：
 *     
 *     top
 *     middle
 *     bottom
 *     
 *     rich 中如果没有设置 verticalAlign，则会取父层级的 verticalAlign。例如：
 *     {
 *         verticalAlign: bottom,
 *         rich: {
 *             a: {
 *                 // 没有设置 `verticalAlign`，则 `verticalAlign` 为 bottom
 *             }
 *         }
 *     }
 *
 * @property int $lineHeight
 *    行高。
 *     rich 中如果没有设置 lineHeight，则会取父层级的 lineHeight。例如：
 *     {
 *         lineHeight: 56,
 *         rich: {
 *             a: {
 *                 // 没有设置 `lineHeight`，则 `lineHeight` 为 56
 *             }
 *         }
 *     }
 *
 * @property int|string $width
 *    文字块的宽度。一般不用指定，不指定则自动是文字的宽度。在想做表格项或者使用图片（参见 backgroundColor）时，可能会使用它。
 *     注意，文字块的 width 和 height 指定的是内容高宽，不包含 padding。
 *     width 也可以是百分比字符串，如 100%。表示的是所在文本块的 contentWidth（即不包含文本块的 padding）的百分之多少。之所以以 contentWidth 做基数，因为每个文本片段只能基于 content box 布局。如果以 outerWidth 做基数，则百分比的计算在实用中不具有意义，可能会超出。
 *     注意，如果不定义 rich 属性，则不能指定 width 和 height。
 *
 * @property int|string $height
 *    文字块的高度。一般不用指定，不指定则自动是文字的高度。在使用图片（参见 backgroundColor）时，可能会使用它。
 *     注意，文字块的 width 和 height 指定的是内容高宽，不包含 padding。
 *     注意，如果不定义 rich 属性，则不能指定 width 和 height。
 *
 * @property string $textBorderColor Default: 'transparent'
 *    文字本身的描边颜色。
 *
 * @property int $textBorderWidth Default: 0
 *    文字本身的描边宽度。
 *
 * @property string $textShadowColor Default: 'transparent'
 *    文字本身的阴影颜色。
 *
 * @property int $textShadowBlur Default: 0
 *    文字本身的阴影长度。
 *
 * @property int $textShadowOffsetX Default: 0
 *    文字本身的阴影 X 偏移。
 *
 * @property int $textShadowOffsetY Default: 0
 *    文字本身的阴影 Y 偏移。
 *
 * @property SubtextStyle\Rich $rich
 *    在 rich 里面，可以自定义富文本样式。利用富文本样式，可以在标签中做出非常丰富的效果。
 *     例如：
 *     label: {
 *         // 在文本中，可以对部分文本采用 rich 中定义样式。
 *         // 这里需要在文本中使用标记符号：
 *         // `{styleName|text content text content}` 标记样式名。
 *         // 注意，换行仍是使用 \n。
 *         formatter: [
 *             {a|这段文本采用样式a},
 *             {b|这段文本采用样式b}这段用默认样式{x|这段用样式x}
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
 *     详情参见教程：富文本标签
 *
 * {_more_}
 */
class SubtextStyle extends Property {}