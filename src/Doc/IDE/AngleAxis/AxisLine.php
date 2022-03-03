<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\AngleAxis;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    
 *     
 *     Set this to false to prevent the axis line from showing.
 *
 * @property string|array $symbol Default: 'none'
 *    
 *     
 *     Symbol of the two ends of the axis. It could be a string, representing the same symbol for two ends; or an array with two string elements, representing the two ends separately. Its set to be none by default, meaning no arrow for either end. If it is set to be arrow, there shall be two arrows. If there should only one arrow at the end, it should set to be [none, arrow].
 *
 * @property array $symbolSize Default: '[10, 15]'
 *    
 *     
 *     Size of the arrows at two ends. The first is the width perpendicular to the axis, the next is the width parallel to the axis.
 *
 * @property array|int $symbolOffset Default: '[0, 0]'
 *    
 *     
 *     Arrow offset of axis. If is array, the first number is the offset of the arrow at the beginning, and the second number is the offset of the arrow at the end. If is number, it means the arrows have the same offset.
 *
 * @property AxisLine\LineStyle $lineStyle
 *    
 *
 * {_more_}
 */
class AxisLine extends Property {}