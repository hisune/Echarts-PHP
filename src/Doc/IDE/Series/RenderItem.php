<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property RenderItem\Arguments $arguments
 *    Parameters of renderItem.
 *
 * @property array $return
 *    renderItem should returns graphic element definitions. Each graphic element is an object. See graphic for detailed info. (But width\height\top\bottom is not supported here)
 *     If nothing should be rendered in this data item, just returns nothing.
 *     For example:
 *     // Returns a rectangular.
 *     {
 *         type: rect,
 *         shape: {
 *             x: x, y: y, width: width, height: height
 *         },
 *         style: api.style()
 *     }
 *     
 *     // Returns a group of elements.
 *     {
 *         type: group,
 *         // If diffChildrenByName is set as `true`, `child.name` will be used
 *         // to diff children, which improves animation transition but degrade
 *         // performance. The default value is `false`.
 *         // diffChildrenByName: true,
 *         children: [{
 *             type: circle,
 *             shape: {
 *                 cx: cx, cy: cy, r: r
 *             },
 *             style: api.style()
 *         }, {
 *             type: line,
 *             shape: {
 *                 x1: x1, y1: y1, x2: x2, y2: y2
 *             },
 *             style: api.style()
 *         }]
 *     }
 *
 * @property RenderItem\Return_group $return_group
 *    group is the only type that can contain children, so that a group of elements can be positioned and transformed together.
 *
 * @property RenderItem\Return_path $return_path
 *    Use SVG PathData to describe a path. Can be used to draw icons or any other shapes fitting the specified size by auto transforming.
 *     See examples:
 *     icons and shapes.
 *     About width/height, cover/contain, see
 *     layout.
 *
 * @property RenderItem\Return_image $return_image
 *    
 *
 * @property RenderItem\Return_text $return_text
 *    Text block.
 *
 * @property RenderItem\Return_rect $return_rect
 *    Rectangle element.
 *
 * @property RenderItem\Return_circle $return_circle
 *    Circle element.
 *
 * @property RenderItem\Return_ring $return_ring
 *    Ring element.
 *
 * @property RenderItem\Return_sector $return_sector
 *    Sector element.
 *
 * @property RenderItem\Return_arc $return_arc
 *    Arc element.
 *
 * @property RenderItem\Return_polygon $return_polygon
 *    Polygon element.
 *
 * @property RenderItem\Return_polyline $return_polyline
 *    Polyline element.
 *
 * @property RenderItem\Return_line $return_line
 *    Line element.
 *
 * @property RenderItem\Return_bezierCurve $return_bezierCurve
 *    Quadratic bezier curve or cubic bezier curve.
 *
 * {_more_}
 */
class RenderItem extends Property {}