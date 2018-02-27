<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\SingleAxis;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示提示框组件，包括提示框浮层和 axisPointer。
 *
 * @property string $trigger Default: 'item'
 *    触发类型。
 *     可选：
 *     
 *     item
 *       数据项图形触发，主要在散点图，饼图等无类目轴的图表中使用。
 *     
 *     axis
 *       坐标轴触发，主要在柱状图，折线图等会使用类目轴的图表中使用。
 *       在 ECharts 2.x 中只支持类目轴上使用 axis trigger，在 ECharts 3 中支持在直角坐标系和极坐标系上的所有类型的轴。并且可以通过 axisPointer.axis 指定坐标轴。
 *     
 *     none
 *       什么都不触发。
 *
 * @property Tooltip\AxisPointer $axisPointer
 *    坐标轴指示器配置项。
 *     tooltip.axisPointer 是配置坐标轴指示器的快捷方式。实际上坐标轴指示器的全部功能，都可以通过轴上的 axisPointer 配置项完成（例如 xAxis.axisPointer 或 angleAxis.axisPointer）。但是使用 tooltip.axisPinter 在简单场景下会更方便一些。
 *     
 *     注意： tooltip.axisPointer 中诸配置项的优先级低于轴上的 axisPointer 的配置项。
 *     
 *     
 *     坐标轴指示器是指示坐标轴当前刻度的工具。
 *     如下例，鼠标悬浮到图上，可以出现标线和刻度文本。
 *     
 *     
 *     
 *     上例中，使用了 axisPointer.link 来关联不同的坐标系中的 axisPointer。
 *     坐标轴指示器也有适合触屏的交互方式，如下：
 *     
 *     
 *     
 *     坐标轴指示器在多轴的场景能起到辅助作用：
 *     
 *     
 *     
 *     
 *     
 *     
 *     
 *     
 *     
 *     注意：
 *     一般来说，axisPointer 的具体配置项会配置在各个轴中（如 xAxis.axisPointer）或者 tooltip 中（如 tooltip.axisPointer）。
 *     但是这几个选项只能配置在全局的 axisPointer 中：axisPointer.triggerOn、axisPointer.link。
 *     
 *     
 *     如何显示 axisPointer：
 *     直角坐标系 grid、极坐标系 polar、单轴坐标系 single 中的每个轴都自己的 axisPointer。
 *     他们的 axisPointer 默认不显示。有两种方法可以让他们显示：
 *     
 *     设置轴上的 axisPointer.show（例如 xAxis.axisPointer.show）为 true，则显示此轴的 axisPointer。
 *     
 *     设置 tooltip.trigger 设置为 axis 或者 tooltip.axisPointer.type 设置为 cross，则此时坐标系会自动选择显示哪个轴的 axisPointer，也可以使用 tooltip.axisPointer.axis 改变这种选择。注意，轴上如果设置了 axisPointer，会覆盖此设置。
 *     
 *     
 *     
 *     如何显示 axisPointer 的 label：
 *     axisPointer 的 label 默认不显示（也就是默认只显示指示线），除非：
 *     
 *     设置轴上的 axisPointer.label.show（例如 xAxis.axisPointer.label.show）为 true，则显示此轴的 axisPointer 的 label。
 *     
 *     设置 tooltip.axisPointer.type 为 cross 时会自动显示 axisPointer 的 label。
 *     
 *     
 *     
 *     关于触屏的 axisPointer 的设置
 *     设置轴上的 axisPointer.handle.show（例如 xAxis.axisPointer.handle.show 为 true 则会显示出此 axisPointer 的拖拽按钮。（polar 坐标系暂不支持此功能）。
 *     注意：
 *     如果发现此时 tooltip 效果不良好，可设置 tooltip.triggerOn 为 none（于是效果为：手指按住按钮则显示 tooltip，松开按钮则隐藏 tooltip），或者 tooltip.alwaysShowContent 为 true（效果为 tooltip 一直显示）。
 *     参见例子。
 *     
 *     自动吸附到数据（snap）
 *     对于数值轴、时间轴，如果开启了 snap，则 axisPointer 会自动吸附到最近的点上。
 *
 * @property string|array|callable $position
 *    提示框浮层的位置，默认不设置时位置会跟随鼠标的位置。
 *     可选：
 *     
 *     Array
 *       通过数组表示提示框浮层的位置，支持数字设置绝对位置，百分比设置相对位置。
 *       示例:
 *       // 绝对位置，相对于容器左侧 10px, 上侧 10 px
 *       position: [10, 10]
 *       // 相对位置，放置在容器正中间
 *       position: [50%, 50%]
 *     
 *     
 *     Function
 *       回调函数，格式如下
 *       (point: Array, params: Object|Array.&lt;Object&gt;, dom: HTMLDomElement, rect: Object, size: Object) =&gt; Array
 *     
 *       参数：
 *       point: 鼠标位置，如 [20, 40]。
 *       params: 同 formatter 的参数相同。
 *       dom: tooltip 的 dom 对象。
 *       rect: 只有鼠标在图形上时有效，是一个用x, y, width, height四个属性表达的图形包围盒。
 *       size: 包括 dom 的尺寸和 echarts 容器的当前尺寸，例如：{contentSize: [width, height], viewSize: [width, height]}。
 *       返回值：
 *       可以是一个表示 tooltip 位置的数组，数组值可以是绝对的像素值，也可以是相  百分比。
 *       也可以是一个对象，如：{left: 10, top: 30}，或者 {right: 20%, bottom: 40}。
 *       如下示例：
 *       position: function (point, params, dom, rect, size) {
 *           // 固定在顶部
 *           return [point[0], 10%];
 *       }
 *     
 *       或者：
 *       position: function (pos, params, dom, rect, size) {
 *           // 鼠标在左侧时 tooltip 显示到右侧，鼠标在右侧时 tooltip 显示到左侧。
 *           var obj = {top: 60};
 *           obj[[left, right][+(pos[0] &lt; size.viewSize[0] / 2)]] = 5;
 *           return obj;
 *       }
 *     
 *     
 *     
 *     
 *     inside
 *       鼠标所在图形的内部中心位置，只在 trigger 为item的时候有效。
 *     
 *     top
 *       鼠标所在图形上侧，只在 trigger 为item的时候有效。
 *     
 *     left
 *       鼠标所在图形左侧，只在 trigger 为item的时候有效。
 *     
 *     right
 *       鼠标所在图形右侧，只在 trigger 为item的时候有效。
 *     
 *     bottom
 *       鼠标所在图形底侧，只在 trigger 为item的时候有效。
 *
 * @property string|callable $formatter
 *    提示框浮层内容格式器，支持字符串模板和回调函数两种形式。
 *     1, 字符串模板
 *     模板变量有 {a}, {b}，{c}，{d}，{e}，分别表示系列名，数据名，数据值等。
 *     在 trigger 为 axis 的时候，会有多个系列的数据，此时可以通过 {a0}, {a1}, {a2} 这种后面加索引的方式表示系列的索引。
 *     不同图表类型下的 {a}，{b}，{c}，{d} 含义不一样。
 *     其中变量{a}, {b}, {c}, {d}在不同图表类型下代表数据含义为：
 *     
 *     折线（区域）图、柱状（条形）图、K线图 : {a}（系列名称），{b}（类目值），{c}（数值）, {d}（无）
 *     
 *     散点图（气泡）图 : {a}（系列名称），{b}（数据名称），{c}（数值数组）, {d}（无）
 *     
 *     地图 : {a}（系列名称），{b}（区域名称），{c}（合并数值）, {d}（无）
 *     
 *     饼图、仪表盘、漏斗图: {a}（系列名称），{b}（数据项名称），{c}（数值）, {d}（百分比）
 *     
 *     
 *     更多其它图表模板变量的含义可以见相应的图表的 label.formatter 配置项。
 *     示例：
 *     formatter: {b0}: {c0}&lt;br /&gt;{b1}: {c1}
 *     
 *     2, 回调函数
 *     回调函数格式：
 *     (params: Object|Array, ticket: string, callback: (ticket: string, html: string)) =&gt; string
 *     
 *     第一个参数 params 是 formatter 需要的数据集。格式如下：
 *     {
 *         componentType: series,
 *         // 系列类型
 *         seriesType: string,
 *         // 系列在传入的 option.series 中的 index
 *         seriesIndex: number,
 *         // 系列名称
 *         seriesName: string,
 *         // 数据名，类目名
 *         name: string,
 *         // 数据在传入的 data 数组中的 index
 *         dataIndex: number,
 *         // 传入的原始数据项
 *         data: Object,
 *         // 传入的数据值
 *         value: number|Array,
 *         // 数据图形的颜色
 *         color: string,
 *     
 *         // 饼图的百分比
 *         percent: number,
 *     
 *     }
 *     
 *     在 trigger 为 axis 的时候，或者 tooltip 被 axisPointer 触发的时候，params 是多个系列的数据数组。其中每项内容格式同上，并且，
 *     {
 *         componentType: series,
 *         // 系列类型
 *         seriesType: string,
 *         // 系列在传入的 option.series 中的 index
 *         seriesIndex: number,
 *         // 系列名称
 *         seriesName: string,
 *         // 数据名，类目名
 *         name: string,
 *         // 数据在传入的 data 数组中的 index
 *         dataIndex: number,
 *         // 传入的原始数据项
 *         data: Object,
 *         // 传入的数据值
 *         value: number|Array,
 *         // 数据图形的颜色
 *         color: string,
 *     
 *     }
 *     
 *     注： ECharts 2.x 使用数组表示各参数的方式不再支持。
 *     第二个参数 ticket 是异步回调标识，配合第三个参数 callback 使用。
 *     第三个参数 callback 是异步回调，在提示框浮层内容是异步获取的时候，可以通过 callback 传入上述的 ticket 和 html 更新提示框浮层内容。
 *     示例：
 *     formatter: function (params, ticket, callback) {
 *         $.get(detail?name= + params.name, function (content) {
 *             callback(ticket, toHTML(content));
 *         });
 *         return Loading;
 *     }
 *
 * @property string $backgroundColor Default: 'rgba(50,50,50,0.7)'
 *    提示框浮层的背景颜色。
 *
 * @property string $borderColor Default: '#333'
 *    提示框浮层的边框颜色。
 *
 * @property int $borderWidth Default: 0
 *    提示框浮层的边框宽。
 *
 * @property int $padding Default: 5
 *    提示框浮层内边距，单位px，默认各方向内边距为5，接受数组分别设定上右下左边距。
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
 * @property Tooltip\TextStyle $textStyle
 *    提示框浮层的文本样式。
 *
 * @property string $extraCssText
 *    额外附加到浮层的 css 样式。如下为浮层添加阴影的示例：
 *     extraCssText: box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
 *
 * {_more_}
 */
class Tooltip extends Property {}