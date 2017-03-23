<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Radar;

class AxisTick
{            
        
    /**
     * @var boolean 是否显示坐标轴刻度。
     */
    public $show = false;        
        
    /**
     * @var boolean 类目轴中在 boundaryGap 为 true 的时候有效，可以保证刻度线和标签对齐。如下图：
     */
    public $alignWithLabel = false;        
        
    /**
     * @var boolean 坐标轴刻度是否朝内，默认朝外。
     */
    public $inside = false;        
        
    /**
     * @var int 坐标轴刻度的长度。
     */
    public $length = 5;        
        
    /**
     * @var AxisTick\LineStyle 
     */
    public $lineStyle;

}