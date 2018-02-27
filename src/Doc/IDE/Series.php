<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type Default: 'line'
 *    
 *
 * @property string $name
 *    系列名称，用于tooltip的显示，legend 的图例筛选，在 setOption 更新数据和配置项时用于指定对应的系列。
 *
 * @property string $coordinateSystem Default: 'cartesian2d'
 *    该系列使用的坐标系，可选：
 *     
 *     cartesian2d
 *       使用二维的直角坐标系（也称笛卡尔坐标系），通过 xAxisIndex, yAxisIndex指定相应的坐标轴组件。
 *     
 *     
 *     
 *     polar
 *       使用极坐标系，通过 polarIndex 指定相应的极坐标组件
 *
 * @property int $xAxisIndex Default: 0
 *    使用的 x 轴的 index，在单个图表实例中存在多个 x 轴的时候有用。
 *
 * @property int $yAxisIndex Default: 0
 *    使用的 y 轴的 index，在单个图表实例中存在多个 y轴的时候有用。
 *
 * @property int $polarIndex Default: 0
 *    使用的极坐标系的 index，在单个图表实例中存在多个极坐标系的时候有用。
 *
 * @property string $symbol Default: 'emptyCircle'
 *    标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array|callable $symbolSize Default: 4
 *    标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *     如果需要每个数据的图形大小不一样，可以设置为如下格式的回调函数：
 *     (value: Array|number, params: Object) =&gt; number|Array
 *     
 *     其中第一个参数 value 为 data 中的数据值。第二个参数params 是其它的数据项参数。
 *
 * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    标记相对于原本位置的偏移。默认情况下，标记会居中置放在数据对应的位置，但是如果 symbol 是自定义的矢量路径或者图片，就有可能不希望 symbol 居中。这时候可以使用该配置项配置 symbol 相对于原本居中的偏移，可以是绝对的像素值，也可以是相对的百分比。
 *     例如 [0, 50%] 就是把自己向上移动了一半的位置，在 symbol 图形是气泡的时候可以让图形下端的箭头对准数据点。
 *
 * @property boolean $showSymbol Default: true
 *    是否显示 symbol, 如果 false 则只有在 tooltip hover 的时候显示。
 *
 * @property boolean $showAllSymbol Default: false
 *    标志图形默认只有主轴显示（随主轴标签间隔隐藏策略），如需全部显示可把 showAllSymbol 设为 true。
 *
 * @property boolean $hoverAnimation Default: true
 *    是否开启 hover 在拐点标志上的提示动画效果。
 *
 * @property boolean $legendHoverLink Default: true
 *    是否启用图例 hover 时的联动高亮。
 *
 * @property string $stack
 *    数据堆叠，同个类目轴上系列配置相同的stack值后，后一个系列的值会在前一个系列的值上相加。
 *     下面示例可以通过右上角 toolbox 中的堆叠切换看效果：
 *
 * @property string $cursor Default: 'pointer'
 *    鼠标悬浮时在图形元素上时鼠标的样式是什么。同 CSS 的 cursor。
 *
 * @property boolean $connectNulls Default: false
 *    是否连接空数据。
 *
 * @property boolean $clipOverflow Default: true
 *    是否对超出部分裁剪，默认裁剪。
 *
 * @property string|boolean $step Default: false
 *    是否是阶梯线图。可以设置为 true 显示成阶梯线图，也支持设置成 start, middle, end 分别配置在当前点，当前点与下个点的中间点，下个点拐弯。
 *     不同的配置效果如下：
 *
 * @property Series\Label $label
 *    图形上的文本标签，可用于说明图形的一些数据信息，比如值，名称等，label选项在 ECharts 2.x 中放置于itemStyle下，在 ECharts 3 中为了让整个配置项结构更扁平合理，label 被拿出来跟 itemStyle 平级，并且跟 itemStyle 一样拥有 emphasis 状态。
 *
 * @property Series\ItemStyle $itemStyle
 *    折线拐点标志的样式。
 *
 * @property Series\LineStyle $lineStyle
 *    线条样式。
 *     注： 修改 lineStyle 中的颜色不会影响图例颜色，如果需要图例颜色和折线图颜色一致，需修改 itemStyle.color，线条颜色默认也会取改颜色。
 *
 * @property Series\AreaStyle $areaStyle
 *    区域填充样式。
 *
 * @property Series\Emphasis $emphasis
 *    图形的高亮样式。
 *
 * @property boolean|int $smooth Default: false
 *    是否平滑曲线显示。
 *     如果是 boolean 类型，则表示是否开启平滑处理。如果是 number 类型（取值范围 0 到 1），表示平滑程度，越小表示越接近折线段，反之则反。设为 true 时相当于设为 0.5。
 *     如果需要修改平滑算法，请参考 smoothMonotone。
 *
 * @property string $smoothMonotone
 *    折线平滑后是否在一个维度上保持单调性，可以设置成x, y来指明是在 x 轴或者 y 轴上保持单调性。设置为 none 则采用不单调的平滑算法。
 *     ECharts 4.0.3 版本起，更新了折线平滑的默认算法，原先的算法可以通过将 smoothMonotone 设为 none 实现。下图是新老算法的效果对比图：
 *     
 *     老算法存在以下问题：
 *     
 *     老算法的控制点平行前后点组成的向量，而新算法的控制点始终是水平（如果数据的第 0 个维度上是单调递增的）或竖直的（如果数据的第 1 个维度上是单调递增的）。
 *     
 *     但是新算法对于数据不单调的时候会产生不理想的效果。
 *     
 *     因此，我们建议在默认情况下使用新算法（即不需要设置 smoothMonotone）。如果数据的 Y 坐标是单调递增的，则将其设为 y。如果数据在任何方向上都不是单调递增的，则将其设置为 none 使用老算法。
 *
 * @property string $sampling
 *    折线图在数据量远大于像素点时候的降采样策略，开启后可以有效的优化图表的绘制效率，默认关闭，也就是全部绘制不过滤数据点。
 *     可选：
 *     
 *     average 取过滤点的平均值
 *     max 取过滤点的最大值
 *     min 取过滤点的最小值
 *     sum 取过滤点的和
 *
 * @property array $dimensions
 *    使用 dimensions 定义 series.data 或者 dataset.source 的每个维度的信息。
 *     注意：如果使用了 dataset，那么可以在 dataset.source 的第一行/列中给出 dimension 名称。于是就不用在这里指定 dimension。但是，如果在这里指定了 dimensions，那么 ECharts 不再会自动从 dataset.source 的第一行/列中获取维度信息。
 *     例如：
 *     option = {
 *         dataset: {
 *             source: [
 *                 // 有了上面 dimensions 定义后，下面这五个维度的名称分别为：
 *                 // date, open, close, highest, lowest
 *                 [12, 44, 55, 66, 2],
 *                 [23, 6, 16, 23, 1],
 *                 ...
 *             ]
 *         },
 *         series: {
 *             type: xxx,
 *             // 定义了每个维度的名称。这个名称会被显示到默认的 tooltip 中。
 *             dimensions: [date, open, close, highest, lowest]
 *         }
 *     }
 *     
 *     series: {
 *         type: xxx,
 *         dimensions: [
 *             null,                // 如果此维度不想给出定义，则使用 null 即可
 *             {type: ordinal},   // 只定义此维度的类型。
 *                                  // ordinal 表示离散型，一般文本使用这种类型。
 *                                  // 如果类型没有被定义，会自动猜测类型。
 *             {name: good, type: number},
 *             bad                // 等同于 {name: bad}
 *         ]
 *     }
 *     
 *     dimensions 数组中的每一项可以是：
 *     
 *     string，如 someName，等同于 {name: someName}
 *     Object，属性可以有：
 *     name: string。
 *     type: string，支持
 *     number，默认，表示普通数据。
 *     ordinal，对于类目、文本这些 string 类型的数据，如果需要能在数轴上使用，须是 ordinal 类型。ECharts 默认会自动判断这个类型。但是自动判断也是不可能很完备的，所以使用者也可以手动强制指定。
 *     float，即 Float64Array。
 *     int，即 Int32Array。
 *     time，表示时间类型。设置成 time 则能支持自动解析数据成时间戳（timestamp），比如该维度的数据是 2017-05-10，会自动被解析。时间类型的支持参见 data。
 *     
 *     
 *     displayName: 一般用于 tooltip 中维度名的展示。string 如果没有指定，默认使用 name 来展示。
 *     
 *     
 *     
 *     值得一提的是，当定义了 dimensions 后，默认 tooltip 中对个维度的显示，会变为『竖排』，从而方便显示每个维度的名称。如果没有定义 dimensions，则默认 tooltip 会横排显示，且只显示数值没有维度名称可显示。
 *
 * @property array $encode
 *    可以定义 data 的哪个维度被编码成什么。比如：
 *     option = {
 *         dataset: {
 *             source: [
 *                 // 每一列称为一个『维度』。
 *                 // 这里分别是维度 0、1、2、3、4。
 *                 [12, 44, 55, 66, 2],
 *                 [23, 6, 16, 23, 1],
 *                 ...
 *             ]
 *         },
 *         series: {
 *             type: xxx,
 *             encode: {
 *                 x: [3, 1, 5],      // 表示维度 3、1、5 映射到 x 轴。
 *                 y: 2,              // 表示维度 2 映射到 y 轴。
 *                 tooltip: [3, 2, 4] // 表示维度 3、2、4 会在 tooltip 中显示。
 *             }
 *         }
 *     }
 *     
 *     encode 支持的属性，根据坐标系不同而不同。
 *     对于 直角坐标系（cartesian2d），支持 x、y。
 *     对于 极坐标系（polar），支持 radius、angle。
 *     对于 地理坐标系（geo），支持 lng，lat。
 *     此外，均支持 tooltip 和 itemName（用于指定 tooltip 中数据项名称）。
 *     当使用 dimensions 给维度定义名称后，encode 中可直接引用名称，例如：
 *     series: {
 *         type: xxx,
 *         dimensions: [date, open, close, highest, lowest],
 *         encode: {
 *             x: date,
 *             y: [open, close, highest, lowest]
 *         }
 *     }
 *
 * @property string $seriesLayoutBy Default: 'column'
 *    当使用 dataset 时，seriesLayoutBy 指定了 dataset 中用行还是列对应到系列上，也就是说，系列“排布”到 dataset 的行还是列上。可取值：
 *     
 *     column：默认，dataset 的列对应于系列，从而 dataset 中每一列是一个维度（dimension）。
 *     row：dataset 的行对应于系列，从而 dataset 中每一行是一个维度（dimension）。
 *     
 *     参见这个 示例
 *
 * @property int $datasetIndex Default: 0
 *    如果 series.data 没有指定，并且 dataset 存在，那么就会使用 dataset。datasetIndex 指定本系列使用那个 dataset。
 *
 * @property array $data
 *    系列中的数据内容数组。数组项通常为具体的数据项。
 *     注意，如果系列没有指定 data，并且 option 有 dataset，那么默认使用第一个 dataset。如果指定了 data，则不会再使用 dataset。
 *     可以使用 series.datasetIndex 指定其他的 dataset。
 *     通常来说，数据用一个二维数组表示。如下，每一列被称为一个『维度』。
 *     series: [{
 *         data: [
 *             // 维度X   维度Y   其他维度 ...
 *             [  3.4,    4.5,   15,   43],
 *             [  4.2,    2.3,   20,   91],
 *             [  10.8,   9.5,   30,   18],
 *             [  7.2,    8.8,   18,   57]
 *         ]
 *     }]
 *     
 *     
 *     在 直角坐标系 (grid) 中『维度X』和『维度Y』会默认对应于 xAxis 和 yAxis。
 *     在 极坐标系 (polar) 中『维度X』和『维度Y』会默认对应于 radiusAxis 和 angleAxis。
 *     后面的其他维度是可选的，可以在别处被使用，例如：
 *     在 visualMap 中可以将一个或多个维度映射到颜色，大小等多个图形属性上。
 *     在 series.symbolSize 中可以使用回调函数，基于某个维度得到 symbolSize 值。
 *     使用 tooltip.formatter 或 series.label.formatter 可以把其他维度的值展示出来。
 *     
 *     
 *     
 *     特别地，当只有一个轴为类目轴（axis.type 为 category）的时候，数据可以简化用一个一维数组表示。例如：
 *     xAxis: {
 *         data: [a, b, m, n]
 *     },
 *     series: [{
 *         // 与 xAxis.data 一一对应。
 *         data: [23,  44,  55,  19]
 *         // 它其实是下面这种形式的简化：
 *         // data: [[0, 23], [1, 44], [2, 55], [3, 19]]
 *     }]
 *     
 *     
 *     『值』与 轴类型 的关系：
 *     
 *     当某维度对应于数值轴（axis.type 为 value 或者 log）的时候：
 *       其值可以为 number（例如 12）。（也可以兼容 string 形式的 number，例如 12）
 *     
 *     当某维度对应于类目轴（axis.type 为 category）的时候：
 *       其值须为类目的『序数』（从 0 开始）或者类目的『字符串值』。例如：
 *       xAxis: {
 *           type: category,
 *           data: [星期一, 星期二, 星期三, 星期四]
 *       },
 *       yAxis: {
 *           type: category,
 *           data: [a, b, m, n, p, q]
 *       },
 *       series: [{
 *           data: [
 *               // xAxis    yAxis
 *               [  0,        0,    2  ], // 意思是此点位于 xAxis: 星期一, yAxis: a。
 *               [  星期四,  2,    1  ], // 意思是此点位于 xAxis: 星期四, yAxis: m。
 *               [  2,       p,   2  ], // 意思是此点位于 xAxis: 星期三, yAxis: p。
 *               [  3,        3,    5  ]
 *           ]
 *       }]
 *     
 *       双类目轴的示例可以参考 Github Punchcard 示例。
 *     
 *     当某维度对应于时间轴（type 为 time）的时候，值可以为：
 *     
 *     一个时间戳，如 1484141700832，表示 UTC 时间。
 *     或者字符串形式的时间描述：
 *     ISO 8601 的子集，只包含这些形式（这几种格式，除非指明时区，否则均表示本地时间，与 moment 一致）：
 *     部分年月日时间: 2012-03, 2012-03-01, 2012-03-01 05, 2012-03-01 05:06.
 *     使用 T 或空格分割: 2012-03-01T12:22:33.123, 2012-03-01 12:22:33.123.
 *     时区设定: 2012-03-01T12:22:33Z, 2012-03-01T12:22:33+8000, 2012-03-01T12:22:33-05:00.
 *     
 *     
 *     其他的时间字符串，包括（均表示本地时间）:
 *     2012, 2012-3-1, 2012/3/1, 2012/03/01,
 *     2009/6/12 2:00, 2009/6/12 2:05:08, 2009/6/12 2:05:08.123
 *     
 *     
 *     或者用户自行初始化的 Date 实例：
 *     注意，用户自行初始化 Date 实例的时候，浏览器的行为有差异，不同字符串的表示也不同。
 *     例如：在 chrome 中，new Date(2012-01-01) 表示 UTC 时间的 2012 年 1 月 1 日，而 new Date(2012-1-1) 和 new Date(2012/01/01) 表示本地时间的 2012 年 1 月 1 日。在 safari 中，不支持 new Date(2012-1-1) 这种表示方法。
 *     所以，使用 new Date(dataString) 时，可使用第三方库解析（如 moment），或者使用 echarts.number.parseDate，或者参见 这里。
 *     
 *     
 *     
 *     
 *     
 *     
 *     当需要对个别数据进行个性化定义时：
 *     数组项可用对象，其中的 value 像表示具体的数值，如：
 *     [
 *         12,
 *         34,
 *         {
 *             value : 56,
 *             //自定义标签样式，仅对该数据项有效
 *             label: {},
 *             //自定义特殊 itemStyle，仅对该数据项有效
 *             itemStyle:{}
 *         },
 *         10
 *     ]
 *     // 或
 *     [
 *         [12, 33],
 *         [34, 313],
 *         {
 *             value: [56, 44],
 *             label: {},
 *             itemStyle:{}
 *         },
 *         [10, 33]
 *     ]
 *     
 *     
 *     空值：
 *     当某数据不存在时（ps：不存在不代表值为 0），可以用 - 或者 null 或者 undefined 或者 NaN 表示。
 *     例如，无数据在折线图中可表现为该点是断开的，在其它图中可表示为图形不存在。
 *
 * @property Series\MarkPoint $markPoint
 *    图表标注。
 *
 * @property Series\MarkLine $markLine
 *    图表标线。
 *
 * @property Series\MarkArea $markArea
 *    图表标域，常用于标记图表中某个范围的数据，例如标出某段时间投放了广告。
 *
 * @property int $zlevel Default: 0
 *    折线图所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
 *
 * @property int $z Default: 2
 *    折线图组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
 *
 * @property boolean $silent Default: false
 *    图形是否不响应和触发鼠标事件，默认为 false，即响应和触发鼠标事件。
 *
 * @property boolean $animation Default: true
 *    是否开启动画。
 *
 * @property int $animationThreshold Default: 2000
 *    是否开启动画的阈值，当单个系列显示的图形数量大于这个阈值时会关闭动画。
 *
 * @property int $animationDuration Default: 1000
 *    初始动画的时长，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果：
 *     animationDuration: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasing Default: 'linear'
 *    初始动画的缓动效果。不同的缓动效果可以参考 缓动示例。
 *
 * @property int|callable $animationDelay Default: 0
 *    初始动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果。
 *     如下示例：
 *     animationDelay: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *     
 *     也可以看该示例
 *
 * @property int|callable $animationDurationUpdate Default: 300
 *    数据更新动画的时长。
 *     支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果：
 *     animationDurationUpdate: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasingUpdate Default: 'cubicOut'
 *    数据更新动画的缓动效果。
 *
 * @property int|callable $animationDelayUpdate Default: 0
 *    数据更新动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
 *     如下示例：
 *     animationDelayUpdate: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *     
 *     也可以看该示例
 *
 * @property Series\Tooltip $tooltip
 *    本系列特定的 tooltip 设定。
 *
 * @property int|string $barWidth Default: '自适应'
 *    柱条的宽度，不设时自适应。支持设置成相对于类目宽度的百分比。
 *     在同一坐标系上，此属性会被多个 bar 系列共享。此属性应设置于此坐标系中最后一个 bar 系列上才会生效，并且是对此坐标系中所有 bar 系列生效。
 *
 * @property int|string $barMaxWidth Default: '自适应'
 *    柱条的最大宽度，不设时自适应。支持设置成相对于类目宽度的百分比。
 *     在同一坐标系上，此属性会被多个 bar 系列共享。此属性应设置于此坐标系中最后一个 bar 系列上才会生效，并且是对此坐标系中所有 bar 系列生效。
 *
 * @property int $barMinHeight Default: 0
 *    柱条最小高度，可用于防止某数据项的值过小而影响交互。
 *
 * @property string $barGap Default: '30%'
 *    柱间距离，可设固定值（如 20）或者百分比（如 30%，表示柱子宽度的 30%）。
 *     如果想要两个系列的柱子重叠，可以设置 barGap 为 -100%。这在用柱子做背景的时候有用。
 *     在同一坐标系上，此属性会被多个 bar 系列共享。此属性应设置于此坐标系中最后一个 bar 系列上才会生效，并且是对此坐标系中所有 bar 系列生效。
 *     例子：
 *
 * @property string $barCategoryGap Default: '20%'
 *    类目间柱形距离，默认为类目间距的20%，可设固定值
 *     在同一坐标系上，此属性会被多个 bar 系列共享。此属性应设置于此坐标系中最后一个 bar 系列上才会生效，并且是对此坐标系中所有 bar 系列生效。
 *
 * @property int $hoverOffset Default: 10
 *    高亮扇区的偏移距离。
 *
 * @property boolean|string $selectedMode Default: false
 *    选中模式，表示是否支持多个选中，默认关闭，支持布尔值和字符串，字符串取值可选single，multiple，分别表示单选还是多选。
 *
 * @property int $selectedOffset Default: 10
 *    选中扇区的偏移距离。
 *
 * @property boolean $clockwise Default: true
 *    饼图的扇区是否是顺时针排布。
 *
 * @property int $startAngle Default: 90
 *    起始角度，支持范围[0, 360]。
 *
 * @property int $minAngle Default: 0
 *    最小的扇区角度（0 ~ 360），用于防止某个值过小导致扇区太小影响交互。
 *
 * @property boolean|string $roseType Default: false
 *    是否展示成南丁格尔图，通过半径区分数据大小。可选择两种模式：
 *     
 *     radius 扇区圆心角展现数据的百分比，半径展现数据的大小。
 *     area 所有扇区圆心角相同，仅通过半径展现数据大小。
 *
 * @property boolean $avoidLabelOverlap Default: true
 *    是否启用防止标签重叠策略，默认开启，在标签拥挤重叠的情况下会挪动各个标签的位置，防止标签间的重叠。
 *     如果不需要开启该策略，例如圆环图这个例子中需要强制所有标签放在中心位置，可以将该值设为 false。
 *
 * @property boolean $stillShowZeroSum Default: true
 *    是否在数据和为0（一般情况下所有数据为0） 的时候不显示扇区。
 *
 * @property Series\LabelLine $labelLine
 *    标签的视觉引导线样式，在 label 位置 设置为outside的时候会显示视觉引导线。
 *
 * @property array $center Default: '[\'50%\', \'50%\']'
 *    饼图的中心（圆心）坐标，数组的第一项是横坐标，第二项是纵坐标。
 *     支持设置成百分比，设置成百分比时第一项是相对于容器宽度，第二项是相对于容器高度。
 *     使用示例：
 *     // 设置成绝对的像素值
 *     center: [400, 300]
 *     // 设置成相对的百分比
 *     center: [50%, 50%]
 *
 * @property array $radius Default: '[0, \'75%\']'
 *    饼图的半径，数组的第一项是内半径，第二项是外半径。
 *     支持设置成百分比，相对于容器高宽中较小的一项的一半。
 *     可以将内半径设大显示成圆环图（Donut chart）。
 *
 * @property string $animationType Default: 'expansion'
 *    初始动画效果，可选
 *     
 *     expansion 默认研圆弧展开的效果。
 *     scale 缩放效果，配合设置 animationEasing=elasticOut 可以做成 popup 的效果。
 *
 * @property int $geoIndex Default: 0
 *    使用的地理坐标系的 index，在单个图表实例中存在多个地理坐标系的时候有用。
 *
 * @property int $calendarIndex Default: 0
 *    使用的日历坐标系的 index，在单个图表实例中存在多个日历坐标系的时候有用。
 *
 * @property boolean $large Default: true
 *    是否开启大规模散点图的优化，在数据图形特别多的时候（&gt;=5k）可以开启。
 *     开启后配合 largeThreshold 在数据量大于指定阈值的时候对绘制进行优化。
 *     缺点：优化后不能自定义设置单个数据项的样式。
 *
 * @property int $largeThreshold Default: 2000
 *    开启绘制优化的阈值。
 *
 * @property string $effectType Default: 'ripple'
 *    特效类型，目前只支持涟漪特效ripple。
 *
 * @property string $showEffectOn Default: 'render'
 *    配置何时显示特效。
 *     可选：
 *     
 *     render 绘制完成后显示特效。
 *     emphasis 高亮（hover）的时候显示特效。
 *
 * @property Series\RippleEffect $rippleEffect
 *    涟漪特效相关配置。
 *
 * @property int $radarIndex
 *    雷达图所使用的 radar 组件的 index。
 *
 * @property string|int $left Default: '12%'
 *    tree组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
 *
 * @property string|int $top Default: '12%'
 *    tree组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
 *
 * @property string|int $right Default: '12%'
 *    tree组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *
 * @property string|int $bottom Default: '12%'
 *    tree组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *
 * @property string|int $width
 *    tree组件的宽度。
 *
 * @property string|int $height
 *    tree组件的高度。
 *
 * @property string $layout Default: 'orthogonal'
 *    树图的布局，有 正交 和 径向 两种。这里的 正交布局 就是我们通常所说的 水平 和 垂直 两个方向，对应的参数取值为 orthogonal 。而 径向布局 是指以根节点为圆心，每一层节点为环，一层层向外发散绘制而成的布局，对应的参数取值为 radial 。
 *     正交布局示例：
 *     
 *     
 *     
 *     
 *     径向布局示例：
 *
 * @property string $orient Default: 'horizontal'
 *    树图中 正交布局 的方向 ，对应有 水平 和 垂直 两个方向，取值分别为 horizontal , vertical.
 *
 * @property boolean $expandAndCollapse Default: true
 *    子树折叠和展开的交互，默认打开 。由于绘图区域是有限的，而通常一个树图的节点可能会比较多，这样就会出现节点之间相互遮盖的问题。为了避免这一问题，可以将暂时无关的子树折叠收起，等到需要时再将其展开。如上面径向布局树图示例，节点中心用蓝色填充的就是折叠收起的子树，可以点击将其展开。
 *     注意：如果配置自定义的图片作为节点的标记，是无法通过填充色来区分当前节点是否有折叠的子树的。而目前暂不支持，上传两张图片分别表示节点折叠和展开两种状态。所以，如果想明确地显示节点的两种状态，建议使用 ECharts 常规的标记类型，如 emptyCircle 等。
 *
 * @property int $initialTreeDepth Default: 2
 *    树图初始展开的层级（深度）。根节点是第 0 层，然后是第 1 层、第 2 层，... ，直到叶子节点。该配置项主要和 折叠展开 交互一起使用，目的还是为了防止一次展示过多节点，节点之间发生遮盖。如果设置为 -1 或者 null 或者 undefined，所有节点都将展开。
 *
 * @property Series\Leaves $leaves
 *    叶子节点的特殊配置，如上面的树图实例中，叶子节点和非叶子节点的标签位置不同。
 *
 * @property int $squareRatio
 *    期望矩形长宽比率。布局计算时会尽量向这个比率靠近。
 *     默认为黄金比：0.5 * (1 + Math.sqrt(5))。
 *
 * @property int $leafDepth
 *    设置了 leafDepth 后，下钻（drill down）功能开启。drill down 功能即点击后才展示子层级。
 *     leafDepth 表示『展示几层』，层次更深的节点则被隐藏起来。点击则可下钻看到层次更深的节点。
 *     例如，leafDepth 设置为 1，表示展示一层节点。
 *     默认没有开启 drill down（即 leafDepth 为 null 或 undefined）。
 *     drill down 的例子：
 *
 * @property string $drillDownIcon Default: '▶'
 *    当节点可以下钻时的提示符。只能是字符。
 *
 * @property boolean|string $roam Default: true
 *    是否开启拖拽漫游（移动和缩放）。可取值有：
 *     
 *     false：关闭。
 *     scale 或 zoom：只能够缩放。
 *     move 或 pan：只能够平移。
 *     true：缩放和平移均可。
 *
 * @property boolean|string $nodeClick Default: 'zoomToNode'
 *    点击节点后的行为。可取值为：
 *     
 *     false：节点点击无反应。
 *     zoomToNode：点击节点后缩放到节点。
 *     link：如果节点数据中有 link 点击节点后会进行超链接跳转。
 *
 * @property int $zoomToNodeRatio Default: '0.32*0.32'
 *    点击某个节点，会自动放大那个节点到合适的比例（节点占可视区域的面积比例），这个配置项就是这个比例。
 *
 * @property array $levels Default: '[]'
 *    多层配置
 *     treemap 中采用『三级配置』：
 *     『每个节点』-&gt;『每个层级』-&gt;『每个系列』。
 *     即我们可以对每个节点进行配置，也可以对树的每个层级进行配置，也可以 series 上设置全局配置。节点上的设置，优先级最高。
 *     最常用的是『每个层级进行配置』，levels 配置项就是每个层级的配置。例如：
 *     // Notice that in fact the data structure is not tree, but is forest.
 *     // 注意，这个数据结构实际不是『树』而是『森林』
 *     data: [
 *         {
 *             name: nodeA,
 *             children: [
 *                 {name: nodeAA},
 *                 {name: nodeAB},
 *             ]
 *         },
 *         {
 *             name: nodeB,
 *             children: [
 *                 {name: nodeBA}
 *             ]
 *         }
 *     ],
 *     levels: [
 *         {...}, // 『森林』的顶层配置。即含有 nodeA, nodeB 的这层。
 *         {...}, // 下一层配置，即含有 nodeAA, nodeAB, nodeBA 的这层。
 *         {...}, // 再下一层配置。
 *         ...
 *     ]
 *     
 *     
 *     视觉映射的规则
 *     treemap中首要关注的是如何在视觉上较好得区分『不同层级』、『同层级中不同类别』。这需要合理得设置不同层级的『矩形颜色』、『边界粗细』、『边界颜色』甚至『矩形颜色饱和度』等。
 *     参见这个例子，最顶层级用颜色区分，分成了『红』『绿』『蓝』等大块。每个颜色块中是下一个层级，使用颜色的饱和度来区分（参见 colorSaturation）。最外层的矩形边界是『白色』，下层级的矩形边界是当前区块颜色加上饱和度处理（参见 borderColorSaturation）。
 *     treemap 是通过这样的规则来支持这种配置的：每个层级计算用户配置的 color、colorSaturation、borderColor、colorSaturation等视觉信息（在levels中配置）。如果子节点没有配置，则继承父的配置，否则使用自己的配置）。
 *     这样，可以做到：父层级配置 color 列表，子层级配置 colorSaturation。父层级的每个节点会从 color 列表中得到一个颜色，子层级的节点会从 colorSaturation 中得到一个值，并且继承父节点得到的颜色，合成得到自己的最终颜色。
 *     
 *     维度与『额外的视觉映射』
 *     例子：每一个 value 字段是一个 Array，其中每个项对应一个维度（dimension）。
 *     [
 *         {
 *             value: [434, 6969, 8382],
 *             children: [
 *                 {
 *                     value: [1212, 4943, 5453],
 *                     id: someid-1,
 *                     name: description of this node,
 *                     children: [...]
 *                 },
 *                 {
 *                     value: [4545, 192, 439],
 *                     id: someid-2,
 *                     name: description of this node,
 *                     children: [...]
 *                 },
 *                 ...
 *             ]
 *         },
 *         {
 *             value: [23, 59, 12],
 *             children: [...]
 *         },
 *         ...
 *     ]
 *     
 *     treemap 默认把第一个维度（Array 第一项）映射到『面积』上。而如果想表达更多信息，用户可以把其他的某一个维度（series-treemap.visualDimension），映射到其他的『视觉元素』上，比如颜色明暗等。参见例子中，legend选择 Growth时的状态。
 *     
 *     矩形边框（border）/缝隙（gap）设置如何避免混淆
 *     如果统一用一种颜色设置矩形的缝隙（gap），那么当不同层级的矩形同时展示时可能会出现混淆。
 *     参见 例子，注意其中红色的区块中的子矩形其实是更深层级，和其他用白色缝隙区分的矩形不是在一个层级。所以，红色区块中矩形的分割线的颜色，我们在 borderColorSaturation 中设置为『加了饱和度变化的红颜色』，以示区别。
 *     
 *     borderWidth, gapWidth, borderColor 的解释
 *
 * @property int $visualDimension Default: 0
 *    treemap 中支持对数据其他维度进行视觉映射。
 *     首先，treemap的数据格式（参见 series-treemap.data）中，每个节点的 value 都可以是数组。数组每项是一个『维度』（dimension）。visualDimension 指定了额外的『视觉映射』使用的是数组的哪一项。默认为第 0 项。
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     
 *     注：treemap中 visualDimension 属性可能在多处地方存在：
 *     
 *     可以存在于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     可以存在于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     
 *     存在于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
 *
 * @property int $visualMin
 *    当前层级的最小 value 值。如果不设置则自动统计。
 *     手动指定 visualMin、visualMax ，即手动控制了 visual mapping 的值域（当 colorMappingBy 为 value 时有意义）。
 *
 * @property int $visualMax
 *    当前层级的最大 value 值。如果不设置则自动统计。
 *     手动指定 visualMin、visualMax ，即手动控制了 visual mapping 的值域（当 colorMappingBy 为 value 时有意义）。
 *
 * @property array $colorAlpha
 *    本系列默认的 颜色透明度 选取范围。数值范围 0 ~ 1。
 *     例如, colorAlpha 可以是 [0.3, 1].
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     
 *     注：treemap中 colorAlpha 属性可能在多处地方存在：
 *     
 *     可以存在于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     可以存在于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     
 *     存在于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
 *
 * @property int $colorSaturation
 *    本系列默认的 颜色饱和度 选取范围。数值范围 0 ~ 1。
 *     例如, colorSaturation 可以是 [0.3, 1].
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     
 *     注：treemap中 colorSaturation 属性可能在多处地方存在：
 *     
 *     可以存在于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     可以存在于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     
 *     存在于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
 *
 * @property string $colorMappingBy Default: 'index'
 *    表示同一层级节点，在颜色列表中（参见 color 属性）选择时，按照什么来选择。可选值：
 *     
 *     value：
 *     
 *     将节点的值（即 series-treemap.data.value）映射到颜色列表中。
 *     这样得到的颜色，反应了节点值的大小。
 *     可以使用 visualDimension 属性来设置，用 data 中哪个纬度的值来映射。
 *     
 *     index：
 *     
 *     将节点的 index（序号）映射到颜色列表中。即同一层级中，第一个节点取颜色列表中第一个颜色，第二个节点取第二个。
 *     这样得到的颜色，便于区分相邻节点。
 *     
 *     id：
 *     
 *     将节点的 id（即 series-treemap.data.id）映射到颜色列表中。id 是用户指定的，这样能够使得，在treemap 通过 setOption 变化数值时，同一 id 映射到同一颜色，保持一致性。参见 例子。
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     
 *     注：treemap中 colorMappingBy 属性可能在多处地方存在：
 *     
 *     可以存在于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     可以存在于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     
 *     存在于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
 *
 * @property int $visibleMin Default: 10
 *    如果某个节点的矩形的面积，小于这个数值（单位：px平方），这个节点就不显示。
 *     如果不加这个限制，很小的节点会影响显示效果。
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     
 *     注：treemap中 visibleMin 属性可能在多处地方存在：
 *     
 *     可以存在于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     可以存在于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     
 *     存在于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
 *
 * @property int $childrenVisibleMin
 *    如果某个节点的矩形面积，小于这个数值（单位：px平方），则不显示这个节点的子节点。
 *     这能够在矩形面积不足够大时候，隐藏节点的细节。当用户用鼠标缩放节点时，如果面积大于此阈值，又会显示子节点。
 *     关于视觉设置，详见 series-treemap.levels。
 *     
 *     
 *     注：treemap中 childrenVisibleMin 属性可能在多处地方存在：
 *     
 *     可以存在于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     可以存在于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     
 *     存在于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
 *
 * @property Series\UpperLabel $upperLabel
 *    upperLabel 用于显示矩形的父节点的标签。当 upperLabel.show 为 true 的时候，『显示父节点标签』功能开启。
 *     同 series-treemap.label 一样，upperLabel 可以存在于 series-treemap 的根节点，或者 series-treemap.level 中，或者 series-treemap.data 的每个数据项中。
 *     series-treemap.label 描述的是，当前节点为叶节点时标签的样式；upperLabel 描述的是，当前节点为非叶节点（即含有子节点）时标签的样式。（此时标签一般会被显示在节点的最上部）
 *     参见：
 *     
 *     
 *     
 *     
 *     
 *     
 *     
 *     注：treemap中 label 属性可能在多处地方存在：
 *     
 *     可以存在于 sereis-treemap 根下，表示本系列全局的统一设置。
 *     
 *     
 *     可以存在于 series-treemap.levels 的每个数组元素中，表示树每个层级的统一设置。
 *     
 *     存在于 series-treemap.data 的每个节点中，表示每个节点的特定设置。
 *
 * @property Series\Breadcrumb $breadcrumb
 *    面包屑，能够显示当前节点的路径。
 *
 * @property string $highlightPolicy Default: 'descendant'
 *    当鼠标移动到一个扇形块时，可以高亮相关的扇形块。如果其值为 descendant，则会高亮该扇形块和后代元素，其他元素将被淡化（downplay，参见 itemStyle）；如果其值为 ancestor，则会高亮该扇形块和祖先元素；如果其值为 self 则只高亮自身；none 则不会淡化其他元素。
 *     
 *     
 *     
 *     上面的例子 highlightPolicy 是默认值 descendant，我们通过 dispatchAction 触发了旭日图中某个数据块的高亮操作（相当于将鼠标移动到下图中的 target 扇形块中）。目标扇形块将采用 emphasis 的样式（在本例中是为红色），和目标扇形块相关的扇形块（由 highlightPolicy 决定哪些扇形块是相关的）采用 highlight 的样式（橙色），其他扇形块采用 downplay 的样式（灰色）。而如果没有高亮对象，则所有扇形块都采用默认的样式。样式定义是类似这样的：
 *     itemStyle: {
 *         color: yellow,
 *         borderWidth: 2
 *     },
 *     emphasis: {
 *         itemStyle: {
 *             color: red
 *         }
 *     },
 *     highlight: {
 *         itemStyle: {
 *             color: orange
 *         }
 *     },
 *     downplay: {
 *         itemStyle: {
 *             color: #ccc
 *         }
 *     }
 *     
 *     而如果将 highlightPolicy 设为 ancestor，则会得到这样的效果：
 *
 * @property string|callable $sort Default: 'desc'
 *    扇形块根据数据 value 的排序方式，如果未指定 value，则其值为子元素 value 之和。默认值 desc 表示降序排序；还可以设置为 asc 表示升序排序；null 表示不排序，使用原始数据的顺序；或者用回调函数进行排列：
 *     function(nodeA, nodeB) {
 *         return nodeA.getValue() - nodeB.getValue();
 *     }
 *
 * @property boolean $renderLabelForZeroData Default: false
 *    如果数据没有 name，是否需要渲染文字。
 *
 * @property Series\Highlight $highlight
 *    鼠标悬停后相关扇形块的配置项。参见 highlightPolicy。
 *
 * @property Series\Downplay $downplay
 *    鼠标悬停后不相关扇形块的配置项。参见 highlightPolicy。
 *
 * @property array $boxWidth Default: '[7, 50]'
 *    box 的宽度的上下限。数组的意思是：[min, max]。
 *     可以是绝对数值，如 [7, 50]，也可以是百分比，如 [40%, 90%]。百分比的意思是，最大可能宽度（bandWidth）的百分之多少。
 *
 * @property int $barMinWidth
 *    指定柱最大宽度。可以使用绝对数值（如 10）或百分比（如 20%，表示 band width 的百分之多少）。默认自适应。
 *
 * @property int $blurSize Default: 20
 *    每个点模糊的大小，在地理坐标系(coordinateSystem: geo)上有效。
 *
 * @property int $minOpacity Default: 0
 *    最小的透明度，在地理坐标系(coordinateSystem: geo)上有效。
 *
 * @property int $maxOpacity Default: 1
 *    最大的透明度，在地理坐标系(coordinateSystem: geo)上有效。
 *
 * @property string $map Default: ''
 *    地图类型。
 *     ECharts 3 中因为地图精度的提高，不再内置地图数据增大代码体积，你可以在地图下载界面下载到需要的地图文件引入并注册到 ECharts 中。
 *     ECharts 中提供了两种格式的地图数据，一种是可以直接 script 标签引入的 js 文件，引入后会自动注册地图名字和数据。还有一种是 JSON 文件，需要通过 AJAX 异步加载后手动注册。
 *     下面是两种类型的使用示例：
 *      JavaScript 引入示例 
 *     &lt;script src=echarts.js&gt;&lt;/script&gt;
 *     &lt;script src=map/js/china.js&gt;&lt;/script&gt;
 *     &lt;script&gt;
 *     var chart = echarts.init(document.getElementById(main));
 *     chart.setOption({
 *         series: [{
 *             type: map,
 *             map: china
 *         }]
 *     });
 *     &lt;/script&gt;
 *     
 *      JSON 引入示例 
 *     $.get(map/json/china.json, function (chinaJson) {
 *         echarts.registerMap(china, chinaJson);
 *         var chart = echarts.init(document.getElementById(main));
 *         chart.setOption({
 *             series: [{
 *                 type: map,
 *                 map: china
 *             }]
 *         });
 *     });
 *     
 *     ECharts 使用 geoJSON 格式的数据作为地图的轮廓，除了上述数据，你也可以通过其它手段获取地图的 geoJSON 数据注册到 ECharts 中。参见示例 USA Population Estimates
 *
 * @property int $aspectScale Default: 0.75
 *    这个参数用于 scale 地图的长宽比。
 *     最终的 aspect 的计算方式是：geoBoundingRect.width / geoBoundingRect.height * aspectScale
 *
 * @property array $boundingCoords
 *    二维数组，定义定位的左上角以及右下角分别所对应的经纬度。例如
 *     // 设置为一张完整经纬度的世界地图
 *     map: world,
 *     left: 0, top: 0, right: 0, bottom: 0,
 *     boundingCoords: [
 *         // 定位左上角经纬度
 *         [-180, 90],
 *         // 定位右下角经纬度
 *         [180, -90]
 *     ],
 *
 * @property int $zoom Default: 1
 *    当前视角的缩放比例。
 *
 * @property Series\ScaleLimit $scaleLimit
 *    滚轮缩放的极限控制，通过min, max最小和最大的缩放值，默认的缩放为1。
 *
 * @property array $nameMap
 *    自定义地区的名称映射，如：
 *     {
 *         China : 中国
 *     }
 *
 * @property array $layoutCenter
 *    layoutCenter 和 layoutSize 提供了除了 left/right/top/bottom/width/height 之外的布局手段。
 *     在使用 left/right/top/bottom/width/height 的时候，可能很难在保持地图高宽比的情况下把地图放在某个盒形区域的正中间，并且保证不超出盒形的范围。此时可以通过 layoutCenter 属性定义地图中心在屏幕中的位置，layoutSize 定义地图的大小。如下示例
 *     layoutCenter: [30%, 30%],
 *     // 如果宽高比大于 1 则宽度为 100，如果小于 1 则高度为 100，保证了不超过 100x100 的区域
 *     layoutSize: 100
 *     
 *     设置这两个值后 left/right/top/bottom/width/height 无效。
 *
 * @property int|string $layoutSize
 *    地图的大小，见 layoutCenter。支持相对于屏幕宽高的百分比或者绝对的像素大小。
 *
 * @property string $mapValueCalculation Default: 'sum'
 *    多个拥有相同地图类型的系列会使用同一个地图展现，如果多个系列都在同一个区域有值，ECharts 会对这些值统计得到一个数据。这个配置项就是用于配置统计的方式，目前有：
 *     
 *     sum   取和。
 *     average 取平均值。
 *     max   取最大值。
 *     min   取最小值。
 *
 * @property boolean $showLegendSymbol
 *    在图例相应区域显示图例的颜色标识（系列标识的小圆点），存在 legend 组件时生效。
 *
 * @property int $parallelIndex Default: 0
 *    使用的平行坐标系的 index，在单个图表实例中存在多个平行坐标系的时候有用。
 *
 * @property int $inactiveOpacity Default: 0.05
 *    框选时，未被选中的条线会设置成这个『透明度』（从而可以达到变暗的效果）。
 *
 * @property int $activeOpacity Default: 1
 *    框选时，选中的条线会设置成这个『透明度』（从而可以达到高亮的效果）。
 *
 * @property boolean $realtime Default: true
 *    是否实时刷新。
 *
 * @property boolean $polyline Default: false
 *    是否是多段线。
 *     默认为 false，只能用于绘制只有两个端点的线段，线段可以通过 lineStyle.curveness 配置为曲线。
 *     如果该配置项为 true，则可以在 data.coords 中设置多于 2 个的顶点用来绘制多段线，在绘制路线轨迹的时候比较有用，见示例 北京公交路线，设置为多段线后 lineStyle.curveness 无效。
 *
 * @property Series\Effect $effect
 *    线特效的配置，见示例 模拟迁徙 和 北京公交路线
 *     注意： 所有带有尾迹特效的图表需要单独放在一个层，也就是需要单独设置 zlevel，同时建议关闭该层的动画（animation: false）。不然位于同个层的其它系列的图形，和动画的标签也会产生不必要的残影。
 *
 * @property Series\Circular $circular
 *    环形布局相关配置
 *
 * @property Series\Force $force
 *    力引导布局相关的配置项，力引导布局是模拟弹簧电荷模型在每两个节点之间添加一个斥力，每条边的两个节点之间添加一个引力，每次迭代节点会在各个斥力和引力的作用下移动位置，多次迭代后节点会静止在一个受力平衡的位置，达到整个模型的能量最小化。
 *     力引导布局的结果有良好的对称性和局部聚合性，也比较美观。
 *
 * @property int $nodeScaleRatio Default: 0.6
 *    鼠标漫游缩放时节点的相应缩放比例，当设为0时节点不随着鼠标的缩放而缩放
 *
 * @property boolean $draggable Default: false
 *    节点是否可拖拽，只在使用力引导布局的时候有用。
 *
 * @property boolean $focusNodeAdjacency Default: false
 *    是否在鼠标移到节点上的时候突出显示节点以及节点的边和邻接节点。
 *
 * @property array|string $edgeSymbol Default: '[\'none\', \'none\']'
 *    边两端的标记类型，可以是一个数组分别指定两端，也可以是单个统一指定。默认不显示标记，常见的可以设置为箭头，如下：
 *     edgeSymbol: [circle, arrow]
 *
 * @property array|int $edgeSymbolSize Default: 10
 *    边两端的标记大小，可以是一个数组分别指定两端，也可以是单个统一指定。
 *
 * @property Series\EdgeLabel $edgeLabel
 *    
 *
 * @property array $categories
 *    节点分类的类目，可选。
 *     如果节点有分类的话可以通过 data[i].category 指定每个节点的类目，类目的样式会被应用到节点样式上。图例也可以基于categories名字展现和筛选。
 *
 * @property array $nodes
 *    别名，同 data
 *
 * @property array $links
 *    节点间的关系数据。示例：
 *     links: [{
 *         source: n1,
 *         target: n2
 *     }, {
 *         source: n2,
 *         target: n3
 *     }]
 *
 * @property array $edges
 *    别名，同 links
 *
 * @property int $nodeWidth Default: 20
 *    图中每个矩形节点的宽度。
 *
 * @property int $nodeGap Default: 8
 *    图中每一列任意两个矩形节点之间的间隔。
 *
 * @property int $layoutIterations Default: 32
 *    布局的迭代次数，用来不断优化图中节点的位置，以减少节点和边之间的相互遮盖。
 *     默认布局迭代次数：32。
 *     经测试，布局迭代次数不要低于默认值。
 *
 * @property int $min Default: 0
 *    指定的数据最小值。
 *
 * @property int $max Default: 100
 *    指定的数据最大值。
 *
 * @property string $minSize Default: '0%'
 *    数据最小值 min 映射的宽度。
 *     可以是绝对的像素大小，也可以是相对布局宽度的百分比，如果需要最小值的图形并不是尖端三角，可通过设置该属性实现。
 *
 * @property string $maxSize Default: '100%'
 *    数据最大值 max 映射的宽度。
 *     可以是绝对的像素大小，也可以是相对布局宽度的百分比。
 *
 * @property int $gap Default: 0
 *    数据图形间距。
 *
 * @property string $funnelAlign Default: 'center'
 *    水平方向对齐布局类型，默认居中对齐，可用选项还有：left | right | center
 *
 * @property int $endAngle Default: -45
 *    仪表盘结束角度。
 *
 * @property int $splitNumber Default: 10
 *    仪表盘刻度的分割段数。
 *
 * @property Series\AxisLine $axisLine
 *    仪表盘轴线相关配置。
 *
 * @property Series\SplitLine $splitLine
 *    分隔线样式。
 *
 * @property Series\AxisTick $axisTick
 *    刻度样式。
 *
 * @property Series\AxisLabel $axisLabel
 *    刻度标签。
 *
 * @property Series\Pointer $pointer
 *    仪表盘指针。
 *
 * @property Series\Title $title
 *    仪表盘标题。
 *
 * @property Series\Detail $detail
 *    仪表盘详情，用于显示数据。
 *
 * @property string $symbolPosition Default: 'start'
 *    图形的定位位置。可取值：
 *     
 *     start：图形边缘与柱子开始的地方内切。
 *     end：图形边缘与柱子结束的地方内切。
 *     center：图形在柱子里居中。
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolPosition: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolPosition: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolPosition: ... // 只对此数据项生效
 *         }]
 *     }]
 *
 * @property boolean|int|string $symbolRepeat
 *    指定图形元素是否重复。值可为：
 *     
 *     false/null/undefined：不重复，即每个数据值用一个图形元素表示。
 *     true：使图形元素重复，即每个数据值用一组重复的图形元素表示。重复的次数依据 data 计算得到。
 *     a number：使图形元素重复，即每个数据值用一组重复的图形元素表示。重复的次数是给定的定值。
 *     fixed：使图形元素重复，即每个数据值用一组重复的图形元素表示。重复的次数依据 symbolBoundingData 计算得到，即与 data 无关。这在此图形被用于做背景时有用。
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolRepeat: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolRepeat: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolRepeat: ... // 只对此数据项生效
 *         }]
 *     }]
 *
 * @property string $symbolRepeatDirection Default: 'start'
 *    指定图形元素重复时，绘制的顺序。这个属性在两种情况下有用处：
 *     
 *     当 symbolMargin 设置为负值时，重复的图形会互相覆盖，这是可以使用 symbolRepeatDirection 来指定覆盖顺序。
 *     
 *     当 animationDelay 或 animationDelayUpdate 被使用时，symbolRepeatDirection 指定了 index 顺序。
 *     
 *     
 *     这个属性的值可以是：start 或 end。
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolRepeatDirection: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolRepeatDirection: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolRepeatDirection: ... // 只对此数据项生效
 *         }]
 *     }]
 *
 * @property int|string $symbolMargin
 *    图形的两边间隔（『两边』是指其数值轴方向的两边）。可以是绝对数值（如 20），或者百分比值（如 -30%），表示相对于自身尺寸 symbolSize 的百分比。只有当 symbolRepeat 被使用时有意义。
 *     可以是正值，表示间隔大；也可以是负数。当 symbolRepeat 被使用时，负数时能使图形重叠。
 *     可以在其值结尾处加一个 !，如 30%! 或 25!，表示第一个图形的开始和最后一个图形结尾留白，不紧贴边界。默认会紧贴边界。
 *     注意：
 *     
 *     当 symbolRepeat 为 true/fixed 的时候：
 *       这里设置的 symbolMargin 只是个参考值，真正最后的图形间隔，是根据 symbolRepeat、symbolMargin、symbolBoundingData 综合计算得到。
 *     当 symbolRepeat 为一个固定数值的时候：
 *       这里设置的 symbolMargin 无效。
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolMargin: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolMargin: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolMargin: ... // 只对此数据项生效
 *         }]
 *     }]
 *
 * @property boolean $symbolClip Default: false
 *    是否剪裁图形。
 *     
 *     false/null/undefined：图形本身表示数值大小。
 *     true：图形被剪裁后剩余的部分表示数值大小。
 *     
 *     symbolClip 常在这种场景下使用：同时表达『总值』和『当前数值』。在这种场景下，可以使用两个系列，一个系列是完整的图形，当做『背景』来表达总数值，另一个系列是使用 symbolClip 进行剪裁过的图形，表达当前数值。
 *     例子：
 *     
 *     
 *     
 *     在这个例子中：
 *     
 *     『背景系列』和『当前值系列』使用相同的 symbolBoundingData，使得绘制出的图形的大小是一样的。
 *     『当前值系列』设置了比『背景系列』更高的 z，使得其覆盖在『背景系列』上。
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolClip: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolClip: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolClip: ... // 只对此数据项生效
 *         }]
 *     }]
 *
 * @property int|array $symbolBoundingData
 *    这个属性是『指定图形界限的值』。它指定了一个 data，这个 data 映射在坐标系上的位置，是图形绘制的界限。也就是说，如果设置了 symbolBoundingData，图形的尺寸则由 symbolBoundingData 决定。
 *     当柱子是水平的，symbolBoundingData 对应到 x 轴上，当柱子是竖直的，symbolBoundingData 对应到 y 轴上。
 *     规则：
 *     
 *     没有使用 symbolRepeat 时：
 *       symbolBoundingData 缺省情况下和『参考柱』的尺寸一样。图形的尺寸由零点和 symbolBoundingData 决定。举例，当柱子是竖直的，柱子对应的 data 为 24，symbolSize 设置为 [30, 50%]，symbolBoundingData 设置为 124，那么最终图形的高度为 124 * 50% = 62。如果 symbolBoundingData 不设置，那么最终图形的高度为 24 * 50% = 12。
 *     
 *     使用了 symbolRepeat 时：
 *       symbolBoundingData 缺省情况取当前坐标系所显示出的最值。symbolBoundingData 定义了一个 bounding，重复的图形在这个 bounding 中，依据 symbolMargin 和 symbolRepeat 和 symbolSize 进行排布。这几个变量决定了图形的间隔大小。
 *     
 *     
 *     在这些场景中，你可能会需要设置 symbolBoundingData：
 *     
 *     使用了 symbolCilp 时：
 *       使用一个系列表达『总值』，另一个系列表达『当前值』的时候，需要两个系列画出的图形一样大。那么就把两个系列的 symbolBoundingData 设为一样大。
 *     
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     使用了 symbolRepeat 时：
 *       如果需要不同柱子中的图形的间隔保持一致，那么可以把 symbolBoundingData 设为一致的数值。当然，不设置 symbolBoundingData 也是可以的，因为其缺省值就是一个定值（坐标系所显示出的最值）。
 *     
 *     
 *     例子：
 *     
 *     
 *     
 *     
 *     symbolBoundingData 可以是一个数组，例如 [-40, 60]，表示同时指定了正值的 symbolBoundingData 和负值的 symbolBoundingData。
 *     参见例子：
 *     
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolBoundingData: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolBoundingData: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolBoundingData: ... // 只对此数据项生效
 *         }]
 *     }]
 *
 * @property int $symbolPatternSize Default: 400
 *    可以使用图片作为图形的 pattern。
 *     var textureImg = new Image();
 *     textureImg.src = data:image/jpeg;base64,...; // dataURI
 *     // 或者
 *     // textureImg.src = http://xxx.xxx.xxx/xx.png; // URL
 *     ...
 *     itemStyle: {
 *         color: {
 *             image: textureImg,
 *             repeat: repeat
 *         }
 *     }
 *     
 *     这时候，symbolPatternSize 指定了 pattern 的缩放尺寸。比如 symbolPatternSize 为 400 时表示图片显示为 400px * 400px 的尺寸。
 *     例子：
 *     
 *     
 *     
 *     
 *     
 *     此属性可以被设置在系列的 根部，表示对此系列中所有数据都生效；也可以被设置在 data 中的 每个数据项中，表示只对此数据项生效。
 *     例如：
 *     series: [{
 *         symbolPatternSize: ... // 对 data 中所有数据项生效。
 *         data: [23, 56]
 *     }]
 *     或者
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolPatternSize: ... // 只对此数据项生效
 *         }, {
 *             value: 56
 *             symbolPatternSize: ... // 只对此数据项生效
 *         }]
 *     }]
 *
 * @property array $boundaryGap Default: '["10%", "10%"]'
 *    图中与坐标轴正交的方向的边界间隙，设置该值是为了调整图的位置，使其尽量处于屏幕的正中间，避免处于屏幕的上方或下方。
 *
 * @property int $singleAxisIndex Default: 0
 *    单个时间轴的index，默认值为0，因为只有单个轴。
 *
 * @property Series\RenderItem $renderItem
 *    custom 系列需要开发者自己提供图形渲染的逻辑。这个渲染逻辑一般命名为 renderItem。例如：
 *     var option = {
 *         ...,
 *         series: [{
 *             type: custom,
 *             renderItem: function (params, api) {
 *                 var categoryIndex = api.value(0);
 *                 var start = api.coord([api.value(1), categoryIndex]);
 *                 var end = api.coord([api.value(2), categoryIndex]);
 *                 var height = api.size([0, 1])[1] * 0.6;
 *     
 *                 return {
 *                     type: rect,
 *                     shape: echarts.graphic.clipRectByRect({
 *                         x: start[0],
 *                         y: start[1] - height / 2,
 *                         width: end[0] - start[0],
 *                         height: height
 *                     }, {
 *                         x: params.coordSys.x,
 *                         y: params.coordSys.y,
 *                         width: params.coordSys.width,
 *                         height: params.coordSys.height
 *                     }),
 *                     style: api.style()
 *                 };
 *             },
 *             data: data
 *         }]
 *     }
 *     
 *     对于 data 中的每个数据项（为方便描述，这里称为 dataItem)，会调用此 renderItem 函数。
 *     renderItem 函数提供了两个参数：
 *     
 *     params：包含了当前数据信息和坐标系的信息。
 *     api：是一些开发者可调用的方法集合。
 *     
 *     renderItem 函数须返回根据此 dataItem 绘制出的图形元素的定义信息，参见 renderItem.return。
 *     一般来说，renderItem 函数的主要逻辑，是将 dataItem 里的值映射到坐标系上的图形元素。这一般需要用到 renderItem.arguments.api 中的两个函数：
 *     
 *     api.value(...)，意思是取出 dataItem 中的数值。例如 api.value(0) 表示取出当前 dataItem 中第一个维度的数值。
 *     api.coord(...)，意思是进行坐标转换计算。例如 var point = api.coord([api.value(0), api.value(1)]) 表示 dataItem 中的数值转换成坐标系上的点。
 *     
 *     有时候还需要用到 api.size(...) 函数，表示得到坐标系上一段数值范围对应的长度。
 *     返回值中样式的设置可以使用 api.style(...) 函数，他能得到 series.itemStyle 中定义的样式信息，以及视觉映射的样式信息。也可以用这种方式覆盖这些样式信息：api.style({fill: green, stroke: yellow})。
 *
 * {_more_}
 */
class Series extends Property {}