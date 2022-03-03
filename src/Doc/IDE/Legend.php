<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type
 *    
 *     
 *     Type of legend. Optional values:
 *     
 *     plain: Simple legend. (default)
 *     scroll: Scrollable legend. It helps when too many legend items needed to be shown.
 *     
 *     See vertically scrollable legend or horizontally scrollable legend.
 *     When scroll used, these options below can be used for detailed configuration:
 *     
 *     legend.scrollDataIndex
 *     legend.pageButtonItemGap
 *     legend.pageButtonGap
 *     legend.pageButtonPosition
 *     legend.pageFormatter
 *     legend.pageIcons
 *     legend.pageIconColor
 *     legend.pageIconInactiveColor
 *     legend.pageIconSize
 *     legend.pageTextStyle
 *     legend.animation
 *     legend.animationDurationUpdate
 *
 * @property string $id
 *    Component ID, not specified by default. If specified, it can be used to refer the component in option or API.
 *
 * @property boolean $show Default: true
 *    
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
 *    Distance between legend component and the left side of the container.
 *     left value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be left, center, or right.
 *     If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
 *
 * @property string|int $top Default: 'auto'
 *    Distance between legend component and the top side of the container.
 *     top value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
 *     If the top value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
 *
 * @property string|int $right Default: 'auto'
 *    Distance between legend component and the right side of the container.
 *     right value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string|int $bottom Default: 'auto'
 *    Distance between legend component and the bottom side of the container.
 *     bottom value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string|int $width Default: 'auto'
 *    Width of legend component. Adaptive by default.
 *
 * @property string|int $height Default: 'auto'
 *    Height of legend component. Adaptive by default.
 *
 * @property string $orient Default: 'horizontal'
 *    
 *     
 *     The layout orientation of legend.
 *     Options:
 *     
 *     horizontal
 *     vertical
 *
 * @property string $align Default: 'auto'
 *    
 *     
 *     Legend marker and text aligning. By default, it automatically calculates from component location and orientation. When left value of this component is right, and the vertical layout (orient is vertical), it would be aligned to right.
 *     Option:
 *     
 *     auto
 *     left
 *     right
 *
 * @property int|array $padding Default: 5
 *    
 *     
 *     
 *     
 *     
 *     
 *     legend space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
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
 * @property int $itemGap Default: 10
 *    
 *     
 *     The distance between each legend, horizontal distance in horizontal layout, and vertical distance in vertical layout.
 *
 * @property int $itemWidth Default: 25
 *    
 *     
 *     Image width of legend symbol.
 *
 * @property int $itemHeight Default: 14
 *    
 *     
 *     Image height of legend symbol.
 *
 * @property Legend\ItemStyle $itemStyle
 *    Legend item style. If its children have values as inherit, the values are inherited from corresponding series options.
 *
 * @property Legend\LineStyle $lineStyle
 *    Legend line style. If its children have values as inherit, the values are inherited from corresponding series options.
 *
 * @property int|string $symbolRotate Default: 'inherit'
 *    Rotation of the symbol, which can be number | inherit. If its inherit, symbolRotate of the series will be used.
 *
 * @property string|callable $formatter
 *    Formatter is used to format label of legend, which supports string template and callback function.
 *     Example:
 *     // using string template, the template variable is legend name {name}
 *     formatter: Legend {name}
 *     // using callback function
 *     formatter: function (name) {
 *         return Legend  + name;
 *     }
 *
 * @property string|boolean $selectedMode Default: true
 *    
 *     
 *     Selected mode of legend, which controls whether series can be toggled displaying by clicking legends. It is enabled by default, and you may set it to be false to disable it.
 *     Besides, it can be set to single or multiple, for single selection and multiple selection.
 *
 * @property string $inactiveColor Default: '#ccc'
 *    
 *     
 *     Legend color when not selected.
 *
 * @property string $inactiveBorderColor Default: '#ccc'
 *    
 *     
 *     Legend border color when not selected.
 *
 * @property string $inactiveBorderWidth Default: 'auto'
 *    
 *     
 *     Legend border width when not selected. If it is auto, the border width is set to be 2 if there is border width in the series, 0 elsewise. If it is inherit, it always takes the border width of the series.
 *
 * @property array $selected
 *    State table of selected legend.
 *     example:
 *     selected: {
 *         // selectedseries 1
 *         series 1: true,
 *         // unselectedseries 2
 *         series 2: false
 *     }
 *
 * @property Legend\TextStyle $textStyle
 *    Legend text style.
 *
 * @property array $tooltip
 *    Tooltip configuration for legend tooltip, which is similar to tooltip.
 *
 * @property string $icon
 *    
 *     
 *     Icon of the legend items.
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
 * @property array $data
 *    Data array of legend. An array item is usually a name representing string. (If it is a pie chart, it could also be the name of a single data in the pie chart) of a series. Legend component would automatically calculate the color and icon according to series. Special string  (null string) or \n (new line string) can be used for a new line.
 *     If data is not specified, it will be auto collected from series. For most of series, it will be collected from series.name or the dimension name specified by seriesName of series.encode. For some types of series like pie and funnel, it will be collected from the name field of series.data.
 *     If you need to set the style for a single item, you may also set the configuration of it. In this case, name attribute is used to represent name of series.
 *     Example:
 *     data: [{
 *         name: series 1,
 *         // compulsorily set icon as a circle
 *         icon: circle,
 *         // set up the text in red
 *         textStyle: {
 *             color: red
 *         }
 *     }]
 *
 * @property string $backgroundColor Default: 'transparent'
 *    
 *     
 *     Background color of legend, which is transparent by default.
 *     
 *     Color can be represented in RGB, for example rgb(128, 128, 128). RGBA can be used when you need alpha channel, for example rgba(128, 128, 128, 0.5). You may also use hexadecimal format, for example #ccc.
 *
 * @property string $borderColor Default: '#ccc'
 *    
 *     
 *     Border color of legend. Support the same color format as backgroundColor.
 *
 * @property int $borderWidth Default: 1
 *    
 *     
 *     Border width of legend.
 *
 * @property int|array $borderRadius Default: 0
 *    
 *     
 *     The radius of rounded corner. Its unit is px. And it supports use array to respectively specify the 4 corner radiuses.
 *     For example:
 *     borderRadius: 5, // consistently set the size of 4 rounded corners
 *     borderRadius: [5, 5, 0, 0] // (clockwise upper left, upper right, bottom right and bottom left)
 *
 * @property int $shadowBlur
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *     
 *     Attention: This property works only if show: true is configured and backgroundColor is defined other than transparent.
 *
 * @property string $shadowColor
 *    
 *     
 *     Shadow color. Support same format as color.
 *     Attention: This property works only if show: true configured.
 *
 * @property int $shadowOffsetX Default: 0
 *    
 *     
 *     Offset distance on the horizontal direction of shadow.
 *     Attention: This property works only if show: true configured.
 *
 * @property int $shadowOffsetY Default: 0
 *    
 *     
 *     Offset distance on the vertical direction of shadow.
 *     Attention: This property works only if show: true configured.
 *
 * @property int $scrollDataIndex Default: 0
 *    It works when legend.type is scroll.
 *     dataIndex of the left top most displayed item.
 *     Although the scrolling of legend items can be controlled by calling setOption and specifying this property, we suggest that do not control legend in this way unless necessary (setOption might be time-consuming), but just use action legendScroll to do that.
 *     See vertically scrollable legend or horizontally scrollable legend.
 *
 * @property int $pageButtonItemGap Default: 5
 *    It works when legend.type is scroll.
 *     The gap between page buttons and page info text.
 *     See vertically scrollable legend or horizontally scrollable legend.
 *
 * @property int $pageButtonGap
 *    It works when legend.type is scroll.
 *     The gap between page buttons and legend items.
 *     See vertically scrollable legend or horizontally scrollable legend.
 *
 * @property string $pageButtonPosition Default: 'end'
 *    It works when legend.type is scroll.
 *     The position of page buttons and page info. Optional values:
 *     
 *     start: on the left or top.
 *     end: on the right or bottom.
 *     
 *     See vertically scrollable legend or horizontally scrollable legend.
 *
 * @property string|callable $pageFormatter Default: '{current}/{total}'
 *    It works when legend.type is scroll.
 *     Page info formatter. It is {current}/{total} by default, where {current} is current page number (start from 1), and {total} is the total page number.
 *     If pageFormatter is a function, it should return a string. The parameters is:
 *     {
 *         current: number
 *         total: number
 *     }
 *     
 *     See vertically scrollable legend or horizontally scrollable legend.
 *
 * @property Legend\PageIcons $pageIcons
 *    It works when legend.type is scroll.
 *     The icons of page buttons.
 *
 * @property string $pageIconColor Default: '#2f4554'
 *    
 *     
 *     It works when legend.type is scroll.
 *     The color of page buttons.
 *     See vertically scrollable legend or horizontally scrollable legend.
 *
 * @property string $pageIconInactiveColor Default: '#aaa'
 *    
 *     
 *     It works when legend.type is scroll.
 *     The color of page buttons when they are inactive.
 *     See vertically scrollable legend or horizontally scrollable legend.
 *
 * @property int|array $pageIconSize Default: 15
 *    
 *     
 *     It works when legend.type is scroll.
 *     The size of page buttons. It can be a number, or an array, like [10, 3], represents [width, height].
 *     See vertically scrollable legend or horizontally scrollable legend.
 *
 * @property Legend\PageTextStyle $pageTextStyle
 *    It works when legend.type is scroll.
 *     The text style of page info.
 *
 * @property boolean $animation
 *    
 *     
 *     Whether to use animation when page scrolls.
 *
 * @property int $animationDurationUpdate Default: 800
 *    
 *     
 *     Duration of the page scroll animation.
 *
 * @property Legend\Emphasis $emphasis
 *    
 *
 * @property boolean|array $selector Default: false
 *    
 *     Since v4.4.0
 *     
 *     The selector button in the legend component. Currently includes both a full selection and an inverse selection. The selector button doesnt display by default, the user can manually configure it.
 *     Usage:
 *     selector: [
 *         {
 *             type: all or inverse,
 *             // can be any title you like
 *             title: All
 *         },
 *         {
 *             type: inverse,
 *             title: Inv
 *         }
 *     ]
 *     
 *     // or
 *     selector: true
 *     
 *     // or
 *     selector: [all, inverse]
 *
 * @property Legend\SelectorLabel $selectorLabel
 *    
 *     Since v4.4.0
 *     
 *     The text label style of the selector button, which is displayed by default.
 *
 * @property string $selectorPosition Default: 'auto'
 *    
 *     
 *     
 *     
 *     
 *     Since v4.4.0
 *     
 *     The position of the selector button, which can be placed at the end or start of the legend component, the corresponding values are end and start. By default, when the legend is laid out horizontally, the selector is placed at the end of it, and when the legend is laid out vertically, the selector is placed at the start of it.
 *
 * @property int $selectorItemGap Default: 7
 *    
 *     
 *     
 *     
 *     
 *     Since v4.4.0
 *     
 *     The gap between the selector button.
 *
 * @property int $selectorButtonGap Default: 10
 *    
 *     
 *     
 *     
 *     
 *     Since v4.4.0
 *     
 *     The gap between selector button and legend component.
 *
 * {_more_}
 */
class Legend extends Property {}