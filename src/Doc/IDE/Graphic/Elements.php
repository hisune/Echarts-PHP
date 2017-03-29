<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Graphic;

class Elements
{            
        
    /**
     * @var string 用 setOption 首次设定图形元素时必须指定。
     * 可取值：
     * image,
     * text,
     * circle,
     * sector,
     * ring,
     * polygon,
     * polyline,
     * rect,
     * line,
     * bezierCurve,
     * arc,
     * group,
     */
    public $type = 'group';        
        
    /**
     * @var string id 用于在更新或删除图形元素时指定更新哪个图形元素，如果不需要用可以忽略。
     */
    public $id = 'undefined';        
        
    /**
     * @var string setOption 时指定本次对该图形元素的操作行为。
     * 可取值：
     * 
     * merge：如果已有元素，则新的配置项和已有的设定进行 merge。如果没有则新建。
     * replace：如果已有元素，删除之，新建元素替代之。
     * remove：删除元素。
     */
    public $$action = 'merge';        
        
    /**
     * @var int|string 描述怎么根据父元素进行定位。
     * 『父元素』是指：如果是顶层元素，父元素是 echarts 图表容器。如果是 group 的子元素，父元素就是 group 元素。
     * 值的类型可以是：
     * 
     * number：表示像素值。
     * 百分比值：如 33%，用父元素的高和此百分比计算出最终值。
     * center：表示自动居中。
     * 
     * left 和 right 只有一个可以生效。
     * 如果指定 left 或 right，则 shape 里的 x、cx 等定位属性不再生效。
     */
    public $left = 'undefined';        
        
    /**
     * @var int|string 描述怎么根据父元素进行定位。
     * 『父元素』是指：如果是顶层元素，父元素是 echarts 图表容器。如果是 group 的子元素，父元素就是 group 元素。
     * 值的类型可以是：
     * 
     * number：表示像素值。
     * 百分比值：如 33%，用父元素的高和此百分比计算出最终值。
     * center：表示自动居中。
     * 
     * left 和 right 只有一个可以生效。
     * 如果指定 left 或 right，则 shape 里的 x、cx 等定位属性不再生效。
     */
    public $right = 'undefined';        
        
    /**
     * @var int|string 描述怎么根据父元素进行定位。
     * 『父元素』是指：如果是顶层元素，父元素是 echarts 图表容器。如果是 group 的子元素，父元素就是 group 元素。
     * 值的类型可以是：
     * 
     * number：表示像素值。
     * 百分比值：如 33%，用父元素的宽和此百分比计算出最终值。
     * middle：表示自动居中。
     * 
     * top 和 bottom 只有一个可以生效。
     * 如果指定 top 或 bottom，则 shape 里的 y、cy 等定位属性不再生效。
     */
    public $top = 'undefined';        
        
    /**
     * @var int|string 描述怎么根据父元素进行定位。
     * 『父元素』是指：如果是顶层元素，父元素是 echarts 图表容器。如果是 group 的子元素，父元素就是 group 元素。
     * 值的类型可以是：
     * 
     * number：表示像素值。
     * 百分比值：如 33%，用父元素的宽和此百分比计算出最终值。
     * middle：表示自动居中。
     * 
     * top 和 bottom 只有一个可以生效。
     * 如果指定 top 或 bottom，则 shape 里的 y、cy 等定位属性不再生效。
     */
    public $bottom = 'undefined';        
        
    /**
     * @var strin 决定此图形元素在定位时，对自身的包围盒计算方式。
     * 参见例子：
     * 
     * 
     * 
     * 可取值：
     * 
     * all：（默认）
     *   表示用自身以及子节点整体的经过 transform 后的包围盒进行定位。
     *   这种方式易于使整体都限制在父元素范围中。
     * 
     * raw：
     *   表示仅仅用自身（不包括子节点）的没经过 tranform 的包围盒进行定位。
     *   这种方式易于内容超出父元素范围的定位方式。
     */
    public $bounding = 'all';        
        
    /**
     * @var int z 方向的高度，决定层叠关系。
     */
    public $z = 0;        
        
    /**
     * @var int 决定此元素绘制在哪个 canvas 层中。注意，越多 canvas 层会占用越多资源。
     */
    public $zlevel = 0;        
        
    /**
     * @var boolean 是否不响应鼠标以及触摸事件。
     */
    public $silent = false;        
        
    /**
     * @var boolean 节点是否可见。
     */
    public $invisible = false;        
        
    /**
     * @var string 鼠标悬浮时鼠标的样式是什么。同 CSS 的 cursor。
     */
    public $cursor = 'pointer';        
        
    /**
     * @var boolean 图形元素是否可以被拖拽。
     */
    public $draggable = false;        
        
    /**
     * @var boolean 是否渐进式渲染。当图形元素过多时才使用。
     */
    public $progressive = false;        
        
    /**
     * @var int 用于描述此 group 的宽。
     * 这个宽只用于给子节点定位。
     * 即便当宽度为零的时候，子节点也可以使用 left: center 相对于父节点水平居中。
     */
    public $width = 0;        
        
    /**
     * @var int 用于描述此 group 的高。
     * 这个高只用于给子节点定位。
     * 即便当高度为零的时候，子节点也可以使用 top: middle 相对于父节点垂直居中。
     */
    public $height = 0;        
        
    /**
     * @var array 子节点列表，其中项都是一个图形元素定义。
     */
    public $children;        
        
    /**
     * @var callable 
     */
    public $onclick;        
        
    /**
     * @var callable 
     */
    public $onmouseover;        
        
    /**
     * @var callable 
     */
    public $onmouseout;        
        
    /**
     * @var callable 
     */
    public $onmousemove;        
        
    /**
     * @var callable 
     */
    public $onmousewheel;        
        
    /**
     * @var callable 
     */
    public $onmousedown;        
        
    /**
     * @var callable 
     */
    public $onmouseup;        
        
    /**
     * @var callable 
     */
    public $ondrag;        
        
    /**
     * @var callable 
     */
    public $ondragstart;        
        
    /**
     * @var callable 
     */
    public $ondragend;        
        
    /**
     * @var callable 
     */
    public $ondragenter;        
        
    /**
     * @var callable 
     */
    public $ondragleave;        
        
    /**
     * @var callable 
     */
    public $ondragover;        
        
    /**
     * @var callable 
     */
    public $ondrop;        
        
    /**
     * @var Elements\Style 
     */
    public $style;        
        
    /**
     * @var Elements\Shape 
     */
    public $shape;

}