<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Tooltip
{            
        
    /**
     * @var boolean 是否显示提示框组件，包括提示框浮层和 axisPointer。
     */
    public $show = true;        
        
    /**
     * @var boolean 是否显示提示框浮层，默认显示。只需tooltip触发事件或显示axisPointer而不需要显示内容时可配置该项为false。
     */
    public $showContent = true;        
        
    /**
     * @var string 触发类型。
     * 可选：
     * 
     * item
     *   数据项图形触发，主要在散点图，饼图等无类目轴的图表中使用。
     * 
     * axis
     *   坐标轴触发，主要在柱状图，折线图等会使用类目轴的图表中使用。
     *   在 ECharts 2.x 中只支持类目轴上使用 axis trigger，在 ECharts 3 中支持在直角坐标系和极坐标系上的所有类型的轴。并且可以通过 axisPointer.axis 指定坐标轴。
     */
    public $trigger = 'item';        
        
    /**
     * @var string 提示框触发的条件，可选：
     * 
     * mousemove
     *   鼠标移动时触发。
     * 
     * click
     *   鼠标点击时触发。
     * 
     * none
     *   不触发，用户可以通过 action.tooltip.showTip 和 action.tooltip.hideTip 来手动触发和隐藏。
     * 
     * 
     * 该属性为 ECharts 3.0 中新加。
     */
    public $triggerOn = 'mousemove';        
        
    /**
     * @var boolean 是否永远显示提示框内容，默认情况下在移出可触发提示框区域后 一定时间 后隐藏，设置为 true 可以保证一直显示提示框内容。
     * 该属性为 ECharts 3.0 中新加。
     */
    public $alwaysShowContent = false;        
        
    /**
     * @var int 浮层显示的延迟，单位为 ms，默认没有延迟，也不建议设置。在 triggerOn 为 mousemove 时有效。
     */
    public $showDelay = 0;        
        
    /**
     * @var int 浮层隐藏的延迟，单位为 ms，在 alwaysShowContent 为 true 的时候无效。
     */
    public $hideDelay = 100;        
        
    /**
     * @var boolean 鼠标是否可进入提示框浮层中，默认为false，如需详情内交互，如添加链接，按钮，可设置为 true。
     */
    public $enterable = false;        
        
    /**
     * @var string|array|callable 提示框浮层的位置，默认不设置时位置会跟随鼠标的位置。
     * 可选：
     * 
     * Array
     *   通过数组表示提示框浮层的位置，支持数字设置绝对位置，百分比设置相对位置。
     *   示例:
     *   // 绝对位置，相对于容器左侧 10px, 上侧 10 px
     *   position: [10, 10]
     *   // 相对位置，放置在容器正中间
     *   position: [50%, 50%]
     * 
     * 
     * Function
     *   回调函数，格式如下
     *   (point: Array, params: Object|Array.&lt;Object&gt;, dom: HTMLDomElement, rect: Object) =&gt; Array
     * 
     *   第一个参数是鼠标位置，第二个参数同 formatter 的参数相同，第三个参数是 tooltip 的 dom 对象， 第四个参数只有鼠标在图形上时有效，是一个用x, y, width, height 四个属性表达的图形包围盒。返回值是一个表示 tooltip 位置的数组，数组值可以是绝对的像素值，也可以是相对的百分比。
     *   如下示例：
     *   position: function (point, params, dom) {
     *       // 固定在顶部
     *       return [point[0], 10%];
     *   }
     * 
     * 
     * inside
     *   鼠标所在图形的内部中心位置，只在 trigger 为item的时候有效。
     * 
     * top
     *   鼠标所在图形上侧，只在 trigger 为item的时候有效。
     * 
     * left
     *   鼠标所在图形左侧，只在 trigger 为item的时候有效。
     * 
     * right
     *   鼠标所在图形右侧，只在 trigger 为item的时候有效。
     * 
     * bottom
     *   鼠标所在图形底侧，只在 trigger 为item的时候有效。
     */
    public $position;        
        
    /**
     * @var boolean 是否将 tooltip 框限制在图表的区域内。
     * 当图表外层的 dom 被设置为 overflow: hidden，或者移动端窄屏，导致 tooltip 超出外界被截断时，此配置比较有用。
     */
    public $confine = false;        
        
    /**
     * @var int 提示框浮层的移动动画过渡时间，单位是 s，设置为 0 的时候会紧跟着鼠标移动。
     */
    public $transitionDuration = 0.4;        
        
    /**
     * @var string|callable 提示框浮层内容格式器，支持字符串模板和回调函数两种形式。
     * 
     * 字符串模板。
     *  模板变量有 {a}, {b}，{c}，{d}，{e}，分别表示系列名，数据名，数据值等。
     *  在 trigger 为 axis 的时候，会有多个系列的数据，此时可以通过 {a0}, {a1}, {a2} 这种后面加索引的方式表示系列的索引。
     *  不同图表类型下的 {a}，{b}，{c}，{d} 含义不一样。
     *  其中变量{a}, {b}, {c}, {d}在不同图表类型下代表数据含义为：
     * 
     * 折线（区域）图、柱状（条形）图、K线图 : {a}（系列名称），{b}（类目值），{c}（数值）, {d}（无）
     * 
     * 散点图（气泡）图 : {a}（系列名称），{b}（数据名称），{c}（数值数组）, {d}（无）
     * 
     * 地图 : {a}（系列名称），{b}（区域名称），{c}（合并数值）, {d}（无）
     * 
     * 饼图、仪表盘、漏斗图: {a}（系列名称），{b}（数据项名称），{c}（数值）, {d}（百分比）
     * 更多其它图表模板变量的含义可以见相应的图表的 label.normal.formatter 配置项。
     * 示例：
     * formatter: {b0}: {c0}&lt;br /&gt;{b1}: {c1}
     * 
     * 
     * 
     * 
     * 回调函数。
     *  回调函数格式：
     *  (params: Object|Array, ticket: string, callback: (ticket: string, html: string)) =&gt; string
     * 
     *  第一个参数 params 是 formatter 需要的数据集。格式如下：
     *  {
     *      componentType: series,
     *      // 系列类型
     *      seriesType: string,
     *      // 系列在传入的 option.series 中的 index
     *      seriesIndex: number,
     *      // 系列名称
     *      seriesName: string,
     *      // 数据名，类目名
     *      name: string,
     *      // 数据在传入的 data 数组中的 index
     *      dataIndex: number,
     *      // 传入的原始数据项
     *      data: Object,
     *      // 传入的数据值
     *      value: number|Array,
     *      // 数据图形的颜色
     *      color: string,
     * 
     *      // 饼图的百分比
     *      percent: number,
     * 
     *  }
     * 
     *  在 trigger 为 axis 的时候 params 是多个系列的数据数组。
     *  注： ECharts 2.x 使用数组表示各参数的方式不再支持。
     *  第二个参数 ticket 是异步回调标识，配合第三个参数 callback 使用。
     *  第三个参数 callback 是异步回调，在提示框浮层内容是异步获取的时候，可以通过 callback 传入上述的 ticket 和 html 更新提示框浮层内容。
     *  示例：
     *  formatter: function (params, ticket, callback) {
     *      $.get(detail?name= + params.name, function (content) {
     *          callback(ticket, toHTML(content));
     *      });
     *      return Loading;
     *  }
     */
    public $formatter;        
        
    /**
     * @var string 提示框浮层的背景颜色。
     */
    public $backgroundColor = 'rgba(50,50,50,0.7)';        
        
    /**
     * @var string 提示框浮层的边框颜色。
     */
    public $borderColor = '#333';        
        
    /**
     * @var int 提示框浮层的边框宽。
     */
    public $borderWidth = 0;        
        
    /**
     * @var int 提示框浮层内边距，单位px，默认各方向内边距为5，接受数组分别设定上右下左边距。
     * 使用示例：
     * // 设置内边距为 5
     * padding: 5
     * // 设置上下的内边距为 5，左右的内边距为 10
     * padding: [5, 10]
     * // 分别设置四个方向的内边距
     * padding: [
     *     5,  // 上
     *     10, // 右
     *     5,  // 下
     *     10, // 左
     * ]
     */
    public $padding = 5;        
        
    /**
     * @var Tooltip\TextStyle 提示框浮层的文本样式。
     */
    public $textStyle;        
        
    /**
     * @var string 额外附加到浮层的 css 样式。如下为浮层添加阴影的示例：
     * extraCssText: box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
     */
    public $extraCssText;        
        
    /**
     * @var Tooltip\AxisPointer 坐标轴指示器配置项，在 trigger 为 axis 时有效。
     */
    public $axisPointer;        
        
    /**
     * @var array 系列中的数据内容数组。数组项通常为具体的数据项。
     * 通常来说，数据用一个二维数组表示。如下，每一列被称为一个『维度』。
     * series: [{
     *     data: [
     *         // 维度X   维度Y   其他维度 ...
     *         [  3.4,    4.5,   15,   43],
     *         [  4.2,    2.3,   20,   91],
     *         [  10.8,   9.5,   30,   18],
     *         [  7.2,    8.8,   18,   57]
     *     ]
     * }]
     * 
     * 
     * 在 直角坐标系 (grid) 中『维度X』和『维度Y』会默认对应于 xAxis 和 yAxis。
     * 在 极坐标系 (polar) 中『维度X』和『维度Y』会默认对应于 radiusAxis 和 angleAxis。
     * 后面的其他维度是可选的，可以在别处被使用，例如：
     * 在 visualMap 中可以将一个或多个维度映射到颜色，大小等多个图形属性上。
     * 在 series.symbolSize 中可以使用回调函数，基于某个维度得到 symbolSize 值。
     * 使用 tooltip.formatter 或 series.label.normal.formatter 可以把其他维度的值展示出来。
     * 
     * 
     * 
     * 特别地，当只有一个轴为类目轴（axis.type 为 category）的时候，数据可以简化用一个一维数组表示。例如：
     * xAxis: {
     *     data: [a, b, m, n]
     * },
     * series: [{
     *     // 与 xAxis.data 一一对应。
     *     data: [23,  44,  55,  19]
     *     // 它其实是下面这种形式的简化：
     *     // data: [[0, 23], [1, 44], [2, 55], [3, 19]]
     * }]
     * 
     * 
     * 『值』与 轴类型 的关系：
     * 
     * 当某维度对应于数值轴（axis.type 为 value 或者 log）的时候：
     *   其值可以为 number（例如 12）。（也可以容忍 string 形式的 number，例如 12）
     * 
     * 当某维度对应于类目轴（axis.type 为 category）的时候：
     *   其值须为类目的『序数』（从 0 开始）或者类目的『字符串值』。例如：
     *   xAxis: {
     *       type: category,
     *       data: [星期一, 星期二, 星期三, 星期四]
     *   },
     *   yAxis: {
     *       type: category,
     *       data: [a, b, m, n, p, q]
     *   },
     *   series: [{
     *       data: [
     *           // xAxis    yAxis
     *           [  0,        0,    2  ], // 意思是此点位于 xAxis: 星期一, yAxis: a。
     *           [  星期四,  2,    1  ], // 意思是此点位于 xAxis: 星期四, yAxis: m。
     *           [  2,       p,   2  ], // 意思是此点位于 xAxis: 星期三, yAxis: p。
     *           [  3,        3,    5  ]
     *       ]
     *   }]
     * 
     *   双类目轴的示例可以参考 Github Punchcard 示例。
     * 
     * 当某维度对应于时间轴（type 为 time）的时候：
     *   值可以为一个时间戳（如 1484141700832），或者一个 Date 实例，或者字符串形式的值（如 2012-12-12，2012/12/12）。
     * 
     * 
     * 
     * 当需要对个别数据进行个性化定义时：
     * 数组项可用对象，其中的 value 像表示具体的数值，如：
     * [
     *     12,
     *     34,
     *     {
     *         value : 56,
     *         //自定义标签样式，仅对该数据项有效
     *         label: {},
     *         //自定义特殊 itemStyle，仅对该数据项有效
     *         itemStyle:{}
     *     },
     *     10
     * ]
     * // 或
     * [
     *     [12, 33],
     *     [34, 313],
     *     {
     *         value: [56, 44],
     *         label: {},
     *         itemStyle:{}
     *     },
     *     [10, 33]
     * ]
     * 
     * 
     * 空值：
     * 当某数据不存在时（ps：不存在不代表值为 0），可以用 - 或者 null 或者 undefined 或者 NaN 表示。
     * 例如，无数据在折线图中可表现为该点是断开的，在其它图中可表示为图形不存在。
     */
    public $data;

}