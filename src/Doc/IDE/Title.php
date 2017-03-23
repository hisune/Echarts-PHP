<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Title
{            
        
    /**
     * @var boolean It specifies whether to show the title component.
     */
    public $show = true;        
        
    /**
     * @var string The main title text, supporting for \n for newlines.
     */
    public $text = '';        
        
    /**
     * @var string The hyper link of main title text.
     */
    public $link = '';        
        
    /**
     * @var string Open the hyper link of main title in specified tab.
     * options: 
     * 
     * self opening it in current tab
     * 
     * blank opening it in a new tab
     */
    public $target = 'blank';        
        
    /**
     * @var Title\TextStyle 
     */
    public $textStyle;        
        
    /**
     * @var string Setting the title text align horizontally, supporting left,center,right, the default value is based on the title position.
     */
    public $textAlign;        
        
    /**
     * @var string Setting the title text align vertically, supporting top,middle,bottom, the default value is based on the title position.
     */
    public $textBaseline;        
        
    /**
     * @var string Subtitle text, supporting for \n for newlines.
     */
    public $subtext = '';        
        
    /**
     * @var string The hyper link of subtitle text.
     */
    public $sublink = '';        
        
    /**
     * @var string  Open the hyper link of subtitle in specified tab, options:
     * 
     * self opening it in current tab
     * 
     * blank opening it in a new tab
     */
    public $subtarget = 'blank';        
        
    /**
     * @var Title\SubtextStyle 
     */
    public $subtextStyle;        
        
    /**
     * @var int title space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
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
     * @var int The gap between the main title and subtitle.
     */
    public $itemGap = 10;        
        
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
    public $left = 'auto';        
        
    /**
     * @var string|int Distance between grid  component and the top side of the container.
     * top value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
     * If the left value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
     */
    public $top = 'auto';        
        
    /**
     * @var string|int Distance between grid  component and the right side of the container.
     * right value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $right = 'auto';        
        
    /**
     * @var string|int Distance between grid  component and the bottom side of the container.
     * bottom value can be instant pixel value like 20; it can also be percentage value relative to container width like 20%.
     * Adaptive by default.
     */
    public $bottom = 'auto';        
        
    /**
     * @var string Background color of title, which is transparent by default.
     * 
     * Color can be represented in RGB, for example rgb(128, 128, 128). RGBA can be used when you need alpha channel, for example rgba(128, 128, 128, 0.5). You may also use hexadecimal format, for example #ccc.
     */
    public $backgroundColor = 'transparent';        
        
    /**
     * @var string Border color of title. Support the same color format as backgroundColor.
     */
    public $borderColor = '#ccc';        
        
    /**
     * @var int Border width of title.
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

}