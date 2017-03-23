<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox;

class Feature
{            
        
    /**
     * @var Feature\SaveAsImage 保存为图片。
     */
    public $saveAsImage;        
        
    /**
     * @var Feature\Restore 配置项还原。
     */
    public $restore;        
        
    /**
     * @var Feature\DataView 数据视图工具，可以展现当前图表所用的数据，编辑后可以动态更新。
     */
    public $dataView;        
        
    /**
     * @var Feature\DataZoom 数据区域缩放。目前只支持直角坐标系的缩放。
     */
    public $dataZoom;        
        
    /**
     * @var Feature\MagicType 动态类型切换
     * 示例：
     * feature: {
     *     magicType: {
     *         type: [line, bar, stack, tiled]
     *     }
     * }
     */
    public $magicType;        
        
    /**
     * @var Feature\Brush 选框组件的控制按钮。
     * 也可以不在这里指定，而是在 brush.toolbox 中指定。
     */
    public $brush;

}