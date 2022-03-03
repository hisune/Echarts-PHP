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
 *    Distance between calendar component and the left side of the container.
 *     left value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be left, center, or right.
 *     If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
 *
 * @property string|int $top Default: 60
 *    Distance between calendar component and the top side of the container.
 *     top value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
 *     If the top value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
 *
 * @property string|int $right Default: 'auto'
 *    Distance between calendar component and the right side of the container.
 *     right value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string|int $bottom Default: 'auto'
 *    Distance between calendar component and the bottom side of the container.
 *     bottom value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property int|string $width Default: 'auto'
 *    
 *     
 *     The height of calendar coordinates.
 *     Note: cellSize is 20 by default. If width is set,
 *       cellSize[0] will be forced to auto;
 *
 * @property int|string $height Default: 'auto'
 *    
 *     
 *     The height of calendar coordinates.
 *     Note: cellSize is 20 by default. If height is set,
 *       cellSize[1] will be forced to auto;
 *
 * @property int|string|array $range
 *    Required, range of Calendar coordinates, support multiple formats.
 *     Examples:
 *     
 *     // one year
 *     range: 2017
 *     
 *     // one month
 *     range: 2017-02
 *     
 *     //  a range
 *     range: [2017-01-02, 2017-02-23]
 *     
 *     // note: they will be identified as [2017-01-01, 2017-02-01]
 *     range: [2017-01, 2017-02]
 *
 * @property int|array $cellSize Default: 20
 *    
 *     
 *     The size of each rect of calendar coordinates, can be set to a single value or array, the first element is width and the second element is height.
 *     Support setting self-adaptation: auto, the default width and height to be 20.
 *     Examples:
 *     
 *     // Set the width and height to be 20
 *     cellSize: 20
 *     
 *     // Set the width to be 20, and height to be 40
 *     cellSize: [20, 40]
 *     
 *     // Set width and height to be self-adaptation
 *     cellSize: [40]
 *     
 *     // Set the width and height to be 20
 *     cellSize: auto
 *     
 *     // Set the width to be self-adaptation, and height to be 40
 *     cellSize: [auto, 40]
 *
 * @property string $orient Default: 'horizontal'
 *    
 *     
 *     The layout orientation of calendar.
 *     Options:
 *     
 *     horizontal
 *     vertical
 *
 * @property Calendar\SplitLine $splitLine
 *    Calendar coordinates splitLine style.
 *
 * @property Calendar\ItemStyle $itemStyle
 *    Every rect style in calendar coordinates.
 *
 * @property Calendar\DayLabel $dayLabel
 *    Day style in calendar coordinates.
 *
 * @property Calendar\MonthLabel $monthLabel
 *    Month label in calendar coordinates.
 *
 * @property Calendar\YearLabel $yearLabel
 *    Year label in calendar coordinates.
 *
 * @property boolean $silent Default: false
 *    
 *     
 *     Whether to ignore mouse events. Default value is false, for triggering and responding to mouse events.
 *
 * {_more_}
 */
class Calendar extends Property {}