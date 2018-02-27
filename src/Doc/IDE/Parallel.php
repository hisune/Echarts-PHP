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
 * @property string|int $left Default: 80
 *    parallel 组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
 *
 * @property string|int $top Default: 60
 *    parallel 组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
 *
 * @property string|int $right Default: 80
 *    parallel 组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *
 * @property string|int $bottom Default: 60
 *    parallel 组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *
 * @property string|int $width Default: 'auto'
 *    parallel 组件的宽度。默认自适应。
 *
 * @property string|int $height Default: 'auto'
 *    parallel 组件的高度。默认自适应。
 *
 * @property string $layout Default: 'horizontal'
 *    布局方式，可选值为：
 *     
 *     horizontal：水平排布各个坐标轴。
 *     
 *     vertical：竖直排布各个坐标轴。
 *
 * @property boolean $axisExpandable Default: false
 *    维度比较多时，比如有 50+ 的维度，那么就会有 50+ 个轴。那么可能会页面显示不下。
 *     可以通过 parallel.axisExpandable 来改善显示效果，如下例子：
 *     
 *     
 *     
 *     
 *     
 *     是否允许点击展开折叠 axis。
 *
 * @property int $axisExpandCenter
 *    初始时，以哪个轴为中心展开，这里给出轴的 index。没有默认值，需要手动指定。
 *     参见 parallel.axisExpandable
 *
 * @property int $axisExpandCount Default: 0
 *    初始时，有多少个轴会处于展开状态。建议根据你的维度个数而手动指定。
 *     参见 parallel.axisExpandCenter
 *     参见 parallel.axisExpandable
 *
 * @property int $axisExpandWidth Default: 50
 *    在展开状态，轴的间距是多少，单位为像素。
 *     参见 parallel.axisExpandable
 *
 * @property string $axisExpandTriggerOn Default: 'click'
 *    可取值：
 *     
 *     click：鼠标点击的时候 expand。
 *     mousemove：鼠标悬浮的时候 expand。
 *
 * @property Parallel\ParallelAxisDefault $parallelAxisDefault
 *    配置多个 parallelAxis 时，有些值一样的属性，如果书写多遍则比较繁琐，那么可以放置在 parallel.parallelAxisDefault 里。在坐标轴初始化前，parallel.parallelAxisDefault 里的配置项，会分别融合进 parallelAxis，形成最终的坐标轴的配置。
 *     参见示例
 *
 * {_more_}
 */
class Parallel extends Property {}