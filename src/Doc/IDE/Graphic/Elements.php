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
 * @property int $x Default: 0
 *    x position of element. In pixels.
 *
 * @property int $y Default: 0
 *    y position of element. In pixels.
 *
 * @property int $rotation Default: 0
 *    Degree value of rotation.
 *
 * @property int $scaleX Default: 1
 *    Scale on x.
 *
 * @property int $scaleY Default: 1
 *    Scale on y.
 *
 * @property int $originX Default: 0
 *    x value of element scale and rotation origin. In pixels
 *
 * @property int $originY Default: 0
 *    y value of element scale and rotation origin. In pixels.
 *
 * @property string|array $transition Default: '[\'x\', \'y\']'
 *    You can specify that all properties have transition animations turned on with `all, or you can specify a single property or an array of properties.
 *     The properties can be:
 *     Transform related properties:x, y, scaleX, scaleY, rotation, originX, originY. For example:
 *     {
 *         type: rect,
 *         x: 100,
 *         y: 200,
 *         transition: [x, y]
 *     }
 *     
 *     Shortcut to transition all of the properties in shape, style, extra. For example:
 *     {
 *         type: rect,
 *         shape: { // ... },
 *         // Indicate that all props in `shape` will
 *         // have transition animation.
 *         transition: shape,
 *     }
 *     
 *     In the custom series. x and y are transitioned by default. If you want to disable the default transition, just set it as: transition: [].
 *     See this example please.
 *
 * @property array $enterFrom
 *    Initial properties for enter animation.
 *     Example:
 *     {
 *         type: circle,
 *         x: 100,
 *         enterFrom: {
 *             // Fade in
 *             style: { opacity: 0 },
 *             // Slide in from left
 *             x: 0
 *         }
 *     }
 *
 * @property array $leaveTo
 *    End properties for leave animation.
 *     Example:
 *     {
 *         type: circle,
 *         x: 100,
 *         leaveTo: {
 *             // Fade out
 *             style: { opacity: 0 },
 *             // Slide out to right
 *             x: 200
 *         }
 *     }
 *
 * @property Elements\EnterAnimation $enterAnimation
 *    Configurations of enter animation.
 *
 * @property Elements\UpdateAnimation $updateAnimation
 *    Configurations of update animation.
 *
 * @property Elements\LeaveAnimation $leaveAnimation
 *    Configurations of leave animation.
 *
 * @property Elements\KeyframeAnimation $keyframeAnimation
 *    Configurations of keyframe based animation. Support for configuring an array to use multiple keyframe animations at the same time.
 *     Example:
 *     keyframeAnimation: [{
 *         // Using scale for breath animation.
 *         duration: 1000,
 *         loop: true,
 *         keyframes: [{
 *             percent: 0.5,
 *             easing: sinusoidalInOut,
 *             scaleX: 0.1,
 *             scaleY: 0.1
 *         }, {
 *             percent: 1,
 *             easing: sinusoidalInOut,
 *             scaleX: 1,
 *             scaleY: 1
 *         }]
 *     }, {
 *         // Translate animation.
 *         duration: 2000,
 *         loop: true,
 *         keyframes: [{
 *             percent: 0,
 *             x: 10
 *         }, {
 *             percent: 1,
 *             x: 100
 *         }]
 *     }]
 *     
 *     
 *     If both keyframe animation and transition animation are applied to a property, the transition animation is ignored.
 *
 * @property int|string $left Default: 'undefined'
 *    Specify how to be positioned in its parent.
 *     When the element is at the top level, the parent is the container of the chart instance.
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
 *     When the element is at the top level, the parent is the container of the chart instance.
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
 *     When the element is at the top level, the parent is the container of the chart instance.
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
 *     When the element is at the top level, the parent is the container of the chart instance.
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
 * @property string $bounding Default: 'all'
 *    Used to specify whether the entire transformed element (containing children if is group) is confined in its container.
 *     See sample:
 *     
 *     
 *     
 *     Optional values:
 *     
 *     all: (default)
 *       Use the transformed bounding box of itself and its descendants to perform position calculation, which confine the entire body in the boundary of its parent.
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
 * @property array $textContent
 *    Text block attached to an element and layout based on the element by textConfig.
 *     The props the the same as text.
 *
 * @property Elements\TextConfig $textConfig
 *    
 *
 * @property callable $during
 *    during callback enable users to set props to an element in each animation frame.
 *     (duringAPI: CustomDuringAPI) =&gt; void
 *     
 *     interface CustomDuringAPI {
 *         // Set transform prop value.
 *         // Transform prop see `TransformProp`.
 *         setTransform(key: TransformProp, val: unknown): void;
 *         // Get transform prop value of the current animation frame.
 *         getTransform(key: TransformProp): unknown;
 *         // Set shape prop value.
 *         // Shape prop is like `{ type: rect, shape: { xxxProp: xxxValue } }`.
 *         setShape(key: string, val: unknown): void;
 *         // Get shape prop value of the current animation frame.
 *         getShape(key: string): unknown;
 *         // Set style prop value.
 *         // Style prop is like `{ type: rect, style: { xxxProp: xxxValue } }`.
 *         setStyle(key: string, val: unknown): void;
 *         // Get style prop value of the current animation frame.
 *         getStyle(key: string): unknown;
 *         // Set extra prop value.
 *         // Extra prop is like `{ type: rect, extra: { xxxProp: xxxValue } }`.
 *         setExtra(key: string, val: unknown): void;
 *         // Get extra prop value of the current animation frame.
 *         getExtra(key: string): unknown;
 *     }
 *     
 *     type TransformProp =
 *         x | y | scaleX | scaleY | originX | originY | rotation;
 *     
 *     In most cases users do not need this during callback. For example, if some props are specified in transition, echarts will make interpolation for these props internally and therefore have animation based on these props automatically. But if this kind of internal interpolation does not match the user requirements of animation, users can use this during callback to customize them.
 *     For example, if users are using polygon shape. The shape is described by shape.points, which is an points array like:
 *     {
 *         type: polygon,
 *         shape: {
 *             points: [[12, 33], [15, 36], [19, 39], ...]
 *         },
 *         // ...
 *     }
 *     
 *     If users specify them into transition like:
 *     {
 *         type: polygon,
 *         shape: {
 *             points: [[12, 33], [15, 36], [19, 39], ...],
 *         },
 *         transition: shape
 *         // ...
 *     }
 *     
 *     Although the points will be interpolated, the consequent animation will be like that each point runs straight to the target position, which might do not match the user requirement if some kind of track like spiral is actually needed. In this case, users can use the during callback like that:
 *     {
 *         type: polygon,
 *         shape: {
 *             points: calculatePoints(initialDegree),
 *             transition: points
 *         },
 *         extra: {
 *             degree: nextDegree
 *         },
 *         // Make echarts interpolate `extra.degree` internally, based on which
 *         // we calculate the `points` in each animation frame.
 *         transition: extra,
 *         during: function (duringAPI) {
 *             var currentDegree = duringAPI.getExtra(degree);
 *             duringAPI.setShape(calculatePoints(currentDegree));
 *         }
 *         // ...
 *     }
 *     
 *     See this example example.
 *
 * @property string $cursor Default: 'pointer'
 *    
 *     
 *     The mouse style when mouse hovers on an element, the same as cursor property in CSS.
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
 * @property string $focus Default: 'none'
 *    
 *     Since v5.0.0
 *     
 *     When its highlighted, whether to fade out of other data to focus the highlighted. The following configurations are supported:
 *     
 *     none Do not fade out other data, its by default.
 *     self Only focus (not fade out) the element of the currently highlighted data.
 *     series Focus on all elements of the series which the currently highlighted data belongs to.
 *
 * @property string $blurScope Default: 'coordinateSystem'
 *    
 *     Since v5.0.0
 *     
 *     The range of fade out when focus is enabled. Support the following configurations
 *     
 *     coordinateSystem
 *     series
 *     global
 *
 * @property Elements\Shape $shape
 *    
 *
 * {_more_}
 */
class Elements extends Property {}