<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

class Label
{            
        
    /**
     * @var string|int Configurations:
     * 
     * auto: 
     *   Automatic layout.
     * 
     * left: 
     *   Put it along the left margin.
     *   It is valid when timline.orient is set as horizontal .
     * 
     * right: 
     *   Put it along the right margin.
     *   It is valid when timline.orient is set as horizontal.
     * 
     * top: 
     *   Put it along the margin of the top.
     *   It is valid when timline.orient is set as vertical.
     * 
     * bottom: 
     *   Put it along the margin of the bottom.
     *   It is valid when timline.orient is set as vertical.
     * 
     * number: 
     *   When it is assigned to be a a number value, it indicates the distance between label and axis. If it is set to be 0 , label would be at the same position with axis. Negative value is valid for the other side of the axis.
     */
    public $position = 'auto';        
        
    /**
     * @var Label\Normal 
     */
    public $normal;        
        
    /**
     * @var Label\Emphasis 
     */
    public $emphasis;

}