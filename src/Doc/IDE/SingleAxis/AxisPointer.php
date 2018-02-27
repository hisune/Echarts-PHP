<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\SingleAxis;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    默认不显示。但是如果 tooltip.trigger 设置为 axis 或者 tooltip.axisPointer.type 设置为 cross，则自动显示 axisPointer。坐标系会自动选择显示显示哪个轴的 axisPointer，也可以使用 tooltip.axisPointer.axis 改变这种选择。
 *
 * @property string $type Default: 'line'
 *    指示器类型。
 *     可选
 *     
 *     line 直线指示器
 *     
 *     shadow 阴影指示器
 *
 * @property boolean $snap
 *    坐标轴指示器是否自动吸附到点上。默认自动判断。
 *     这个功能在数值轴和时间轴上比较有意义，可以自动寻找细小的数值点。
 *
 * @property int $z
 *    坐标轴指示器的 z 值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *
 * @property AxisPointer\Label $label
 *    坐标轴指示器的文本标签。
 *
 * @property AxisPointer\LineStyle $lineStyle
 *    axisPointer.type 为 line 时有效。
 *
 * @property AxisPointer\ShadowStyle $shadowStyle
 *    axisPointer.type 为 shadow 时有效。
 *
 * @property boolean $triggerTooltip Default: true
 *    是否触发 tooltip。如果不想触发 tooltip 可以关掉。
 *
 * @property int $value
 *    当前的 value。在使用 axisPointer.handle 时，可以设置此值进行初始值设定，从而决定 axisPointer 的初始位置。
 *
 * @property boolean $status
 *    当前的状态，可取值为 show 和 hide。
 *
 * @property AxisPointer\Handle $handle
 *    拖拽手柄，适用于触屏的环境。参见 例子。
 *
 * {_more_}
 */
class AxisPointer extends Property {}