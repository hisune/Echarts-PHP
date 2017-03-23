<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Calendar
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
     * @var string|int Distance between calendar component and the left side of the container.
     * left value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be left, center, or right.
     * If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
     */
    public $left = 80;        
        
    /**
     * @var string|int Distance between calendar component and the top side of the container.
     * top value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
     * If the left value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
     */
    public $top = 60;        
        
    /**
     * @var string|int Distance between calendar component and the right side of the container.
     * right value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $right = 'auto';        
        
    /**
     * @var string|int Distance between calendar component and the bottom side of the container.
     * bottom value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $bottom = 'auto';        
        
    /**
     * @var int|string The height of calendar coordinates.
     * Note: cellSize is 20 by default. If width is set,
     *   cellSize[0] will be forced to auto;
     */
    public $width = 'auto';        
        
    /**
     * @var int|string The height of calendar coordinates.
     * Note: cellSize is 20 by default. If height is set,
     *   cellSize[1] will be forced to auto;
     */
    public $height = 'auto';        
        
    /**
     * @var int|string|array Required, range of Calendar coordinates, support multiple formats.
     * Examples:
     * 
     * // one year
     * range: 2017
     * 
     * // one month
     * range: 2017-02
     * 
     * //  a range
     * range: [2017-01-02, 2017-02-23]
     * 
     * // note: they will be identified as [2017-01-01, 2017-02-01]
     * range: [2017-01, 2017-02]
     */
    public $range;        
        
    /**
     * @var int|array The size of each rect of calendar coordinates, can be set to a single value or array, the first element is width and the second element is height.
     * Support setting self-adaptation: auto, the default width and height to be 20.
     * Examples:
     * 
     * // Set the width and height to be 20
     * cellSize: 20
     * 
     * // Set the width to be 20, and height to be 40
     * cellSize: [20, 40]
     * 
     * // Set width and height to be self-adaptation
     * cellSize: [40]
     * 
     * // Set the width and height to be 20
     * cellSize: auto
     * 
     * // Set the width to be self-adaptation, and height to be 40
     * cellSize: [auto, 40]
     */
    public $cellSize = 20;        
        
    /**
     * @var string The layout orientation of calendar.
     * Options:
     * 
     * horizontal
     * vertical
     */
    public $orient = 'horizontal';        
        
    /**
     * @var Calendar\SplitLine Calendar coordinates splitLine style.
     */
    public $splitLine;        
        
    /**
     * @var Calendar\ItemStyle Every rect style in calendar coordinates.
     */
    public $itemStyle;        
        
    /**
     * @var Calendar\DayLabel Day style in calendar coordinates.
     */
    public $dayLabel;        
        
    /**
     * @var Calendar\MonthLabel Month label in calendar coordinates.
     */
    public $monthLabel;        
        
    /**
     * @var Calendar\YearLabel Year label in calendar coordinates.
     */
    public $yearLabel;        
        
    /**
     * @var boolean Whether to ignore mouse events. Default value is false, for triggering and responding to mouse events.
     */
    public $silent = false;

}