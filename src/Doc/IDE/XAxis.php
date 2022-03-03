<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $id
 *    Component ID, not specified by default. If specified, it can be used to refer the component in option or API.
 *
 * @property boolean $show Default: true
 *    
 *     
 *     Set this to false to prevent the axis from showing.
 *
 * @property int $gridIndex Default: 0
 *    The index of grid which the x axis belongs to. Defaults to be in the first grid.
 *
 * @property boolean $alignTicks Default: false
 *    alignTicks turned on to automatically align ticks when multiple numeric x axes. Only available for axes of type value and log.
 *
 * @property string $position
 *    
 *     
 *     The position of x axis.
 *     options:
 *     
 *     top
 *     bottom
 *     
 *     The first x axis in grid defaults to be on the bottom of the grid, and the second x axis is on the other side against the first x axis.
 *
 * @property int $offset Default: 0
 *    
 *     
 *     Offset of x axis relative to default position. Useful when multiple x axis has same position value.
 *
 * @property * $realtimeSort Default: ''
 *    realtimeSort is used to enable bar race if set to be true. It is only valid if the type of xAxis is value.
 *     It should be used along with other options to enable bar race. Please refer to bar race tutorial for more details.
 *
 * @property * $sortSeriesIndex Default: '0'
 *    The index of series used to sort in bar race. Since only one series is supported in bar race, sortSeriesIndex should always be 0. It is only valid if realtimeSort is true and type is value.
 *     It should be used along with other options to enable bar race. Please refer to bar race tutorial for more details.
 *
 * @property string $type Default: 'category'
 *    Type of axis.
 *     Option:
 *     
 *     value
 *       Numerical axis, suitable for continuous data.
 *     
 *     category
 *       Category axis, suitable for discrete category data. Category data can be auto retrieved from series.data or dataset.source, or can be specified via xAxis.data.
 *     
 *     time
 *       Time axis, suitable for continuous time series data. As compared to value axis, it has a better formatting for time and a different tick calculation method. For example, it decides to use month, week, day or hour for tick based on the range of span.
 *     
 *     log
 *       Log axis, suitable for log data.
 *
 * @property string $name
 *    
 *     
 *     Name of axis.
 *
 * @property string $nameLocation Default: 'end'
 *    
 *     
 *     Location of axis name.
 *     Options: 
 *     
 *     start
 *     middle or center
 *     end
 *
 * @property XAxis\NameTextStyle $nameTextStyle
 *    Text style of axis name.
 *
 * @property int $nameGap Default: 15
 *    
 *     
 *     Gap between axis name and axis line.
 *
 * @property int $nameRotate
 *    
 *     
 *     Rotation of axis name.
 *
 * @property boolean $inverse Default: false
 *    
 *     
 *     Set this to true to invert the axis.
 *     This is a new option available from Echarts 3 and newer.
 *
 * @property boolean|array $boundaryGap
 *    
 *     
 *     The boundary gap on both sides of a coordinate axis. The setting and behavior of category axes and non-category axes are different.
 *     The boundaryGap of category axis can be set to either true or false. Default value is set to be true, in which case axisTick is served only as a separation line, and labels and data appear only in the center part of two axis ticks, which is called band.
 *     For non-category axis, including time, numerical value, and log axes, boundaryGap is an array of two values, representing the spanning range between minimum and maximum value. The value can be set in numeric value or relative percentage, which becomes invalid after setting min and max.
 *     Example: 
 *     boundaryGap: [20%, 20%]
 *
 * @property int|string|callable $min
 *    
 *     
 *     The minimun value of axis.
 *     It can be set to a special value dataMin so that the minimum value on this axis is set to be the minimum label.
 *     It will be automatically computed to make sure axis tick is equally distributed when not set.
 *     In category axis, it can also be set as the ordinal number. For example, if a catergory axis has data: [categoryA, categoryB, categoryC], and the ordinal 2 represents categoryC. Moreover, it can be set as negative number, like -3.
 *     If min is specified as a function, it should return a min value, like:
 *     min: function (value) {
 *         return value.min - 20;
 *     }
 *     
 *     value is an object, containing the min value and max value of the data. This function should return the min value of axis, or return null/undefined to make echarts use the auto calculated min value (null/undefined return is only supported since v4.8.0).
 *
 * @property int|string|callable $max
 *    
 *     
 *     The maximum value of axis.
 *     It can be set to a special value dataMax so that the minimum value on this axis is set to be the maximum label.
 *     It will be automatically computed to make sure axis tick is equally distributed when not set.
 *     In category axis, it can also be set as the ordinal number. For example, if a catergory axis has data: [categoryA, categoryB, categoryC], and the ordinal 2 represents categoryC. Moreover, it can be set as negative number, like -3.
 *     If max is specified as a function, it should return a max value, like:
 *     max: function (value) {
 *         return value.max - 20;
 *     }
 *     
 *     value is an object, containing the min value and max value of the data. This function should return the max value of axis, or return null/undefined to make echarts use the auto calculated max value (null/undefined return is only supported since v4.8.0).
 *
 * @property boolean $scale Default: false
 *    
 *     
 *     It is available only in numerical axis, i.e., type: value.
 *     It specifies whether not to contain zero position of axis compulsively. When it is set to be true, the axis may not contain zero position, which is useful in the scatter chart for both value axes.
 *     This configuration item is unavailable when the min and max are set.
 *
 * @property int $splitNumber Default: 5
 *    
 *     
 *     Number of segments that the axis is split into. Note that this number serves only as a recommendation, and the true segments may be adjusted based on readability.
 *     This is unavailable for category axis.
 *
 * @property int $minInterval Default: 0
 *    
 *     
 *     Minimum gap between split lines.
 *     For example, it can be set to be 1 to make sure axis label is show as integer.
 *     {
 *         minInterval: 1
 *     }
 *     
 *     It is available only for axis of type value or time.
 *
 * @property int $maxInterval
 *    
 *     
 *     Maximum gap between split lines.
 *     For example, in time axis (type is time), it can be set to be 3600 * 24 * 1000 to make sure that the gap between axis labels is less than or equal to one day.
 *     {
 *         maxInterval: 3600 * 1000 * 24
 *     }
 *     
 *     It is available only for axis of type value or time.
 *
 * @property int $interval
 *    
 *     
 *     Compulsively set segmentation interval for axis.
 *     As splitNumber is a recommendation value, the calculated tick may not be the same as expected. In this case, interval should be used along with min and max to compulsively set tickings. But in most cases, we do not suggest using this, out automatic calculation is enough for most situations.
 *     This is unavailable for category axis. Timestamp should be passed for type: time axis. Logged value should be passed for type: log axis.
 *
 * @property int $logBase Default: 10
 *    
 *     
 *     Base of logarithm, which is valid only for numeric axes with type: log.
 *
 * @property boolean $silent Default: false
 *    Set this to true, to prevent interaction with the axis.
 *
 * @property boolean $triggerEvent Default: false
 *    Set this to true to enable triggering events.
 *     Parameters of the event include:
 *     {
 *         // Component type: xAxis, yAxis, radiusAxis, angleAxis
 *         // Each of which has an attribute for index, e.g., xAxisIndex for xAxis
 *         componentType: string,
 *         // Value on axis before being formatted.
 *         // Click on value label to trigger event.
 *         value: ,
 *         // Name of axis.
 *         // Click on laben name to trigger event.
 *         name: 
 *     }
 *
 * @property XAxis\AxisLine $axisLine
 *    Settings related to axis line.
 *
 * @property XAxis\AxisTick $axisTick
 *    Settings related to axis tick.
 *
 * @property XAxis\MinorTick $minorTick
 *    
 *     Since v4.6.0
 *     
 *     Settings related minor ticks.
 *     Note: minorTick is not available in the category type axis.
 *     Examples:
 *     1) Using minor ticks in function plotting.
 *     
 *     
 *     
 *     2) Using minor ticks in log axis.
 *
 * @property XAxis\AxisLabel $axisLabel
 *    Settings related to axis label.
 *
 * @property XAxis\SplitLine $splitLine
 *    Split line of axis in grid area.
 *
 * @property XAxis\MinorSplitLine $minorSplitLine
 *    
 *     Since v4.6.0
 *     
 *     Minor split lines of axis in the grid area。It will align to the minorTick
 *
 * @property XAxis\SplitArea $splitArea
 *    Split area of axis in grid area, not shown by default.
 *
 * @property array $data
 *    Category data, available in type: category axis.
 *     If type is not specified, but axis.data is specified, the type is auto set as category.
 *     If type is specified as category, but axis.data is not specified, axis.data will be auto collected from series.data. It brings convenience, but we should notice that axis.data provides then value range of the category axis. If  it is auto collected from series.data, Only the values appearing in series.data can be collected. For example, if series.data is empty, nothing will be collected.
 *     Example:
 *     // Name list of all categories
 *     data: [Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday]
 *     // Each item could also be a specific configuration item.
 *     // In this case, `value` is used as the category name.
 *     data: [{
 *         value: Monday,
 *         // Highlight Monday
 *         textStyle: {
 *             fontSize: 20,
 *             color: red
 *         }
 *     }, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday]
 *
 * @property XAxis\AxisPointer $axisPointer
 *    axisPointer settings on the axis.
 *
 * @property int $zlevel Default: 0
 *    zlevel value of all graphical elements in x axis.
 *     zlevel is used to make layers with Canvas. Graphical elements with different zlevel values will be placed in different Canvases, which is a common optimization technique. We can put those frequently changed elements (like those with animations) to a separate zlevel. Notice that too many Canvases will increase memory cost, and should be used carefully on mobile phones to avoid crash.
 *     Canvases with bigger zlevel will be placed on Canvases with smaller zlevel.
 *
 * @property int $z Default: 0
 *    z value of all graphical elements in x axis, which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
 *     z has a lower priority to zlevel, and will not create new Canvas.
 *
 * {_more_}
 */
class XAxis extends Property {}