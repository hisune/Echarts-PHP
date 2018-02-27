<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示 timeline 组件。如果设置为false，不会显示，但是功能还存在。
 *
 * @property string $type Default: 'slider'
 *    这个属性目前只支持为 slider，不需要更改。
 *
 * @property string $axisType Default: 'time'
 *    轴的类型。可选值为：
 *     
 *     value
 *       数值轴，适用于连续数据。
 *     
 *     category
 *       类目轴，适用于离散的类目数据。
 *     
 *     time
 *       时间轴，适用于连续的时序数据，与数值轴相比时间轴带有时间的格式化，在刻度计算上也有所不同，例如会根据跨度的范围来决定使用月，星期，日还是小时范围的刻度。
 *
 * @property int $currentIndex Default: 0
 *    表示当前选中项是哪项。比如，currentIndex 为 0 时，表示当前选中项为 timeline.data[0]（即使用 options[0]）。
 *
 * @property boolean $autoPlay Default: false
 *    表示是否自动播放。
 *
 * @property boolean $rewind Default: false
 *    表示是否反向播放。
 *
 * @property boolean $loop Default: true
 *    表示是否循环播放。
 *
 * @property int $playInterval Default: 2000
 *    表示播放的速度（跳动的间隔），单位毫秒（ms）。
 *
 * @property boolean $realtime Default: true
 *    拖动圆点的时候，是否实时更新视图。
 *
 * @property string $controlPosition Default: 'left'
 *    表示『播放』按钮的位置。可选值：left、right。
 *
 * @property int $zlevel Default: 0
 *    所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
 *
 * @property int $z Default: 2
 *    组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
 *
 * @property string|int $left Default: 'auto'
 *    timeline组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
 *
 * @property string|int $top Default: 'auto'
 *    timeline组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
 *
 * @property string|int $right Default: 'auto'
 *    timeline组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
 *
 * @property string|int $bottom Default: 'auto'
 *    timeline组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
 *
 * @property int|array $padding Default: 5
 *    timeline内边距，单位px，默认各方向内边距为5，接受数组分别设定上右下左边距。
 *     使用示例：
 *     // 设置内边距为 5
 *     padding: 5
 *     // 设置上下的内边距为 5，左右的内边距为 10
 *     padding: [5, 10]
 *     // 分别设置四个方向的内边距
 *     padding: [
 *         5,  // 上
 *         10, // 右
 *         5,  // 下
 *         10, // 左
 *     ]
 *
 * @property string $orient Default: 'horizontal'
 *    摆放方式，可选值有：
 *     
 *     vertical：竖直放置。
 *     horizontal：水平放置。
 *
 * @property boolean $inverse Default: false
 *    
 *     是否反向放置 timeline，反向则首位颠倒过来。
 *
 * @property string $symbol Default: 'emptyCircle'
 *    timeline标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize Default: 10
 *    timeline标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    timeline标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    timeline标记相对于原本位置的偏移。默认情况下，标记会居中置放在数据对应的位置，但是如果 symbol 是自定义的矢量路径或者图片，就有可能不希望 symbol 居中。这时候可以使用该配置项配置 symbol 相对于原本居中的偏移，可以是绝对的像素值，也可以是相对的百分比。
 *     例如 [0, 50%] 就是把自己向上移动了一半的位置，在 symbol 图形是气泡的时候可以让图形下端的箭头对准数据点。
 *
 * @property Timeline\LineStyle $lineStyle
 *    
 *
 * @property Timeline\Label $label
 *    轴的文本标签。emphasis 是文本高亮的样式，比如鼠标悬浮或者图例联动高亮的时候会使用 emphasis 作为文本的样式。
 *
 * @property Timeline\ItemStyle $itemStyle
 *    timeline  图形样式。
 *
 * @property Timeline\CheckpointStyle $checkpointStyle
 *    『当前项』（checkpoint）的图形样式。
 *
 * @property Timeline\ControlStyle $controlStyle
 *    『控制按钮』的样式。『控制按钮』包括：『播放按钮』、『前进按钮』、『后退按钮』。
 *
 * @property Timeline\Emphasis $emphasis
 *    
 *
 * @property array $data
 *    timeline 数据。Array 的每一项，可以是直接的数值。
 *     如果需要对每个数据项单独进行样式定义，则数据项写成 Object。Object中，value属性为数值。其他属性如下例子，可以覆盖 timeline 中的属性配置。
 *     如下例：
 *     [
 *         2002-01-01,
 *         2003-01-01,
 *         2004-01-01,
 *         {
 *             value: 2005-01-01,
 *             tooltip: {          // 让鼠标悬浮到此项时能够显示 `tooltip`。
 *                 formatter: {b} xxxx
 *             },
 *             symbol: diamond,  // 此项的图形的特别设置。
 *             symbolSize: 16      // 此项的图形大小的特别设置。
 *         },
 *         2006-01-01,
 *         2007-01-01,
 *         2008-01-01,
 *         2009-01-01,
 *         2010-01-01,
 *         {
 *             value: 2011-01-01,
 *             tooltip: {          // 让鼠标悬浮到此项时能够显示 `tooltip`。
 *                 formatter: function (params) {
 *                     return params.name + xxxx;
 *                 }
 *             },
 *             symbol: diamond,
 *             symbolSize: 18
 *         },
 *     ]
 *
 * {_more_}
 */
class Timeline extends Property {}