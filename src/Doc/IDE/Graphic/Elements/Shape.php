<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Graphic\Elements;

class Shape
{            
        
    /**
     * @var int 开始点的 x 值。
     */
    public $x1 = 0;        
        
    /**
     * @var int 开始点的 y 值。
     */
    public $y1 = 0;        
        
    /**
     * @var int 结束点的 x 值。
     */
    public $x2 = 0;        
        
    /**
     * @var int 结束点的 y 值。
     */
    public $y2 = 0;        
        
    /**
     * @var int 控制点 x 值。
     */
    public $cpx1 = 0;        
        
    /**
     * @var int 控制点 y 值。
     */
    public $cpy1 = 0;        
        
    /**
     * @var int 第二个控制点 x 值。如果设置则开启三阶贝塞尔曲线。
     */
    public $cpx2;        
        
    /**
     * @var int 第二个控制点 y 值。如果设置则开启三阶贝塞尔曲线。
     */
    public $cpy2;        
        
    /**
     * @var int 画到百分之多少就不画了。值的范围：[0, 1]。
     */
    public $percent = 1;

}