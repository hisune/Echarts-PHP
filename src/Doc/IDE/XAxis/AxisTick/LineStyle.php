<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\XAxis\AxisTick;

use Hisune\EchartsPHP\Property;

/**
 * @property string $color
 *    Color of axis label is set to be axisLine.lineStyle.color by default.
 *
 * @property int $width Default: 1
 *    axisTick line width.
 *
 * @property string $type Default: 'solid'
 *    axisTick line type.
 *     Options are: 
 *     
 *     solid
 *     dashed
 *     dotted
 *
 * @property int $shadowBlur
 *    Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    Shadow color. Support same format as color.
 *
 * @property int $shadowOffsetX Default: 0
 *    Offset distance on the horizontal direction of shadow.
 *
 * @property int $shadowOffsetY Default: 0
 *    Offset distance on the vertical direction of shadow.
 *
 * @property int $opacity
 *    Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 * {_more_}
 */
class LineStyle extends Property {}