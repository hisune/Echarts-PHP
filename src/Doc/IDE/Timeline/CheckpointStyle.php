<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

class CheckpointStyle
{            
        
    /**
     * @var string timeline.checkpointStyle 标记的图形。
     * ECharts 提供的标记类型包括 
     * circle, rect, roundRect, triangle, diamond, pin, arrow
     * 也可以通过 image://url 设置为图片，其中 url 为图片的链接。
     * 在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
     */
    public $symbol = 'circle';        
        
    /**
     * @var int|array timeline.checkpointStyle 标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
     */
    public $symbolSize = 13;        
        
    /**
     * @var int timeline.checkpointStyle 标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
     */
    public $symbolRotate;        
        
    /**
     * @var array timeline.checkpointStyle 标记相对于原本位置的偏移。默认情况下，标记会居中置放在数据对应的位置，但是如果 symbol 是自定义的矢量路径或者图片，就有可能不希望 symbol 居中。这时候可以使用该配置项配置 symbol 相对于原本居中的偏移，可以是绝对的像素值，也可以是相对的百分比。
     * 例如 [0, 50%] 就是把自己向上移动了一半的位置，在 symbol 图形是气泡的时候可以让图形下端的箭头对准数据点。
     */
    public $symbolOffset = '[0, 0]';        
        
    /**
     * @var string timeline组件中『当前项』（checkpoint）的颜色。
     */
    public $color = '#c23531';        
        
    /**
     * @var int timeline组件中『当前项』（checkpoint）的边框宽度。
     */
    public $borderWidth = 5;        
        
    /**
     * @var string timeline组件中『当前项』（checkpoint）的边框颜色。
     */
    public $borderColor = 'rgba(194,53,49, 0.5)';        
        
    /**
     * @var boolean timeline组件中『当前项』（checkpoint）在 timeline 播放切换中的移动，是否有动画。
     */
    public $animation = true;        
        
    /**
     * @var int timeline组件中『当前项』（checkpoint）的动画时长。
     */
    public $animationDuration = 300;        
        
    /**
     * @var string timeline组件中『当前项』（checkpoint）的动画的缓动效果。不同的缓动效果可以参考 缓动示例。
     */
    public $animationEasing = 'quinticInOut';

}