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
 *    的中心（圆心）坐标，数组的第一项是横坐标，第二项是纵坐标。
 *     支持设置成百分比，设置成百分比时第一项是相对于容器宽度，第二项是相对于容器高度。
 *     使用示例：
 *     // 设置成绝对的像素值
 *     center: [400, 300]
 *     // 设置成相对的百分比
 *     center: [50%, 50%]
 *
 * @property int|string $radius Default: '75%'
 *    的半径，数组的第一项是内半径，第二项是外半径。
 *     支持设置成百分比，相对于容器高宽中较小的一项的一半。
 *
 * @property int $startAngle Default: 90
 *    坐标系起始角度，也就是第一个指示器轴的角度。
 *
 * @property Radar\Name $name
 *    雷达图每个指示器名称的配置项。
 *
 * @property int $nameGap Default: 15
 *    指示器名称和指示器轴的距离。
 *
 * @property int $splitNumber Default: 5
 *    指示器轴的分割段数。
 *
 * @property string $shape Default: 'polygon'
 *    雷达图绘制类型，支持 polygon 和 circle。
 *
 * @property boolean $scale Default: false
 *    是否是脱离 0 值比例。设置成 true 后坐标刻度不会强制包含零刻度。在双数值轴的散点图中比较有用。
 *
 * @property boolean $silent Default: false
 *    坐标轴是否是静态无法交互。
 *
 * @property boolean $triggerEvent Default: false
 *    坐标轴的标签是否响应和触发鼠标事件，默认不响应。
 *     事件参数如下：
 *     {
 *         // 组件类型，xAxis, yAxis, radiusAxis, angleAxis
 *         // 对应组件类型都会有一个属性表示组件的 index，例如 xAxis 就是 xAxisIndex
 *         componentType: string,
 *         // 未格式化过的刻度值, 点击刻度标签有效
 *         value: ,
 *         // 坐标轴名称, 点击坐标轴名称有效
 *         name: 
 *     }
 *
 * @property Radar\AxisLine $axisLine
 *    坐标轴轴线相关设置。
 *
 * @property Radar\AxisTick $axisTick
 *    坐标轴刻度相关设置。
 *
 * @property Radar\AxisLabel $axisLabel
 *    坐标轴刻度标签的相关设置。
 *
 * @property Radar\SplitLine $splitLine
 *    坐标轴在 grid 区域中的分隔线。
 *
 * @property Radar\SplitArea $splitArea
 *    坐标轴在 grid 区域中的分隔区域，默认不显示。
 *
 * @property array $indicator
 *    雷达图的指示器，用来指定雷达图中的多个变量（维度），如下示例。
 *     indicator: [
 *        { name: 销售（sales）, max: 6500},
 *        { name: 管理（Administration）, max: 16000, color: red}, // 标签设置为红色
 *        { name: 信息技术（Information Techology）, max: 30000},
 *        { name: 客服（Customer Support）, max: 38000},
 *        { name: 研发（Development）, max: 52000},
 *        { name: 市场（Marketing）, max: 25000}
 *     ]
 *
 * {_more_}
 */
class Radar extends Property {}