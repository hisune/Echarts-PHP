<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\AngleAxis;

use Hisune\EchartsPHP\Property;

/**
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
 * {_more_}
 */
class AxisPointer extends Property {}