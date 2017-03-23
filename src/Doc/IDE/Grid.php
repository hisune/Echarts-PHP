<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Grid
{            
        
    /**
     * @var boolean Whether to show the grid in rectangular coordinate.
     */
    public $show = false;        
        
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
     * @var string|int Distance between grid  component and the left side of the container.
     * left value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be left, center, or right.
     * If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
     */
    public $left = '10%';        
        
    /**
     * @var string|int Distance between grid  component and the top side of the container.
     * top value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
     * If the left value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
     */
    public $top = 60;        
        
    /**
     * @var string|int Distance between grid  component and the right side of the container.
     * right value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     */
    public $right = '10%';        
        
    /**
     * @var string|int Distance between grid  component and the bottom side of the container.
     * bottom value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     */
    public $bottom = 60;        
        
    /**
     * @var string|int Width of grid  component. Adaptive by default.
     */
    public $width = 'auto';        
        
    /**
     * @var string|int Height of grid  component. Adaptive by default.
     */
    public $height = 'auto';        
        
    /**
     * @var boolean Whether the grid region contains axis tick label of axis.
     * 
     * When containLabel is false:
     * grid.left grid.right grid.top grid.bottom grid.width grid.height decide the location and size of the rectangle that is made of by xAxis and yAxis.
     * Setting to false will helps when multiple gris need to be align at their axes.
     * 
     * 
     * When containLabel is true:
     * grid.left grid.right grid.top grid.bottom grid.width grid.height decide the location and size of the rectangle that is not only contains axes but also contains labels of those axes.
     * Setting to true will helps when the length of axis labels is dynamic and is hard to approximate to avoid them overflowing the container or overlapping other components.
     */
    public $containLabel = false;        
        
    /**
     * @var string Background color of grid, which is transparent by default.
     * 
     * Color can be represented in RGB, for example rgb(128, 128, 128). RGBA can be used when you need alpha channel, for example rgba(128, 128, 128, 0.5). You may also use hexadecimal format, for example #ccc.
     * 
     * Attention: Works only if show: true is set.
     */
    public $backgroundColor = 'transparent';        
        
    /**
     * @var string Border color of grid. Support the same color format as backgroundColor.
     * Attention: Works only if show: true is set.
     */
    public $borderColor = '#ccc';        
        
    /**
     * @var int Border width of grid.
     * Attention: Works only if show: true is set.
     */
    public $borderWidth = 1;        
        
    /**
     * @var int Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
     * For example:
     * {
     *     shadowColor: rgba(0, 0, 0, 0.5),
     *     shadowBlur: 10
     * }
     * 
     * Attention: This property works only if show: true is configured and backgroundColor is defined other than transparent.
     */
    public $shadowBlur;        
        
    /**
     * @var string Shadow color. Support same format as color.
     * Attention: This property works only if show: true configured.
     */
    public $shadowColor;        
        
    /**
     * @var int Offset distance on the horizontal direction of shadow.
     * Attention: This property works only if show: true configured.
     */
    public $shadowOffsetX = 0;        
        
    /**
     * @var int Offset distance on the vertical direction of shadow.
     * Attention: This property works only if show: true configured.
     */
    public $shadowOffsetY = 0;        
        
    /**
     * @var Grid\Tooltip tooltip settings in the coordinate system component.
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