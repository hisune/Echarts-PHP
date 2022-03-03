<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\AxisLine;

use Hisune\EchartsPHP\Property;

/**
 * @property array $color
 *    The axis line of gauge chart can be divided to several segments in different colors. The end position and color of each segment can be expressed by an array.
 *     Default value:
 *     [[1, #E6EBF8]]
 *     
 *     Note: The value of color[i][0] means the percentage of the axis line of the gauge charts segments, which should be between 0 and 1, and color[i][1] is the corresponding color.
 *     color: [
 *         [0.1, red], // 0~10% is red
 *         [0.2, green], // 10~20% is green
 *         [0.3, blue], // 20~30% is blue
 *         // ...
 *     ]
 *
 * @property int $width Default: 10
 *    The width of axis line.
 *
 * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property int $shadowOffsetX Default: 0
 *    
 *     
 *     Offset distance on the horizontal direction of shadow.
 *
 * @property int $shadowOffsetY Default: 0
 *    
 *     
 *     Offset distance on the vertical direction of shadow.
 *
 * @property int $opacity
 *    
 *     
 *     Opacity of the component. Supports value from 0 to 1, and the component will not be drawn when set to 0.
 *
 * {_more_}
 */
class LineStyle extends Property {}