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
 * @property int $zlevel Default: 0
 *    zlevel value of all graphical elements in .
 *     zlevel is used to make layers with Canvas. Graphical elements with different zlevel values will be placed in different Canvases, which is a common optimization technique. We can put those frequently changed elements (like those with animations) to a separate zlevel. Notice that too many Canvases will increase memory cost, and should be used carefully on mobile phones to avoid crash.
 *     Canvases with bigger zlevel will be placed on Canvases with smaller zlevel.
 *
 * @property int $z Default: 2
 *    z value of all graphical elements in , which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
 *     z has a lower priority to zlevel, and will not create new Canvas.
 *
 * @property string|int $left Default: 80
 *    Distance between parallel  component and the left side of the container.
 *     left value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be left, center, or right.
 *     If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
 *
 * @property string|int $top Default: 60
 *    Distance between parallel  component and the top side of the container.
 *     top value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
 *     If the top value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
 *
 * @property string|int $right Default: 80
 *    Distance between parallel  component and the right side of the container.
 *     right value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *
 * @property string|int $bottom Default: 60
 *    Distance between parallel  component and the bottom side of the container.
 *     bottom value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *
 * @property string|int $width Default: 'auto'
 *    Width of parallel  component. Adaptive by default.
 *
 * @property string|int $height Default: 'auto'
 *    Height of parallel  component. Adaptive by default.
 *
 * @property string $layout Default: 'horizontal'
 *    
 *     
 *     Layout modes, whose optional values are:
 *     
 *     horizontal: place each axis horizontally.
 *     
 *     vertical: place each axis vertically.
 *
 * @property boolean $axisExpandable Default: false
 *    
 *     
 *     
 *     
 *     When dimension number is extremely large, say, more than 50 dimensions, there will be more than 50 axes, which may hardly display in a page.
 *     In this case, you may use parallel.axisExpandable to improve the display. See this example:
 *     
 *     
 *     
 *     
 *     
 *     
 *     
 *     Whether to enable toggling axis on clicking.
 *
 * @property int $axisExpandCenter
 *    
 *     
 *     Index of the axis which is used as the center of expanding initially. It doesnt have a default value, and needs to be assigned manually.
 *     Please refer to parallel.axisExpandable for more information.
 *
 * @property int $axisExpandCount Default: 0
 *    
 *     
 *     Defines how many axes are at expanding state initially. Wed suggest you assign this value manually according to dimensions.
 *     Please refer to parallel.axisExpandCenter and parallel.axisExpandable.
 *
 * @property int $axisExpandWidth Default: 50
 *    
 *     
 *     Distance between two axes when at expanding state, in pixels.
 *     Please refer to parallel.axisExpandable for more information.
 *
 * @property string $axisExpandTriggerOn Default: 'click'
 *    
 *     
 *     Optional values:
 *     
 *     click: Trigger expanding when mouse clicking.
 *     mousemove: Trigger expanding when mouse hovering.
 *
 * @property Parallel\ParallelAxisDefault $parallelAxisDefault
 *    When configuring multiple parallelAxis, there might be some common attributes in each axis configuration. To avoid writing them repeatly, they can be put under parallel.parallelAxisDefault. Before initializing axis, configurations in parallel.parallelAxisDefault will be merged into parallelAxis to generate the final axis configuration.
 *     See the sample.
 *
 * {_more_}
 */
class Parallel extends Property {}