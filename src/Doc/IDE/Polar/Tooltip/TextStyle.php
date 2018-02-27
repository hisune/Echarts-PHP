<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Polar\Tooltip;

use Hisune\EchartsPHP\Property;

/**
 * @property string $color Default: '#fff'
 *    文字的颜色。
 *
 * @property string $fontStyle Default: 'normal'
 *    文字字体的风格
 *     可选：
 *     
 *     normal
 *     italic
 *     oblique
 *
 * @property string $fontWeight Default: 'normal'
 *    文字字体的粗细
 *     可选：
 *     
 *     normal
 *     bold
 *     bolder
 *     lighter
 *     100 | 200 | 300 | 400...
 *
 * @property string $fontFamily Default: 'sans-serif'
 *    文字的字体系列
 *     还可以是 serif , monospace, Arial, Courier New, Microsoft YaHei, ...
 *
 * @property int $fontSize Default: 14
 *    文字的字体大小
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
 * {_more_}
 */
class TextStyle extends Property {}