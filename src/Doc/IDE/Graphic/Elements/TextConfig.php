<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Graphic\Elements;

use Hisune\EchartsPHP\Property;

/**
 * @property  $position Default: 'inside'
 *    Position of textContent.
 *     
 *     left
 *     right
 *     top
 *     bottom
 *     inside
 *     insideLeft
 *     insideRight
 *     insideTop
 *     insideBottom
 *     insideTopLeft
 *     insideTopRight
 *     insideBottomLeft
 *     insideBottomRight
 *     or like [12, 33]
 *     or like [50%, 50%]
 *
 * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property int $distance Default: 5
 *    Distance to the layoutRect。
 *
 * @property boolean $local Default: false
 *    If true, it will apply hosts transform.
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 *  * @property int $rotation
 *    Rotation of textContent. In radian.
 *
 * @property array $layoutRect
 *    Rect that textContent will be positioned.
 *     Default to be the bounding box of host element.
 *     {
 *         x: number
 *         y: number
 *         width: number
 *         height: number
 *     }
 *
 * @property array $offset
 *    Offset of the textContent.
 *     The difference of offset and position is that offset will be applied in the rotation.
 *
 * @property * $origin
 *    origin is relative to the bounding box of the host element.
 *     Can be percent value. Relative to the bounding box.
 *     If center specified, it will be center of the bounding box.
 *     Only available when position and rotation are both set.
 *     
 *     like [12, 33]
 *     or like [50%, 50%]
 *     center
 *
 * @property string $insideFill
 *    insideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.insideFill &gt; auto-calculated-fill
 *     In most cases, auto-calculated-fill is white.
 *
 * @property string $insideStroke
 *    insideStroke is a color string or left empty.
 *     If a textContent is inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.insideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be the same as fill of this element if possible, or null.
 *
 * @property string $outsideFill
 *    outsideFill is a color string or left empty.
 *     If a textContent is inside, its final fill will be picked by this priority:
 *     textContent.style.fill &gt; textConfig.outsideFill &gt; #000
 *
 * @property string $outsideStroke
 *    outsideStroke is a color string or left empty.
 *     If a textContent is not inside, its final stroke will be picked by this priority:
 *     textContent.style.stroke &gt; textConfig.outsideStroke &gt; auto-calculated-stroke
 *     The rule of getting auto-calculated-stroke:
 *     
 *     If
 *     (A) the fill is specified in style (either in textContent.style or textContent.style.rich)
 *     or (B) needed to draw text background (either defined in textContent.style or textContent.style.rich)
 *     auto-calculated-stroke will be null.
 *     
 *     
 *     Otherwise
 *     auto-calculated-stroke will be a near white color to distinguish front end label with messy background (like other text label, line or other graphic).
 *
 * @property boolean $inside
 *    Tell echarts that I can make sure this text is inside or not.
 *
 * {_more_}
 */
class TextConfig extends Property {}