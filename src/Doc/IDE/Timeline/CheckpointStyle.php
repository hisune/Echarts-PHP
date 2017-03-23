<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

class CheckpointStyle
{            
        
    /**
     * @var string Symbol of timeline.checkpointStyle .
     * Icon types provided by ECharts includes 
     * circle, rect, roundRect, triangle, diamond, pin, arrow
     * It can also be set to an image with image://url , in which url is the link to a picture.
     * Icons can be set to arbitrary vector path via path:// in ECharts. As compared with raster image, vector paths prevent from jagging and blurring when scaled, and have a better control over changing colors. Size of vectoer icon will be adapted automatically. It will be set to be symbolSize if its a symbol. Refer to SVG PathData for more information about format of path. You may export vector paths from tools like Adobe Illustrator.
     */
    public $symbol = 'circle';        
        
    /**
     * @var int|array timeline.checkpointStyle  symbol size. It can be set to single numbers like 10, or use an array to represent width and height. For example, [20, 10] means symbol width is 20, and height is10.
     */
    public $symbolSize = 13;        
        
    /**
     * @var int Rotate degree of timeline.checkpointStyle  symbol. Note that when symbol is set to be arrow in markLine, symbolRotate value will be ignored, and compulsively use tangent angle.
     */
    public $symbolRotate;        
        
    /**
     * @var array Offset of timeline.checkpointStyle  symbol relative to original position. By default, symbol will be put in the center position of data. But if symbol is from user-defined vector path or image, you may not expect symbol to be in center. In this case, you may use this attribute to set offset to default position. It can be in absolute pixel value, or in relative percentage value.
     * For example, [0, 50%] means to move upside side position of symbol height. It can be used to make the arrow in the bottom to be at data position when symbol is pin.
     */
    public $symbolOffset = '[0, 0]';        
        
    /**
     * @var string Color of checkpoint in timeline component.
     */
    public $color = '#c23531';        
        
    /**
     * @var int The border-width of checkpoint in timeline component.
     */
    public $borderWidth = 5;        
        
    /**
     * @var string The border-color of checkpoint in timeline component.
     */
    public $borderColor = 'rgba(194,53,49, 0.5)';        
        
    /**
     * @var boolean In timeline component, whether there is animation in checkpoint moving during the process of timeline playing and switching.
     */
    public $animation = true;        
        
    /**
     * @var int The animation duration of checkpoint in timeline component.
     */
    public $animationDuration = 300;        
        
    /**
     * @var string The easing effect of animation of checkpoint in timeline component. Refers to easing sample for different easing effects.
     */
    public $animationEasing = 'quinticInOut';

}