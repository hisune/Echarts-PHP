<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Radar
{            
        
    /**
     * @var int zlevel value of all graghical elements in .
     * zlevel is used to make layers with Canvas. Graphical elements with different zlevel values will be placed in different Canvases, which is a common optimization technique. We can put those frequently changed elements (like those with animations) to a seperate zlevel. Notice that too many Canvases will increase memory cost, and should be used carefully on mobile phones to avoid crash.
     * Canvases with bigger zlevel will be placed on Canvases with smaller zlevel.
     */
    public $zlevel = 0;        
        
    /**
     * @var int z value of all graghical elements in , which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
     * z has a lower priority to zlevel, and will not create new Canvas.
     */
    public $z = 2;        
        
    /**
     * @var array Center position of , the first of which is the horizontal position, and the second is the vertical position.
     * Percentage is supported. When set in percentage, the item is relative to the container width, and the second item to the height.
     * Example: 
     * // Set to absolute pixel values
     * center: [400, 300]
     * // Set to relative percent
     * center: [50%, 50%]
     */
    public $center = '[\'50%\', \'50%\']';        
        
    /**
     * @var int|string Radius of , the first of which is inner radius, and the second is outer radius.
     * Percentage is supported. When set in percentage, its relative to the smaller size between height and width of the container.
     */
    public $radius = '75%';        
        
    /**
     * @var int The start angle of coordinate, which is the angle of the first indicator axis.
     */
    public $startAngle = 90;        
        
    /**
     * @var Radar\Name Name of radar chart.
     */
    public $name;        
        
    /**
     * @var int Distance between the indicators name and axis.
     */
    public $nameGap = 15;        
        
    /**
     * @var int Segments of indicator axis.
     */
    public $splitNumber = 5;        
        
    /**
     * @var string Radar render type, in which polygon and circle are supported.
     */
    public $shape = 'polygon';        
        
    /**
     * @var boolean Whether to prevent calculating the scaling relative to zero. If it is set to be true, the coordinate tick would not compulsorily contain zero value, which is usually useful in scatter diagram of double numerical values axis.
     */
    public $scale = false;        
        
    /**
     * @var boolean True for axis that cannot be interacted with.
     */
    public $silent = false;        
        
    /**
     * @var boolean Whether the labels of axis triggers and reacts to mouse events.
     * Parameters of event includes:
     * {
     *     // Component type: xAxis, yAxis, radiusAxis, angleAxis
     *     // Each of which has an attribute for index, e.g., xAxisIndex for xAxis
     *     componentType: string,
     *     // Value on axis before being formatted.
     *     // Click on value label to trigger event.
     *     value: ,
     *     // Name of axis.
     *     // Click on laben name to trigger event.
     *     name: 
     * }
     */
    public $triggerEvent = false;        
        
    /**
     * @var Radar\AxisLine Settings related to axis line.
     */
    public $axisLine;        
        
    /**
     * @var Radar\AxisTick Settings related to axis tick.
     */
    public $axisTick;        
        
    /**
     * @var Radar\AxisLabel Settings related to axis label.
     */
    public $axisLabel;        
        
    /**
     * @var Radar\SplitLine SplitLine of axis in grid area.
     */
    public $splitLine;        
        
    /**
     * @var Radar\SplitArea Split area of axis in grid area, not shown by default.
     */
    public $splitArea;        
        
    /**
     * @var array Indicator of radar chart, which is used to assign multiple variables(dimensions) in radar chart. Here is the example. 
     * indicator: [
     *    { name: Sales (sales) , max: 6500},
     *    { name: Administration (Administration) , max: 16000},
     *    { name: Information Technology (Information Technology) , max: 30000},
     *    { name: Customer Support (Customer Support) , max: 38000},
     *    { name: Development (Development) , max: 52000},
     *    { name: Marketing (Marketing) , max: 25000}
     * ]
     */
    public $indicator;

}