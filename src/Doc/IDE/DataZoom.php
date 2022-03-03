<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type Default: 'inside'
 *    
 *
 * @property string $id
 *    Component ID, not specified by default. If specified, it can be used to refer the component in option or API.
 *
 * @property boolean $disabled Default: false
 *    
 *     
 *     Whether disable inside zoom.
 *
 * @property int|array $xAxisIndex
 *    Specify which xAxis is/are controlled by the dataZoom-inside when catesian coordinate system is used.
 *     By default the first xAxis that parallel to dataZoom are controlled when dataZoom-inside.orient is set as horizontal. But it is recommended to specify it explicitly but not use default value.
 *     If it is set as a single number, one axis is controlled, while if it is set as an Array , multiple axes are controlled.
 *     For example:
 *     option: {
 *         xAxis: [
 *             {...}, // The first xAxis
 *             {...}, // The second xAxis
 *             {...}, // The third xAxis
 *             {...}  // The fourth xAxis
 *         ],
 *         dataZoom: [
 *             { // The first dataZoom component
 *                 xAxisIndex: [0, 2] // Indicates that this dataZoom component
 *                                          // controls the first and the third xAxis
 *             },
 *             { // The second dataZoom component
 *                 xAxisIndex: 3      // indicates that this dataZoom component
 *                                          // controls the fourth xAxis
 *             }
 *         ]
 *     }
 *
 * @property int|array $yAxisIndex
 *    Specify which yAxis is/are controlled by the dataZoom-inside when catesian coordinate system is used.
 *     By default the first yAxis that parallel to dataZoom are controlled when dataZoom-inside.orient is set as vertical. But it is recommended to specify it explicitly but not use default value.
 *     If it is set as a single number, one axis is controlled, while if it is set as an Array , multiple axes are controlled.
 *     For example:
 *     option: {
 *         yAxis: [
 *             {...}, // The first yAxis
 *             {...}, // The second yAxis
 *             {...}, // The third yAxis
 *             {...}  // The fourth yAxis
 *         ],
 *         dataZoom: [
 *             { // The first dataZoom component
 *                 yAxisIndex: [0, 2] // Indicates that this dataZoom component
 *                                          // controls the first and the third yAxis
 *             },
 *             { // The second dataZoom component
 *                 yAxisIndex: 3      // indicates that this dataZoom component
 *                                          // controls the fourth yAxis
 *             }
 *         ]
 *     }
 *
 * @property int|array $radiusAxisIndex
 *    Specify which radiusAxis is/are controlled by the dataZoom-inside when polar coordinate system is used.
 *     If it is set as a single number, one axis is controlled, while if it is set as an Array , multiple axes are controlled.
 *     For example:
 *     option: {
 *         radiusAxis: [
 *             {...}, // The first radiusAxis
 *             {...}, // The second radiusAxis
 *             {...}, // The third radiusAxis
 *             {...}  // The fourth radiusAxis
 *         ],
 *         dataZoom: [
 *             { // The first dataZoom component
 *                 radiusAxisIndex: [0, 2] // Indicates that this dataZoom component
 *                                          // controls the first and the third radiusAxis
 *             },
 *             { // The second dataZoom component
 *                 radiusAxisIndex: 3      // indicates that this dataZoom component
 *                                          // controls the fourth radiusAxis
 *             }
 *         ]
 *     }
 *
 * @property int|array $angleAxisIndex
 *    Specify which angleAxis is/are controlled by the dataZoom-inside when polar coordinate system is used.
 *     If it is set as a single number, one axis is controlled, while if it is set as an Array , multiple axes are controlled.
 *     For example:
 *     option: {
 *         angleAxis: [
 *             {...}, // The first angleAxis
 *             {...}, // The second angleAxis
 *             {...}, // The third angleAxis
 *             {...}  // The fourth angleAxis
 *         ],
 *         dataZoom: [
 *             { // The first dataZoom component
 *                 angleAxisIndex: [0, 2] // Indicates that this dataZoom component
 *                                          // controls the first and the third angleAxis
 *             },
 *             { // The second dataZoom component
 *                 angleAxisIndex: 3      // indicates that this dataZoom component
 *                                          // controls the fourth angleAxis
 *             }
 *         ]
 *     }
 *
 * @property string $filterMode Default: 'filter'
 *    
 *     
 *     
 *     
 *     Generally dataZoom component zoom or roam coordinate system through data filtering and set the windows of axes internally.
 *     Its behaviours vary according to filtering mode settings (dataZoom.filterMode).
 *     Possible values:
 *     
 *     filter: data that outside the window will be filtered, which may lead to some changes of windows of other axes. For each data item, it will be filtered if one of the relevant dimensions is out of the window.
 *     
 *     weakFilter: data that outside the window will be filtered, which may lead to some changes of windows of other axes. For each data item, it will be filtered only if all of the relevant dimensions are out of the same side of the window.
 *     
 *     empty: data that outside the window will be set to NaN, which will not lead to changes of windows of other axes.
 *     
 *     none: Do not filter data.
 *     
 *     
 *     How to set filterMode is up to users, depending on the requirments and scenarios. Expirically:
 *     
 *     If only xAxis or only yAxis is controlled by dataZoom, filterMode: filter is typically used, which enable the other axis auto adapte its window to the extent of the filtered data.
 *     
 *     If both xAxis and yAxis are operated by dataZoom:
 *     
 *     If xAxis and yAxis should not effect mutually (e.g. a scatter chart with both axes on the type of value), they should be set to be filterMode: empty.
 *     
 *     If xAxis is the main axis and yAxis is the auxiliary axis (or vise versa) (e.g., in a bar chart, when dragging dataZoomX to change the window of xAxis, we need the yAxis to adapt to the clipped data, but when dragging dataZoomY to change the window of yAxis, we need the xAxis not to be changed), in this case, xAxis should be set to be fiterMode: filter, while yAxis should be set to be fiterMode: empty.
 *     
 *     
 *     
 *     
 *     It can be demonstrated by the sample:
 *     option = {
 *         dataZoom: [
 *             {
 *                 id: dataZoomX,
 *                 type: slider,
 *                 xAxisIndex: [0],
 *                 filterMode: filter
 *             },
 *             {
 *                 id: dataZoomY,
 *                 type: slider,
 *                 yAxisIndex: [0],
 *                 filterMode: empty
 *             }
 *         ],
 *         xAxis: {type: value},
 *         yAxis: {type: value},
 *         series{
 *             type: bar,
 *             data: [
 *                 // The first column corresponds to xAxis,
 *                 // and the second coloum corresponds to yAxis.
 *                 [12, 24, 36],
 *                 [90, 80, 70],
 *                 [3, 9, 27],
 *                 [1, 11, 111]
 *             ]
 *         }
 *     }
 *     
 *     In the sample above, dataZoomX is set as filterMode: filter. When use drags dataZoomX (do not touch dataZoomY) and the valueWindow of xAxis is changed to [2, 50] consequently, dataZoomX travel the first column of series.data and filter items that out of the window. The series.data turns out to be:
 *     [
 *         [12, 24, 36],
 *         // [90, 80, 70] This item is filtered, as 90 is out of the window.
 *         [3, 9, 27]
 *         // [1, 11, 111] This item is filtered, as 1 is out of the window.
 *     ]
 *     
 *     Before filtering, the second column, which corresponds to yAxis, has values 24, 80, 9, 11. After filtering, only 24 and 9 are left. Then the extent of yAxis is adjusted to adapt the two values (if yAxis.min and yAxis.max are not set).
 *     So filterMode: filter can be used to enable the other axis to auto adapt the filtered data.
 *     Then lets review the sample from the beginning, dataZoomY is set as filterMode: empty. So if user drags dataZoomY (do not touch dataZoomX) and its window is changed to [10, 60] consequently, dataZoomY travels the second column of series.data and set NaN to all of the values that outside the window (NaN cause the graphical elements, i.e., bar elements, do not show, but still hold the place). The series.data turns out to be:
 *     [
 *         [12, 24, 36],
 *         [90, NaN, 70], // Set to NaN
 *         [3, NaN, 27],  // Set to NaN
 *         [1, 11, 111]
 *     ]
 *     
 *     In this case, the first column (i.e., 12, 90, 3, 1, which corresponds to xAxis), will not be changed at all. So dragging yAxis will not change extent of xAxis, which is good for requirements like outlier filtering.
 *     See this example:
 *
 * @property int $start Default: 0
 *    
 *     
 *     The start percentage of the window out of the data extent, in the range of 0 ~ 100.
 *     dataZoom-inside.start and dataZoom-inside.end define the window of the data in percent form.
 *     More info about the relationship between dataZoom-inside.start and axis extent can be checked in dataZoom-inside.rangeMode.
 *
 * @property int $end Default: 100
 *    
 *     
 *     The end percentage of the window out of the data extent, in the range of 0 ~ 100.
 *     dataZoom-inside.start and dataZoom-inside.end define the window of the data in percent form.
 *     More info about the relationship between dataZoom-inside.end and axis extent can be checked in dataZoom-inside.rangeMode.
 *
 * @property int|string|string $startValue
 *    The start absolute value of the window, not works when dataZoom-inside.start is set.
 *     dataZoom-inside.startValue and dataZoom-inside.endValue define the window of the data window in absolute value form.
 *     Notice, if an axis is set to be category, startValue could be set as index of the array of axis.data or as the array value itself. In the latter case, it will internally and automatically translate to the index of array.
 *     More info about the relationship between dataZoom-inside.startValue and axis extent can be checked in dataZoom-inside.rangeMode.
 *
 * @property int|string|string $endValue
 *    The end absolute value of the window, doesnt work when dataZoom-inside.end is set.
 *     dataZoom-inside.startValue and dataZoom-inside.endValue define the window of the data window in absolute value form.
 *     Notice, if an axis is set to be category, startValue could be set as index of the array of axis.data or as the array value itself. In the latter case, it will internally and automatically translate to the index of array.
 *     More info about the relationship between dataZoom-inside.endValue and axis extent can be checked in dataZoom-inside.rangeMode.
 *
 * @property int $minSpan
 *    
 *     
 *     Used to restrict minimal window size, in percent, which value is in the range of [0, 100].
 *     If dataZoom-inside.minValueSpan is set, minSpan does not work any more.
 *
 * @property int $maxSpan
 *    
 *     
 *     Used to restrict maximal window size, in percent, which value is in the range of [0, 100].
 *     If dataZoom-inside.maxValueSpan is set, maxSpan does not work any more.
 *
 * @property int|string|string $minValueSpan
 *    Used to restrict minimal window size.
 *     For example:
 *     In time axis it can be set as 3600 * 24 * 1000 * 5 to represent 5 day.
 *     In category axis it can be set as 5 to represent 5 categories.
 *
 * @property int|string|string $maxValueSpan
 *    Used to restrict maximal window size.
 *     For example:
 *     In time axis it can be set as 3600 * 24 * 1000 * 5 to represent 5 day.
 *     In category axis it can be set as 5 to represent 5 categories.
 *
 * @property string $orient
 *    
 *     
 *     Specify whether the layout of dataZoom component is horizontal or vertical. Whats more, it indicates whether the horizontal axis or vertical axis is controlled by default in catesian coordinate system.
 *     Valid values:
 *     
 *     horizontal: horizontal.
 *     
 *     vertical: vertical.
 *
 * @property boolean $zoomLock Default: false
 *    
 *     
 *     Specify whether to lock the size of window (selected area).
 *     When set as true, the size of window is locked, that is, only the translation (by mouse drag or touch drag) is avialable but zoom is not.
 *
 * @property int $throttle Default: 100
 *    
 *     
 *     Specify the frame rate of views refreshing, with unit millisecond (ms).
 *     If animation set as true and animationDurationUpdate set as bigger than 0, you can keep throttle as the default value 100 (or set it as a value bigger than 0), otherwise it might be not smooth when dragging.
 *     If animation set as false or animationDurationUpdate set as 0, and data size is not very large, and it seems to be not smooth when dragging, you can set throttle as 0 to improve that.
 *
 * @property array $rangeMode
 *    The format is [rangeModeForStart, rangeModeForEnd].
 *     For example rangeMode: [value, percent] means that use absolute value in start and percent value in end.
 *     Optional value for each item: value, percent.
 *     
 *     value mode: the axis extent will always only be determined by dataZoom.startValue and dataZoom.endValue, despite how data like and how axis.min and axis.max are.
 *     percent mode: 100 represents 100% of the [dMin, dMax], where dMin is axis.min if axis.min specified, otherwise data.extent[0], and dMax is axis.max if axis.max specified, otherwise data.extent[1]. Axis extent will only be determined by the result of the percent of [dMin, dMax].
 *     
 *     rangeMode are auto determined by whether option.start/option.end are specified (represents percent mode) or option.startValue/option.endValue specified (represents value mode). And when user behavior trigger the changing of the view, the rangeMode would be modified automatically. For example, if triggered by toolbox.dataZoom, it will be modefied to value, and if triggered by dataZoom-inside or dataZoom-slider, it will be modified to percent.
 *     If we specify rangeMode manually in option, it only works when both start and startValue specified or both end and endValue specified. So usually we do not need to specify dataZoom.rangeMode manually.
 *     Take a scenario as an example. When we are using dynamic data (update data periodically via setOption), if in value mode, the window will be kept in a fixed value range despite how data are appended, while if in percent mode, whe window range will be changed alone with the appended data (suppose axis.min and axis.max are not specified).
 *
 * @property boolean|string $zoomOnMouseWheel Default: true
 *    
 *     
 *     How to trigger zoom. Optional values:
 *     
 *     true：Mouse wheel triggers zoom.
 *     false：Mouse wheel can not triggers zoom.
 *     shift：Holding shift and mouse wheel triggers zoom.
 *     ctrl：Holding ctrl and mouse wheel triggers zoom.
 *     alt：Holding alt and mouse wheel triggers zoom.
 *
 * @property boolean|string $moveOnMouseMove Default: true
 *    
 *     
 *     How to trigger data window move. Optional values:
 *     
 *     true：Mouse move triggers data window move.
 *     false：Mouse move can not triggers data window move.
 *     shift：Holding shift and mouse move triggers data window move.
 *     ctrl：Holding ctrl and mouse move triggers data window move.
 *     alt：Holding alt and mouse move triggers data window move.
 *
 * @property boolean|string $moveOnMouseWheel Default: false
 *    
 *     
 *     How to trigger data window move. Optional values:
 *     
 *     true：Mouse wheel triggers data window move.
 *     false：Mouse wheel can not triggers data window move.
 *     shift：Holding shift and mouse wheel triggers data window move.
 *     ctrl：Holding ctrl and mouse wheel triggers data window move.
 *     alt：Holding alt and mouse wheel triggers data window move.
 *
 * @property boolean $preventDefaultMouseMove Default: true
 *    
 *     
 *     Whether to prevent default behavior of mouse move event.
 *
 * @property boolean $show Default: true
 *    
 *     
 *     Whether to show the  component. If is set to be false, it will not show, but its data filtering function still works.
 *
 * @property string $backgroundColor Default: 'rgba(47,69,84,0)'
 *    
 *     
 *     The background color of the component.
 *
 * @property DataZoom\DataBackground $dataBackground
 *    The style of data shadow.
 *
 * @property DataZoom\SelectedDataBackground $selectedDataBackground
 *    
 *     Since v5.0.0
 *     
 *     Styles of selected data shadow.
 *
 * @property string $fillerColor Default: 'rgba(47,69,84,0.25)'
 *    
 *     
 *     The color to fill selected area.
 *
 * @property string $borderColor Default: '#ddd'
 *    
 *     
 *     The color of border.
 *
 * @property string $handleIcon
 *    
 *     
 *     Icon shape of handle, which supports path string. Its default value is:
 *     M8.2,13.6V3.9H6.3v9.7H3.1v14.9h3.3v9.7h1.8v-9.7h3.3V13.6H8.2z M9.7,24.4H4.8v-1.4h4.9V24.4z M9.7,19.1H4.8v-1.4h4.9V19.1z
 *     
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *
 * @property int|string $handleSize Default: '100%'
 *    
 *     
 *     The size of control handle. It can be in pixels, or in percentage relative to the width of dataZoom component. By default, its the same as the width of dataZoom component.
 *
 * @property DataZoom\HandleStyle $handleStyle
 *    Style of handle. Please refer to area-simple example.
 *
 * @property string $moveHandleIcon
 *    
 *     
 *     
 *     
 *     
 *     Since v5.0.0
 *     
 *     Icon of move handle.
 *     M-320.9-50L-320.9-50c18.1,0,27.1,9,27.1,27.1V85.7c0,18.1-9,27.1-27.1,27.1l0,0c-18.1,0-27.1-9-27.1-27.1V-22.9C-348-41-339-50-320.9-50z M-212.3-50L-212.3-50c18.1,0,27.1,9,27.1,27.1V85.7c0,18.1-9,27.1-27.1,27.1l0,0c-18.1,0-27.1-9-27.1-27.1V-22.9C-239.4-41-230.4-50-212.3-50z M-103.7-50L-103.7-50c18.1,0,27.1,9,27.1,27.1V85.7c0,18.1-9,27.1-27.1,27.1l0,0c-18.1,0-27.1-9-27.1-27.1V-22.9C-130.9-41-121.8-50-103.7-50z
 *     
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *
 * @property int $moveHandleSize Default: 7
 *    
 *     
 *     
 *     
 *     
 *     Since v5.0.0
 *     
 *     Size of move handle.
 *
 * @property DataZoom\MoveHandleStyle $moveHandleStyle
 *    
 *     Since v5.0.0
 *     
 *     Style of move handle.
 *
 * @property int|string $labelPrecision Default: 'auto'
 *    
 *     
 *     Precision of label if in number form. By default, it is decided based on the number of data.
 *
 * @property string|callable $labelFormatter
 *    The formatter tool for the label.
 *     
 *     It is a template if in string. For instance, aaaa{value}bbbb, where {value} will be replaced by the value of actual data value.
 *     
 *     It is a callback function if in Function. For example:
 *     
 *     
 *     *
 *      * @param {*} value If axis.type is category, `value` is the index of axis.data.
 *      *                  else `value` is current value.
 *      * @param {strign} valueStr Inner formatted string.
 *      * @return {string} Returns the label formatted.
 *      
 *     labelFormatter: function (value, valueStr) {
 *         return aaa + value + bbb;
 *     }
 *
 * @property boolean $showDetail Default: true
 *    
 *     
 *     Whether to show detail, that is, show the detailed data information when dragging.
 *
 * @property string $showDataShadow Default: 'auto'
 *    
 *     
 *     Whether to show data shadow in dataZoom-silder component, to indicate the data tendency in brief.
 *
 * @property boolean $realtime Default: true
 *    
 *     
 *     Whether to update view while dragging. If it is set as false, the view will be updated only at the end of dragging.
 *
 * @property DataZoom\TextStyle $textStyle
 *    
 *
 * @property int $zlevel Default: 0
 *    zlevel value of all graphical elements in .
 *     zlevel is used to make layers with Canvas. Graphical elements with different zlevel values will be placed in different Canvases, which is a common optimization technique. We can put those frequently changed elements (like those with animations) to a separate zlevel. Notice that too many Canvases will increase memory cost, and should be used carefully on mobile phones to avoid crash.
 *     Canvases with bigger zlevel will be placed on Canvases with smaller zlevel.
 *
 * @property int $z Default: 2
 *    z value of all graphical elements in , which controls order of drawing graphical components. Components with smaller z values may be overwritten by those with larger z values.
 *     z has a lower priority to zlevel, and will not create new Canvas.
 *
 * @property string|int $left Default: 'auto'
 *    Distance between dataZoom-slider component and the left side of the container.
 *     left value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be left, center, or right.
 *     If the left value is set to be left, center, or right, then the component will be aligned automatically based on position.
 *
 * @property string|int $top Default: 'auto'
 *    Distance between dataZoom-slider component and the top side of the container.
 *     top value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%; and it can also be top, middle, or bottom.
 *     If the top value is set to be top, middle, or bottom, then the component will be aligned automatically based on position.
 *
 * @property string|int $right Default: 'auto'
 *    Distance between dataZoom-slider component and the right side of the container.
 *     right value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property string|int $bottom Default: 'auto'
 *    Distance between dataZoom-slider component and the bottom side of the container.
 *     bottom value can be instant pixel value like 20; it can also be a percentage value relative to container width like 20%.
 *     Adaptive by default.
 *
 * @property boolean $brushSelect Default: true
 *    
 *     Since v5.0.0
 *     
 *     Whether to enable brush to select.
 *
 * @property DataZoom\BrushStyle $brushStyle
 *    
 *     Since v5.0.0
 *     
 *     Style of brushing area.
 *
 * @property DataZoom\Emphasis $emphasis
 *    
 *     Since v5.0.0
 *     
 *     Style when highlighted.
 *
 * {_more_}
 */
class DataZoom extends Property {}