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
 * @property boolean $show Default: false
 *    
 *     
 *     axisPointer will not be displayed by default. But if tooltip.trigger is set as axis or tooltip.axisPointer.type is set as  cross, axisPointer will be displayed automatically. Each coordinate system will automatically chose the axes whose will display its axisPointer. tooltip.axisPointer.axis can be used to change the choice.
 *
 * @property string $type Default: 'line'
 *    
 *     
 *     Indicator type.
 *     Options:
 *     
 *     line line indicator.
 *     
 *     shadow shadow crosshair indicator.
 *     
 *     none no indicator displayed.
 *
 * @property boolean $snap
 *    Whether snap to point automatically. The default value is auto determined.
 *     This feature usually makes sense in value axis and time axis, where tiny points can be seeked automatically.
 *
 * @property int $z
 *    z value, which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
 *
 * @property AxisPointer\Label $label
 *    label of axisPointer
 *
 * @property AxisPointer\LineStyle $lineStyle
 *    It is valid when axisPointer.type is line.
 *
 * @property AxisPointer\ShadowStyle $shadowStyle
 *    It is valid when axisPointer.type is shadow.
 *
 * @property boolean $triggerTooltip Default: true
 *    
 *     
 *     Whether to trigger tooltip.
 *
 * @property int $value
 *    current value. When using axisPointer.handle, value can be set to define the initail position of axisPointer.
 *
 * @property boolean $status
 *    
 *     
 *     Current status, can be show 和 hide.
 *
 * @property AxisPointer\Handle $handle
 *    A button used to drag axisPointer. This feature is applicable in touch device. See example.
 *
 * @property array $link
 *    axisPointers can be linked to each other. The term link represents that axes are synchronized and move together. Axes are linked according to the value of axisPointer.
 *     See sampleA and sampleB.
 *     link is an array, where each item represents a link group. Axes will be linked when they are refered in the same link group. For example:
 *     link: [
 *         {
 *             // All axes with xAxisIndex 0, 3, 4 and yAxisName sameName will be linked.
 *             xAxisIndex: [0, 3, 4],
 *             yAxisName: someName
 *         },
 *         {
 *             // All axes with xAxisId aa, cc and all angleAxis will be linked.
 *             xAxisId: [aa, cc],
 *             angleAxis: all
 *         },
 *         ...
 *     ]
 *     
 *     As illustrated above, axes can be refered in these approaches in a link group:
 *     {
 *         // some represent the dimension name of a axis, namely, x, y, radius, angle, single
 *         someAxisIndex: [...], // can be an array or a value or all
 *         someAxisName: [...],  // can be an array or a value or all
 *         someAxisId: [...],    // can be an array or a value or all
 *     }
 *     
 *     
 *     
 *     How to link axes with different axis.type?
 *     For example, the type of axisA is category, and the type of axisB type is time, we can write conversion function (mapper) in link group to convert values from an axis to another axis. For example:
 *     link: [{
 *         xAxisIndex: [0, 1],
 *         yAxisName: [yy],
 *         mapper: function (sourceVal, sourceAxisInfo, targetAxisInfo) {
 *             if (sourceAxisInfo.axisName === yy) {
 *                 // from timestamp to 2012-02-05
 *                 return echarts.format.formatTime(yyyy-MM-dd, sourceVal);
 *             }
 *             else if (targetAxisInfo.axisName === yy) {
 *                 // from 2012-02-05 to date
 *                 return echarts.number.parseDate(dates[sourceVal]);
 *             }
 *             else {
 *                 return sourceVal;
 *             }
 *         }
 *     }]
 *     
 *     Input parameters of mapper:
 *     {number} sourceVal
 *     {Object} sourceAxisInfo Including {axisDim, axisId, axisName, axisIndex, ...}
 *     {Object} targetAxisInfo Including {axisDim, axisId, axisName, axisIndex, ...}
 *     Return of mapper:
 *     {number} The result of conversion.
 *
 * @property string $triggerOn Default: 'mousemove|click'
 *    
 *     
 *     Conditions to trigger tooltip. Options:
 *     
 *     mousemove
 *       Trigger when mouse moves.
 *     
 *     click
 *       Trigger when mouse clicks.
 *     
 *     mousemove|click
 *       Trigger when mouse clicks and moves.
 *     
 *     none
 *       Do not triggered by mousemove and click
 *
 * {_more_}
 */
class AxisPointer extends Property {}