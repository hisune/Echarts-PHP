<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Legend
{            
        
    /**
     * @var boolean 
     */
    public $show = true;        
        
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
     * @var string|int Distance between legend component and the left side of the container.
     * left value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be left, center, or right.
     * If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
     */
    public $left = 'auto';        
        
    /**
     * @var string|int Distance between legend component and the top side of the container.
     * top value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
     * If the left value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
     */
    public $top = 'auto';        
        
    /**
     * @var string|int Distance between legend component and the right side of the container.
     * right value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $right = 'auto';        
        
    /**
     * @var string|int Distance between legend component and the bottom side of the container.
     * bottom value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $bottom = 'auto';        
        
    /**
     * @var string|int Width of legend component. Adaptive by default.
     */
    public $width = 'auto';        
        
    /**
     * @var string|int Height of legend component. Adaptive by default.
     */
    public $height = 'auto';        
        
    /**
     * @var string The layout orientation of legend. 
     * Options:
     * 
     * horizontal
     * vertical
     */
    public $orient = 'horizontal';        
        
    /**
     * @var string Legend mrker and text aligning. By default, it automatically calculates from component location and orient. When left value of this component is right, and the vertical layout (orient is vertical), it would be aligned to right.
     * Option: 
     * 
     * auto
     * left
     * right
     */
    public $align = 'auto';        
        
    /**
     * @var int legend space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
     * Examples: 
     * // Set padding to be 5
     * padding: 5
     * // Set the top and bottom paddings to be 5, and left and right paddings to be 10
     * padding: [5, 10]
     * // Set each of the four paddings seperately
     * padding: [
     *     5,  // up
     *     10, // right
     *     5,  // down
     *     10, // left
     * ]
     */
    public $padding = 5;        
        
    /**
     * @var int The distance between each legend, horizontal distance in horizontal layout, and vertical distance in vertical layout.
     */
    public $itemGap = 10;        
        
    /**
     * @var int Image width of legend symbol.
     */
    public $itemWidth = 25;        
        
    /**
     * @var int Image height of legend symbol.
     */
    public $itemHeight = 14;        
        
    /**
     * @var string|callable Formatter is used to format label of legend, which supports string template and callback function.
     * Example: 
     * // using string template, the template variable is legend name {name}
     * formatter: Legend {name}
     * // using callback function
     * formatter: function (name) {
     *     return Legend  + name;
     * }
     */
    public $formatter;        
        
    /**
     * @var string|boolean Selected mode of legend, which controls whether series can be toggled displaying by clicking legends. It is enabled by default, and you may set it to be false to disabled it.
     * Besides, it can be set to single or multiple, for single selection and multiple selection.
     */
    public $selectedMode = true;        
        
    /**
     * @var string Legend color when not selected.
     */
    public $inactiveColor = '#ccc';        
        
    /**
     * @var array State table of selected legend.
     * example: 
     * selected: {
     *     // selectedseries 1
     *     series 1: true,
     *     // unselectedseries 2
     *     series 2: false
     * }
     */
    public $selected;        
        
    /**
     * @var Legend\TextStyle Legend text style.
     */
    public $textStyle;

}