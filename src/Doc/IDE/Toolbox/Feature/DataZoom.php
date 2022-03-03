<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    Whether to show the tool.
 *
 * @property DataZoom\Title $title
 *    Restored and zoomed title text.
 *
 * @property DataZoom\Icon $icon
 *    Zooming and restore icon path.
 *
 * @property DataZoom\IconStyle $iconStyle
 *    The style setting of data area zooming icon. Since icon label is displayed only when hovering on the icon, the label configuration options are available under emphasis.
 *
 * @property DataZoom\Emphasis $emphasis
 *    
 *
 * @property string $filterMode Default: 'filter'
 *    The same meaning as dataZoom.filterMode.
 *
 * @property int|array|boolean $xAxisIndex
 *    Defines which xAxis should be controlled. By default, it controls all x axes. If it is set to be false, then no x axis is controlled. If it is set to be then it controls axis with axisIndex of 3. If it is set to be [0, 3], it controls the x-axes with axisIndex of 0 and 3.
 *
 * @property int|array|boolean $yAxisIndex
 *    Defines which yAxis should be controlled. By default, it controls all y axes. If it is set to be false, then no y axis is controlled. If it is set to be then it controls axis with axisIndex of 3. If it is set to be [0, 3], it controls the x-axes with axisIndex of 0 and 3.
 *
 * @property DataZoom\BrushStyle $brushStyle
 *    Style of brush rectangle.
 *
 * {_more_}
 */
class DataZoom extends Property {}