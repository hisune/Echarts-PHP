<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\SingleAxis\SplitLine;

use Hisune\EchartsPHP\Property;

/**
 * @property array|string $color Default: '[\'#ccc\']'
 *    分隔线颜色，可以设置成单个颜色。
 *     也可以设置成颜色数组，分隔线会按数组中颜色的顺序依次循环设置颜色。
 *     示例
 *     splitLine: {
 *         lineStyle: {
 *             // 使用深浅的间隔色
 *             color: [#aaa, #ddd]
 *         }
 *     }
 *
 * @property int $width Default: 1
 *    分隔线线宽。
 *
 * @property string $type Default: 'solid'
 *    分隔线线的类型。
 *     可选：
 *     
 *     solid
 *     dashed
 *     dotted
 *
 * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * @property int $shadowOffsetX Default: 0
 *    阴影水平方向上的偏移距离。
 *
 * @property int $shadowOffsetY Default: 0
 *    阴影垂直方向上的偏移距离。
 *
 * @property int $opacity
 *    图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
 *
 * {_more_}
 */
class LineStyle extends Property {}