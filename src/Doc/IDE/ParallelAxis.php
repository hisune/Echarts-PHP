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
 * @property int $dim
 *    Dimension index of coordinate axis.
 *     For example, series-parallel.data is the following data:
 *     [
 *         [1,  55,  9,   56,  0.46,  18,  6,  good],
 *         [2,  25,  11,  21,  0.65,  34,  9,  excellent],
 *         [3,  56,  7,   63,  0.3,   14,  5,  good],
 *         [4,  33,  7,   29,  0.33,  16,  6,  excellent],
 *         { // Data item can also be an Object, so that perticular settings of its line can be set here.
 *             value: [5,  42,  24,  44,  0.76,  40,  16, excellent]
 *             lineStyle: {...},
 *         }
 *         ...
 *     ]
 *     
 *     In data above, each row is a data item, and each column represents a dimension. For example, the meanings of columns above are: data, AQI, PM2.5, PM10, carbon monoxide level, nitrogen dioxide level, and sulfur dioxide level.
 *     dim defines which dimension (which row) of data would map to this axis.
 *     Started from 0. For example, if the dim of coordinate axis is 1, it indicates that the second row of data would map to this axis.
 *
 * @property int $parallelIndex Default: 0
 *    It is used to define which coordinate the axis should map to.
 *     For example:
 *     myChart.setOption({
 *         parallel: [
 *             {...},                      // the first parallel coordinate
 *             {...}                       // the second parallel coordinate
 *         ],
 *         parallelAxis: [
 *             {parallelIndex: 1, ...},    // the first coordinate axis, mapping to the second parallel coordinate
 *             {parallelIndex: 0, ...},    //  the second coordinate axis, mapping to the first parallel coordinate
 *             {parallelIndex: 1, ...},    //  the third coordinate axis, mapping to the second parallel coordinate
 *             {parallelIndex: 0, ...}     //  the fourth coordinate axis, mapping to the first parallel coordinate
 *         ],
 *         ...
 *     });
 *     
 *     If there is only one parallel coordinate, you dont have to configure it, whose default value is 0.
 *
 * @property boolean $realtime Default: true
 *    
 *     
 *     Whether to refresh view when brush-selecting axis. If is set to be false, view is updated after brush-selecting action ends.
 *     When data amount is large, it is suggested to set to be false to avoid efficiency problems.
 *
 * @property ParallelAxis\AreaSelectStyle $areaSelectStyle
 *    Area selecting is available on axes. Here is some configurations.
 *
 * @property string $type Default: 'value'
 *    Type of axis.
 *     Option:
 *     
 *     value
 *       Numerical axis, suitable for continuous data.
 *     
 *     category
 *       Category axis, suitable for discrete category data. Category data can be auto retrieved from series.data or dataset.source, or can be specified via parallelAxis.data.
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
 * @property ParallelAxis\NameTextStyle $nameTextStyle
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
 * @property ParallelAxis\AxisLine $axisLine
 *    Settings related to axis line.
 *
 * @property ParallelAxis\AxisTick $axisTick
 *    Settings related to axis tick.
 *
 * @property ParallelAxis\MinorTick $minorTick
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
 * @property ParallelAxis\AxisLabel $axisLabel
 *    Settings related to axis label.
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
 * {_more_}
 */
class ParallelAxis extends Property {}