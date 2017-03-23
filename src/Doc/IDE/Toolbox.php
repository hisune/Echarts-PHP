<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Toolbox
{            
        
    /**
     * @var boolean Whether to show toolbox component.
     */
    public $show = true;        
        
    /**
     * @var string The layout orientation of toolboxs icon.
     * Options:
     * 
     * horizontal
     * vertical
     */
    public $orient = 'horizontal';        
        
    /**
     * @var int The size of toolboxs icon.
     */
    public $itemSize = 15;        
        
    /**
     * @var int The gap between each icon of toolbox. It is horizontal gap in horizontal layout, while vertical gap in vertical layout.
     */
    public $itemGap = 10;        
        
    /**
     * @var boolean Whether to show the title of each tool icon when mouse hovers.
     */
    public $showTitle = true;        
        
    /**
     * @var Toolbox\Feature The configuration item for each tool.
     * Besides the tools we provide, user-defined toolbox is also supported.
     * Notes: User-defined tool name could only start with my, like myTool1 and myTool2 in the below example:
     * {
     *     toolbox: {
     *         feature: {
     *             myTool1: {
     *                 show: true,
     *                 title: custom extension method 1,
     *                 icon: path://M432.45,595.444c0,2.177-4.661,6.82-11.305,6.82c-6.475,0-11.306-4.567-11.306-6.82s4.852-6.812,11.306-6.812C427.841,588.632,432.452,593.191,432.45,595.444L432.45,595.444z M421.155,589.876c-3.009,0-5.448,2.495-5.448,5.572s2.439,5.572,5.448,5.572c3.01,0,5.449-2.495,5.449-5.572C426.604,592.371,424.165,589.876,421.155,589.876L421.155,589.876z M421.146,591.891c-1.916,0-3.47,1.589-3.47,3.549c0,1.959,1.554,3.548,3.47,3.548s3.469-1.589,3.469-3.548C424.614,593.479,423.062,591.891,421.146,591.891L421.146,591.891zM421.146,591.891,
     *                 onclick: function (){
     *                     alert(myToolHandler1)
     *                 }
     *             },
     *             myTool2: {
     *                 show: true,
     *                 title: custom extension method,
     *                 icon: image://http://echarts.baidu.com/images/favicon.png,
     *                 onclick: function (){
     *                     alert(myToolHandler2)
     *                 }
     *             }
     *         }
     *     }
     * }
     */
    public $feature;        
        
    /**
     * @var Toolbox\IconStyle The style setting of Shared icon.
     */
    public $iconStyle;        
        
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
     * @var string|int Distance between toolbox component and the left side of the container.
     * left value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be left, center, or right.
     * If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
     */
    public $left = 'auto';        
        
    /**
     * @var string|int Distance between toolbox component and the top side of the container.
     * top value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
     * If the left value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
     */
    public $top = 'auto';        
        
    /**
     * @var string|int Distance between toolbox component and the right side of the container.
     * right value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $right = 'auto';        
        
    /**
     * @var string|int Distance between toolbox component and the bottom side of the container.
     * bottom value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $bottom = 'auto';        
        
    /**
     * @var string|int Width of toolbox component. Adaptive by default.
     */
    public $width = 'auto';        
        
    /**
     * @var string|int Height of toolbox component. Adaptive by default.
     */
    public $height = 'auto';

}