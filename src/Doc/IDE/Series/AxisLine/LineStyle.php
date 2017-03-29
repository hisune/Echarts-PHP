<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\AxisLine;

use Hisune\EchartsPHP\Property;

/**
 * @property array $color
 *    仪表盘的轴线可以被分成不同颜色的多段。每段的结束位置和颜色可以通过一个数组来表示。
 *     默认取值：
 *     [[0.2, #91c7ae], [0.8, #63869e], [1, #c23531]]
 *
 * @property int $width Default: 30
 *    轴线宽度。
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