<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

class ControlStyle
{            
        
    /**
     * @var boolean 是否显示『控制按钮』。设置为 false 则全不显示。
     */
    public $show = true;        
        
    /**
     * @var boolean 是否显示『播放按钮』。
     */
    public $showPlayBtn = true;        
        
    /**
     * @var boolean 是否显示『后退按钮』。
     */
    public $showPrevBtn = true;        
        
    /**
     * @var boolean 是否显示『前进按钮』。
     */
    public $showNextBtn = true;        
        
    /**
     * @var int 『控制按钮』的尺寸，单位为像素（px）。
     */
    public $itemSize = 22;        
        
    /**
     * @var int 『控制按钮』的间隔，单位为像素（px）。
     */
    public $itemGap = 12;        
        
    /**
     * @var string 『控制按钮』的位置。
     * 
     * 当 timeline.orient 为 horizontal时，left、right有效。
     * 
     * 当 timeline.orient 为 vertical时，top、bottom有效。
     */
    public $position = 'left';        
        
    /**
     * @var string 『播放按钮』的『可播放状态』的图形。
     * 在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
     */
    public $playIcon;        
        
    /**
     * @var string 『播放按钮』的『可停止状态』的图形。
     * 在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
     */
    public $stopIcon;        
        
    /**
     * @var string 『后退按钮』的图形
     * 在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
     */
    public $prevIcon;        
        
    /**
     * @var string 『前进按钮』的图形
     * 在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
     */
    public $nextIcon;        
        
    /**
     * @var ControlStyle\Normal 控制按钮的『正常状态』的样式。
     */
    public $normal;        
        
    /**
     * @var ControlStyle\Emphasis 控制按钮的『高亮状态』的样式（hover时）。
     */
    public $emphasis;

}