<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

class DataZoom
{            
        
    /**
     * @var boolean Whether to show the tool.
     */
    public $show = true;        
        
    /**
     * @var DataZoom\Title Restored and zoomed title text.
     */
    public $title;        
        
    /**
     * @var DataZoom\Icon Zooming and restore icon path.
     */
    public $icon;        
        
    /**
     * @var DataZoom\IconStyle The style setting of data area zooming icon.
     */
    public $iconStyle;        
        
    /**
     * @var int|array|boolean Defines which xAxis should be controlled. By default, it controls all x axes. If it is set to be false, then no x axis is controlled. If it is set to be then it controls axis with axisIndex of 3. If it is set to be [0, 3], it controls the x-axes with axisIndex of 0 and 3.
     */
    public $xAxisIndex;        
        
    /**
     * @var int|array|boolean Defines which yAxis should be controlled. By default, it controls all y axes. If it is set to be false, then no y axis is controlled. If it is set to be then it controls axis with axisIndex of 3. If it is set to be [0, 3], it controls the x-axes with axisIndex of 0 and 3.
     */
    public $yAxisIndex;

}