<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

class SaveAsImage
{            
        
    /**
     * @var string 保存的图片格式。支持 png 和 jpeg。
     */
    public $type = 'png';        
        
    /**
     * @var string 保存的文件名称，默认使用 title.text 作为名称。
     */
    public $name;        
        
    /**
     * @var string 保存的图片背景色，默认使用 backgroundColor，如果backgroundColor不存在的话会取白色。
     */
    public $backgroundColor = 'auto';        
        
    /**
     * @var array 保存为图片时忽略的组件列表，默认忽略工具栏。
     */
    public $excludeComponents = '[\'toolbox\']';        
        
    /**
     * @var boolean 是否显示该工具。
     */
    public $show = true;        
        
    /**
     * @var boolean 
     */
    public $title = '保存为图片';        
        
    /**
     * @var * Icon 的 path 字符串，ECharts 3 中支持使用自定义的 svg path 作为 icon，格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
     */
    public $icon;        
        
    /**
     * @var SaveAsImage\IconStyle 保存为图片 icon 样式设置。
     */
    public $iconStyle;        
        
    /**
     * @var int 保存图片的分辨率比例，默认跟容器相同大小，如果需要保存更高分辨率的，可以设置为大于 1 的值，例如 2。
     */
    public $pixelRatio = 1;

}