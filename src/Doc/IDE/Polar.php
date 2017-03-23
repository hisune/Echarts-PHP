<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Polar
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
     * @var array Center position of Polar coordinate, the first of which is the horizontal position, and the second is the vertical position.
     * Percentage is supported. When set in percentage, the item is relative to the container width, and the second item to the height.
     * Example: 
     * // Set to absolute pixel values
     * center: [400, 300]
     * // Set to relative percent
     * center: [50%, 50%]
     */
    public $center = '[\'50%\', \'50%\']';        
        
    /**
     * @var array Radius of Polar coordinate, the first of which is inner radius, and the second is outer radius.
     * Percentage is supported. When set in percentage, its relative to the smaller size between height and width of the container.
     */
    public $radius;        
        
    /**
     * @var Polar\Tooltip tooltip settings in the coordinate system component.
     * 
     * General Introduction:
     * tooltip can be configured on different places:
     * 
     * Configured on glboal: tooltip
     * 
     * Configured in a coordinate system: grid.tooltip, polar.tooltip, single.tooltip
     * 
     * Configured in a series: series.tooltip
     * 
     * Configured in each item of series.data: series.data.tooltip
     */
    public $tooltip;

}