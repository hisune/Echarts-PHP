<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\SingleAxis;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    
 *     
 *     Set this to false to prevent the splitLine from showing.
 *     value type axes are shown by default, while category type axes are hidden.
 *
 * @property int|callable $interval Default: 'auto'
 *    
 *     
 *     
 *     
 *     Interval of Axis splitLine, which is available in category axis.  is set to be the same as axisLabel.interval by default.
 *     It uses a strategy that labels do not overlap by default.
 *     You may set it to be 0 to display all labels compulsively.
 *     If it is set to be 1, it means that labels are shown once after one label. And if it is set to be 2, it means labels are shown once after two labels, and so on.
 *     On the other hand, you can control by callback function, whose format is shown below:
 *     (index:number, value: string) =&gt; boolean
 *     
 *     The first parameter is index of category, and the second parameter is the name of category. The return values decides whether to display label.
 *
 * @property SplitLine\LineStyle $lineStyle
 *    
 *
 * {_more_}
 */
class SplitLine extends Property {}