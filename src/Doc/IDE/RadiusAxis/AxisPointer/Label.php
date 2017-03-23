<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\RadiusAxis\AxisPointer;

class Label
{            
        
    /**
     * @var boolean Whether show label. Label will not show by default. But if tooltip.axisPointer.type is set as  cross, label will be displayed automatically.
     */
    public $show = false;        
        
    /**
     * @var int|string The precision of value in label. It is auto determined by default. You can also set it as 2, which indicates that two decimal fractions are reserved.
     */
    public $precision = 'auto';        
        
    /**
     * @var string|callable The formatter of label.
     * If set as string, for example it can be: formatter: some text {value} some text, where {value} will be replaced by axis value automatically.
     * If set as function:
     * Parameters:
     * {Object} params: Including fields as follows:
     * {Object} params.value: current value of this axis. If axis.type is category, it is one of the value in axis.data. If axis.type is time, it is a timestamp.
     * {Array.&lt;Object&gt;} params.seriesData: An array, containing info of nearest points. Each item is:
     * {
     *     componentType: series,
     *     // Series type
     *     seriesType: string,
     *     // Series index in option.series
     *     seriesIndex: number,
     *     // Series name
     *     seriesName: string,
     *     // Data name, or category name
     *     name: string,
     *     // Data index in input data array
     *     dataIndex: number,
     *     // Original data as input
     *     data: Object,
     *     // Value of data
     *     value: number|Array,
     *     // Color of data
     *     color: string,
     * 
     * }
     * 
     * Each item also includes axis infomation:
     * {
     *     axisDim: x, // x, y, angle, radius, single
     *     axisId: xxx,
     *     axisName: xxx,
     *     axisIndex: 3,
     *     axisValue: 121, // The current value of axisPointer
     *     axisValueLabel: text of value
     * }
     * 
     * Return:
     * The string to be displayed.
     * For example:
     * formatter: function (params) {
     *     // If axis.type is time
     *     return some text + echarts.format.formatTime(params.value);
     * }
     */
    public $formatter;        
        
    /**
     * @var boolean Distance between label and axis.
     */
    public $margin = '3';        
        
    /**
     * @var Label\TextStyle 
     */
    public $textStyle;        
        
    /**
     * @var string|array axisPointer space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
     * Examples: 
     * // Set padding to be 5
     * padding: 5
     * // Set the top and bottom paddings to be 5, and left and right paddings to be 10
     * padding: [5, 10]
     * // Set each of the four paddings seperately
     * padding: [
     *     5,  // up
     *     10, // right
     *     5,  // down
     *     10, // left
     * ]
     */
    public $padding = '[5, 7, 5, 7]';        
        
    /**
     * @var string Background color of label, the same as axis.axisLine.lineStyle.color by default.
     */
    public $backgroundColor = 'auto';        
        
    /**
     * @var string Border color of label.
     */
    public $borderColor;        
        
    /**
     * @var string Border width of label.
     */
    public $borderWidth = '0';        
        
    /**
     * @var int Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
     * For example:
     * {
     *     shadowColor: rgba(0, 0, 0, 0.5),
     *     shadowBlur: 10
     * }
     */
    public $shadowBlur = 3;        
        
    /**
     * @var string Shadow color. Support same format as color.
     */
    public $shadowColor = '#aaa';        
        
    /**
     * @var int Offset distance on the horizontal direction of shadow.
     */
    public $shadowOffsetX = 0;        
        
    /**
     * @var int Offset distance on the vertical direction of shadow.
     */
    public $shadowOffsetY = 0;

}