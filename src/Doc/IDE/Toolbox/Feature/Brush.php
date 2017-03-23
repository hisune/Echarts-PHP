<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

class Brush
{            
        
    /**
     * @var array 使用的按钮，取值：
     * 
     * rect：开启矩形选框选择功能。
     * polygon：开启任意形状选框选择功能。
     * lineX：开启横向选择功能。
     * lineY：开启纵向选择功能。
     * keep：切换『单选』和『多选』模式。后者可支持同时画多个选框。前者支持单击清除所有选框。
     * clear：清空所有选框。
     */
    public $type;        
        
    /**
     * @var Brush\Icon 每个按钮的 icon path。
     */
    public $icon;        
        
    /**
     * @var Brush\Title 标题文本。
     */
    public $title;

}