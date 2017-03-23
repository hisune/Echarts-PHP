<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class AxisPointer
{            
        
    /**
     * @var boolean axisPointer will not be displayed by default. But iftooltip.trigger is set as axis or tooltip.axisPointer.type is set as  cross, axisPointer will be displayed automatically. Each coordinate system will automatically chose the axes whose will display its axisPointer. tooltip.axisPointer.axis can be used to change the choice.
     */
    public $show = false;        
        
    /**
     * @var string Indicator type.
     * Options:
     * 
     * line line indicator
     * 
     * shadow shadow crosshair indicator
     * 
     * cross crosshair indicator, which is actually the shortcut of enable two axisPointers of two orthometric axes.
     */
    public $type = 'line';        
        
    /**
     * @var boolean Whether snap to point automatically. The default value is auto determined.
     * This feature usually makes sense in value axis and time axis, where tiny points can be seeked automatically.
     */
    public $snap;        
        
    /**
     * @var int z value, which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
     */
    public $z;        
        
    /**
     * @var AxisPointer\Label label of axisPointer
     */
    public $label;        
        
    /**
     * @var AxisPointer\LineStyle It is valid when axisPointer.type is line.
     */
    public $lineStyle;        
        
    /**
     * @var AxisPointer\ShadowStyle It is valid when axisPointer.type is shadow.
     */
    public $shadowStyle;        
        
    /**
     * @var array axisPointers can be linked to each other. The term link represents that axes are synchronized and move together. Axes are linked according to the value of axisPointer.
     * See sampleA and sampleB。
     * link is an array, where each item represents a link group. Axes will be linked when they are refered in the same link group. For example:
     * link: [
     *     {
     *         // All axes with xAxisIndex 0, 3, 4 and yAxisName sameName will be linked.
     *         xAxisIndex: [0, 3, 4],
     *         yAxisName: someName
     *     },
     *     {
     *         // All axes with xAxisId aa, cc and all angleAxis will be linked.
     *         xAxisId: [aa, cc],
     *         angleAxis: all
     *     },
     *     ...
     * ]
     * 
     * As illustrated above, axes can be refered in these approaches in a link group:
     * {
     *     // some represent the dimension name of a axis, namely, x, y, radius, angle, single
     *     someAxisIndex: [...], // can be an array or a value or all
     *     someAxisName: [...],  // can be an array or a value or all
     *     someAxisId: [...],    // can be an array or a value or all
     * }
     * 
     * 
     * 
     * How to link axes with different axis.type?
     * For example, the type of axisA is category, and the type of axisB type is time, we can write conversion function (mapper) in link group to convert values from an axie to another axis. For example:
     * link: [{
     *     xAxisIndex: [0, 1],
     *     yAxisName: [yy],
     *     mapper: function (sourceVal, sourceAxisInfo, targetAxisInfo) {
     *         if (sourceAxisInfo.axisName === yy) {
     *             // from timestamp to 2012-02-05
     *             return echarts.format.formatTime(yyyy-MM-dd, sourceVal);
     *         }
     *         else if (targetAxisInfo.axisName === yy) {
     *             // from 2012-02-05 to date
     *             return echarts.number.parseDate(dates[sourceVal]);
     *         }
     *         else {
     *             return sourceVal;
     *         }
     *     }
     * }]
     * 
     * Input parameters of mapper:
     * {number} sourceVal
     * {Object} sourceAxisInfo Including {axisDim, axisId, axisName, axisIndex, ...}
     * {Object} targetAxisInfo Including {axisDim, axisId, axisName, axisIndex, ...}
     * Return of mapper:
     * {number} The result of conversion.
     */
    public $link;        
        
    /**
     * @var string Conditions to trigger tooltip. Options:
     * 
     * mousemove
     *   Trigger when mouse moves.
     * 
     * click
     *   Trigger when mouse clicks.
     * 
     * mousemove|click
     *   Trigger when mouse clicks and moves.
     * 
     * none
     *   Do not triggered by mousemove and click
     */
    public $triggerOn = 'mousemove|click';

}