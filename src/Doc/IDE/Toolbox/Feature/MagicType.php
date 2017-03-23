<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

class MagicType
{            
        
    /**
     * @var boolean Whether to show the tool.
     */
    public $show = true;        
        
    /**
     * @var array Enabled magic types, including line (for line charts), bar (for bar charts), stack (for stacked charts), and tiled (for tiled charts).
     */
    public $type;        
        
    /**
     * @var MagicType\Title Title for different types, can be configured seperately.
     */
    public $title;        
        
    /**
     * @var MagicType\Icon the different types of icon path , which could be configurated individually.
     */
    public $icon;        
        
    /**
     * @var MagicType\IconStyle The style setting of magic type switching icon.
     */
    public $iconStyle;        
        
    /**
     * @var MagicType\Option Configuration item for each type, which will be used when switching to certain type.
     */
    public $option;        
        
    /**
     * @var MagicType\SeriesIndex Series list for each type.
     */
    public $seriesIndex;

}