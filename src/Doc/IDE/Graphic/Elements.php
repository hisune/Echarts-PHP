<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Graphic;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type Default: 'group'
 *    Must be specified when define a graphic element at the first time.
 *     Optional values:
 *     image,
 *     text,
 *     circle,
 *     sector,
 *     ring,
 *     polygon,
 *     polyline,
 *     rect,
 *     line,
 *     bezierCurve,
 *     arc,
 *     group,
 *
 * @property string $id Default: 'undefined'
 *    id is used to specifying element when willing to update it.
 *     id can be ignored if you do not need it.
 *
 * @property string $$action Default: 'merge'
 *    Specify the operation should be performed to the element when calling setOption.
 *     Default value is merge, other values can be replace or remove.
 *     Optional values:
 *     
 *     merge: merge the given option to existing element (if any), otherwise create a new element.
 *     replace: create a new element according to the given option and replace the existing element (if any).
 *     remove: delete the existing element (if any).
 *
 * @property array $position Default: '[0, 0]'
 *    2D transform can be applied to graphic elements, including:
 *     
 *     position: [horizontal translate offset, vertical translate offset], [0, 0] by default. Positive value means translate towards right or bottom.
 *     rotation: Rotation in radian, 0 by default. Positive when anticlockwise.
 *     scale: [horizontal scale factor, vertical scale factor], [1, 1] by default.
 *     
 *     origin specifies the origin point of rotation and scaling, [0, 0] by default.
 *     Notice:
 *     
 *     The coordinates specified in the transform attribute above are relative to the [0, 0] of the parent element (that is, group or the root canvas). Thus we are able to group multiple elements, and groups can be nested.
 *     The order that the transform attributes are applied to a single graphic element is: Firstly, rotation, then, scale, finally, position.
 *
 * @property int $rotation Default: 0
 *    2D transform can be applied to graphic elements, including:
 *     
 *     position: [horizontal translate offset, vertical translate offset], [0, 0] by default. Positive value means translate towards right or bottom.
 *     rotation: Rotation in radian, 0 by default. Positive when anticlockwise.
 *     scale: [horizontal scale factor, vertical scale factor], [1, 1] by default.
 *     
 *     origin specifies the origin point of rotation and scaling, [0, 0] by default.
 *     Notice:
 *     
 *     The coordinates specified in the transform attribute above are relative to the [0, 0] of the parent element (that is, group or the root canvas). Thus we are able to group multiple elements, and groups can be nested.
 *     The order that the transform attributes are applied to a single graphic element is: Firstly, rotation, then, scale, finally, position.
 *
 * @property array $scale Default: '[1, 1]'
 *    2D transform can be applied to graphic elements, including:
 *     
 *     position: [horizontal translate offset, vertical translate offset], [0, 0] by default. Positive value means translate towards right or bottom.
 *     rotation: Rotation in radian, 0 by default. Positive when anticlockwise.
 *     scale: [horizontal scale factor, vertical scale factor], [1, 1] by default.
 *     
 *     origin specifies the origin point of rotation and scaling, [0, 0] by default.
 *     Notice:
 *     
 *     The coordinates specified in the transform attribute above are relative to the [0, 0] of the parent element (that is, group or the root canvas). Thus we are able to group multiple elements, and groups can be nested.
 *     The order that the transform attributes are applied to a single graphic element is: Firstly, rotation, then, scale, finally, position.
 *
 * @property int $origin Default: '[0, 0]'
 *    2D transform can be applied to graphic elements, including:
 *     
 *     position: [horizontal translate offset, vertical translate offset], [0, 0] by default. Positive value means translate towards right or bottom.
 *     rotation: Rotation in radian, 0 by default. Positive when anticlockwise.
 *     scale: [horizontal scale factor, vertical scale factor], [1, 1] by default.
 *     
 *     origin specifies the origin point of rotation and scaling, [0, 0] by default.
 *     Notice:
 *     
 *     The coordinates specified in the transform attribute above are relative to the [0, 0] of the parent element (that is, group or the root canvas). Thus we are able to group multiple elements, and groups can be nested.
 *     The order that the transform attributes are applied to a single graphic element is: Firstly, rotation, then, scale, finally, position.
 *
 * @property int|string $left Default: 'undefined'
 *    Specify how to be positioned in its parent.
 *     When the element is at the top level, the parent is the contianer of the chart instance.
 *     Otherwise, the parent is a group element.
 *     Optional values:
 *     
 *     Pixel value: For example, can be a number 30, means 30px.
 *     Percent value: For example, can be a string 33%, means the final result should be calculated by this value and the height of its parent.
 *     center: means position the element in the middle of according to its parent.
 *     
 *     Only one between left and right can work.
 *     If left or right is specified, positioning attributes in shape (like x, cx) will not work.
 *
 * @property int|string $right Default: 'undefined'
 *    Specify how to be positioned in its parent.
 *     When the element is at the top level, the parent is the contianer of the chart instance.
 *     Otherwise, the parent is a group element.
 *     Optional values:
 *     
 *     Pixel value: For example, can be a number 30, means 30px.
 *     Percent value: For example, can be a string 33%, means the final result should be calculated by this value and the height of its parent.
 *     center: means position the element in the middle of according to its parent.
 *     
 *     Only one between left and right can work.
 *     If left or right is specified, positioning attributes in shape (like x, cx) will not work.
 *
 * @property int|string $top Default: 'undefined'
 *    Specify how to be positioned in its parent.
 *     When the element is at the top level, the parent is the contianer of the chart instance.
 *     Otherwise, the parent is a group element.
 *     Optional values:
 *     
 *     Pixel value: For example, can be a number 30, means 30px.
 *     Percent value: For example, can be a string 33%, means the final result should be calculated by this value and the width of its parent.
 *     middle: means position the element in the middle of according to its parent.
 *     
 *     Only one between top and bottom can work.
 *     If top or bottom is specified, positioning attributes in shape (like y, cy) will not work.
 *
 * @property int|string $bottom Default: 'undefined'
 *    Specify how to be positioned in its parent.
 *     When the element is at the top level, the parent is the contianer of the chart instance.
 *     Otherwise, the parent is a group element.
 *     Optional values:
 *     
 *     Pixel value: For example, can be a number 30, means 30px.
 *     Percent value: For example, can be a string 33%, means the final result should be calculated by this value and the width of its parent.
 *     middle: means position the element in the middle of according to its parent.
 *     
 *     Only one between top and bottom can work.
 *     If top or bottom is specified, positioning attributes in shape (like y, cy) will not work.
 *
 * @property strin $bounding Default: 'all'
 *    Used to specify whether the entire transformed element (containing children if is group) is confined in its container.
 *     See sample:
 *     
 *     
 *     
 *     Optional values:
 *     
 *     all: (default)
 *       Use the transformed bounding box of itself and its descentants to perform position calculation, which confine the entire body in the boundary of its parent.
 *     
 *     raw:
 *       Only use the untransformed bounding box of itself (without its descentant) to perform position calculation, which is suitable when the content in the element need to be overflow its parent.
 *
 * @property int $z Default: 0
 *    z value of the elements, determine the overlap order.
 *
 * @property int $zlevel Default: 0
 *    Determine which canvas layer this element should be in.
 *     Notice: Multiple canvas layer may affect performance.
 *
 * @property * $info
 *    User defined data, can be visited in event listeners.
 *     chart.on(click, function (params) {
 *         console.log(params.info);
 *     });
 *
 * @property boolean $silent Default: false
 *    Whether response to mouse events / touch events.
 *
 * @property boolean $invisible Default: false
 *    Whether the element is visible.
 *
 * @property boolean $ignore Default: false
 *    Whether the element is totally ignored (neither render nor listen events).
 *
 * @property string $cursor Default: 'pointer'
 *    The mouse style when mouse hovers on an element, the same as cursor property in CSS.
 *
 * @property boolean $draggable Default: false
 *    Can be dragged or not.
 *
 * @property boolean $progressive Default: false
 *    Whether use progressive render to improve performance. Usually used when number of element is too large.
 *
 * @property int $width Default: 0
 *    Specify width of this group.
 *     This width is only used for the positioning of its children.
 *     When width is 0, children can also be positioned according to its parent using left: center.
 *
 * @property int $height Default: 0
 *    Specify height of this group.
 *     This height is only used for the positioning of its children.
 *     When height is 0, children can also be positioned according to its parent using top: middle.
 *
 * @property boolean $diffChildrenByName Default: false
 *    In custom series, when diffChildrenByName is set as true, for each group returned from renderItem, diff will be performed to its children according to the name attribute of each graphic elements. Here diff means that map the coming graphic elements to the existing graphic elements when repainting according to name, which enables the transition animation if data is modified.
 *     But notice that the operation is performance consuming, do not use it for large data amount.
 *
 * @property array $children
 *    A list of children, each item is a declaration of an element.
 *
 * @property callable $onclick
 *    
 *
 * @property callable $onmouseover
 *    
 *
 * @property callable $onmouseout
 *    
 *
 * @property callable $onmousemove
 *    
 *
 * @property callable $onmousewheel
 *    
 *
 * @property callable $onmousedown
 *    
 *
 * @property callable $onmouseup
 *    
 *
 * @property callable $ondrag
 *    
 *
 * @property callable $ondragstart
 *    
 *
 * @property callable $ondragend
 *    
 *
 * @property callable $ondragenter
 *    
 *
 * @property callable $ondragleave
 *    
 *
 * @property callable $ondragover
 *    
 *
 * @property callable $ondrop
 *    
 *
 * @property Elements\Style $style
 *    
 *
 * @property Elements\Shape $shape
 *    
 *
 * {_more_}
 */
class Elements extends Property {}