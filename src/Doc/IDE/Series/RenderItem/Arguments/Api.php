<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\RenderItem\Arguments;

use Hisune\EchartsPHP\Property;

/**
 * @property callable $value
 *    Get value on the given dimension.
 *     @param {number} dimension The given dimension. (index from 0).
 *     @param {number} [dataIndexInside] In most cases it is not necessary.
 *     @return {number} The value.
 *
 * @property callable $coord
 *    Convert data to coordinate.
 *     @param {Array.&lt;number&gt;} data.
 *     @return {Array.&lt;number&gt;} Point on canvas, at least includes [x, y].
 *             In polar, it also contains:
 *             polar: [x, y, radius, angle]
 *
 * @property callable $size
 *    Get the size by the given data range.
 *     For example, in cartesian2d, suppose calling api.size([2, 4]) returns [12.4, 55]. It represents that on x axis, data range 2 corresponds to size 12.4, and on y axis data range 4 corresponds to size 55.
 *     In some coordinate systems (for example, polar) or when log axis is used, the size is different in different point. So the second parameter is necessary to calculate size on the given point.
 *     @param {Array.&lt;number&gt;} dataSize Data range.
 *     @param {Array.&lt;number&gt;} dataItem The point where the size will be calculated.
 *     @return {Array.&lt;number&gt;} The size.
 *
 * @property callable $style
 *    The method obtains style info defined in series.itemStyle, and visual info obtained by visual mapping, and return them. Those returned info can be assigned to style attribute of graphic element definition directly. Developers can also override style info by calling this method like this: api.style({fill: green, stroke: yellow}).
 *     @param {Object} [extra] Extra style info.
 *     @param {number} [dataIndexInside] In most cases, this parameter is not necessary.
 *     @return {Object} Style info, which can be assigned to `style` attribute of graphic element definition directly.
 *
 * @property callable $styleEmphasis
 *    The method obtains style info defined in series.itemStyle.emphasis, and visual info obtained by visual mapping, and return them. Those returned info can be assigned to style attribute of graphic element definition directly. Developers can also override style info by calling this method like this: api.style({fill: green, stroke: yellow}).
 *     @param {Object} [extra] Extra style info.
 *     @param {number} [dataIndexInside] In most cases, this parameter is not necessary.
 *     @return {Object} Style info, which can be assigned to `style` attribute of graphic element definition directly.
 *
 * @property callable $visual
 *    Get the visual info. It is rarely be used.
 *     @param {string} visualType color, symbol, symbolSize, ...
 *     @param {number} [dataIndexInside] In most cases, this parameter is not necessary.
 *     @return {string|number} The value of visual.
 *
 * @property callable $barLayout
 *    When barLayout is needed, (for example, when attaching some extra graphic elements to bar chart), this method can be used to obtain bar layout info.
 *     See a sample.
 *     @param {Object} opt
 *     @param {number} opt.count How many bars in each group.
 *     @param {number|string} [opt.barWidth] Width of a bar.
 *             Can be an absolute value like `40` or a percent value like `60%`.
 *             The percent is based on the calculated category width.
 *     @param {number|string} [opt.barMaxWidth] Max width of a bar.
 *             Can be an absolute value like `40` or a percent value like `60%`.
 *             The percent is based on the calculated category width.
 *             Has higer priority than `opt.barWidth`.
 *     @param {number|string} [opt.barMinWidth] Min width of a bar.
 *             Can be an absolute value like `40` or a percent value like `60%`.
 *             The percent is based on the calculated category width.
 *             Has higer priority than `opt.barWidth`.
 *     @param {number} [opt.barGap] Gap of bars in a group.
 *     @param {number} [opt.barCategoryGap] Gap of groups.
 *     @return {Array.&lt;Object&gt;} [{
 *             width: {number} Width of a bar.
 *             offset: {number} Offset of a bar, based on the left most edge.
 *             offsetCenter: {number} bar Offset of a bar, based on the center of the bar.
 *         }, ...]
 *
 * @property callable $currentSeriesIndices
 *    Obtain the current series index. Notice that the currentSeriesIndex is different from seriesIndex when legend is used to filter some series.
 *     @return {number}
 *
 * @property callable $font
 *    Obtain font string, which can be used on style setting directly.
 *     @param {Object} opt
 *     @param {string} [opt.fontStyle]
 *     @param {number} [opt.fontWeight]
 *     @param {number} [opt.fontSize]
 *     @param {string} [opt.fontFamily]
 *     @return {string} font string.
 *
 * @property callable $getWidth
 *    @return {number} Width of echarts containter.
 *
 * @property callable $getHeight
 *    @return {number} Height of echarts container.
 *
 * @property callable $getZr
 *    @return {module:zrender} zrender instance.
 *
 * @property callable $getDevicePixelRatio
 *    @return {number} The current devicePixelRatio.
 *
 * {_more_}
 */
class Api extends Property {}