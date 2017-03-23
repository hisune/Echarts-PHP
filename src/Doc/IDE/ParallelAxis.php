<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class ParallelAxis
{            
        
    /**
     * @var int Dimension index of coordinate axis.
     * For example, series-parallel.data is the following data:
     * [
     *     [1,  55,  9,   56,  0.46,  18,  6,  good],
     *     [2,  25,  11,  21,  0.65,  34,  9,  excellent],
     *     [3,  56,  7,   63,  0.3,   14,  5,  good],
     *     [4,  33,  7,   29,  0.33,  16,  6,  excellent],
     *     { // Data item can also be an Object, so that perticular settings of its line can be set here.
     *         value: [5,  42,  24,  44,  0.76,  40,  16, excellent]
     *         lineStyle: {...},
     *     }
     *     ...
     * ]
     * 
     * In data above, each row is a data item, and each column represents a dimension. For example, the meanings of columns above are: data, AQI, PM2.5, PM10, carbon monoxide level, nitrogen dioxide level, and sulfur dioxide level.
     * dim defines which dimension (which row) of data would map to this axis.
     * Started from 0. For example, if the dim of coordinate axis is 1, it indicates that the second row of data would map to this axis.
     */
    public $dim;        
        
    /**
     * @var int It is used to define which coordinate the axis should map to.
     * For example:
     * myChart.setOption({
     *     parallel: [
     *         {...},                      // the first parallel coordinate
     *         {...}                       // the second parallel coordinate
     *     ],
     *     parallelAxis: [
     *         {parallelIndex: 1, ...},    // the first coordinate axis, mapping to the second parallel coordinate
     *         {parallelIndex: 0, ...},    //  the second coordinate axis, mapping to the first parallel coordinate
     *         {parallelIndex: 1, ...},    //  the third coordinate axis, mapping to the second parallel coordinate
     *         {parallelIndex: 0, ...}     //  the fourth coordinate axis, mapping to the first parallel coordinate
     *     ],
     *     ...
     * });
     * 
     * If there is only one parallel coordinate, you dont have to configure it, whose default value is 0.
     */
    public $parallelIndex = 0;        
        
    /**
     * @var boolean Whether to refresh view when brush-selecting axis. If is set to be false, view is updated after brush-selecting action ends.
     * When data amount is large, it is suggested to set to be false to avoid efficiency problems.
     */
    public $realtime = true;        
        
    /**
     * @var ParallelAxis\AreaSelectStyle Area selecting is available on axes. Here is some configurations.
     */
    public $areaSelectStyle;        
        
    /**
     * @var string Type of axis
     * Option:
     * 
     * value
     *   Numerical axis, suitable for continuous data.
     * 
     * category
     *   Category axis, suitable for discrete category data. Data should only be set via data for this type.
     * 
     * time
     *   Time axis, suitable for continuous time series data. As compared to value axis, it has a better formatting for time and a different tick calculation method. For example, it decides to use month, week, day or hour for tick based on the range of span.
     * 
     * log
     *   Log axis, suitable for log data.
     */
    public $type = 'value';        
        
    /**
     * @var string Name of axis.
     */
    public $name;        
        
    /**
     * @var string Location of axis name.
     * Options: 
     * 
     * start
     * middle
     * end
     */
    public $nameLocation = 'start';        
        
    /**
     * @var ParallelAxis\NameTextStyle Text style of axis name.
     */
    public $nameTextStyle;        
        
    /**
     * @var int Gap between axis name and axis line.
     */
    public $nameGap = 15;        
        
    /**
     * @var int Rotation of axis name.
     */
    public $nameRotate;        
        
    /**
     * @var boolean Whether axis is inversed. New option from ECharts 3.
     */
    public $inverse = false;        
        
    /**
     * @var boolean|array The boundary gap on both sides of a coordinate axis. The setting and behavior of category axes and non-category axes are different.
     * The boundaryGap of category axis can be set to either true or false. Default value is set to be true, in which case axisTick is served only as a separation line, and labels and data appear only in the center part of two axis ticks, which is called band.
     * For non-category axis, including time, numerical value, and log axes, boundaryGap is an array of two values, representing the spanning range between minimum and maximum value. The value can be set in numeric value or relative percentage, which becomes invalid after setting min and max.
     * Example: 
     * boundaryGap: [20%, 20%]
     */
    public $boundaryGap;        
        
    /**
     * @var int|string The minimun value of axis.
     * It can be set to a special value dataMin so that the minimum value on this axis is set to be the minimum label.
     * It will be automatically computed to make sure axis tick is equally distributed when not set.
     * In category axis, it can also be set as the ordinal number. For example, if a catergory axis has data: [categoryA, categoryB, categoryC], and the ordinal 2 represents categoryC. Moreover, it can be set as negative number, like -3.
     */
    public $min;        
        
    /**
     * @var int|string The maximum value of axis.
     * It can be set to a special value dataMax so that the minimum value on this axis is set to be the maximum label.
     * It will be automatically computed to make sure axis tick is equally distributed when not set.
     * In category axis, it can also be set as the ordinal number. For example, if a catergory axis has data: [categoryA, categoryB, categoryC], and the ordinal 2 represents categoryC. Moreover, it can be set as negative number, like -3.
     */
    public $max;        
        
    /**
     * @var boolean It is available only in numerical axis, i.e., type: value.
     * It specifies whether not to contain zero position of axis compulsively. When it is set to be true, the axis may not contain zero position, which is useful in the scatter chart for both value axes.
     * This configuration item is unavailable when the min and max are set.
     */
    public $scale = false;        
        
    /**
     * @var int Number of segments that the axis is split into. Note that this number serves only as a recommendation, and the true segments may be adjusted based on readability.
     * This is unavailable for category axis.
     */
    public $splitNumber = 5;        
        
    /**
     * @var int Minimum gap between split lines.
     * For example, it can be set to be 1 to make sure axis label is show as integer.
     * {
     *     minInterval: 1
     * }
     * 
     * It is available only for axis of type value.
     */
    public $minInterval = 0;        
        
    /**
     * @var int Compulsively set segmentation interval for axis.
     * As splitNumber is a recommendation value, the calculated tick may not be the same as expected. In this case, interval should be used along with min and max to compulsively set tickings. But in most cases, we do not suggest using this, out automatic calculation is enough for most situations.
     * This is unavailable for category axis. Timestamp should be passed for type: time axis. Logged value should be passed for type: log axis.
     */
    public $interval;        
        
    /**
     * @var int Base of logarithm, which is valid only for numeric axes with type: log.
     */
    public $logBase = 10;        
        
    /**
     * @var boolean True for axis that cannot be interacted with.
     */
    public $silent = false;        
        
    /**
     * @var boolean Whether the labels of axis triggers and reacts to mouse events.
     * Parameters of event includes:
     * {
     *     // Component type: xAxis, yAxis, radiusAxis, angleAxis
     *     // Each of which has an attribute for index, e.g., xAxisIndex for xAxis
     *     componentType: string,
     *     // Value on axis before being formatted.
     *     // Click on value label to trigger event.
     *     value: ,
     *     // Name of axis.
     *     // Click on laben name to trigger event.
     *     name: 
     * }
     */
    public $triggerEvent = false;        
        
    /**
     * @var ParallelAxis\AxisLine Settings related to axis line.
     */
    public $axisLine;        
        
    /**
     * @var ParallelAxis\AxisTick Settings related to axis tick.
     */
    public $axisTick;        
        
    /**
     * @var ParallelAxis\AxisLabel Settings related to axis label.
     */
    public $axisLabel;        
        
    /**
     * @var array Category data, available in type: category axis.
     * Example:
     * // Name list of all categories
     * data: [Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday]
     * // Each item could also be a specific configuration item.
     * // In this case, `value` is used as the category name.
     * data: [{
     *     value: Monday,
     *     // Highlight Monday
     *     textStyle: {
     *         fontSize: 20,
     *         color: red
     *     }
     * }, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday]
     */
    public $data;

}