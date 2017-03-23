<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

class Graphic
{            
        
    /**
     * @var Array A list of all graphic elements.
     * Note, the standard configuration of graphic component is:
     * {
     *     graphic: {
     *         elements: [
     *             {type: rect, ...}, {type: circle, ...}, ...
     *         ]
     *     }
     * }
     * 
     * But we always use short patterns for convenience:
     * {
     *     graphic: { // Declare only one graphic element.
     *         type: rect,
     *         ...
     *     }
     * }
     * 
     * Or:
     * {
     *     graphic: [ // Declare multiple graphic elements.
     *         {type: rect, ...}, {type: circle, ...}, ...
     *     ]
     * }
     */
    public $elements;

}