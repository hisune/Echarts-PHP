<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $color Default: '"#fff"'
 *     text color.
 *
 * @property string $fontStyle Default: 'normal'
 *     font style
 *     Options are:
 *     
 *     normal
 *     italic
 *     oblique
 *
 * @property string $fontWeight Default: 'normal'
 *     font thick weight
 *     Options are:
 *     
 *     normal
 *     bold
 *     bolder
 *     lighter
 *     100 | 200 | 300 | 400...
 *
 * @property string $fontFamily Default: 'sans-serif'
 *     font family
 *     Can also be serif , monospace, ...
 *
 * @property int $fontSize Default: 12
 *     font size
 *
 * @property int $lineHeight
 *    Line height of the text fregment.
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
 * @property int|string $width
 *    Width of the text block. It is the width of the text by default. In most cases, there is no need to specify it. You may want to use it in some cases like make simple table or using background image (see backgroundColor).
 *     Notice, width and height specifies the width and height of the content, without padding.
 *     width can also be percent string, like 100%, which represents the percent of contentWidth (that is, the width without padding) of its container box. It is based on contentWidth because that each text fregment is layout based on the content box, where it makes no sense that calculating width based on outerWith in prectice.
 *     Notice, width and height only work when rich specified.
 *
 * @property int|string $height
 *    Height of the text block. It is the width of the text by default. You may want to use it in some cases like using background image (see backgroundColor).
 *     Notice, width and height specifies the width and height of the content, without padding.
 *     Notice, width and height only work when rich specified.
 *
 * @property string $textBorderColor Default: 'transparent'
 *    Storke color of the text.
 *
 * @property int $textBorderWidth Default: 0
 *    Storke line width of the text.
 *
 * @property string $textShadowColor Default: 'transparent'
 *    Shadow color of the text itself.
 *
 * @property int $textShadowBlur Default: 0
 *    Shadow blue of the text itself.
 *
 * @property int $textShadowOffsetX Default: 0
 *    Shadow X offset of the text itself.
 *
 * @property int $textShadowOffsetY Default: 0
 *    Shadow Y offset of the text itself.
 *
 * {_more_}
 */
class TextStyle extends Property {}