<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Radar\AxisLabel;

use Hisune\EchartsPHP\Property;

/**
 * @property string|callable $color
 *    刻度标签文字的颜色，默认取 axisLine.lineStyle.color。支持回调函数，格式如下
 *     (val: string) =&gt; Color
 *     
 *     参数是标签的文本，返回颜色值，如下示例：
 *     textStyle: {
 *         color: function (value, index) {
 *             return value &gt;= 0 ? green : red;
 *         }
 *     }
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
 *
 * @property int $fontSize Default: 12
 *    文字的字体大小
 *
 * @property string $align
 *    文本水平对齐方式，默认自动选择对齐方式，可以是 left, right, center
 *
 * @property string $baseline
 *    文本垂直对齐方式，默认自动选择对齐方式，可以是 top, middle, bottom
 *
 * {_more_}
 */
class TextStyle extends Property {}