<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Graphic
{            
        
    /**
     * @var array 里面是所有图形元素的集合。
     * 注意：graphic 的标准写法是：
     * {
     *     graphic: {
     *         elements: [
     *             {type: rect, ...}, {type: circle, ...}, ...
     *         ]
     *     }
     * }
     * 
     * 但是我们常常可以用简写：
     * {
     *     graphic: {
     *         type: rect,
     *         ...
     *     }
     * }
     * 
     * 或者：
     * {
     *     graphic: [
     *         {type: rect, ...}, {type: circle, ...}, ...
     *     ]
     * }
     */
    public $elements;

}