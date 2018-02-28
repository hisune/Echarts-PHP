<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Graphic\Elements;

use Hisune\EchartsPHP\Property;

/**
 * @property int $x Default: 0
 *    图形元素的左上角在父节点坐标系（以父节点左上角为原点）中的横坐标值。
 *
 * @property int $y Default: '0'
 *    图形元素的左上角在父节点坐标系（以父节点左上角为原点）中的纵坐标值。
 *
 * @property int $width Default: 0
 *    图形元素的宽度。
 *
 * @property int $height Default: '0'
 *    图形元素的高度。
 *
 *  * @property int $cx Default: 0
 *    图形元素的中心在父节点坐标系（以父节点左上角为原点）中的横坐标值。
 *
 * @property int $cy Default: '0'
 *    图形元素的中心在父节点坐标系（以父节点左上角为原点）中的纵坐标值。
 *
 * @property int $r Default: 0
 *    外半径。
 *
 *  * @property int $r0 Default: 0
 *    内半径。
 *
 *  * @property int $startAngle Default: 0
 *    开始弧度。
 *
 * @property int $endAngle Default: 'Math.PI * 2'
 *    结束弧度。
 *
 * @property boolean $clockwise Default: true
 *    是否顺时针。
 *
 *  * @property array $points
 *    点列表，用于定义形状，如 [[22, 44], [44, 55], [11, 44], ...]
 *
 * @property int|string $smooth Default: 'undefined'
 *    是否平滑曲线。
 *     
 *     如果为 number：表示贝塞尔 (bezier) 差值平滑，smooth 指定了平滑等级，范围 [0, 1]。
 *     如果为 spline：表示 Catmull-Rom spline 差值平滑。
 *
 * @property boolean $smoothConstraint Default: false
 *    是否将平滑曲线约束在包围盒中。smooth 为 number（bezier）时生效。
 *
 *  * @property array $points
 *    点列表，用于定义形状，如 [[22, 44], [44, 55], [11, 44], ...]
 *
 *  * @property int $x1 Default: 0
 *    开始点的 x 值。
 *
 * @property int $y1 Default: 0
 *    开始点的 y 值。
 *
 * @property int $x2 Default: 0
 *    结束点的 x 值。
 *
 * @property int $y2 Default: 0
 *    结束点的 y 值。
 *
 * @property int $percent Default: 1
 *    线画到百分之多少就不画了。值的范围：[0, 1]。
 *
 *  * @property int $cpx1 Default: 0
 *    控制点 x 值。
 *
 * @property int $cpy1 Default: 0
 *    控制点 y 值。
 *
 * @property int $cpx2
 *    第二个控制点 x 值。如果设置则开启三阶贝塞尔曲线。
 *
 * @property int $cpy2
 *    第二个控制点 y 值。如果设置则开启三阶贝塞尔曲线。
 *
 * {_more_}
 */
class Shape extends Property {}