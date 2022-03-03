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
 *     Whether to show the grid in rectangular coordinate.
 *
 * @property int $zlevel Default: 0
 *    zlevel value of all graphical elements in .
 *     zlevel is used to make layers with Canvas. Graphical elements with different zlevel values will be placed in different Canvases, which is a common optimization technique. We can put those frequently changed elements (like those with animations) to a separate zlevel. Notice that too many Canvases will increase memory cost, and should be used carefully on mobile phones to avoid crash.
 *     Canvases with bigger zlevel will be placed on Canvases with smaller zlevel.
 *
 * @property int $z Default: 2
 *    z value of all graphical elements in , which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
 *     z has a lower priority to zlevel, and will not create new Canvas.
 *
 * @property string|int $left Default: '10%'
 *    Distance between grid  component and the left side of the container.
 *     left value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be left, center, or right.
 *     If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
 *
 * @property string|int $top Default: 60
 *    Distance between grid  component and the top side of the container.
 *     top value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
 *     If the top value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
 *
 * @property string|int $right Default: '10%'
 *    Distance between grid  component and the right side of the container.
 *     right value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *
 * @property string|int $bottom Default: 60
 *    Distance between grid  component and the bottom side of the container.
 *     bottom value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *
 * @property string|int $width Default: 'auto'
 *    Width of grid  component. Adaptive by default.
 *
 * @property string|int $height Default: 'auto'
 *    Height of grid  component. Adaptive by default.
 *
 * @property boolean $containLabel Default: false
 *    
 *     
 *     Whether the grid region contains axis tick label of axis.
 *     
 *     When containLabel is false:
 *     grid.left grid.right grid.top grid.bottom grid.width grid.height decide the location and size of the rectangle that is made of by xAxis and yAxis.
 *     Setting to false will help when multiple grids need to be aligned at their axes.
 *     
 *     
 *     When containLabel is true:
 *     grid.left grid.right grid.top grid.bottom grid.width grid.height decide the location and size of the rectangle that contains the axes and the labels of the axes.
 *     Setting to true will help when the length of axis labels is dynamic and is hard to approximate. This will avoid labels from overflowing the container or overlapping other components.
 *
 * @property string $backgroundColor Default: 'transparent'
 *    
 *     
 *     Background color of grid, which is transparent by default.
 *     
 *     Color can be represented in RGB, for example rgb(128, 128, 128). RGBA can be used when you need alpha channel, for example rgba(128, 128, 128, 0.5). You may also use hexadecimal format, for example #ccc.
 *     
 *     Attention: Works only if show: true is set.
 *
 * @property string $borderColor Default: '#ccc'
 *    
 *     
 *     Border color of grid. Support the same color format as backgroundColor.
 *     Attention: Works only if show: true is set.
 *
 * @property int $borderWidth Default: 1
 *    
 *     
 *     Border width of grid.
 *     Attention: Works only if show: true is set.
 *
 * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *     
 *     Attention: This property works only if show: true is configured and backgroundColor is defined other than transparent.
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *     Attention: This property works only if show: true configured.
 *
 * @property int $shadowOffsetX Default: 0
 *    
 *     
 *     Offset distance on the horizontal direction of shadow.
 *     Attention: This property works only if show: true configured.
 *
 * @property int $shadowOffsetY Default: 0
 *    
 *     
 *     Offset distance on the vertical direction of shadow.
 *     Attention: This property works only if show: true configured.
 *
 * @property Grid\Tooltip $tooltip
 *    tooltip settings in the coordinate system component.
 *     General Introduction:
 *     tooltip can be configured on different places:
 *     
 *     Configured on global: tooltip
 *     
 *     Configured in a coordinate system: grid.tooltip, polar.tooltip, single.tooltip
 *     
 *     Configured in a series: series.tooltip
 *     
 *     Configured in each item of series.data: series.data.tooltip
 *
 * {_more_}
 */
class Grid extends Property {}