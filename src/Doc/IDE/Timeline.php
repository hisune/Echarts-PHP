<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    
 *     
 *     Whether to show the timeline component. It would not show with a setting of false, but its functions still remain.
 *
 * @property string $type Default: 'slider'
 *    This attribute has only one valid value as slider by now. You dont have to change it.
 *
 * @property string $axisType Default: 'time'
 *    Type of axis, whose values may be:
 *     
 *     value
 *       Numeric axis, which is suitable for continuous data.
 *     category
 *       Category axis, which is suitable for category data.
 *     time
 *       Time axis, which is suitable for continuous time data. Compared with value axis, time axis is equipped with time formatting function and has a different method when calculating axis ticks. For example, for time axis, axis ticks may vary in choosing unit as month, week, date, or hour based on the range of data.
 *
 * @property int $currentIndex Default: 0
 *    
 *     
 *     Indicates which is the currently selected item. For instance, if currentIndex is 0, it indicates that the currently selected item is timeline.data[0] (namely, using options[0]).
 *
 * @property boolean $autoPlay Default: false
 *    
 *     
 *     Whether to play automatically.
 *
 * @property boolean $rewind Default: false
 *    
 *     
 *     Whether supports playing reversely.
 *
 * @property boolean $loop Default: true
 *    
 *     
 *     Whether to loop playing.
 *
 * @property int $playInterval Default: 2000
 *    
 *     
 *     Indicates play speed (gap time between two state), whose unit is millisecond.
 *
 * @property boolean $realtime Default: true
 *    
 *     
 *     Whether the view updates in real time during dragging the control dot.
 *
 * @property array|string $replaceMerge Default: 'undefined'
 *    When initializing, a switchableOption corresponding to the current time tick are merged into baseOption to form the finalOption. Each time the current tick changed, the new switchableOption corresponding to the new time tick are merged into the finalOption.
 *     There are two merging strategy.
 *     
 *     By default, use NORMAL_MERGE.
 *     If timeline.replaceMerge is set, use REPLACE_MERGE. See setOption for more details of REPLACE_MERGE.
 *     
 *     
 *     The value of replaceMerge can be a mainType of a component, like replaceMerge: xAxis, or an array of mainTypes, like replaceMerge: [xAxis, series].
 *     replaceMerge is usually used in this scenario: if users intending to replace all of the current series with the new series corresponding to the next time tick without any merging, users can set: replaceMerge: series, and make sure that the series are in different id or no id.
 *     See this example.
 *
 * @property string $controlPosition Default: 'left'
 *    
 *     
 *     Position of the play button, whose valid values are left and right.
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
 * @property string|int $left Default: 'auto'
 *    Distance between timeline component and the left side of the container.
 *     left value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be left, center, or right.
 *     If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
 *
 * @property string|int $top Default: 'auto'
 *    Distance between timeline component and the top side of the container.
 *     top value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
 *     If the top value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
 *
 * @property string|int $right Default: 'auto'
 *    Distance between timeline component and the right side of the container.
 *     right value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string|int $bottom Default: 'auto'
 *    Distance between timeline component and the bottom side of the container.
 *     bottom value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property int|array $padding Default: 5
 *    
 *     
 *     
 *     
 *     
 *     
 *     timeline space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
 *     Examples:
 *     // Set padding to be 5
 *     padding: 5
 *     // Set the top and bottom paddings to be 5, and left and right paddings to be 10
 *     padding: [5, 10]
 *     // Set each of the four paddings seperately
 *     padding: [
 *         5,  // up
 *         10, // right
 *         5,  // down
 *         10, // left
 *     ]
 *
 * @property string $orient Default: 'horizontal'
 *    
 *     
 *     Orientation of the component, whose valid values are:
 *     
 *     vertical: vertical layout.
 *     horizontal: horizontal layout.
 *
 * @property boolean $inverse Default: false
 *    
 *     
 *     
 *     Whether to put the timeline component reversely, which makes the elements in the front to be at the end.
 *
 * @property string $symbol Default: 'emptyCircle'
 *    
 *     
 *     Symbol of timeline.
 *     Icon types provided by ECharts includes
 *     circle, rect, roundRect, triangle, diamond, pin, arrow, none
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *
 * @property int|array $symbolSize Default: 10
 *    
 *     
 *     timeline symbol size. It can be set to single numbers like 10, or use an array to represent width and height. For example, [20, 10] means symbol width is 20, and height is10.
 *
 * @property int $symbolRotate
 *    
 *     
 *     Rotate degree of timeline symbol. The negative value represents clockwise. Note that when symbol is set to be arrow in markLine, symbolRotate value will be ignored, and compulsively use tangent angle.
 *
 * @property boolean $symbolKeepAspect Default: false
 *    
 *     
 *     Whether to keep aspect for symbols in the form of path://.
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    
 *     
 *     Offset of timeline symbol relative to original position. By default, symbol will be put in the center position of data. But if symbol is from user-defined vector path or image, you may not expect symbol to be in center. In this case, you may use this attribute to set offset to default position. It can be in absolute pixel value, or in relative percentage value.
 *     For example, [0, -50%] means to move upside side position of symbol height. It can be used to make the arrow in the bottom to be at data position when symbol is pin.
 *
 * @property Timeline\LineStyle $lineStyle
 *    
 *
 * @property Timeline\Label $label
 *    Label axis, emphasis is the highlighted style of text. For instance, text style in emphasis would be used when mouse hovers or legend connects.
 *
 * @property Timeline\ItemStyle $itemStyle
 *    Graphic style of timeline , emphasis is the style when it is highlighted, like being hovered by mouse, or highlighted via legend connect.
 *
 * @property Timeline\CheckpointStyle $checkpointStyle
 *    Style of the selected item (checkpoint).
 *
 * @property Timeline\ControlStyle $controlStyle
 *    The style of control button, which includes: play button, previous button, and next button.
 *
 * @property Timeline\Progress $progress
 *    Styles of line, labels and symbols in progress.
 *
 * @property Timeline\Emphasis $emphasis
 *    
 *
 * @property array $data
 *    timeline data. Each item of Array can be a instant value. If you need to set style individually for a data item, the data item should be written as Object. In then Object, the attribute of value is numerical value. Other attributes, such as shown the examples below, could cover the attribute configurations in timeline.
 *     as follows:
 *     [
 *         2002-01-01,
 *         2003-01-01,
 *         2004-01-01,
 *         {
 *             value: 2005-01-01,
 *             tooltip: {          // enables `tooltip` to be displayed as mouse hovering to this item.
 *                 formatter: {b} xxxx
 *             },
 *             symbol: diamond,  // the special setting of this items symbol.
 *             symbolSize: 16      // the special setting of this items size.
 *         },
 *         2006-01-01,
 *         2007-01-01,
 *         2008-01-01,
 *         2009-01-01,
 *         2010-01-01,
 *         {
 *             value: 2011-01-01,
 *             tooltip: {          // enables `tooltip` to be displayed as mouse hovering to this item.
 *                 formatter: function (params) {
 *                     return params.name + xxxx;
 *                 }
 *             },
 *             symbol: diamond,
 *             symbolSize: 18
 *         },
 *     ]
 *
 * {_more_}
 */
class Timeline extends Property {}