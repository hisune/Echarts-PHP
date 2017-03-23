<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class SingleAxis
{            
        
    /**
     * @var int 所有图形的 zlevel 值。
     * zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
     * zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
     */
    public $zlevel = 0;        
        
    /**
     * @var int 组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
     * z相比zlevel优先级更低，而且不会创建新的 Canvas。
     */
    public $z = 2;        
        
    /**
     * @var string|int grid 组件离容器左侧的距离。
     * left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
     * 如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
     */
    public $left = 'auto';        
        
    /**
     * @var string|int grid 组件离容器上侧的距离。
     * top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
     * 如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
     */
    public $top = '5%';        
        
    /**
     * @var string|int grid 组件离容器右侧的距离。
     * right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     */
    public $right = '5%';        
        
    /**
     * @var string|int grid 组件离容器下侧的距离。
     * bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
     */
    public $bottom = '5%';        
        
    /**
     * @var string|int grid 组件的宽度。默认自适应。
     */
    public $width = 'auto';        
        
    /**
     * @var string|int grid 组件的高度。默认自适应。
     */
    public $height = 'auto';        
        
    /**
     * @var string 轴的朝向，默认水平朝向，可以设置成 vertical 垂直朝向。
     */
    public $orient = 'horizontal';        
        
    /**
     * @var string 坐标轴类型。
     * 可选：
     * 
     * value
     *   数值轴，适用于连续数据。
     * 
     * category
     *   类目轴，适用于离散的类目数据，为该类型时必须通过 data 设置类目数据。
     * 
     * time
     *   时间轴，适用于连续的时序数据，与数值轴相比时间轴带有时间的格式化，在刻度计算上也有所不同，例如会根据跨度的范围来决定使用月，星期，日还是小时范围的刻度。
     * 
     * log
     *   对数轴。适用于对数数据。
     */
    public $type = 'value';        
        
    /**
     * @var string 坐标轴名称。
     */
    public $name;        
        
    /**
     * @var string 坐标轴名称显示位置。
     * 可选：
     * 
     * start
     * middle
     * end
     */
    public $nameLocation = 'end';        
        
    /**
     * @var SingleAxis\NameTextStyle 坐标轴名称的文字样式。
     */
    public $nameTextStyle;        
        
    /**
     * @var int 坐标轴名称与轴线之间的距离。
     */
    public $nameGap = 15;        
        
    /**
     * @var int 坐标轴名字旋转，角度值。
     */
    public $nameRotate;        
        
    /**
     * @var boolean 是否是反向坐标轴。ECharts 3 中新加。
     */
    public $inverse = false;        
        
    /**
     * @var boolean|array 坐标轴两边留白策略，类目轴和非类目轴的设置和表现不一样。
     * 类目轴中 boundaryGap 可以配置为 true 和 false。默认为 true，这时候刻度只是作为分隔线，标签和数据点都会在两个刻度之间的带(band)中间。
     * 非类目轴，包括时间，数值，对数轴，boundaryGap是一个两个值的数组，分别表示数据最小值和最大值的延伸范围，可以直接设置数值或者相对的百分比，在设置 min 和 max 后无效。
     * 示例：
     * boundaryGap: [20%, 20%]
     */
    public $boundaryGap;        
        
    /**
     * @var int|string 坐标轴刻度最小值。
     * 可以设置成特殊值 dataMin，此时取数据在该轴上的最小值作为最小刻度。
     * 不设置时会自动计算最小值保证坐标轴刻度的均匀分布。
     * 在类目轴中，也可以设置为类目的序数（如类目轴 data: [类A, 类B, 类C] 中，序数 2 表示 类C。也可以设置为负数，如 -3）。
     */
    public $min = 'auto';        
        
    /**
     * @var int|string 坐标轴刻度最大值。
     * 可以设置成特殊值 dataMax，此时取数据在该轴上的最大值作为最大刻度。
     * 不设置时会自动计算最大值保证坐标轴刻度的均匀分布。
     * 在类目轴中，也可以设置为类目的序数（如类目轴 data: [类A, 类B, 类C] 中，序数 2 表示 类C。也可以设置为负数，如 -3）。
     */
    public $max = 'auto';        
        
    /**
     * @var boolean 只在数值轴中（type: value）有效。
     * 是否是脱离 0 值比例。设置成 true 后坐标刻度不会强制包含零刻度。在双数值轴的散点图中比较有用。
     * 在设置 min 和 max 之后该配置项无效。
     */
    public $scale = false;        
        
    /**
     * @var int 坐标轴的分割段数，需要注意的是这个分割段数只是个预估值，最后实际显示的段数会在这个基础上根据分割后坐标轴刻度显示的易读程度作调整。
     * 在类目轴中无效。
     */
    public $splitNumber = 5;        
        
    /**
     * @var int 自动计算的坐标轴最小间隔大小。
     * 例如可以设置成1保证坐标轴分割刻度显示成整数。
     * {
     *     minInterval: 1
     * }
     * 
     * 只在数值轴中（type: value）有效。
     */
    public $minInterval = 0;        
        
    /**
     * @var int 强制设置坐标轴分割间隔。
     * 因为 splitNumber 是预估的值，实际根据策略计算出来的刻度可能无法达到想要的效果，这时候可以使用 interval 配合 min、max 强制设定刻度划分，一般不建议使用。
     * 无法在类目轴中使用。在时间轴（type: time）中需要传时间戳，在对数轴（type: log）中需要传指数值。
     */
    public $interval;        
        
    /**
     * @var int 对数轴的底数，只在对数轴中（type: log）有效。
     */
    public $logBase = 10;        
        
    /**
     * @var boolean 坐标轴是否是静态无法交互。
     */
    public $silent = false;        
        
    /**
     * @var boolean 坐标轴的标签是否响应和触发鼠标事件，默认不响应。
     * 事件参数如下：
     * {
     *     // 组件类型，xAxis, yAxis, radiusAxis, angleAxis
     *     // 对应组件类型都会有一个属性表示组件的 index，例如 xAxis 就是 xAxisIndex
     *     componentType: string,
     *     // 未格式化过的刻度值, 点击刻度标签有效
     *     value: ,
     *     // 坐标轴名称, 点击坐标轴名称有效
     *     name: 
     * }
     */
    public $triggerEvent = false;        
        
    /**
     * @var SingleAxis\AxisLine 坐标轴轴线相关设置。
     */
    public $axisLine;        
        
    /**
     * @var SingleAxis\AxisTick 坐标轴刻度相关设置。
     */
    public $axisTick;        
        
    /**
     * @var SingleAxis\AxisLabel 坐标轴刻度标签的相关设置。
     */
    public $axisLabel;        
        
    /**
     * @var SingleAxis\SplitLine 坐标轴在 grid 区域中的分隔线。
     */
    public $splitLine;        
        
    /**
     * @var SingleAxis\SplitArea 坐标轴在 grid 区域中的分隔区域，默认不显示。
     */
    public $splitArea;        
        
    /**
     * @var array 类目数据，在类目轴（type: category）中有效。
     * 示例：
     * // 所有类目名称列表
     * data: [周一, 周二, 周三, 周四, 周五, 周六, 周日]
     * // 每一项也可以是具体的配置项，此时取配置项中的 `value` 为类目名
     * data: [{
     *     value: 周一,
     *     // 突出周一
     *     textStyle: {
     *         fontSize: 20,
     *         color: red
     *     }
     * }, 周二, 周三, 周四, 周五, 周六, 周日]
     */
    public $data;

}