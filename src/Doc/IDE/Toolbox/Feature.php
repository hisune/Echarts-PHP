<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox;

class Feature
{            
        
    /**
     * @var Feature\SaveAsImage Save as image.
     */
    public $saveAsImage;        
        
    /**
     * @var Feature\Restore Restore configuration item.
     */
    public $restore;        
        
    /**
     * @var Feature\DataView Data view tool, which could display data in current chart and updates chart after being edited.
     */
    public $dataView;        
        
    /**
     * @var Feature\DataZoom Data area zooming, which only supports rectangular coordinate by now.
     */
    public $dataZoom;        
        
    /**
     * @var Feature\MagicType Magic type switching.
     * 示例: 
     * feature: {
     *     magicType: {
     *         type: [line, bar, stack, tiled]
     *     }
     * }
     */
    public $magicType;        
        
    /**
     * @var Feature\Brush Brush-selecting icon.
     * It can also be configured at brush.toolbox.
     */
    public $brush;

}