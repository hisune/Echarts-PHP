<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\Data;

use Hisune\EchartsPHP\Property;

/**
 * @property string|array|callable $position
 *    
 *     注意：series.data.tooltip 仅在 tooltip.trigger 为 item 时有效。
 *     
 *     提示框浮层的位置，默认不设置时位置会跟随鼠标的位置。
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
 *    
 *     注意：series.data.tooltip 仅在 tooltip.trigger 为 item 时有效。
 *     
 *     提示框浮层内容格式器，支持字符串模板和回调函数两种形式。
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
 *    
 *     注意：series.data.tooltip 仅在 tooltip.trigger 为 item 时有效。
 *     
 *     提示框浮层的背景颜色。
 *
 * @property string $borderColor Default: '#333'
 *    
 *     注意：series.data.tooltip 仅在 tooltip.trigger 为 item 时有效。
 *     
 *     提示框浮层的边框颜色。
 *
 * @property int $borderWidth Default: 0
 *    
 *     注意：series.data.tooltip 仅在 tooltip.trigger 为 item 时有效。
 *     
 *     提示框浮层的边框宽。
 *
 * @property int $padding Default: 5
 *    
 *     注意：series.data.tooltip 仅在 tooltip.trigger 为 item 时有效。
 *     
 *     提示框浮层内边距，单位px，默认各方向内边距为5，接受数组分别设定上右下左边距。
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
 *    
 *     注意：series.data.tooltip 仅在 tooltip.trigger 为 item 时有效。
 *     
 *     提示框浮层的文本样式。
 *
 * @property string $extraCssText
 *    
 *     注意：series.data.tooltip 仅在 tooltip.trigger 为 item 时有效。
 *     
 *     额外附加到浮层的 css 样式。如下为浮层添加阴影的示例：
 *     extraCssText: box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
 *
 * {_more_}
 */
class Tooltip extends Property {}