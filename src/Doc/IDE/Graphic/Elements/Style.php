<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Graphic\Elements;

use Hisune\EchartsPHP\Property;

/**
 * @property string $image
 *    Specify content of the image, can be a URL, or dataURI.
 *
 * @property int $x Default: 0
 *    The x value of the left-top corner of the element in the coordinate system of its parent.
 *
 * @property int $y Default: 0
 *    The y value of the left-top corner of the element in the coordinate system of its parent.
 *
 * @property int $width Default: 0
 *    The width of the shape of the element.
 *
 * @property int $height Default: '0'
 *    The height of the shape of the element.
 *     More attributes in style (for example, rich text), see the style related attributes in zrender/graphic/Displayable.
 *     Notice, the attribute names of the style of graphic elements is derived from zrender, which may be different from the attribute names in echarts label, echarts itemStyle, etc., although they have the same meaning. For example:
 *     
 *     itemStyle.color =&gt; style.fill
 *     itemStyle.borderColor =&gt; style.stroke
 *     label.color =&gt; style.textFill
 *     label.textBorderColor =&gt; style.textStroke
 *     ...
 *
 * @property string $fill Default: '#000'
 *    Color filled in this element.
 *
 * @property string $stroke
 *    Color of stroke.
 *
 * @property int $lineWidth Default: 0
 *    Width of stroke.
 *
 * @property int $shadowBlur Default: 'undefined'
 *    Width of shadow.
 *
 * @property int $shadowOffsetX Default: 'undefined'
 *    X offset of shadow.
 *
 * @property int $shadowOffsetY Default: 'undefined'
 *    Y offset of shadow.
 *
 * @property int $shadowColor Default: 'undefined'
 *    color of shadow.
 *
 * @property string|array $transition Default: 'undefined'
 *    Can be a single property name or an array of property names.
 *     Enable transition animation when the specified properties changed.
 *     Can only specify properties that are under this style.
 *     For example:
 *     {
 *         type: rect,
 *         style: {
 *             ...
 *             // This two props will perform transition animation.
 *             transition: [mmm, ppp]
 *         }
 *     }
 *     
 *     We can also specify all of the properties like this:
 *     {
 *         type: rect,
 *         style: {
 *             ...
 *         },
 *         // Indicate that all props in `style` will
 *         // have transition animation.
 *         transition: style,
 *     };
 *
 *  * @property string $text Default: ''
 *    Text content. \n can be used as a line break.
 *
 * @property string $font
 *    Font size, font type, font weight, font color, follow the form of css font.
 *     For example:
 *     // size | family
 *     font: 2em STHeiti, sans-serif
 *     
 *     // style | weight | size | family
 *     font: italic bolder 16px cursive
 *     
 *     // weight | size | family
 *     font: bolder 2em Microsoft YaHei, sans-serif
 *
 * @property string $textAlign Default: 'left'
 *    Text horizontal alignment. Optional values: left, center, right.
 *     left means the left side of the text block is specified by the style.x, while right means the right side of the text block is specified by style.y.
 *
 * @property string $textVerticalAlign
 *    Text vertical alignment. Optional values: top, middle, bottom.
 *     More attributes in style (for example, rich text), see the style related attributes in zrender/graphic/Displayable.
 *     Notice, the attribute names of the style of graphic elements is derived from zrender, which may be different from the attribute names in echarts label, echarts itemStyle, etc., although they have the same meaning. For example:
 *     
 *     itemStyle.color =&gt; style.fill
 *     itemStyle.borderColor =&gt; style.stroke
 *     label.color =&gt; style.textFill
 *     label.textBorderColor =&gt; style.textStroke
 *     ...
 *
 * @property string $stroke
 *    Color of stroke.
 *
 *  * @property string $stroke
 *    Color of stroke.
 *
 *  * @property string $stroke
 *    Color of stroke.
 *
 *  * @property string $stroke
 *    Color of stroke.
 *
 *  * @property string $stroke
 *    Color of stroke.
 *
 *  * @property string $stroke Default: '"#000"'
 *    Color of stroke.
 *
 * {_more_}
 */
class Style extends Property {}