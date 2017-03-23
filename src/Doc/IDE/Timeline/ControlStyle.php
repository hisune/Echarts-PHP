<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

class ControlStyle
{            
        
    /**
     * @var boolean Whether to show control button. false for hide all.
     */
    public $show = true;        
        
    /**
     * @var boolean Whether to show play button.
     */
    public $showPlayBtn = true;        
        
    /**
     * @var boolean Whether to show previous button.
     */
    public $showPrevBtn = true;        
        
    /**
     * @var boolean Whether to show next button.
     */
    public $showNextBtn = true;        
        
    /**
     * @var int Size of control button, in pixels (px).
     */
    public $itemSize = 22;        
        
    /**
     * @var int Interval between control button, in pixels (px).
     */
    public $itemGap = 12;        
        
    /**
     * @var string the location of control button.
     * 
     * When timeline.orient is set to be horizontal, left and rightare valid.
     * 
     * When timeline.orient is set to be vertical, top and bottomare valid.
     */
    public $position = 'left';        
        
    /**
     * @var string Icon of play status for play button.
     * Icons can be set to arbitrary vector path via path:// in ECharts. As compared with raster image, vector paths prevent from jagging and blurring when scaled, and have a better control over changing colors. Size of vectoer icon will be adapted automatically. It will be set to be symbolSize if its a symbol. Refer to SVG PathData for more information about format of path. You may export vector paths from tools like Adobe Illustrator.
     */
    public $playIcon;        
        
    /**
     * @var string Icon of stop status for play button.
     * Icons can be set to arbitrary vector path via path:// in ECharts. As compared with raster image, vector paths prevent from jagging and blurring when scaled, and have a better control over changing colors. Size of vectoer icon will be adapted automatically. It will be set to be symbolSize if its a symbol. Refer to SVG PathData for more information about format of path. You may export vector paths from tools like Adobe Illustrator.
     */
    public $stopIcon;        
        
    /**
     * @var string Icon of previous button.
     * Icons can be set to arbitrary vector path via path:// in ECharts. As compared with raster image, vector paths prevent from jagging and blurring when scaled, and have a better control over changing colors. Size of vectoer icon will be adapted automatically. It will be set to be symbolSize if its a symbol. Refer to SVG PathData for more information about format of path. You may export vector paths from tools like Adobe Illustrator.
     */
    public $prevIcon;        
        
    /**
     * @var string Icon of next button.
     * Icons can be set to arbitrary vector path via path:// in ECharts. As compared with raster image, vector paths prevent from jagging and blurring when scaled, and have a better control over changing colors. Size of vectoer icon will be adapted automatically. It will be set to be symbolSize if its a symbol. Refer to SVG PathData for more information about format of path. You may export vector paths from tools like Adobe Illustrator.
     */
    public $nextIcon;        
        
    /**
     * @var ControlStyle\Normal Style of normal state for control button.
     */
    public $normal;        
        
    /**
     * @var ControlStyle\Emphasis Button style in highlighted state (when its hovered by mouse).
     */
    public $emphasis;

}