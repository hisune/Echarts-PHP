<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Graphic\Elements;

use Hisune\EchartsPHP\Property;

/**
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
 *
 * @property array $r
 *    Specify border radius of the rectangular here. Generally, r should be [topLeftRadius, topRightRadius, BottomRightRadius, bottomLeftRadius], where each item is a number.
 *     Abbreviation is enabled, for example:
 *     
 *     r: 1         means [1, 1, 1, 1]
 *     r: [1]       means [1, 1, 1, 1]
 *     r: [1, 2]    means [1, 2, 1, 2]
 *     r: [1, 2, 3] means [1, 2, 3, 2]
 *
 * @property string|array $transition Default: 'undefined'
 *    Can be a single property name or an array of property names.
 *     Enable transition animation when the specified properties changed.
 *     Can only specify properties that are under this shape.
 *     For example:
 *     {
 *         type: rect,
 *         shape: {
 *             ...
 *             // This two props will perform transition animation.
 *             transition: [mmm, ppp]
 *         }
 *     }
 *     
 *     We can also specify all of the properties like this:
 *     {
 *         type: rect,
 *         shape: {
 *             ...
 *         },
 *         // Indicate that all props in `shape` will
 *         // have transition animation.
 *         transition: shape,
 *     };
 *
 *  * @property int $cx Default: 0
 *    The x value of the center of the element in the coordinate system of its parent.
 *
 * @property int $cy Default: '0'
 *    The y value of the center of the element in the coordinate system of its parent.
 *
 * @property int $r Default: 0
 *    Outside radius.
 *
 *  * @property int $r0 Default: 0
 *    Inside radius.
 *
 *  * @property int $startAngle Default: 0
 *    start angle, in radian.
 *
 * @property int $endAngle Default: 'Math.PI * 2'
 *    end angle, in radian.
 *
 * @property boolean $clockwise Default: true
 *    Whether draw clockwise.
 *
 *  * @property array $points
 *    A list of points, which defines the shape, like [[22, 44], [44, 55], [11, 44], ...].
 *
 * @property int|string $smooth Default: 'undefined'
 *    Whether smooth the line.
 *     
 *     If the value is number, bezier interpolation is used, and the value specified the level of smooth, which is in the range of [0, 1].
 *     If the value is spline, Catmull-Rom spline interpolation is used.
 *
 * @property boolean $smoothConstraint Default: false
 *    Whether prevent the smooth process cause the line out of the bounding box.
 *     Only works when smooth is number (bezier smooth).
 *
 *  * @property array $points
 *    A list of points, which defines the shape, like [[22, 44], [44, 55], [11, 44], ...].
 *
 *  * @property int $x1 Default: 0
 *    x value of the start point.
 *
 * @property int $y1 Default: 0
 *    y value of the start point.
 *
 * @property int $x2 Default: 0
 *    x value of the end point.
 *
 * @property int $y2 Default: 0
 *    y value of the end point.
 *
 * @property int $percent Default: 1
 *    Specify the percentage of drawing, useful in animation.
 *     Value range: [0, 1].
 *
 *  * @property int $cpx1 Default: 0
 *    x of control point.
 *
 * @property int $cpy1 Default: 0
 *    y of control point.
 *
 * @property int $cpx2
 *    x of the second control point. If specified, cubic bezier is used.
 *     If both cpx2 and cpy2 are not set, quatratic bezier is used.
 *
 * @property int $cpy2
 *    y of the second control point. If specified, cubic bezier is used.
 *     If both cpx2 and cpy2 are not set, quatratic bezier is used.
 *
 * {_more_}
 */
class Shape extends Property {}