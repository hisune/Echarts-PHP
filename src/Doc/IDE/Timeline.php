<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Timeline
{            
        
    /**
     * @var boolean Whether to show the timeline component. It would not show with a setting of false, but its functions still remain.
     */
    public $show = true;        
        
    /**
     * @var string This attribute has only one valid value as slider by now. You dont have to change it.
     */
    public $type = 'slider';        
        
    /**
     * @var string Type of axis, whose values may be: 
     * 
     * value
     *   Numeric axis, which is suitable for continuous data.
     * category
     *   Category axis, which is suitable for category data.
     * time
     *   Time axis, which is suitable for continuous time data. Compared with value axis, time axis is equipped with time formatting function and has a different method when calculating axis ticks. For example, for time axis, axis ticks may vary in choosing unit as month, week, date, or hour based on the range of data.
     */
    public $axisType = 'time';        
        
    /**
     * @var int Indicates which is the currently selected item. For instance, if currentIndex is 0, it indicates that the currently selected item is timeline.data[0] (namely, using options[0]).
     */
    public $currentIndex = 0;        
        
    /**
     * @var boolean Whether to play automatically.
     */
    public $autoPlay = false;        
        
    /**
     * @var boolean Whether supports playing reversely.
     */
    public $rewind = false;        
        
    /**
     * @var boolean Whether to loop playing.
     */
    public $loop = true;        
        
    /**
     * @var int Indicates play speed (gap time between two state), whose unit is millisecond.
     */
    public $playInterval = 2000;        
        
    /**
     * @var boolean Whether the view updates in real time during dragging the control dot.
     */
    public $realtime = true;        
        
    /**
     * @var string Position of the play button, whose valid values are left and right.
     */
    public $controlPosition = 'left';        
        
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
     * @var string|int Distance between timeline component and the left side of the container.
     * left value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be left, center, or right.
     * If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
     */
    public $left = 'auto';        
        
    /**
     * @var string|int Distance between timeline component and the top side of the container.
     * top value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
     * If the left value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
     */
    public $top = 'auto';        
        
    /**
     * @var string|int Distance between timeline component and the right side of the container.
     * right value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $right = 'auto';        
        
    /**
     * @var string|int Distance between timeline component and the bottom side of the container.
     * bottom value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $bottom = 'auto';        
        
    /**
     * @var int|array timeline space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
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
     * @var string Orientation of the component, whose valid values are:
     * 
     * vertical: vertical layout.
     * horizontal: horizontal layout.
     */
    public $orient = 'horizontal';        
        
    /**
     * @var boolean 
     * Whether to put the timeline component reversely, which makes the elements in the front to be at the end.
     */
    public $inverse = false;        
        
    /**
     * @var string Symbol of timeline.
     * Icon types provided by ECharts includes 
     * circle, rect, roundRect, triangle, diamond, pin, arrow
     * It can also be set to an image with image://url , in which url is the link to a picture.
     * Icons can be set to arbitrary vector path via path:// in ECharts. As compared with raster image, vector paths prevent from jagging and blurring when scaled, and have a better control over changing colors. Size of vectoer icon will be adapted automatically. It will be set to be symbolSize if its a symbol. Refer to SVG PathData for more information about format of path. You may export vector paths from tools like Adobe Illustrator.
     */
    public $symbol = 'emptyCircle';        
        
    /**
     * @var int|array timeline symbol size. It can be set to single numbers like 10, or use an array to represent width and height. For example, [20, 10] means symbol width is 20, and height is10.
     */
    public $symbolSize = 10;        
        
    /**
     * @var int Rotate degree of timeline symbol. Note that when symbol is set to be arrow in markLine, symbolRotate value will be ignored, and compulsively use tangent angle.
     */
    public $symbolRotate;        
        
    /**
     * @var array Offset of timeline symbol relative to original position. By default, symbol will be put in the center position of data. But if symbol is from user-defined vector path or image, you may not expect symbol to be in center. In this case, you may use this attribute to set offset to default position. It can be in absolute pixel value, or in relative percentage value.
     * For example, [0, 50%] means to move upside side position of symbol height. It can be used to make the arrow in the bottom to be at data position when symbol is pin.
     */
    public $symbolOffset = '[0, 0]';        
        
    /**
     * @var Timeline\LineStyle 
     */
    public $lineStyle;        
        
    /**
     * @var Timeline\Label Label axis, which has normal and emphasis status. normal refers to the normal style of text, while emphasis is the highlighted style of text. For instance, text style in emphasis would be used when mouse hovers or legend connects.
     */
    public $label;        
        
    /**
     * @var Timeline\ItemStyle Graphic style of timeline , which has normal and emphasis two styles. normal is the style by default, while emphasis is the style when it is highlighted, like being hovered by mouse, or highlighted via legend connect.
     */
    public $itemStyle;        
        
    /**
     * @var Timeline\CheckpointStyle Style of the selected item (checkpoint).
     */
    public $checkpointStyle;        
        
    /**
     * @var Timeline\ControlStyle The style of control button, which includes: play button, previous button, and next button.
     */
    public $controlStyle;        
        
    /**
     * @var array timeline data. Each item of Array can be a instant value. If you need to set style individually for a data item, the data item should be written as Object. In then Object, the attribute of value is numerical value. Other attributes, such as shown the examples below, could cover the attribute configurations in timeline.  
     * as follows: 
     * [
     *     2002-01-01,
     *     2003-01-01,
     *     2004-01-01,
     *     {
     *         value: 2005-01-01,
     *         tooltip: {          // enables `tooltip` to be displayed as mouse hovering to this item.
     *             formatter: {b} xxxx
     *         },
     *         symbol: diamond,  // the special setting of this items symbol.
     *         symbolSize: 16      // the special setting of this items size.
     *     },
     *     2006-01-01,
     *     2007-01-01,
     *     2008-01-01,
     *     2009-01-01,
     *     2010-01-01,
     *     {
     *         value: 2011-01-01,
     *         tooltip: {          // enables `tooltip` to be displayed as mouse hovering to this item.
     *             formatter: function (params) {
     *                 return params.name + xxxx;
     *             }
     *         },
     *         symbol: diamond,
     *         symbolSize: 18
     *     },
     * ]
     */
    public $data;

}