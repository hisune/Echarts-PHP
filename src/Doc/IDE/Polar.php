<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property int $zlevel Default: 0
 *    所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
 *
 * @property int $z Default: 2
 *    组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
 *
 * @property array $center Default: '[\'50%\', \'50%\']'
 *    极坐标系的中心（圆心）坐标，数组的第一项是横坐标，第二项是纵坐标。
 *     支持设置成百分比，设置成百分比时第一项是相对于容器宽度，第二项是相对于容器高度。
 *     使用示例：
 *     // 设置成绝对的像素值
 *     center: [400, 300]
 *     // 设置成相对的百分比
 *     center: [50%, 50%]
 *
 * @property array $radius
 *    极坐标系的半径，数组的第一项是内半径，第二项是外半径。
 *     支持设置成百分比，相对于容器高宽中较小的一项的一半。
 *
 * @property Polar\Tooltip $tooltip
 *    本坐标系特定的 tooltip 设定。
 *     
 *     提示框组件的通用介绍：
 *     提示框组件可以设置在多种地方：
 *     
 *     可以设置在全局，即 tooltip
 *     
 *     可以设置在坐标系中，即 grid.tooltip、polar.tooltip、single.tooltip
 *     
 *     可以设置在系列中，即 series.tooltip
 *     
 *     可以设置在系列的每个数据项中，即 series.data.tooltip
 *
 * {_more_}
 */
class Polar extends Property {}