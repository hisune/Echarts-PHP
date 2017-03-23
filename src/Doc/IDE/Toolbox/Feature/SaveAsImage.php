<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

class SaveAsImage
{            
        
    /**
     * @var string Format to save the image in, which supportspng and jpeg.
     */
    public $type = 'png';        
        
    /**
     * @var string Name to save the image, whose default value is title.text.
     */
    public $name;        
        
    /**
     * @var string Background color to save the image, whose default value is backgroundColor. If backgroundColor is not set, white color is used.
     */
    public $backgroundColor = 'auto';        
        
    /**
     * @var array Components to be excluded when export. By default, toolbox is excluded.
     */
    public $excludeComponents = '[\'toolbox\']';        
        
    /**
     * @var boolean Whether to show the tool.
     */
    public $show = true;        
        
    /**
     * @var boolean 
     */
    public $title = 'save as image';        
        
    /**
     * @var * Path string for icon. In ECharts 3, user-defined svg path is supported to be used as icon, whose format could be refered at SVG PathData. It could be edited and exported from some graphic tools such as Adobe Illustrator.
     */
    public $icon;        
        
    /**
     * @var SaveAsImage\IconStyle The style setting of save as image icon.
     */
    public $iconStyle;        
        
    /**
     * @var int Resolution ratio to save image, whose default value is that of the container. Values larger than 1 (e.g.: 2) is supported when you need higher resolution.
     */
    public $pixelRatio = 1;

}