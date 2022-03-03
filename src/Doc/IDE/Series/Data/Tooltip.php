<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\Data;

use Hisune\EchartsPHP\Property;

/**
 * @property string|array $position
 *    
 *     Notice：series.data.tooltip only works when tooltip.trigger is item.
 *     
 *     The position of the tooltips floating layer, which would follow the position of mouse by default.
 *     Options:
 *     
 *     Array
 *       Display the position of tooltips floating layer through array, which supports absolute position and relative percentage.
 *       Example:
 *       // absolute position, which is 10px to the left side and 10px to the top side of the container
 *       position: [10, 10]
 *       // relative position, in the exact center of the container
 *       position: [50%, 50%]
 *     
 *     
 *     Function
 *       Callback function in the following form:
 *       (point: Array, params: Object|Array.&lt;Object&gt;, dom: HTMLDomElement, rect: Object, size: Object) =&gt; Array
 *     
 *       Parameters:
 *       point: Mouse position.
 *       param: The same as formatter.
 *       dom: The DOM object of tooltip.
 *       rect: It is valid only when mouse is on graphic elements, which stands for a bounding box with x, y, width, and height.
 *       size: The size of dom echarts container. For example: {contentSize: [width, height], viewSize: [width, height]}. 
 *       Return:
 *       Return value is an array standing for tooltip position, which can be absolute pixels, or relative percentage.
 *       Or can be an object, like {left: 10, top: 30}, or {right: 20%, bottom: 40}.
 *       For example:
 *       position: function (point, params, dom, rect, size) {
 *           // fixed at top
 *           return [point[0], 10%];
 *       }
 *     
 *       Or:
 *       position: function (pos, params, dom, rect, size) {
 *           // tooltip will be fixed on the right if mouse hovering on the left,
 *           // and on the left if hovering on the right.
 *           var obj = {top: 60};
 *           obj[[left, right][+(pos[0] &lt; size.viewSize[0] / 2)]] = 5;
 *           return obj;
 *       }
 *     
 *     
 *     inside
 *      Center position of the graphic element where the mouse is in, which is only valid when trigger is item.
 *     
 *     top
 *       Top position of the graphic element where the mouse is in, which is only valid when trigger is item.
 *     
 *     left
 *       Left position of the graphic element where the mouse is in, which is only valid when trigger is item.
 *     
 *     right
 *       Right position of the graphic element where the mouse is in, which is only valid when trigger is item.
 *     
 *     bottom
 *       Bottom position of the graphic element where the mouse is in, which is only valid when trigger is item.
 *
 * @property string|callable $formatter
 *    
 *     Notice：series.data.tooltip only works when tooltip.trigger is item.
 *     
 *     The content formatter of tooltips floating layer which supports string template and callback function.
 *     1. String template
 *     The template variables are {a}, {b}, {c}, {d} and {e}, which stands for series name, data name and data value and ect. When trigger is set to be axis, there may be data from multiple series. In this time, series index can be refered as {a0}, {a1}, or {a2}.
 *     {a}, {b}, {c}, {d} have different meanings for different series types:
 *     
 *     Line (area) charts, bar (column) charts, K charts: {a} for series name, {b} for category name, {c} for data value, {d} for none;
 *     
 *     Scatter (bubble) charts: {a} for series name, {b} for data name, {c} for data value, {d} for none;
 *     
 *     Map: {a} for series name, {b} for area name, {c} for merging data, {d} for none;
 *     
 *     Pie charts, gauge charts, funnel charts: {a} for series name, {b} for data item name, {c} for data value, {d} for percentage.
 *     
 *     
 *     Example: 
 *     formatter: {b0}: {c0}&lt;br /&gt;{b1}: {c1}
 *     
 *     2. Callback function
 *     The format of callback function:
 *     (params: Object|Array, ticket: string, callback: (ticket: string, html: string)) =&gt; string | HTMLElement | HTMLElement[]
 *     
 *     The first parameter params is the data that the formatter needs. Its format is shown as follows:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     
 *     
 *     
 *     
 *     When [trigger](~tooltip.trigger) is `axis`, or when tooltip is triggered by [axisPointer](~xAxis.axisPointer), `params` is the data array of multiple series. The content of each item of the array is the same as above. Besides,
 *     
 *     
 *     
 *     ```ts
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     
 *     
 *     
 *     
 *     **Note: **Using array to present all the parameters in ECharts 2.x is not supported anymore.
 *     
 *     The second parameter `ticket` is the asynchronous callback flag which should be used along with the third parameter `callback` when it is used.
 *     
 *     The third parameter `callback` is asynchronous callback. When the content of tooltip is acquired asynchronously, `ticket` and `htm` as introduced above can be used to update tooltip with callback.
 *     
 *     Example:
 *     ```ts
 *     formatter: function (params, ticket, callback) {
 *         $.get(detail?name= + params.name, function (content) {
 *             callback(ticket, toHTML(content));
 *         });
 *         return Loading;
 *     }
 *
 * @property string $valueFormatter
 *    
 *     Since v5.3.0
 *     
 *     Callback function for formatting the value section in tooltip.
 *     Interface:
 *     (value: number | string) =&gt; string
 *     
 *     Example:
 *     // Add $ prefix
 *     valueFormatter: (value) =&gt; $ + value.toFixed(2)
 *
 * @property string $backgroundColor Default: 'rgba(50,50,50,0.7)'
 *    
 *     Notice：series.data.tooltip only works when tooltip.trigger is item.
 *     
 *     The background color of tooltips floating layer.
 *
 * @property string $borderColor Default: '#333'
 *    
 *     
 *     
 *     
 *     
 *     
 *     Notice：series.data.tooltip only works when tooltip.trigger is item.
 *     
 *     The border color of tooltips floating layer.
 *
 * @property int $borderWidth Default: 0
 *    
 *     
 *     
 *     
 *     
 *     
 *     Notice：series.data.tooltip only works when tooltip.trigger is item.
 *     
 *     The border width of tooltips floating layer.
 *
 * @property int $padding Default: 5
 *    
 *     
 *     
 *     
 *     
 *     
 *     Notice：series.data.tooltip only works when tooltip.trigger is item.
 *     
 *     
 *     
 *     The floating layer of tooltip space around content. The unit is px. Default values for each position are 5. And they can be set to different values with left, right, top, and bottom.
 *     Examples:
 *     // Set padding to be 5
 *     padding: 5
 *     // Set the top and bottom paddings to be 5, and left and right paddings to be 10
 *     padding: [5, 10]
 *     // Set each of the four paddings seperately
 *     padding: [
 *         5,  // up
 *         10, // right
 *         5,  // down
 *         10, // left
 *     ]
 *
 * @property Tooltip\TextStyle $textStyle
 *    
 *     Notice：series.data.tooltip only works when tooltip.trigger is item.
 *     
 *     The text syle of tooltips floating layer.
 *
 * @property string $extraCssText
 *    
 *     
 *     
 *     
 *     
 *     
 *     Notice：series.data.tooltip only works when tooltip.trigger is item.
 *     
 *     Extra CSS style for floating layer. The following is an example for adding shadow.
 *     extraCssText: box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
 *
 * {_more_}
 */
class Tooltip extends Property {}