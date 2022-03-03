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
 * @property boolean $show Default: true
 *    
 *     
 *     Set this to false to prevent the title from showing
 *
 * @property string $text Default: ''
 *    
 *     
 *     The main title text, supporting for \n for newlines.
 *
 * @property string $link Default: ''
 *    The hyper link of main title text.
 *
 * @property string $target Default: 'blank'
 *    Open the hyper link of main title in specified tab.
 *     options: 
 *     
 *     self opening it in current tab
 *     
 *     blank opening it in a new tab
 *
 * @property Title\TextStyle $textStyle
 *    
 *
 * @property string $subtext Default: ''
 *    
 *     
 *     Subtitle text, supporting for \n for newlines.
 *
 * @property string $sublink Default: ''
 *    The hyper link of subtitle text.
 *
 * @property string $subtarget Default: 'blank'
 *    Open the hyper link of subtitle in specified tab, options:
 *     
 *     self opening it in current tab
 *     
 *     blank opening it in a new tab
 *
 * @property Title\SubtextStyle $subtextStyle
 *    
 *
 * @property string $textAlign Default: 'auto'
 *    
 *     
 *     The horizontal align of the component (including text and subtext).
 *     Optional values: auto, left, right, center.
 *
 * @property string $textVerticalAlign Default: 'auto'
 *    
 *     
 *     The vertical align of the component (including text and subtext).
 *     Optional values: auto, top, bottom, middle.
 *
 * @property boolean $triggerEvent Default: false
 *    Set this to true to enable triggering events
 *
 * @property int|array $padding Default: 5
 *    
 *     
 *     title space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
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
 *     The gap between the main title and subtitle.
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
 *    Distance between title  component and the left side of the container.
 *     left value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be left, center, or right.
 *     If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
 *
 * @property string|int $top Default: 'auto'
 *    Distance between title  component and the top side of the container.
 *     top value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
 *     If the top value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
 *
 * @property string|int $right Default: 'auto'
 *    Distance between title  component and the right side of the container.
 *     right value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string|int $bottom Default: 'auto'
 *    Distance between title  component and the bottom side of the container.
 *     bottom value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string $backgroundColor Default: 'transparent'
 *    
 *     
 *     Background color of title, which is transparent by default.
 *     
 *     Color can be represented in RGB, for example rgb(128, 128, 128). RGBA can be used when you need alpha channel, for example rgba(128, 128, 128, 0.5). You may also use hexadecimal format, for example #ccc.
 *
 * @property string $borderColor Default: '#ccc'
 *    
 *     
 *     Border color of title. Support the same color format as backgroundColor.
 *
 * @property int $borderWidth Default: 1
 *    
 *     
 *     Border width of title.
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
 * {_more_}
 */
class Title extends Property {}