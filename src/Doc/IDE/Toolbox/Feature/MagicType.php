<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

class MagicType
{            
        
    /**
     * @var boolean 是否显示该工具。
     */
    public $show = true;        
        
    /**
     * @var array 启用的动态类型，包括line（切换为折线图）, bar（切换为柱状图）, stack（切换为堆叠模式）, tiled（切换为平铺模式）。
     */
    public $type;        
        
    /**
     * @var MagicType\Title 各个类型的标题文本，可以分别配置。
     */
    public $title;        
        
    /**
     * @var MagicType\Icon 各个类型的 icon path，可以分别配置。
     */
    public $icon;        
        
    /**
     * @var MagicType\IconStyle 动态类型切换 icon 样式设置。
     */
    public $iconStyle;        
        
    /**
     * @var MagicType\Option 各个类型的专有配置项。在切换到某类型的时候会合并相应的配置项。
     */
    public $option;        
        
    /**
     * @var MagicType\SeriesIndex 各个类型对应的系列的列表。
     */
    public $seriesIndex;

}