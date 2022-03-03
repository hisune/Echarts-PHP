<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type Default: 'line'
 *    
 *
 * @property string $id
 *    Component ID, not specified by default. If specified, it can be used to refer the component in option or API.
 *
 * @property string $name
 *    Series name used for displaying in tooltip and filtering with legend, or updating data and configuration with setOption.
 *
 * @property string $colorBy Default: 'series'
 *    
 *     
 *     
 *     
 *     
 *     Since v5.2.0
 *     
 *     The policy to take color from option.color. Valid values:
 *     
 *     series: assigns the colors in the palette by series, so that all data in the same series are in the same color;
 *     data: assigns colors in the palette according to data items, with each data item using a different color.
 *
 * @property string $coordinateSystem Default: 'cartesian2d'
 *    The coordinate used in the series, whose options are:
 *     
 *     cartesian2d
 *       Use a two-dimensional rectangular coordinate (also known as Cartesian coordinate), with xAxisIndex and yAxisIndex to assign the corresponding axis component.
 *     
 *     
 *     
 *     polar
 *       Use polar coordinates, with polarIndex to assign the corresponding polar coordinate component.
 *
 * @property int $xAxisIndex Default: 0
 *    Index of x axis to combine with, which is  useful for multiple x axes in one chart.
 *
 * @property int $yAxisIndex Default: 0
 *    Index of y axis to combine with, which is  useful for multiple y axes in one chart.
 *
 * @property int $polarIndex Default: 0
 *    Index of polar coordinate to combine with, which is useful for multiple polar axes in one chart.
 *
 * @property string|callable $symbol Default: 'emptyCircle'
 *    
 *     
 *     Symbol of .
 *     Icon types provided by ECharts includes
 *     circle, rect, roundRect, triangle, diamond, pin, arrow, none
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *     If symbols needs to be different, you can set with callback function in the following format:
 *     (value: Array|number, params: Object) =&gt; string
 *     
 *     The first parameter value is the value in data, and the second parameter params is the rest parameters of data item.
 *
 * @property int|array|callable $symbolSize Default: 4
 *    
 *     
 *      symbol size. It can be set to single numbers like 10, or use an array to represent width and height. For example, [20, 10] means symbol width is 20, and height is10.
 *     If size of symbols needs to be different, you can set with callback function in the following format:
 *     (value: Array|number, params: Object) =&gt; number|Array
 *     
 *     The first parameter value is the value in data, and the second parameter params is the rest parameters of data item.
 *
 * @property int|callable $symbolRotate
 *    
 *     
 *     Rotate degree of  symbol. The negative value represents clockwise. Note that when symbol is set to be arrow in markLine, symbolRotate value will be ignored, and compulsively use tangent angle.
 *     If rotation of symbols needs to be different, you can set with callback function in the following format:
 *     (value: Array|number, params: Object) =&gt; number
 *     
 *     The first parameter value is the value in data, and the second parameter params is the rest parameters of data item.
 *     
 *     Callback is supported since 4.8.0 .
 *
 * @property boolean $symbolKeepAspect Default: false
 *    
 *     
 *     Whether to keep aspect for symbols in the form of path://.
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    
 *     
 *     Offset of  symbol relative to original position. By default, symbol will be put in the center position of data. But if symbol is from user-defined vector path or image, you may not expect symbol to be in center. In this case, you may use this attribute to set offset to default position. It can be in absolute pixel value, or in relative percentage value.
 *     For example, [0, -50%] means to move upside side position of symbol height. It can be used to make the arrow in the bottom to be at data position when symbol is pin.
 *
 * @property boolean $showSymbol Default: true
 *    
 *     
 *     Whether to show symbol. It would be shown during tooltip hover.
 *
 * @property boolean $showAllSymbol Default: 'auto'
 *    
 *     
 *     Only work when main axis is category axis (axis.type is category). Optional values:
 *     
 *     auto: Default value. Show all symbols if there is enough space. Otherwise follow the interval strategy with with axisLabel.interval.
 *     true: Show all symbols.
 *     false: Follow the interval strategy with axisLabel.interval.
 *
 * @property boolean $legendHoverLink Default: true
 *    
 *     
 *     Whether to enable highlighting chart when legend is being hovered.
 *
 * @property string $stack
 *    If stack the value. On the same category axis, the series with the same stack name would be put on top of each other.
 *     The effect of the below example could be seen through stack switching of toolbox on the top right corner:
 *
 * @property string $cursor Default: 'pointer'
 *    
 *     
 *     The mouse style when mouse hovers on an element, the same as cursor property in CSS.
 *
 * @property boolean $connectNulls Default: false
 *    
 *     
 *     Whether to connect the line across null points.
 *
 * @property boolean $clip Default: true
 *    
 *     
 *     
 *     
 *     
 *     Since v4.4.0
 *     
 *     If clip the overflow on the coordinate system. Clip results varies between series:
 *     
 *     Scatter/EffectScatter：Ignore the symbols exceeds the coordinate system. Not clip the elements.
 *     Bar：Clip all the overflowed. With bar width kept.
 *     Line：Clip the overflowed line.
 *     Lines: Clip all the overflowed.
 *     Candlestick: Ignore the elements exceeds the coordinate system.
 *     Custom: Clip all the olverflowed.
 *     
 *     All these series have default value true except custom series. Set it to false if you dont want to clip.
 *
 * @property boolean $triggerLineEvent Default: false
 *    
 *     Since v5.2.2
 *     
 *     Whether line and area can trigger the event.
 *
 * @property string|boolean $step Default: false
 *    
 *     
 *     Whether to show as a step line. It can be true, false. Or start, middle, end. Which will configure the turn point of step line.
 *     See the example using different step options:
 *
 * @property Series\Label $label
 *    Text label of , to explain some data information about graphic item like value, name and so on. label is placed under itemStyle in ECharts 2.x. In ECharts 3, to make the configuration structure flatter, labelis taken to be at the same level with itemStyle, and has emphasis as itemStyle does.
 *
 * @property Series\EndLabel $endLabel
 *    
 *     Since v5.0.0
 *     
 *     Label on the end of line.
 *
 * @property Series\LabelLine $labelLine
 *    Configuration of label guide line.
 *
 * @property Series\LabelLayout $labelLayout
 *    
 *     Since v5.0.0
 *     
 *     Unified layout configuration of labels.
 *     It provide a chance to adjust the labels (x, y) position, alignment based on the original layout each series provides.
 *     This option can be a callback with following parameters.
 *     // corresponding index of data
 *     dataIndex: number
 *     // corresponding type of data. Only available in graph, in which it can be node or edge
 *     dataType?: string
 *     // corresponding index of series
 *     seriesIndex: number
 *     // Displayed text of label.
 *     text: string
 *     // Bounding rectangle of label.
 *     labelRect: {x: number, y: number, width: number, height: number}
 *     // Horizontal alignment of label.
 *     align: left | center | right
 *     // Vertical alignment of label.
 *     verticalAlign: top | middle | bottom
 *     // Bounding rectangle of the element corresponding to.
 *     rect: {x: number, y: number, width: number, height: number}
 *     // Default points array of labelLine. Currently only provided in pie and funnel series.
 *     // Its null in other series.
 *     labelLinePoints?: number[][]
 *     
 *     Example:
 *     Align the labels on the right. Left 10px margin to the edge.
 *     labelLayout(params) {
 *         return {
 *             x: params.rect.x + 10,
 *             y: params.rect.y + params.rect.height / 2,
 *             verticalAlign: middle,
 *             align: left
 *         }
 *     }
 *     
 *     Set the text size based on the size of element bounding rectangle.
 *     
 *     labelLayout(params) {
 *         return {
 *             fontSize: Math.max(params.rect.width / 10, 5)
 *         };
 *     }
 *
 * @property Series\ItemStyle $itemStyle
 *    The style of the symbol point of broken line.
 *
 * @property Series\LineStyle $lineStyle
 *    Line style.
 *
 * @property Series\AreaStyle $areaStyle
 *    The style of area.
 *
 * @property Series\Emphasis $emphasis
 *    Highlight style of the graphic.
 *
 * @property Series\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Available when emphasis.focus is set.
 *
 * @property Series\Select $select
 *    
 *     Since v5.0.0
 *     
 *     Configurations of select state. Available when selectedMode is set.
 *
 * @property boolean|string $selectedMode Default: false
 *    
 *     Since v5.0.0
 *     
 *     
 *     
 *     Selected mode. It is enabled by default, and you may set it to be false to disable it.
 *     Besides, it can be set to single, multiple or series, for single selection, multiple selections and whole series selection.
 *     
 *     series is supported since v5.3.0
 *
 * @property boolean|int $smooth Default: false
 *    Whether to show as smooth curve.
 *     If is typed in boolean, then it means whether to enable smoothing. If is typed in number, valued from 0 to 1, then it means smoothness. A smaller value makes it less smooth.
 *     Please refer to smoothMonotone to change smoothing algorithm.
 *
 * @property string $smoothMonotone
 *    Whether the broken line keep the monotonicity when it is smoothed. It can be set as x, y to keep the monotonicity on x axis or y axis.
 *     It is usually used on dual value axis.
 *     Here are 2 examples of broken line chart with dual value axis, showing the differences when smoothMonotone is without any setting, and smoothMonotone is set as x.
 *     
 *     No setting about smoothMonotone:
 *     
 *     
 *     
 *     It is set as x:
 *
 * @property string $sampling
 *    The dowmsampling strategy used when the data size is much larger than pixel size. It will improve the performance when turned on. Defaults to be turned off, indicating that all the data points will be drawn.
 *     Options:
 *     
 *     lttb Use Largest-Triangle-Three-Bucket algorithm to filter points. It will keep the trends and extremas.
 *     average Use average value of filter points
 *     max Use maximum value of filter points
 *     min Use minimum value of filter points
 *     sum Use sum of filter points
 *
 * @property array $dimensions
 *    dimensions can be used to define dimension info for series.data or dataset.source.
 *     Notice: if dataset is used, we can definite dimensions in dataset.dimensions, or provide dimension names in the first column/row of dataset.source, and not need to specify dimensions here. But if dimensions is specified here, it will be used despite the dimension definitions in dataset.
 *     For example:
 *     option = {
 *         dataset: {
 *             source: [
 *                 // date, open, close, highest, lowest
 *                 [12, 44, 55, 66, 2],
 *                 [23, 6, 16, 23, 1],
 *                 ...
 *             ]
 *         },
 *         series: {
 *             type: xxx,
 *             // Specify name for each dimesions, which will be displayed in tooltip.
 *             dimensions: [date, open, close, highest, lowest]
 *         }
 *     }
 *     
 *     series: {
 *         type: xxx,
 *         dimensions: [
 *             null,                // If you do not intent to defined this dimension, use null is fine.
 *             {type: ordinal},   // Specify type of this dimension.
 *                                  // ordinal is always used in string.
 *                                  // If type is not specified, echarts will guess type by data.
 *             {name: good, type: number},
 *             bad                // Equals to {name: bad}.
 *         ]
 *     }
 *     
 *     Each data item of dimensions can be:
 *     
 *     string, for example, someName, which equals to {name: someName}.
 *     Object, where the attributes can be:
 *     name: string.
 *     type: string, supports:
 *     number
 *     float, that is, Float64Array
 *     int, that is, Int32Array
 *     ordinal, discrete value, which represents string generally.
 *     time, time value, see data to check the format of time value.
 *     
 *     
 *     displayName: string, generally used in tooltip for dimension display. If not specified, use name by default.
 *     
 *     
 *     
 *     When dimensions is specified, the default tooltip will be displayed vertically, which is better to show diemsion names. Otherwise, tooltip will displayed only value horizontally.
 *
 * @property array $encode
 *    Define what is encoded to for each dimension of data. For example:
 *     option = {
 *         dataset: {
 *             source: [
 *                 // Each column is called a dimension.
 *                 // There are five dimensions: 0, 1, 2, 3, 4.
 *                 [12, 44, 55, 66, 2],
 *                 [23, 6, 16, 23, 1],
 *                 ...
 *             ]
 *         },
 *         series: {
 *             type: xxx,
 *             encode: {
 *                 x: [3, 1, 5],      // Dimension 3, 1, 5 is mapped to x axis.
 *                 y: 2,              // Dimension 2 is mapped to y axis.
 *                 tooltip: [3, 2, 4] // Dimension 3, 2, 4 will be displayed in tooltip.
 *             }
 *         }
 *     }
 *     
 *     When dimensions is used to defined name for a certain dimension, encode can refer the name directly. For example:
 *     series: {
 *         type: xxx,
 *         dimensions: [date, open, close, highest, lowest],
 *         encode: {
 *             x: date,
 *             y: [open, close, highest, lowest]
 *         }
 *     }
 *     
 *     The basic structure of encode is illustrated as follows, where the left part of colon is the name of axis like x, y, radius, angle or some special reserved names like tooltip, itemName etc., and the right part of the colon is the dimension names or dimension indices (based on 0). One or more dimensions can be specified. Usually not all of mappings need to be specified, only specify needed ones.
 *     The properties available in encode listed as follows:
 *     // In any of the series and coordinate systems,
 *     // these properties are available:
 *     encode: {
 *         // Display dimension product and score in the tooltip.
 *         tooltip: [product, score]
 *         // Set the series name as the concat of the names of dimensions[1] and dimensions[3].
 *         // (sometimes the dimension names are too long to type in series.name manually).
 *         seriesName: [1, 3],
 *         // Using dimensions[2] as the id of each data item. This is useful when dynamically
 *         // update data by `chart.setOption()`, where the new and old data item can be
 *         // corresponded by id, by which the appropriate animation can be performed when updating.
 *         itemId: 2,
 *         // Using dimensions[3] as the name of each data item. This is useful in charts like
 *         // pie, funnel, where data item name can be displayed in legend.
 *         itemName: 3,
 *         // Using dimensions[4] as the groupId of each data item. groupId will be used to categorize the data. And to determine
 *         // How the merge and split animation are performed in the universal transition. See universalTransition option for detail.
 *         itemGroupId: 4
 *     }
 *     
 *     // These properties only work in cartesian(grid) coordinate system:
 *     encode: {
 *         // Map dimensions[1], dimensions[5] and dimension score to the X axis.
 *         x: [1, 5, score],
 *         // Map dimensions[0] to the Y axis.
 *         y: 0
 *     }
 *     
 *     // These properties only work in polar coordinate system:
 *     encode: {
 *         radius: 3,
 *         angle: 2,
 *         ...
 *     }
 *     
 *     // These properties only work in geo coordinate system:
 *     encode: {
 *         lng: 3,
 *         lat: 2
 *     }
 *     
 *     // For some type of series that are not in any coordinate system,
 *     // like pie, funnel etc.:
 *     encode: {
 *         value: 3
 *     }
 *     
 *     This is an example for encode.
 *     Specially, in [custom series(~series-custom), some property in encode, corresponding to axis, can be set as null to make the series not controlled by the axis, that is, the series data will not be count in the extent of the axis, and the dataZoom on the axis will not filter the series.
 *     var option = {
 *         xAxis: {},
 *         yAxis: {},
 *         dataZoom: [{
 *             xAxisIndex: 0
 *         }, {
 *             yAxisIndex: 0
 *         }],
 *         series: {
 *             type: custom,
 *             renderItem: function (params, api) {
 *                 return {
 *                     type: circle,
 *                     shape: {
 *                         cx: 100, // x position is always 100
 *                         cy: api.coord([0, api.value(0)])[1],
 *                         r: 30
 *                     },
 *                     style: {
 *                         fill: blue
 *                     }
 *                 };
 *             },
 *             encode: {
 *                 // Then the series will not be controlled
 *                 // by x axis and corresponding dataZoom.
 *                 x: -1,
 *                 y: 1
 *             },
 *             data: [ ... ]
 *         }
 *     };
 *
 * @property string $seriesLayoutBy Default: 'column'
 *    When dataset is used, seriesLayoutBy specifies whether the column or the row of dataset is mapped to the series, namely, the series is layout on columns or rows. Optional values:
 *     
 *     column: by default, the columns of dataset are mapped the series. In this case, each column represents a dimension.
 *     row：the rows of dataset are mapped to the series. In this case, each row represents a dimension.
 *     
 *     Check this example.
 *
 * @property int $datasetIndex Default: 0
 *    If series.data is not specified, and dataset exists, the series will use dataset. datasetIndex specifies which dataset will be used.
 *
 * @property string $dataGroupId
 *    A groupID common to all data in the series. the groupID will be used to classify the data and determine how merge and split animations are performed in the universal transition animation.
 *     If you are using the dataset component to represent the data, it is recommended to use encode.itemGroupID to specify which dimension is encoded as the groupID.
 *
 * @property array $data
 *    Data array of series, which can be in the following forms:
 *     Notice, if no data specified in series, and there is dataset in option, series will use the first dataset as its datasource. If data has been specified, dataset will not used.
 *     series.datasetIndex can be used to specify other dataset.
 *     Basically, data is represented by a two-dimension array, like the example below, where each column is named as a dimension.
 *     series: [{
 *         data: [
 *             // dimX   dimY   other dimensions ...
 *             [  3.4,    4.5,   15,   43],
 *             [  4.2,    2.3,   20,   91],
 *             [  10.8,   9.5,   30,   18],
 *             [  7.2,    8.8,   18,   57]
 *         ]
 *     }]
 *     
 *     
 *     In cartesian (grid), dimX and dimY correspond to xAxis and yAxis respectively.
 *     In polar dimX and dimY correspond to radiusAxis 和 angleAxis respectively.
 *     Other dimensions are optional, which can be used in other places. For example:
 *     visualMap can map one or more dimensions to visual (color, symbol size ...).
 *     series.symbolSize can be set as a callback function, where symbol size can be calculated by values of a certain dimension.
 *     Values in other dimensions can be shown by tooltip.formatter or series.label.formatter.
 *     
 *     
 *     
 *     Especially, when there is one and only one category axis (axis.type is category), data can be simply be represented by a one-dimension array, like:
 *     xAxis: {
 *         data: [a, b, m, n]
 *     },
 *     series: [{
 *         // Each item corresponds to each item in xAxis.data.
 *         data: [23,  44,  55,  19]
 *         // In fact, it is the simplification of the format below:
 *         // data: [[0, 23], [1, 44], [2, 55], [3, 19]]
 *     }]
 *     
 *     
 *     Relationship between value and axis.type
 *     
 *     When a dimension corresponds to a value axis (axis.type is value or log):
 *       The value can be a number (like 12) (can also be a number in a string format, like 12).
 *     
 *     When a dimension corresponds to a category axis (axis.type is category):
 *       The value should be the ordinal of the axis.data (based on 0), the string value of the axis.data. For example:
 *       xAxis: {
 *           type: category,
 *           data: [Monday, Tuesday, Wednesday, Thursday]
 *       },
 *       yAxis: {
 *           type: category,
 *           data: [a, b, m, n, p, q]
 *       },
 *       series: [{
 *           data: [
 *               // xAxis      yAxis
 *               [  0,           0,    2  ], // This point is located at xAxis: Monday, yAxis: a.
 *               [  Thursday,  2,    1  ], // This point is located at xAxis: Thursday, yAxis: m.
 *               [  2,          p,   2  ], // This point is located at xAxis: Wednesday, yAxis: p.
 *               [  3,           3,    5  ]
 *           ]
 *       }]
 *     
 *       There is an example of double category axes: Github Punchcard.
 *     
 *     When a dimension corresponds to a time axis (type is time), the value can be:
 *     
 *     a timestamp, like 1484141700832, which represents a UTC time.
 *     a date string, in one of the formats below:
 *     a subset of ISO 8601, only including (all of these are treated as local time unless timezone is specified, which is consistent with moment):
 *     only part of year/month/date/time are specified: 2012-03, 2012-03-01, 2012-03-01 05, 2012-03-01 05:06.
 *     separated by T or a space: 2012-03-01T12:22:33.123, 2012-03-01 12:22:33.123.
 *     timezone specified: 2012-03-01T12:22:33Z, 2012-03-01T12:22:33+8000, 2012-03-01T12:22:33-05:00.
 *     
 *     
 *     other date string format (all of these are treated as local time):
 *     2012, 2012-3-1, 2012/3/1, 2012/03/01,
 *     2009/6/12 2:00, 2009/6/12 2:05:08, 2009/6/12 2:05:08.123.
 *     
 *     
 *     a JavaScript Date instance created by user:
 *     Caution, when using a data string to create a Date instance, browser differences and inconsistencies should be considered.
 *     For example: In chrome, new Date(2012-01-01) is treated as a Jan 1st 2012 in UTC, while new Date(2012-1-1) and new Date(2012/01/01) are treated as Jan 1st 2012 in local timezone. In safari new Date(2012-1-1) is not supported.
 *     So if you intent to perform new Date(dateString), it is strongly recommended to use a time parse library (e.g., moment), or use echarts.number.parseDate, or check this.
 *     
 *     
 *     
 *     
 *     
 *     
 *     Customize a data item:
 *     When needing to customize a data item, it can be set as an object, where property value reprensent real value. For example:
 *     [
 *         12,
 *         24,
 *         {
 *             value: [24, 32],
 *             // label style, only works in this data item.
 *             label: {},
 *             // item style, only works in this data item.
 *             itemStyle:{}
 *         },
 *         33
 *     ]
 *     // Or
 *     [
 *         [12, 332],
 *         [24, 32],
 *         {
 *             value: [24, 32],
 *             // label style, only works in this data item.
 *             label: {},
 *             // item style, only works in this data item.
 *             itemStyle:{}
 *         },
 *         [33, 31]
 *     ]
 *     
 *     
 *     Empty value:
 *     - or null or undefined or NaN can be used to describe that a data item does not exist (ps：not exist does not means its value is 0).
 *     For example, line chart can break when encounter an empty value, and scatter chart do not display graphic elements for empty values.
 *
 * @property Series\MarkPoint $markPoint
 *    Mark point in a chart.
 *
 * @property Series\MarkLine $markLine
 *    Use a line in the chart to illustrate.
 *
 * @property Series\MarkArea $markArea
 *    Used to mark an area in chart. For example, mark a time interval.
 *
 * @property int $zlevel Default: 0
 *    zlevel value of all graphical elements in Line.
 *     zlevel is used to make layers with Canvas. Graphical elements with different zlevel values will be placed in different Canvases, which is a common optimization technique. We can put those frequently changed elements (like those with animations) to a separate zlevel. Notice that too many Canvases will increase memory cost, and should be used carefully on mobile phones to avoid crash.
 *     Canvases with bigger zlevel will be placed on Canvases with smaller zlevel.
 *
 * @property int $z Default: 2
 *    z value of all graphical elements in Line, which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
 *     z has a lower priority to zlevel, and will not create new Canvas.
 *
 * @property boolean $silent Default: false
 *    
 *     
 *     Whether to ignore mouse events. Default value is false, for triggering and responding to mouse events.
 *
 * @property boolean $animation Default: true
 *    
 *     
 *     Whether to enable animation.
 *
 * @property int $animationThreshold Default: 2000
 *    Whether to set graphic number threshold to animation. Animation will be disabled when graphic number is larger than threshold.
 *
 * @property int|callable $animationDuration Default: 1000
 *    
 *     
 *     Duration of the first animation, which supports callback function for different data to have different animation effect:
 *     animationDuration: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasing Default: 'linear'
 *    
 *     
 *     Easing method used for the first animation. Varied easing effects can be found at easing effect example.
 *
 * @property int|callable $animationDelay Default: 0
 *    Delay before updating the first animation, which supports callback function for different data to have different animation effect.
 *     For example:
 *     animationDelay: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *     
 *     See this example for more information.
 *
 * @property int|callable $animationDurationUpdate Default: 300
 *    
 *     
 *     Time for animation to complete, which supports callback function for different data to have different animation effect:
 *     animationDurationUpdate: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasingUpdate Default: 'cubicOut'
 *    
 *     
 *     Easing method used for animation.
 *
 * @property int|callable $animationDelayUpdate Default: 0
 *    Delay before updating animation, which supports callback function for different data to have different animation effects.
 *     For example:
 *     animationDelayUpdate: function (idx) {
 *         // delay for later data is larger
 *         return idx * 100;
 *     }
 *     
 *     See this example for more information.
 *
 * @property Series\UniversalTransition $universalTransition
 *    Configuration related to universal transition animation.
 *     Universal Transition provides the ability to morph between any series. With this feature enabled, each time setOption, transitions between series with the same id will be automatically associated with each other.
 *     One-to-many or many-to-one animations such as drill-down, aggregation, etc. can also be achieved by specifying groups of data such as encode.itemGroupId or dataGroupId.
 *     This can be enabled directly by configuring universalTransition: true in the series. It is also possible to provide an object for more detailed configuration.
 *
 * @property Series\Tooltip $tooltip
 *    tooltip settings in this series.
 *
 * @property boolean $roundCap Default: false
 *    
 *     
 *     
 *     
 *     
 *     Since v4.5.0
 *     
 *     
 *     
 *     Whether to add round caps at the end of the bar sectors. Valid only for bar series on polar coordinates.
 *
 * @property boolean $showBackground Default: false
 *    
 *     Since v4.7.0
 *     
 *     
 *     
 *     Whether to show background behind each bar. Use backgroundStyle to set background style.
 *
 * @property Series\BackgroundStyle $backgroundStyle
 *    
 *     Since v4.7.0
 *     
 *     Background style of each bar if showBackground is set to be true.
 *
 * @property int|string $barWidth
 *    The width of the bar. Adaptive when not specified.
 *     
 *     
 *     
 *     
 *     Can be an absolute value like 40 or a percent value like 60%. The percent is based on the calculated category width.
 *     In a single coodinate system, this attribute is shared by multiple bar series. This attribute should be set on the last bar series in the coodinate system, then it will be adopted by all bar series in the coordinate system.
 *
 * @property int|string $barMaxWidth
 *    The maximum width of the bar.
 *     Has higer priority than barWidth.
 *     Can be an absolute value like 40 or a percent value like 60%. The percent is based on the calculated category width.
 *     In a single coodinate system, this attribute is shared by multiple bar series. This attribute should be set on the last bar series in the coodinate system, then it will be adopted by all bar series in the coordinate system.
 *
 * @property int|string $barMinWidth
 *    The minimum width of the bar. In cartesian the default value is 1, otherwise the default value if null.
 *     Has higer priority than barWidth.
 *     Can be an absolute value like 40 or a percent value like 60%. The percent is based on the calculated category width.
 *     In a single coodinate system, this attribute is shared by multiple bar series. This attribute should be set on the last bar series in the coodinate system, then it will be adopted by all bar series in the coordinate system.
 *
 * @property int $barMinHeight Default: 0
 *    The minimum width of bar. It could be used to avoid the following situation: the interaction would be affected when the value of some data item is too small.
 *
 * @property int $barMinAngle Default: 0
 *    The minimum angle of bar. It could be used to avoid the following situation: the interaction would be affected when the value of some data item is too small. Valid only for bar series on polar coordinates.
 *
 * @property string $barGap Default: '30%'
 *    The gap between bars between different series, is a percent value like 30%, which means 30% of the bar width.
 *     Set barGap as -100% can overlap bars that belong to different series, which is useful when making a series of bar be background.
 *     In a single coodinate system, this attribute is shared by multiple bar series. This attribute should be set on the last bar series in the coodinate system, then it will be adopted by all bar series in the coordinate system.
 *     For example:
 *
 * @property string $barCategoryGap Default: '20%'
 *    The bar gap of a single series, defaults to be 20% of the category gap, can be set as a fixed value.
 *     In a single coodinate system, this attribute is shared by multiple bar series. This attribute should be set on the last bar series in the coodinate system, then it will be adopted by all bar series in the coordinate system.
 *
 * @property boolean $large Default: false
 *    
 *     
 *     Whether to enable the optimization of large-scale data. It could be set when large data causes performance problem.
 *     After being enabled, largeThreshold can be used to indicate the minimum number for turning on the optimization.
 *     But when the optimization enabled, the style of single data item cant be customized any more.
 *
 * @property int $largeThreshold Default: 400
 *    
 *     
 *     The threshold enabling the drawing optimization.
 *
 * @property int $progressive Default: 5000
 *    progressive specifies the amount of graphic elements that can be rendered within a frame (about 16ms) if progressive rendering enabled.
 *     When data amount is from thousand to more than 10 million, it will take too long time to render all of the graphic elements. Since ECharts 4, progressive rendering is supported in its workflow, which processes and renders data chunk by chunk alone with each frame, avoiding to block the UI thread of the browser.
 *     Set progressive: 0 to disable progressive permanently. By default, progressive is auto-enabled when data amount is bigger than progressiveThreshold.
 *
 * @property int $progressiveThreshold Default: 3000
 *    If current data amount is over the threshold, progressive rendering is enabled.
 *
 * @property string $progressiveChunkMode Default: 'mod'
 *    Chunk approach, optional values:
 *     
 *     sequential: slice data by data index.
 *     mod: slice data by mod, which make the data items of each chunk coming from all over the data, bringing better visual effect while progressive rendering.
 *
 * @property int $selectedOffset Default: 10
 *    
 *     
 *     The offset distance of selected sector.
 *
 * @property boolean $clockwise Default: true
 *    
 *     
 *     Whether the layout of sectors of pie chart is clockwise.
 *
 * @property int $startAngle Default: 90
 *    
 *     
 *     The start angle, which range is [0, 360].
 *
 * @property int $minAngle Default: 0
 *    
 *     
 *     The minimum angle of sector (0 ~ 360). It prevents some sector from being too small when value is small, which will affect user interaction.
 *
 * @property int $minShowLabelAngle Default: 0
 *    
 *     
 *     If a sector is less than this angle (0 ~ 360), label and labelLine will not be displayed.
 *
 * @property boolean|string $roseType Default: false
 *    
 *     
 *     Whether to show as Nightingale chart, which distinguishs data through radius. There are 2 optional modes:
 *     
 *     radius Use central angle to show the percentage of data, radius to show data size.
 *     area All the sectors will share the same central angle, the data size is shown only through radiuses.
 *
 * @property boolean $avoidLabelOverlap Default: true
 *    
 *     
 *     Whether to enable the strategy to avoid labels overlap. Defaults to be enabled, which will move the label positions in the case of labels overlapping
 *
 * @property boolean $stillShowZeroSum Default: true
 *    
 *     
 *     Whether to show sector when all data are zero.
 *
 * @property string|int $left Default: 0
 *    Distance between pie chart component and the left side of the container.
 *     left value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be left, center, or right.
 *     If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
 *
 * @property string|int $top Default: 0
 *    Distance between pie chart component and the top side of the container.
 *     top value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
 *     If the top value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
 *
 * @property string|int $right Default: 0
 *    Distance between pie chart component and the right side of the container.
 *     right value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string|int $bottom Default: 0
 *    Distance between pie chart component and the bottom side of the container.
 *     bottom value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string|int $width Default: 'auto'
 *    Width of pie chart component. Adaptive by default.
 *
 * @property string|int $height Default: 'auto'
 *    Height of pie chart component. Adaptive by default.
 *
 * @property boolean $showEmptyCircle Default: true
 *    
 *     
 *     
 *     
 *     
 *     Since v5.2.0
 *     
 *     If display an placeholder circle when there is no data.
 *
 * @property Series\EmptyCircleStyle $emptyCircleStyle
 *    
 *     Since v5.2.0
 *     
 *     Style of circle placeholder.
 *
 * @property array $center Default: '[\'50%\', \'50%\']'
 *    
 *     
 *     Center position of Pie chart, the first of which is the horizontal position, and the second is the vertical position.
 *     Percentage is supported. When set in percentage, the item is relative to the container width, and the second item to the height.
 *     Example: 
 *     // Set to absolute pixel values
 *     center: [400, 300]
 *     // Set to relative percent
 *     center: [50%, 50%]
 *
 * @property int|string|array $radius Default: '[0, \'75%\']'
 *    
 *     
 *     Radius of Pie chart. Value can be:
 *     
 *     number: Specify outside radius directly.
 *     string: For example, 20%, means that the outside radius is 20% of the viewport size (the little one between width and height of the chart container).
 *     
 *     
 *     Array.&lt;number|string&gt;: The first item specifies the inside radius, and the second item specifies the outside radius. Each item follows the definitions above.
 *     
 *     Donut chart can be achieved by setting a inner radius.
 *
 * @property string $animationType Default: 'expansion'
 *    
 *     
 *     Initial animation type.
 *     
 *     expansion Default expansion animation.
 *     scale Scale animation. You can use it with animationEasing=elasticOut to have popup effect.
 *
 * @property string $animationTypeUpdate Default: 'transition'
 *    
 *     
 *     
 *     
 *     
 *     Since v4.4.0
 *     
 *     Animation type when data updates.
 *     
 *     transition Changing start and end angle of each sector from the old value to new value.
 *     expansion The whole pie expands again.
 *
 * @property int $geoIndex Default: 0
 *    Index of geographic coordinate to combine with, which is useful for multiple geographic axes in one chart.
 *
 * @property int $calendarIndex Default: 0
 *    Index of calendar coordinates to combine with, which is useful for multiple calendar coordinates in one chart.
 *
 * @property string $effectType Default: 'ripple'
 *    
 *     
 *     Type of effect. Only ripple effect of ripple is supported currently.
 *
 * @property string $showEffectOn Default: 'render'
 *    
 *     
 *     When to show the effect.
 *     Options: 
 *     
 *     render Show the effect when rendering is done.
 *     emphasis Show the effect when it is highlight (hover).
 *
 * @property Series\RippleEffect $rippleEffect
 *    Related configurations about ripple effect.
 *
 * @property int $radarIndex
 *    Index of radar component that radar chart uses.
 *
 * @property string $layout Default: 'orthogonal'
 *    
 *     
 *     The layout of the tree, which can be orthogonal and radial. Here the orthogonal layout is what we usually refer to the horizontal and vertical direction, the corresponding parameter value is orthogonal. The radial layout refers to the view that the root node as the center and each layer of nodes as the ring, the corresponding parameter value is radial.
 *     Orthogonal Example：
 *     
 *     
 *     
 *     
 *     Radial Example：
 *
 * @property string $orient Default: 'LR'
 *    
 *     
 *     The direction of the orthogonal layout in the tree diagram. That means this configuration takes effect only if layout = orthogonal. The corresponding directions are from left to right, from right to left, from top to bottom, from bottom to top, with shorthand values LR, RL, TB, BT.
 *     Note: The previous configuration value horizontal is equivalent to LR, vertical is equivalent to TB.
 *
 * @property string $edgeShape Default: 'curve'
 *    
 *     
 *     
 *     
 *     
 *     Since v4.7.0
 *     
 *     The shape of the edge which is under the tree orthogonal layout. There are two types of shape, curve and polyline, the corresponding values are curve and polyline.
 *      Note: This configuration item is only valid under the orthogonal layout. Errors will be reported in the development environment under the radial layout.
 *
 * @property string $edgeForkPosition Default: '50%'
 *    
 *     
 *     This is the position where the polyline branches in the subtree when the shape of the edge is a polyline in the orthogonal layout. The position here refers to the percentage of the distance between the bifurcation point and the parent node of the subtree to the height of the entire subtree. The default value is 50%, which can be between [0, 100%].
 *      Note: This configuration item is only valid when edgeShape = polyline.
 *
 * @property boolean|string $roam Default: false
 *    
 *     
 *     Whether to enable mouse zooming and translating. false by default. If either zooming or translating is wanted, it can be set to scale or move. Otherwise, set it to be true to enable both.
 *
 * @property boolean $expandAndCollapse Default: true
 *    
 *     
 *     Subtree collapses and expands interaction, default true. As the drawing area is limited, and usually the nodes of a tree may be more, so there will be hidden between the nodes. In order to avoid this problem, you can put a temporary unrelated subtree folded away, until you need to start when necessary. Such as the above radial layout tree example, the center of the node is filled with blue is the folded away subtree, you can click to expand it.
 *     Note: If you configure a custom image as the tag for a node, it is not possible to distinguish whether the current node has a collapsed subtree by the fill color. And currently do not support, upload two pictures, respectively represent the collapsing and expansion state of the node. So, if you want to explicitly show the two states of the node, it is recommended to use ECharts regular tag types, such as emptyCircle.
 *
 * @property int $initialTreeDepth Default: 2
 *    
 *     
 *     The initial level (depth) of the tree. The root node is the 0th layer, then the first layer, the second layer, ... , until the leaf node. This configuration item is primarily used in conjunction with collapsing and expansion interactions. The purpose is to prevent the nodes from obscuring each other. If set as -1 or null or undefined, all nodes are expanded.
 *
 * @property Series\Leaves $leaves
 *    Leaf node special configuration, such as the above tree diagram example, the leaf node and non-leaf node label location is different.
 *
 * @property int $squareRatio
 *    
 *     
 *     The expected square ratio. Layout would approach the ratio as close as possible.
 *     It defaults to be the golden ratio: 0.5 * (1 + Math.sqrt(5)).
 *
 * @property int $leafDepth
 *    
 *     
 *     When leafDepth is set, the feature drill down is enabled, which means when clicking a tree node, this node will be set as root and its children will be shown.
 *     leafDepth represents how many levels are shown at most. For example, when leafDepth is set to 1, only one level will be shown.
 *     leafDepth is null/undefined by default, which means that drill down is disabled.
 *     An example about drill down:
 *
 * @property string $drillDownIcon Default: '▶'
 *    Marker when the node is able to be drilled down.
 *
 * @property boolean|string $nodeClick Default: 'zoomToNode'
 *    The behaviour when clicking a node. Optional values are:
 *     
 *     false: Do nothing after clicked.
 *     zoomToNode: Zoom to clicked node.
 *     link: If there is link in node data, do hyperlink jump after clicked.
 *
 * @property int $zoomToNodeRatio Default: '0.32*0.32'
 *    
 *     
 *     The treemap will be auto zoomed to a appropriate ratio when a node is clicked (when nodeClick is set as zoomToNode and no drill down happens). This configuration item indicates the ratio.
 *
 * @property int $visualDimension Default: 0
 *    treemap is able to map any dimensions of data to visual.
 *     The value of series-treemap.data can be an array. And each item of the array represents a dimension. visualDimension specifies the dimension on which visual mapping will be performed.
 *     About visual encoding, see details in series-treemap.levels.
 *     
 *     Tps: In treemap, visualDimension attribute could appear in more than one places:
 *     
 *     
 *     
 *     It could appear in sereis-treemap, indicating the unified setting of the series.
 *     
 *     
 *     
 *     
 *     It could appear in each array element of  series-treemap.levels, indicating the unified setting of each level of the tree.
 *     
 *     
 *     
 *     
 *     It could appear in each node of series-treemap.data, indicating the particular setting of each node.
 *
 * @property int $visualMin
 *    
 *     
 *     The minimal value of current level. Auto-statistics by default.
 *     When colorMappingBy is set to value, you are able to specify extent manually for visual mapping by specifying visualMin or visualMax.
 *
 * @property int $visualMax
 *    
 *     
 *     The maximal value of current level. Auto-statistics by default.
 *     When colorMappingBy is set to value, you are able to specify extent manually for visual mapping by specifying visualMin or visualMax.
 *
 * @property array $colorAlpha
 *    It indicates the range of tranparent rate (color alpha) for nodes of the series
 *     .
 *     The range of values is 0 ~ 1.
 *     For example, colorAlpha can be [0.3, 1].
 *     About visual encoding, see details in series-treemap.levels.
 *     
 *     Tps: In treemap, colorAlpha attribute could appear in more than one places:
 *     
 *     
 *     
 *     It could appear in sereis-treemap, indicating the unified setting of the series.
 *     
 *     
 *     
 *     
 *     It could appear in each array element of  series-treemap.levels, indicating the unified setting of each level of the tree.
 *     
 *     
 *     
 *     
 *     It could appear in each node of series-treemap.data, indicating the particular setting of each node.
 *
 * @property int $colorSaturation
 *    It indicates the range of saturation (color alpha) for nodes  of the series.
 *     The range of values is 0 ~ 1.
 *     For example, colorSaturation can be [0.3, 1].
 *     About visual encoding, see details in series-treemap.levels.
 *     
 *     Tps: In treemap, colorSaturation attribute could appear in more than one places:
 *     
 *     
 *     
 *     It could appear in sereis-treemap, indicating the unified setting of the series.
 *     
 *     
 *     
 *     
 *     It could appear in each array element of  series-treemap.levels, indicating the unified setting of each level of the tree.
 *     
 *     
 *     
 *     
 *     It could appear in each node of series-treemap.data, indicating the particular setting of each node.
 *
 * @property string $colorMappingBy Default: 'index'
 *    
 *     
 *     Specify the rule according to which each node obtain color from color list. Optional values:
 *     
 *     value:
 *     
 *     Map series-treemap.data.value to color.
 *     In this way, the color of each node indicate its value.
 *     visualDimension can be used to specify which dimension of data is used to perform visual mapping.
 *     
 *     index:
 *     
 *     Map the index (ordinal number) of nodes to color. Namely, in a level, the first node is mapped to the first color of color list, and the second node gets the second color.
 *     In this way, adjacent nodes are distinguished by color.
 *     
 *     id:
 *     
 *     Map series-treemap.data.id to color.
 *     Since id is used to identify node, if user call setOption to modify the tree, each node will remain the original color before and after setOption called. See this example.
 *     About visual encoding, see details in series-treemap.levels.
 *     
 *     Tps: In treemap, colorMappingBy attribute could appear in more than one places:
 *     
 *     
 *     
 *     It could appear in sereis-treemap, indicating the unified setting of the series.
 *     
 *     
 *     
 *     
 *     It could appear in each array element of  series-treemap.levels, indicating the unified setting of each level of the tree.
 *     
 *     
 *     
 *     
 *     It could appear in each node of series-treemap.data, indicating the particular setting of each node.
 *
 * @property int $visibleMin Default: 10
 *    
 *     
 *     A node will not be shown when its area size is smaller than this value (unit: px square).
 *     In this way, tiny nodes will be hidden, otherwise they will huddle together. When user zoom the treemap, the area size will increase and the rectangle will be shown if the area size is larger than this threshold.
 *     About visual encoding, see details in series-treemap.levels.
 *     
 *     Tps: In treemap, visibleMin attribute could appear in more than one places:
 *     
 *     
 *     
 *     It could appear in sereis-treemap, indicating the unified setting of the series.
 *     
 *     
 *     
 *     
 *     It could appear in each array element of  series-treemap.levels, indicating the unified setting of each level of the tree.
 *     
 *     
 *     
 *     
 *     It could appear in each node of series-treemap.data, indicating the particular setting of each node.
 *
 * @property int $childrenVisibleMin
 *    
 *     
 *     Children will not be shown when area size of a node is smaller than this value (unit: px square).
 *     This can hide the details of nodes when the rectangular area is not large enough. When users zoom nodes, the child node would show if the area is larger than this threshold.
 *     About visual encoding, see details in series-treemap.levels.
 *     
 *     Tps: In treemap, childrenVisibleMin attribute could appear in more than one places:
 *     
 *     
 *     
 *     It could appear in sereis-treemap, indicating the unified setting of the series.
 *     
 *     
 *     
 *     
 *     It could appear in each array element of  series-treemap.levels, indicating the unified setting of each level of the tree.
 *     
 *     
 *     
 *     
 *     It could appear in each node of series-treemap.data, indicating the particular setting of each node.
 *
 * @property Series\UpperLabel $upperLabel
 *    upperLabel is used to specify whether show label when the node has children. When upperLabel.show is set as true, the feature that show parent label is enabled.
 *     The same as series-treemap.label, the option upperLabel can be placed at the root of series-treemap directly, or in series-treemap.level, or in each item of series-treemap.data.
 *     Specifically, series-treemap.label specifies the style when a node is a leaf, while upperLabel specifies the style when a node has children, in which case the label is displayed in the inner top of the node.
 *     See:
 *     
 *     
 *     
 *     
 *     
 *     
 *     Tps: In treemap, label attribute could appear in more than one places:
 *     
 *     
 *     
 *     It could appear in sereis-treemap, indicating the unified setting of the series.
 *     
 *     
 *     
 *     
 *     It could appear in each array element of  series-treemap.levels, indicating the unified setting of each level of the tree.
 *     
 *     
 *     
 *     
 *     It could appear in each node of series-treemap.data, indicating the particular setting of each node.
 *
 * @property Series\Breadcrumb $breadcrumb
 *    breadcrumb, showing the path of the current node.
 *
 * @property array $levels
 *    Multiple Levels Configuration
 *     treemap adopts 4-level configuration:
 *     each node --&gt; each level --&gt; each series.
 *     That is, we can configurate each node, can also configurate each level of the tree, or set overall configurations on each series. The highest priority is node configuration.
 *     levels is configurations on each levels, which is used most.
 *     For example:
 *     // Notice that in fact the data structure is not tree, but is forest.
 *     data: [
 *         {
 *             name: nodeA,
 *             children: [
 *                 {name: nodeAA},
 *                 {name: nodeAB},
 *             ]
 *         },
 *         {
 *             name: nodeB,
 *             children: [
 *                 {name: nodeBA}
 *             ]
 *         }
 *     ],
 *     levels: [
 *         {...}, // configurations of the top level of the data structure forest
 *             // (the level that contains nodeA, nodeB shown above).
 *         {...}, // configurations of the next level
 *             // (the level that contains nodeAA, nodeAB, nodeBA shown above)
 *         {...}, // configurations of the next level
 *         ...
 *     ]
 *     
 *     The Rules about Visual Mapping
 *     When designing a treemap, we primarily focus on how to visually distinguish different levels, different categories in the same level, which requires appropriate settings of rectangular color, border thickness, border color and even color saturation of rectangular and so on on each level.
 *     See example. The top level is divided into several parts by colors red, green, blue, and etc ... In each color block, colorSaturation is used to distinguish nodes in sublevel. The border color of the top level is white, while the border color of the sublevel is the color that based on the current block color and processed by borderColorSaturation.
 *     treemap uses this rule of visual configuration: each level computes its visual value based on the configurations (color, colorSaturation, borderColor, borderColorSaturation) on this level. If there is no certain configuration in a node, it inherits the configuration from its parent.
 *     In this way, this effect can be configured: set a color list on the parent level, and set colorSaturation on the child level, and then each node in the parent level would obtain a color from the color list, and each node in the child level would obtain a value from colorSaturation and compound it with the color inherited from its parent node to get its final color.
 *     Dimensions and Extra Visual Mapping
 *     See the example below: every value field is set as an Array, in which each item in the array represents a dimension respectively.
 *     [
 *         {
 *             value: [434, 6969, 8382],
 *             children: [
 *                 {
 *                     value: [1212, 4943, 5453],
 *                     id: someid-1,
 *                     name: description of this node,
 *                     children: [...]
 *                 },
 *                 {
 *                     value: [4545, 192, 439],
 *                     id: someid-2,
 *                     name: description of this node,
 *                     children: [...]
 *                 },
 *                 ...
 *             ]
 *         },
 *         {
 *             value: [23, 59, 12],
 *             children: [...]
 *         },
 *         ...
 *     ]
 *     
 *     treemap will map the first dimension (the first item of the array) to area. If we want to express more information, we could map another dimension (specified by series-treemap.visualDimension) to another visual types, such as colorSaturation and so on. See the example and select the legend Growth.
 *     How to avoid confusion by setting border/gap of node
 *     If all of the border/gaps are set with the same color, confusion might occur when rectangulars in different levels display at the same time.
 *     See the example. Notice that the child rectangles in the red area are in the deeper level than rectangles that are saparated by white gap. So in the red area, basically we set gap color with red, and use borderColorSaturation to lift the saturation.
 *     Explanation about borderWidth, gapWidth, borderColor
 *
 * @property string|callable $sort Default: 'desc'
 *    
 *     
 *     Sorting method that sectors use based on value, which is the sum of children when not set. The default value desc states for descending order, while it can also be set to be asc for ascending order, or null for not sorting, or callback function like:
 *     function(nodeA, nodeB) {
 *         return nodeA.getValue() - nodeB.getValue();
 *     }
 *
 * @property boolean $renderLabelForZeroData Default: false
 *    
 *     
 *     If there is no name, whether need to render it.
 *
 * @property boolean $hoverAnimation Default: true
 *    Whether to enable the animation when hovering on box.
 *
 * @property array $boxWidth Default: '[7, 50]'
 *    
 *     
 *     Up and bottom boundary of box width. The array is in the form of [min, max].
 *     It could be absolute value in pixel, such as [7, 50], or percentage, such as [40%, 90%]. The percentage means the percentage to the maximum possible width.
 *
 * @property int $pointSize Default: 20
 *    Point size of each data point. It is valid with coordinateSystem of geo value.
 *
 * @property int $blurSize Default: 20
 *    Blur size of each data point. It is valid with coordinateSystem of geo value.
 *
 * @property int $minOpacity Default: 0
 *    Minimum opacity. It is valid with coordinateSystem of geo value.
 *
 * @property int $maxOpacity Default: 1
 *    Maximum opacity. It is valid with coordinateSystem of geo value.
 *
 * @property string $map Default: ''
 *    Map name registered in registerMap.
 *     Use geoJSON
 *     $.get(map/china_geo.json, function (geoJson) {
 *         echarts.registerMap(china, {geoJSON: geoJson});
 *         var chart = echarts.init(document.getElementById(main));
 *         chart.setOption({
 *             series: [{
 *                 type: map,
 *                 map: china,
 *                 ...
 *             }]
 *         });
 *     });
 *     
 *     See also USA Population Estimates.
 *     The demo above shows that ECharts can uses geoJSON format as map outline. You can use third-party geoJSON data (like maps) and register them into ECharts.
 *     Use SVG
 *     $.get(map/topographic_map.svg, function (svg) {
 *         echarts.registerMap(topo, {svg: svg});
 *         var chart = echarts.init(document.getElementById(main));
 *         chart.setOption({
 *             series: [{
 *                 type: map,
 *                 map: topo,
 *                 ...
 *             }]
 *         });
 *     });
 *     
 *     See also Beef Cuts.
 *     The demo above shows that SVG format can be used in ECharts. See more info in SVG Base Map.
 *
 * @property Series\Projection $projection
 *    For custom map projection, at least two methods project, unproject should be provided to calculate the coordinates after projection and before projection respectively.
 *     For example, for the Mercator projection.
 *     series: {
 *         type: map,
 *         projection: {
 *             project: (point) =&gt; [point[0] / 180 * Math.PI, -Math.log(Math.tan((Math.PI / 2 + point[1] / 180 * Math.PI) / 2))],
 *             unproject: (point) =&gt; [point[0] * 180 / Math.PI, 2 * 180 / Math.PI * Math.atan(Math.exp(point[1])) - 90]
 *         }
 *     }
 *     
 *     In addition to our own implementation of the projection formula, we can also use exists projection implementations provided by third-party libraries such as d3-geo.
 *     const projection = d3.geoConicEqualArea();
 *     // ...
 *     series: {
 *         type: map,
 *         projection: {
 *             project: (point) =&gt; projection(point),
 *             unproject: (point) =&gt; projection.invert(point)
 *         }
 *     }
 *     
 *     
 *     Note: Custom projections are only useful when using GeoJSON as a data source.
 *
 * @property int $aspectScale Default: 0.75
 *    Used to scale aspect of geo. Will be ignored if projection is set.
 *     The final aspect is calculated by: geoBoundingRect.width / geoBoundingRect.height * aspectScale.
 *
 * @property array $boundingCoords
 *    Two dimension array. Define coord of left-top, right-bottom in layout box.
 *     // A complete world map
 *     map: world,
 *     left: 0, top: 0, right: 0, bottom: 0,
 *     boundingCoords: [
 *         // [lng, lat] of left-top corner
 *         [-180, 90],
 *         // [lng, lat] of right-bottom corner
 *         [180, -90]
 *     ],
 *
 * @property int $zoom Default: 1
 *    Zoom rate of current view-port.
 *
 * @property Series\ScaleLimit $scaleLimit
 *    Limit of scaling, with min and max. 1 by default.
 *
 * @property array $nameMap
 *    Name mapping for customized areas. For example:
 *     {
 *         China : 中国
 *     }
 *
 * @property string $nameProperty Default: 'name'
 *    
 *     Since v4.8.0
 *     
 *     customized property key for GeoJSON feature. By default, name is used as primary key to identify GeoJSON feature.
 *     For example:
 *     {
 *         nameProperty: NAME, // key to connect following data point to GeoJSON region {type:Feature,id:01,properties:{NAME:Alabama}, geometry: { ... }}
 *         data:[
 *             {name: Alabama, value: 4822023},
 *             {name: Alaska, value: 731449},
 *         ]
 *     }
 *
 * @property array $layoutCenter
 *    layoutCenter and layoutSize provides layout strategy other than left/right/top/bottom/width/height.
 *     When using left/right/top/bottom/width/height, it is hard to put the map inside a box area with a fixed width-height ratio. In this case, layoutCenter attribute can be used to define the center position of map, and layoutSize can be used to define the size of map. For example:
 *     layoutCenter: [30%, 30%],
 *     // If width-height ratio is larger than 1, then width is set to be 100.
 *     // Otherwise, height is set to be 100.
 *     // This makes sure that it will not exceed the area of 100x100
 *     layoutSize: 100
 *     
 *     After setting these two values, left/right/top/bottom/width/height becomes invalid.
 *
 * @property int|string $layoutSize
 *    Size of map, see layoutCenter for more information. Percentage relative to screen width, and absolute pixel values are supported.
 *
 * @property string $mapValueCalculation Default: 'sum'
 *    Value of multiple series with the same map type can use this option to get a statistical value.
 *     Supported statistical methods:
 *     
 *     sum
 *     average
 *     max
 *     min
 *
 * @property boolean $showLegendSymbol
 *    Show the symbol in related area (dot of series symbol). Available when legend component exists.
 *
 * @property int $parallelIndex Default: 0
 *    Index of parallel coordinates to combine with, which is useful for multiple parallel axes in one chart.
 *
 * @property int $inactiveOpacity Default: 0.05
 *    
 *     
 *     When perform brush selection, the unselected lines will be set as this transparency rate (which could darken those lines).
 *
 * @property int $activeOpacity Default: 1
 *    
 *     
 *     When perform brush selection, the selected lines will be set as this transparency rate (which could highlight those lines).
 *
 * @property boolean $realtime Default: true
 *    
 *     
 *     Whether to update view in realtime.
 *
 * @property boolean $polyline Default: false
 *    If draw as a polyline.
 *     Default to be false. Can only draw a two end straight line.
 *     If it is set true, data.coords can have more than two coord to draw a polyline. It is useful when visualizing GPS track data. See example lines-bus.
 *
 * @property Series\Effect $effect
 *    The setting about the special effects of lines.
 *     Tips: All the graphs with trail effect should be put on a individual layer, which means that zlevel need to be different with others. And the animation (animation: false)  of this layer is suggested to be turned off at the meanwhile. Otherwise, other graphic elements in other series and the label of animation would produce unnecessary ghosts.
 *
 * @property Series\Circular $circular
 *    Configuration about circular layout.
 *
 * @property Series\Force $force
 *    Configuration items about force-directed layout. Force-directed layout simulates spring/charge model, which will add a repulsion between 2 nodes and add a attraction between 2 nodes of each edge. In each iteration nodes will move under the effect of repulsion and attraction. After several iterations, the nodes will be static in a balanced position. As a result, the energy local minimum of this whole model will be realized.
 *     The result of force-directed layout has a good symmetries and clustering, which is also aesthetically pleasing.
 *
 * @property int $nodeScaleRatio Default: 0.6
 *    
 *     
 *     Related zooming ratio of nodes when mouse zooming in or out. When it is set as 0, the node will not zoom as the mouse zooms.
 *
 * @property boolean $draggable Default: false
 *    
 *     
 *     If node is draggable. Only available when using force-directed layout.
 *
 * @property array|string $edgeSymbol Default: '[\'none\', \'none\']'
 *    Symbol of two ends of edge line.
 *     For example:
 *     edgeSymbol: [circle, arrow]
 *
 * @property array|int $edgeSymbolSize Default: 10
 *    
 *     
 *     Size of symbol of two ends of edge line. Can be an array or a single number.
 *     For example:
 *     // Start symbol has size 5 and end symbol has size 10
 *     edgeSymbolSize: [5, 10],
 *     // All has size 10
 *     edgeSymbolSize: 10
 *
 * @property Series\EdgeLabel $edgeLabel
 *    
 *
 * @property array $categories
 *    The categories of node, which is optional.
 *     If there is a classification of nodes, the category of each node can be assigned through data[i].category. And the style of category will also be applied to the style of nodes. categories can also be used in legend.
 *
 * @property boolean|int|array $autoCurveness Default: false
 *    For the situation where there are multiple links between nodes, the curveness of each link is automatically calculated, not enabled by default.
 *     When set true to enable automatic curvature calculation, the default edge curvenness array length is 20, if the number of edges between two nodes is more than 20, please use number or Array to set the edge curvenness array.
 *     When set to number, it indicates the length of the edge curvenness array between two nodes, and the calculation result is given by the internal algorithm.
 *     When set to Array, it means that the curveness array is directly specified, and the multilateral curveness is directly selected from the array.
 *     Notice： if lineStyle.curveness has been set, this property is invalid.
 *
 * @property array $nodes
 *    Alias of data
 *
 * @property array $links
 *    Relational data between nodes. Example:
 *     links: [{
 *         source: n1,
 *         target: n2
 *     }, {
 *         source: n2,
 *         target: n3
 *     }]
 *
 * @property array $edges
 *    Alias of links
 *
 * @property int $nodeWidth Default: 20
 *    
 *     
 *     The node width of rectangle in Sankey diagram.
 *
 * @property int $nodeGap Default: 8
 *    
 *     
 *     The gap between any two rectangles in each column of the Sankey diagram.
 *
 * @property string $nodeAlign Default: 'justify'
 *    
 *     
 *     Controls the horizontal alignment of nodes in the diagram.
 *     May be:
 *     
 *     left: initial nodes (those with no incoming links) are aligned to the left of the diagram.
 *     
 *     right: terminal nodes (those with no outgoing links) are aligned to the right of the diagram.
 *     
 *     justify: initial and terminal nodes are aligned on the left and right edges.
 *     
 *     
 *     Note when orient is vertical, nodeAlign controls vertical alignment.
 *
 * @property int $layoutIterations Default: 32
 *    
 *     
 *     The iterations of layout, which is used to iteratively optimize the position of the nodes and edges in the Sankey diagram to reduce the overlapping between nodes and edges. The default value is 32. If you want the order of the nodes in the chart to be the same with the order in the original data, you can set the value to be 0.
 *
 * @property int $min Default: 0
 *    
 *     
 *     The specified minimum value.
 *
 * @property int $max Default: 100
 *    
 *     
 *     The specified maximum value.
 *
 * @property int|string $minSize Default: '0%'
 *    
 *     
 *     The mapped width from minimum data value min.
 *     It can be absolute pixel and also the percentage of layout width. If you dont want the graph of minimum value to be a triangle, you can set up this property larger than 0.
 *
 * @property int|string $maxSize Default: '100%'
 *    
 *     
 *     The mapped width from maximum data value max.
 *     It can be absolute pixel and also the percentage of layout width.
 *
 * @property int $gap Default: 0
 *    
 *     
 *     Gap between each trapezoid.
 *
 * @property string $funnelAlign Default: 'center'
 *    
 *     
 *     Horizontal align. Defaults to align center. Can be left, right, center.
 *
 * @property int $endAngle Default: -45
 *    
 *     
 *     The end angle of gauge chart.
 *
 * @property int $splitNumber Default: 10
 *    
 *     
 *     The number of split segments of gauge chart scale.
 *
 * @property Series\AxisLine $axisLine
 *    The related configuration about the axis line of gauge chart.
 *
 * @property Series\Progress $progress
 *    
 *     Since v5.0
 *     
 *     Used to show current progress.
 *
 * @property Series\SplitLine $splitLine
 *    The style of split line.
 *
 * @property Series\AxisTick $axisTick
 *    The tick line style.
 *
 * @property Series\AxisLabel $axisLabel
 *    Axis tick label.
 *
 * @property Series\Pointer $pointer
 *    Gauge chart pointer.
 *
 * @property Series\Anchor $anchor
 *    
 *     Since v5.0
 *     
 *     The fixed point of a pointer in a dial.
 *
 * @property Series\Title $title
 *    The title of gauge chart.
 *
 * @property Series\Detail $detail
 *    The detail about gauge chart which is used to show data.
 *
 * @property string $symbolPosition Default: 'start'
 *    
 *     
 *     Specify the location of the graphic elements. Optional values:
 *     
 *     start: The edge of graphic element inscribes with the start of the reference bar.
 *     end: The edge of graphic element inscribes with the end of the reference bar.
 *     center: The graphic element is at the center of the reference bar.
 *     
 *     For example:
 *     
 *     
 *     
 *     
 *     
 *     This attribute can be set at the root level of a series, where all data items in the series will be affected by this attribute. And this attribute can also be set at each data item in series-pictorialBar.data, where only the data item is affected by this attribute.
 *     For example:
 *     series: [{
 *         symbolPosition: ... // Affect all data items.
 *         data: [23, 56]
 *     }]
 *     // Or
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolPosition: ... // Only affect this data item.
 *         }, {
 *             value: 56
 *             symbolPosition: ... // Only affect this data item.
 *         }]
 *     }]
 *
 * @property boolean|int|string $symbolRepeat
 *    
 *     
 *     Whether to repeat a graphic element. Optional values:
 *     
 *     false/null/undefined: Do not repeat, that is, each graphic element represents a data item.
 *     true: Repeat, that is, a group of repeated graphic elements represent a data item. The repeat times is calculated according to data.
 *     a number: Repeat, that is a group of repeated graphic elements represent a data item. The repeat times is always the given number.
 *     fixed: Repeat, that is a group of repeated graphic elements represent a data item. The repeat times is calcuated according to symbolBoundingData, that is, the repeat times has nothing to do with data. The setting is useful when graphic elements are used as background.
 *     
 *     For example:
 *     
 *     
 *     
 *     
 *     
 *     This attribute can be set at the root level of a series, where all data items in the series will be affected by this attribute. And this attribute can also be set at each data item in series-pictorialBar.data, where only the data item is affected by this attribute.
 *     For example:
 *     series: [{
 *         symbolRepeat: ... // Affect all data items.
 *         data: [23, 56]
 *     }]
 *     // Or
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolRepeat: ... // Only affect this data item.
 *         }, {
 *             value: 56
 *             symbolRepeat: ... // Only affect this data item.
 *         }]
 *     }]
 *
 * @property string $symbolRepeatDirection Default: 'start'
 *    
 *     
 *     When symbolRepeat is used, symbolRepeatDirection specifies the render order of the repeated graphic elements. The setting is useful in these cases below:
 *     
 *     If symbolMargin is set as a negative value, repeated elements will overlap with each other. symbolRepeatDirection can be used to specify the order of overlap.
 *     
 *     If animationDelay or animationDelayUpdate is used, symbolRepeatDirection specifies the order of index.
 *     
 *     
 *     Optional values can be start and end.
 *     For example:
 *     
 *     
 *     
 *     
 *     
 *     This attribute can be set at the root level of a series, where all data items in the series will be affected by this attribute. And this attribute can also be set at each data item in series-pictorialBar.data, where only the data item is affected by this attribute.
 *     For example:
 *     series: [{
 *         symbolRepeatDirection: ... // Affect all data items.
 *         data: [23, 56]
 *     }]
 *     // Or
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolRepeatDirection: ... // Only affect this data item.
 *         }, {
 *             value: 56
 *             symbolRepeatDirection: ... // Only affect this data item.
 *         }]
 *     }]
 *
 * @property int|string $symbolMargin
 *    
 *     
 *     Specify margin of both sides of a graphic element. (both sides means the two sides in the direction of its value axis). It works only when symbolRepeat is used.
 *     Absolute value can be used (like 20), or percent value can be used (like -30%), which is based on its symbolSize.
 *     symbolMargin can be positive value or negative value, which enables overlap of graphic elements when symbolRepeat is used.
 *     A ! can be appended on the end of the value, like 30%! or 25!, which means a extra blank will be added on the both ends, otherwise the graphic elements on both ends will reach the boundary by default.
 *     Notice:
 *     
 *     When symbolRepeat is true/fixed:
 *       The given symbolMargin is just a reference value. The final gap of graphic elements will be calculated according to symbolRepeat, symbolMargin and symbolBoundingData.
 *     When symbolRepeat is set as a number:
 *       symbolMargin does not work any more.
 *     
 *     For example:
 *     
 *     
 *     
 *     
 *     
 *     This attribute can be set at the root level of a series, where all data items in the series will be affected by this attribute. And this attribute can also be set at each data item in series-pictorialBar.data, where only the data item is affected by this attribute.
 *     For example:
 *     series: [{
 *         symbolMargin: ... // Affect all data items.
 *         data: [23, 56]
 *     }]
 *     // Or
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolMargin: ... // Only affect this data item.
 *         }, {
 *             value: 56
 *             symbolMargin: ... // Only affect this data item.
 *         }]
 *     }]
 *
 * @property boolean $symbolClip Default: false
 *    
 *     
 *     Whether to clip graphic elements.
 *     
 *     false/null/undefined: The whole graphic elements represent the size of value.
 *     true: The clipped graphic elements reperent the size of value.
 *     
 *     symbolClip is usually used in this case: both amount value and current value should be displayed. In this case, tow series can be used. One for background, using complete graphic elements, while another for current value, using clipped graphic elements.
 *     For example:
 *     
 *     
 *     
 *     Notice, in the example above,
 *     
 *     The same symbolBoundingData is used in background series and current value seires, which makes their graphic elements are the same size.
 *     A bigger z is set on current value series, which makes it is over background series.
 *     
 *     This attribute can be set at the root level of a series, where all data items in the series will be affected by this attribute. And this attribute can also be set at each data item in series-pictorialBar.data, where only the data item is affected by this attribute.
 *     For example:
 *     series: [{
 *         symbolClip: ... // Affect all data items.
 *         data: [23, 56]
 *     }]
 *     // Or
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolClip: ... // Only affect this data item.
 *         }, {
 *             value: 56
 *             symbolClip: ... // Only affect this data item.
 *         }]
 *     }]
 *
 * @property int $symbolBoundingData
 *    Defines a bounding area availble for the graphic elements. This setting gives a data, which will then be translated to a coordinate on the coordinate system. The coordinate specifies the bounding. Namely, if symbolBoundingData is set, the final size (or layout) of the graphic elements depend on the symbolBoundingData.
 *     When reference bar is horizontal, symbolBoundingData is coresponding to x axis, while reference bar is vertical, symbolBoundingData is coresponding to y axis.
 *     Rule:
 *     
 *     If symbolRepeat is not used:
 *       symbolBoundingData is the same as the size of reference bar by default. The size of the graphic element is detemined by symbolBoundingData. For example, if reference bar is vertical, its data is 24, symbolSize is set as [30, 50%], symbolBoundingData is set as 124, the final size of the graphic element will be 124 * 50% = 62. If symbolBoundingData is not set, the final size will be 24 * 50% = 12.
 *     
 *     If symbolRepeat is used:
 *       symbolBoundingData is the extreme value of the coordinate system. symbolBoundingData defines a bounding area, where repeated graphic elements layout according to symbolMargin and symbolRepeat and symbolSize. Both these settings determine the gap size of the repeated graphic elements.
 *     
 *     
 *     symbolBoundingData is usually used in these cases:
 *     
 *     When symbolCilp is used:
 *       And a series is used to display amont value, while another series is used to display current value. symbolBoundingData can be used to ensure that the graphic elements of these two series are at the same size.
 *     
 *     
 *     For example:
 *     
 *     
 *     
 *     
 *     When symbolRepeat is used:
 *       symbolBoundingData can be use to ensure the gaps of the elements in different bars are the same. Of cource, you can do not set symbolBoundingData, whose default value is a stable value (extreme value of the coordinate system).
 *     
 *     
 *     For example:
 *     
 *     
 *     
 *     
 *     symbolBoundingData can also be an array, such as [-40, 60], which specifies both negative and positive symbolBoundingData.
 *     Check this example:
 *     
 *     
 *     
 *     
 *     
 *     This attribute can be set at the root level of a series, where all data items in the series will be affected by this attribute. And this attribute can also be set at each data item in series-pictorialBar.data, where only the data item is affected by this attribute.
 *     For example:
 *     series: [{
 *         symbolBoundingData: ... // Affect all data items.
 *         data: [23, 56]
 *     }]
 *     // Or
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolBoundingData: ... // Only affect this data item.
 *         }, {
 *             value: 56
 *             symbolBoundingData: ... // Only affect this data item.
 *         }]
 *     }]
 *
 * @property int $symbolPatternSize Default: 400
 *    
 *     
 *     Image can be used as the pattern of graphic elements.
 *     var textureImg = new Image();
 *     textureImg.src = data:image/jpeg;base64,...; // dataURI
 *     // Or
 *     // textureImg.src = http://xxx.xxx.xxx/xx.png; // URL
 *     ...
 *     itemStyle: {
 *         color: {
 *             image: textureImg,
 *             repeat: repeat
 *         }
 *     }
 *     
 *     symbolPatternSize specifies the size of pattern image. For example, if symbolPatternSize is 400, the pattern image will be displayed at the size of 400px * 400px.
 *     For example:
 *     
 *     
 *     
 *     
 *     
 *     This attribute can be set at the root level of a series, where all data items in the series will be affected by this attribute. And this attribute can also be set at each data item in series-pictorialBar.data, where only the data item is affected by this attribute.
 *     For example:
 *     series: [{
 *         symbolPatternSize: ... // Affect all data items.
 *         data: [23, 56]
 *     }]
 *     // Or
 *     series: [{
 *         data: [{
 *             value: 23
 *             symbolPatternSize: ... // Only affect this data item.
 *         }, {
 *             value: 56
 *             symbolPatternSize: ... // Only affect this data item.
 *         }]
 *     }]
 *
 * @property array $boundaryGap Default: '["10%", "10%"]'
 *    The boundary gap of the direction orthogonal with coordinate axis in diagram, which is set to adjust the diagram position, keeping it on the screen center instead of the upside or downside of the screen.
 *
 * @property int $singleAxisIndex Default: 0
 *    The index of single time axis, which defaults to be 0 because it contains only one axis.
 *
 * @property Series\RenderItem $renderItem
 *    custom series requires developers to write a render logic by themselves. This render logic is called renderItem.
 *     For example:
 *     var option = {
 *         ...,
 *         series: [{
 *             type: custom,
 *             renderItem: function (params, api) {
 *                 var categoryIndex = api.value(0);
 *                 var start = api.coord([api.value(1), categoryIndex]);
 *                 var end = api.coord([api.value(2), categoryIndex]);
 *                 var height = api.size([0, 1])[1] * 0.6;
 *     
 *                 var rectShape = echarts.graphic.clipRectByRect({
 *                     x: start[0],
 *                     y: start[1] - height / 2,
 *                     width: end[0] - start[0],
 *                     height: height
 *                 }, {
 *                     x: params.coordSys.x,
 *                     y: params.coordSys.y,
 *                     width: params.coordSys.width,
 *                     height: params.coordSys.height
 *                 });
 *     
 *                 return rectShape &amp;&amp; {
 *                     type: rect,
 *                     shape: rectShape,
 *                     style: api.style()
 *                 };
 *             },
 *             data: data
 *         }]
 *     }
 *     
 *     renderItem will be called on each data item.
 *     renderItem provides two parameters:
 *     
 *     params: provides info about the current series and data and coordinate system.
 *     api: includes some methods.
 *     
 *     renderItem method should returns graphic elements definitions.See renderItem.return.
 *     Generally, the main process of renderItem is that retrieve value from data and convert them to graphic elements on the current coordinate system. Two methods in renderItem.arguments.api are always used in this procedure:
 *     
 *     api.value(...) is used to retrieve value from data. For example, api.value(0) retrieve the value of the first dimension in the current data item.
 *     api.coord(...) is used to convert data to coordinate. For example, var point = api.coord([api.value(0), api.value(1)]) converet the data to the point on the current coordinate system.
 *     
 *     Sometimes api.size(...) method is needed, which calculates the size on the coordinate system by a given data range.
 *     Moreover, api.style(...) method can be used to set style. It provides not only the style settings specified in series.itemStyle, but also the result of visual mapping. This method can also be called like api.style({fill: green, stroke: yellow}) to override those style settings.
 *
 * {_more_}
 */
class Series extends Property {}