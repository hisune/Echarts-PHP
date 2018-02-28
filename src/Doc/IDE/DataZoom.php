<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type Default: 'inside'
 *    
 *
 * @property boolean $disabled Default: false
 *    是否停止组件的功能。
 *
 * @property int|array $xAxisIndex
 *    设置 dataZoom-inside 组件控制的 x轴（即xAxis，是直角坐标系中的概念，参见 grid）。
 *     不指定时，当 dataZoom-inside.orient 为 horizontal时，默认控制和 dataZoom 平行的第一个 xAxis。但是不建议使用默认值，建议显式指定。
 *     如果是 number 表示控制一个轴，如果是 Array 表示控制多个轴。
 *     例如有如下 ECharts option：
 *     option: {
 *         xAxis: [
 *             {...}, // 第一个 xAxis
 *             {...}, // 第二个 xAxis
 *             {...}, // 第三个 xAxis
 *             {...}  // 第四个 xAxis
 *         ],
 *         dataZoom: [
 *             { // 第一个 dataZoom 组件
 *                 xAxisIndex: [0, 2] // 表示这个 dataZoom 组件控制 第一个 和 第三个 xAxis
 *             },
 *             { // 第二个 dataZoom 组件
 *                 xAxisIndex: 3      // 表示这个 dataZoom 组件控制 第四个 xAxis
 *             }
 *         ]
 *     }
 *
 * @property int|array $yAxisIndex
 *    设置 dataZoom-inside 组件控制的 y轴（即yAxis，是直角坐标系中的概念，参见 grid）。
 *     不指定时，当 dataZoom-inside.orient 为 vertical时，默认控制和 dataZoom 平行的第一个 yAxis。但是不建议使用默认值，建议显式指定。
 *     如果是 number 表示控制一个轴，如果是 Array 表示控制多个轴。
 *     例如有如下 ECharts option：
 *     option: {
 *         yAxis: [
 *             {...}, // 第一个 yAxis
 *             {...}, // 第二个 yAxis
 *             {...}, // 第三个 yAxis
 *             {...}  // 第四个 yAxis
 *         ],
 *         dataZoom: [
 *             { // 第一个 dataZoom 组件
 *                 yAxisIndex: [0, 2] // 表示这个 dataZoom 组件控制 第一个 和 第三个 yAxis
 *             },
 *             { // 第二个 dataZoom 组件
 *                 yAxisIndex: 3      // 表示这个 dataZoom 组件控制 第四个 yAxis
 *             }
 *         ]
 *     }
 *
 * @property int|array $radiusAxisIndex
 *    设置 dataZoom-inside 组件控制的 radius 轴（即radiusAxis，是直角坐标系中的概念，参见 polar）。
 *     如果是 number 表示控制一个轴，如果是 Array 表示控制多个轴。
 *     例如有如下 ECharts option：
 *     option: {
 *         radiusAxis: [
 *             {...}, // 第一个 radiusAxis
 *             {...}, // 第二个 radiusAxis
 *             {...}, // 第三个 radiusAxis
 *             {...}  // 第四个 radiusAxis
 *         ],
 *         dataZoom: [
 *             { // 第一个 dataZoom 组件
 *                 radiusAxisIndex: [0, 2] // 表示这个 dataZoom 组件控制 第一个 和 第三个 radiusAxis
 *             },
 *             { // 第二个 dataZoom 组件
 *                 radiusAxisIndex: 3      // 表示这个 dataZoom 组件控制 第四个 radiusAxis
 *             }
 *         ]
 *     }
 *
 * @property int|array $angleAxisIndex
 *    设置 dataZoom-inside 组件控制的 angle 轴（即angleAxis，是直角坐标系中的概念，参见 polar）。
 *     如果是 number 表示控制一个轴，如果是 Array 表示控制多个轴。
 *     例如有如下 ECharts option：
 *     option: {
 *         angleAxis: [
 *             {...}, // 第一个 angleAxis
 *             {...}, // 第二个 angleAxis
 *             {...}, // 第三个 angleAxis
 *             {...}  // 第四个 angleAxis
 *         ],
 *         dataZoom: [
 *             { // 第一个 dataZoom 组件
 *                 angleAxisIndex: [0, 2] // 表示这个 dataZoom 组件控制 第一个 和 第三个 angleAxis
 *             },
 *             { // 第二个 dataZoom 组件
 *                 angleAxisIndex: 3      // 表示这个 dataZoom 组件控制 第四个 angleAxis
 *             }
 *         ]
 *     }
 *
 * @property string $filterMode Default: 'filter'
 *    dataZoom 的运行原理是通过 数据过滤 来达到 数据窗口缩放 的效果。数据过滤模式的设置不同，效果也不同。
 *     可选值为：
 *     
 *     filter：当前数据窗口外的数据，被 过滤掉。即 会 影响其他轴的数据范围。每个数据项，只要有一个维度在数据窗口外，整个数据项就会被过滤掉。
 *     
 *     weakFilter：当前数据窗口外的数据，被 过滤掉。即 会 影响其他轴的数据范围。每个数据项，只有当全部维度都在数据窗口同侧外部，整个数据项才会被过滤掉。
 *     
 *     empty：当前数据窗口外的数据，被 设置为空。即 不会 影响其他轴的数据范围。
 *     
 *     none: 不过滤数据，只改变数轴范围。
 *     
 *     
 *     如何设置，由用户根据场景和需求自己决定。经验来说：
 *     
 *     当『只有 X 轴 或 只有 Y 轴受 dataZoom 组件控制』时，常使用 filterMode: filter，这样能使另一个轴自适应过滤后的数值范围。
 *     
 *     当『X 轴 Y 轴分别受 dataZoom 组件控制』时：
 *     
 *     如果 X 轴和 Y 轴是『同等地位的、不应互相影响的』，比如在『双数值轴散点图』中，那么两个轴可都设为 fiterMode: empty。
 *     
 *     如果 X 轴为主，Y 轴为辅，比如在『柱状图』中，需要『拖动 dataZoomX 改变 X 轴过滤柱子时，Y 轴的范围也自适应剩余柱子的高度』，『拖动 dataZoomY 改变 Y 轴过滤柱子时，X 轴范围不受影响』，那么就 X轴设为 fiterMode: filter，Y 轴设为 fiterMode: empty，即主轴 filter，辅轴 empty。
 *     
 *     
 *     
 *     
 *     下面是个具体例子：
 *     option = {
 *         dataZoom: [
 *             {
 *                 id: dataZoomX,
 *                 type: slider,
 *                 xAxisIndex: [0],
 *                 filterMode: filter
 *             },
 *             {
 *                 id: dataZoomY,
 *                 type: slider,
 *                 yAxisIndex: [0],
 *                 filterMode: empty
 *             }
 *         ],
 *         xAxis: {type: value},
 *         yAxis: {type: value},
 *         series{
 *             type: bar,
 *             data: [
 *                 // 第一列对应 X 轴，第二列对应 Y 轴。
 *                 [12, 24, 36],
 *                 [90, 80, 70],
 *                 [3, 9, 27],
 *                 [1, 11, 111]
 *             ]
 *         }
 *     }
 *     
 *     上例中，dataZoomX 的 filterMode 设置为 filter。于是，假设当用户拖拽 dataZoomX（不去动 dataZoomY）导致其 valueWindow 变为 [2, 50] 时，dataZoomX 对 series.data 的第一列进行遍历，窗口外的整项去掉，最终得到的 series.data 为：
 *     [
 *         // 第一列对应 X 轴，第二列对应 Y 轴。
 *         [12, 24, 36],
 *         // [90, 80, 70] 整项被过滤掉，因为 90 在 dataWindow 之外。
 *         [3, 9, 27]
 *         // [1, 11, 111] 整项被过滤掉，因为 1 在 dataWindow 之外。
 *     ]
 *     
 *     过滤前，series.data 中对应 Y 轴的值有 24、80、9、11，过滤后，只剩下 24 和 9，那么 Y 轴的显示范围就会自动改变以适应剩下的这两个值的显示（如果 Y 轴没有被设置 min、max 固定其显示范围的话）。
 *     所以，filterMode: filter 的效果是：过滤数据后使另外的轴也能自动适应当前数据的范围。
 *     再从头来，上例中 dataZoomY 的 filterMode 设置为 empty。于是，假设当用户拖拽 dataZoomY（不去动 dataZoomX）导致其 dataWindow 变为 [10, 60] 时，dataZoomY 对 series.data 的第二列进行遍历，窗口外的值被设置为 empty （即替换为 NaN，这样设置为空的项，其所对应柱形，在 X 轴还有占位，只是不显示出来）。最终得到的 series.data 为：
 *     [
 *         // 第一列对应 X 轴，第二列对应 Y 轴。
 *         [12, 24, 36],
 *         [90, NaN, 70], // 设置为 empty (NaN)
 *         [3, NaN, 27],  // 设置为 empty (NaN)
 *         [1, 11, 111]
 *     ]
 *     
 *     这时，series.data 中对应于 X 轴的值仍然全部保留不受影响，为 12、90、3、1。那么用户对 dataZoomY 的拖拽操作不会影响到 X 轴的范围。这样的效果，对于离群点（outlier）过滤功能，比较清晰。
 *     如下面的例子：
 *
 * @property int $start Default: 0
 *    数据窗口范围的起始百分比。范围是：0 ~ 100。表示 0% ~ 100%。
 *     dataZoom-inside.start 和 dataZoom-inside.end 共同用 百分比 的形式定义了数据窗口范围。
 *
 * @property int $end Default: 100
 *    数据窗口范围的结束百分比。范围是：0 ~ 100。
 *     dataZoom-inside.start 和 dataZoom-inside.end 共同用 百分比 的形式定义了数据窗口范围。
 *
 * @property int|string|string $startValue
 *    数据窗口范围的起始数值。如果设置了 dataZoom-inside.start 则 startValue 失效。
 *     dataZoom-inside.startValue 和 dataZoom-inside.endValue 共同用 绝对数值 的形式定义了数据窗口范围。
 *     注意，如果轴的类型为 category，则 startValue 既可以设置为 axis.data 数组的 index，也可以设置为数组值本身。
 *     但是如果设置为数组值本身，会在内部自动转化为数组的 index。
 *
 * @property int|string|string $endValue
 *    数据窗口范围的结束数值。如果设置了 dataZoom-inside.end 则 endValue 失效。
 *     dataZoom-inside.startValue 和 dataZoom-inside.endValue 共同用 绝对数值 的形式定义了数据窗口范围。
 *     注意，如果轴的类型为 category，则 endValue 即可以设置为 axis.data 数组的 index，也可以设置为数组值本身。
 *     但是如果设置为数组值本身，会在内部自动转化为数组的 index。
 *
 * @property int $minSpan
 *    用于限制窗口大小的最小值（百分比值），取值范围是 0 ~ 100。
 *     如果设置了 dataZoom-inside.minValueSpan 则 minSpan 失效。
 *
 * @property int $maxSpan
 *    用于限制窗口大小的最大值（百分比值），取值范围是 0 ~ 100。
 *     如果设置了 dataZoom-inside.maxValueSpan 则 maxSpan 失效。
 *
 * @property int|string|string $minValueSpan
 *    用于限制窗口大小的最小值（实际数值）。
 *     如在时间轴上可以设置为：3600 * 24 * 1000 * 5 表示 5 天。
 *     在类目轴上可以设置为 5 表示 5 个类目。
 *
 * @property int|string|string $maxValueSpan
 *    用于限制窗口大小的最大值（实际数值）。
 *     如在时间轴上可以设置为：3600 * 24 * 1000 * 5 表示 5 天。
 *     在类目轴上可以设置为 5 表示 5 个类目。
 *
 * @property string $orient
 *    布局方式是横还是竖。不仅是布局方式，对于直角坐标系而言，也决定了，缺省情况控制横向数轴还是纵向数轴。
 *     可选值为：
 *     
 *     horizontal：水平。
 *     
 *     vertical：竖直。
 *
 * @property boolean $zoomLock Default: false
 *    是否锁定选择区域（或叫做数据窗口）的大小。
 *     如果设置为 true 则锁定选择区域的大小，也就是说，只能平移，不能缩放。
 *
 * @property int $throttle Default: 100
 *    设置触发视图刷新的频率。单位为毫秒（ms）。
 *     如果 animation 设为 true 且 animationDurationUpdate 大于 0，可以保持 throttle 为默认值 100（或者设置为大于 0 的值），否则拖拽时有可能画面感觉卡顿。
 *     如果 animation 设为 false 或者 animationDurationUpdate 设为 0，且在数据量不大时，拖拽时画面感觉卡顿，可以把尝试把 throttle 设为 0 来改善。
 *
 * @property array $rangeMode
 *    例如 rangeMode: [value, percent]，表示 start 值取绝对数值，end 取百分比。
 *     可选值为：value, percent
 *
 * @property boolean $zoomOnMouseWheel Default: true
 *    如何触发缩放。可选值为：
 *     
 *     true：表示不按任何功能键，鼠标滚轮能触发缩放。
 *     false：表示鼠标滚轮不能触发缩放。
 *     shift：表示按住 shift 和鼠标滚轮能触发缩放。
 *     ctrl：表示按住 ctrl 和鼠标滚轮能触发缩放。
 *     alt：表示按住 alt 和鼠标滚轮能触发缩放。
 *
 * @property boolean $moveOnMouseMove Default: true
 *    如何触发数据窗口平移。可选值为：
 *     
 *     true：表示不按任何功能键，鼠标移动能触发数据窗口平移。
 *     false：表示鼠标滚轮不能触发平移。
 *     shift：表示按住 shift 和鼠标移动能触发数据窗口平移。
 *     ctrl：表示按住 ctrl 和鼠标移动能触发数据窗口平移。
 *     alt：表示按住 alt 和鼠标移动能触发数据窗口平移。
 *
 * @property boolean $preventDefaultMouseMove Default: true
 *    是否阻止 mousemove 事件的默认行为。
 *
 * @property boolean $show Default: true
 *    是否显示  组件。如果设置为 false，不会显示，但是数据过滤的功能还存在。
 *
 * @property string $backgroundColor Default: 'rgba(47,69,84,0)'
 *    组件的背景颜色。
 *
 * @property DataZoom\DataBackground $dataBackground
 *    数据阴影的样式。
 *
 * @property string $fillerColor Default: 'rgba(167,183,204,0.4)'
 *    选中范围的填充颜色。
 *
 * @property string $borderColor Default: '#ddd'
 *    边框颜色。
 *
 * @property string $handleIcon
 *    手柄的 icon 形状，支持路径字符串，默认为：
 *     M8.2,13.6V3.9H6.3v9.7H3.1v14.9h3.3v9.7h1.8v-9.7h3.3V13.6H8.2z M9.7,24.4H4.8v-1.4h4.9V24.4z M9.7,19.1H4.8v-1.4h4.9V19.1z
 *     
 *     可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     自定义 icon 见 示例 area-simple
 *
 * @property int $handleSize Default: '100%'
 *    控制手柄的尺寸，可以是像素大小，也可以是相对于 dataZoom 组件宽度的百分比，默认跟 dataZoom 宽度相同。
 *
 * @property DataZoom\HandleStyle $handleStyle
 *    手柄的样式配置，见 示例 area-simple
 *
 * @property int $labelPrecision Default: 'auto'
 *    显示label的小数精度。默认根据数据自动决定。
 *
 * @property string|callable $labelFormatter
 *    显示的label的格式化器。
 *     
 *     如果为 string，表示模板，例如：aaaa{value}bbbb，其中{value}会被替换为实际的数值。
 *     
 *     如果为 Function，表示回调函数，例如：
 *     
 *     
 *     *
 *      * @param {*} value 如果 axis.type 为 category，则 `value` 为 axis.data 的 index。
 *      *                  否则 `value` 是当前值。
 *      * @param {strign} valueStr 内部格式化的结果。
 *      * @return {string} 返回最终的label内容。
 *      
 *     labelFormatter: function (value) {
 *         return aaa + value + bbb;
 *     }
 *
 * @property boolean $showDetail Default: true
 *    是否显示detail，即拖拽时候显示详细数值信息。
 *
 * @property string $showDataShadow Default: 'auto'
 *    是否在 dataZoom-silder 组件中显示数据阴影。数据阴影可以简单地反应数据走势。
 *
 * @property boolean $realtime Default: true
 *    拖动时，是否实时更新系列的视图。如果设置为 false，则只在拖拽结束的时候更新。
 *
 * @property DataZoom\TextStyle $textStyle
 *    
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
 *    dataZoom-slider组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
 *
 * @property string|int $top Default: 'auto'
 *    dataZoom-slider组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
 *
 * @property string|int $right Default: 'auto'
 *    dataZoom-slider组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
 *
 * @property string|int $bottom Default: 'auto'
 *    dataZoom-slider组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
 *
 * {_more_}
 */
class DataZoom extends Property {}