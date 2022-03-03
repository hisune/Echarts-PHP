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
 * @property array $center Default: '[\'50%\', \'50%\']'
 *    
 *     
 *     Center position of , the first of which is the horizontal position, and the second is the vertical position.
 *     Percentage is supported. When set in percentage, the item is relative to the container width, and the second item to the height.
 *     Example: 
 *     // Set to absolute pixel values
 *     center: [400, 300]
 *     // Set to relative percent
 *     center: [50%, 50%]
 *
 * @property int|string|array $radius Default: '75%'
 *    
 *     
 *     Radius of . Value can be:
 *     
 *     number: Specify outside radius directly.
 *     string: For example, 20%, means that the outside radius is 20% of the viewport size (the little one between width and height of the chart container).
 *     
 *     
 *     Array.&lt;number|string&gt;: The first item specifies the inside radius, and the second item specifies the outside radius. Each item follows the definitions above.
 *
 * @property int $startAngle Default: 90
 *    The start angle of coordinate, which is the angle of the first indicator axis.
 *
 * @property Radar\AxisName $axisName
 *    Name options for radar indicators.
 *
 * @property int $nameGap Default: 15
 *    
 *     
 *     Distance between the indicators name and axis.
 *
 * @property int $splitNumber Default: 5
 *    
 *     
 *     Segments of indicator axis.
 *
 * @property string $shape Default: 'polygon'
 *    
 *     
 *     Radar render type, in which polygon and circle are supported.
 *
 * @property boolean $scale Default: false
 *    
 *     
 *     Whether to prevent calculating the scaling relative to zero. If it is set to be true, the coordinate tick would not compulsorily contain zero value, which is usually useful in scatter diagram of double numerical values axis.
 *
 * @property boolean $silent Default: false
 *    Set this to true, to prevent interaction with the axis.
 *
 * @property boolean $triggerEvent Default: false
 *    Set this to true to enable triggering events.
 *     Parameters of the event include:
 *     {
 *         // Component type: xAxis, yAxis, radiusAxis, angleAxis
 *         // Each of which has an attribute for index, e.g., xAxisIndex for xAxis
 *         componentType: string,
 *         // Value on axis before being formatted.
 *         // Click on value label to trigger event.
 *         value: ,
 *         // Name of axis.
 *         // Click on laben name to trigger event.
 *         name: 
 *     }
 *
 * @property Radar\AxisLine $axisLine
 *    Settings related to axis line.
 *
 * @property Radar\AxisTick $axisTick
 *    Settings related to axis tick.
 *
 * @property Radar\AxisLabel $axisLabel
 *    Settings related to axis label.
 *
 * @property Radar\SplitLine $splitLine
 *    Split line of axis in grid area.
 *
 * @property Radar\SplitArea $splitArea
 *    Split area of axis in grid area, not shown by default.
 *
 * @property array $indicator
 *    Indicator of radar chart, which is used to assign multiple variables(dimensions) in radar chart. Here is the example.
 *     indicator: [
 *        { name: Sales (sales) , max: 6500},
 *        { name: Administration (Administration) , max: 16000, color: red}, // Set the indicator as red
 *        { name: Information Technology (Information Technology) , max: 30000},
 *        { name: Customer Support (Customer Support) , max: 38000},
 *        { name: Development (Development) , max: 52000},
 *        { name: Marketing (Marketing) , max: 25000}
 *     ]
 *
 * {_more_}
 */
class Radar extends Property {}