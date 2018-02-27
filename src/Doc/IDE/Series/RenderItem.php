<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property RenderItem\Arguments $arguments
 *    renderItem 函数的参数。
 *
 * @property array $return
 *    图形元素。每个图形元素是一个 object。详细信息参见：graphic。（width\height\top\bottom 不支持）
 *     如果什么都不渲染，可以不返回任何东西。
 *     例如：
 *     // 单独一个矩形
 *     {
 *         type: rect,
 *         shape: {
 *             x: x, y: y, width: width, height: height
 *         },
 *         style: api.style()
 *     }
 *     
 *     // 一组图形元素
 *     {
 *         type: group,
 *         // 如果 diffChildrenByName 设为 true，则会使用 child.name 进行 diff，
 *         // 从而能有更好的过度动画，但是降低性能。缺省为 false。
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
 * {_more_}
 */
class RenderItem extends Property {}