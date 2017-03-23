<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Radar;

class AxisTick
{            
        
    /**
     * @var boolean Whether to show the axis tick.
     */
    public $show = false;        
        
    /**
     * @var boolean Align axis tick with label, which is available only when boundaryGap is set to be true in category axis. See the following picture:
     */
    public $alignWithLabel = false;        
        
    /**
     * @var boolean Specifies whether the axis label faces Inside. False by default.
     */
    public $inside = false;        
        
    /**
     * @var int The length of the axis tick.
     */
    public $length = 5;        
        
    /**
     * @var AxisTick\LineStyle 
     */
    public $lineStyle;

}