<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\RadiusAxis;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    
 *     
 *     Set this to false to prevent the axis tick from showing.
 *
 * @property boolean $alignWithLabel Default: false
 *    
 *     
 *     Align axis tick with label, which is available only when boundaryGap is set to be true in category axis. See the following picture:
 *
 * @property int|callable $interval Default: 'auto'
 *    
 *     
 *     
 *     
 *     Interval of axisTick, which is available in category axis.  is set to be the same as axisLabel.interval by default.
 *     It uses a strategy that labels do not overlap by default.
 *     You may set it to be 0 to display all labels compulsively.
 *     If it is set to be 1, it means that labels are shown once after one label. And if it is set to be 2, it means labels are shown once after two labels, and so on.
 *     On the other hand, you can control by callback function, whose format is shown below:
 *     (index:number, value: string) =&gt; boolean
 *     
 *     The first parameter is index of category, and the second parameter is the name of category. The return values decides whether to display label.
 *
 * @property boolean $inside Default: false
 *    
 *     
 *     Set this to true so the axis labels face the inside direction.
 *
 * @property int $length Default: 5
 *    
 *     
 *     The length of the axis tick.
 *
 * @property AxisTick\LineStyle $lineStyle
 *    Line style of axis ticks.
 *
 * {_more_}
 */
class AxisTick extends Property {}