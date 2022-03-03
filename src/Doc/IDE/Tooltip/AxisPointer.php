<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Tooltip;

use Hisune\EchartsPHP\Property;

/**
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
 *     cross crosshair indicator, which is actually the shortcut of enable two axisPointers of two orthometric axes.
 *
 * @property string $axis Default: 'auto'
 *    The coordinate axis, which could be x, y, radius, or angle. By default, each coordinate system will automatically chose the axes whose will display its axisPointer (category axis or time axis is used by default).
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
 * @property AxisPointer\CrossStyle $crossStyle
 *    It is valid when axisPointer.type is cross.
 *
 * @property boolean $animation Default: true
 *    
 *     
 *     Whether to enable animation.
 *
 * @property int $animationThreshold Default: 2000
 *    Whether to set graphic number threshold to animation. Animation will be disabled when graphic number is larger than threshold.
 *
 * @property int|callable $animationDuration Default: 1000
 *    
 *     
 *     Duration of the first animation, which supports callback function for different data to have different animation effect:
 *     animationDuration: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasing Default: 'cubicOut'
 *    
 *     
 *     Easing method used for the first animation. Varied easing effects can be found at easing effect example.
 *
 * @property int|callable $animationDelay Default: 0
 *    Delay before updating the first animation, which supports callback function for different data to have different animation effect.
 *     For example:
 *     animationDelay: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *     
 *     See this example for more information.
 *
 * @property int|callable $animationDurationUpdate Default: 200
 *    
 *     
 *     Time for animation to complete, which supports callback function for different data to have different animation effect:
 *     animationDurationUpdate: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasingUpdate Default: 'exponentialOut'
 *    
 *     
 *     Easing method used for animation.
 *
 * @property int|callable $animationDelayUpdate Default: 0
 *    Delay before updating animation, which supports callback function for different data to have different animation effects.
 *     For example:
 *     animationDelayUpdate: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *     
 *     See this example for more information.
 *
 * {_more_}
 */
class AxisPointer extends Property {}