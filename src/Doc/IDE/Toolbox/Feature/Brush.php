<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

class Brush
{            
        
    /**
     * @var array Icons used, whose values are:
     * 
     * rect: Enabling selecting with rectangle area.
     * polygon: Enabling selecting with any shape.
     * lineX: Enabling horizontal selecting.
     * lineY: Enabling vertical selecting.
     * keep: Switching between single selecting and multiple selecting. The latter one can select multiple areas, while the former one cancels previous selection.
     * clear: Clearing all selection.
     */
    public $type;        
        
    /**
     * @var Brush\Icon Icon path for each icon.
     */
    public $icon;        
        
    /**
     * @var Brush\Title Title.
     */
    public $title;

}