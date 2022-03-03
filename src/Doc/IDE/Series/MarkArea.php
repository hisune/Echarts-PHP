<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $silent Default: false
 *    
 *     
 *     Whether to ignore mouse events. Default value is false, for triggering and responding to mouse events.
 *
 * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     
 *     Specify the coordinate in data coordinate system (i.e., cartesian) using
 *     coord, which can be also set as min, max, average (e.g, coord: [23, min], or coord: [average, max]).
 *     
 *     Locate the point on the min value or max value of series.data using type, where valueIndex or valueDim can be used to specify the dimension on which the min, max or average are calculated.
 *     
 *     If in cartesian, you can only specify xAxis or yAxis to define a mark area based on only X or Y axis, see sample scatter-weight
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     
 *         [
 *             {
 *                 name: From average to max,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: Mark area between two points in data coordiantes,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: From 60 to 80,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: Mark area covers all data
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
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
 * @property string $animationEasing Default: 'cubicOut'
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
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     
 *     Specify the coordinate in data coordinate system (i.e., cartesian) using
 *     coord, which can be also set as min, max, average (e.g, coord: [23, min], or coord: [average, max]).
 *     
 *     Locate the point on the min value or max value of series.data using type, where valueIndex or valueDim can be used to specify the dimension on which the min, max or average are calculated.
 *     
 *     If in cartesian, you can only specify xAxis or yAxis to define a mark area based on only X or Y axis, see sample scatter-weight
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     
 *         [
 *             {
 *                 name: From average to max,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: Mark area between two points in data coordiantes,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: From 60 to 80,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: Mark area covers all data
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     
 *     Specify the coordinate in data coordinate system (i.e., cartesian) using
 *     coord, which can be also set as min, max, average (e.g, coord: [23, min], or coord: [average, max]).
 *     
 *     Locate the point on the min value or max value of series.data using type, where valueIndex or valueDim can be used to specify the dimension on which the min, max or average are calculated.
 *     
 *     If in cartesian, you can only specify xAxis or yAxis to define a mark area based on only X or Y axis, see sample scatter-weight
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     
 *         [
 *             {
 *                 name: From average to max,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: Mark area between two points in data coordiantes,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: From 60 to 80,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: Mark area covers all data
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     
 *     Specify the coordinate in data coordinate system (i.e., cartesian) using
 *     coord, which can be also set as min, max, average (e.g, coord: [23, min], or coord: [average, max]).
 *     
 *     Locate the point on the min value or max value of series.data using type, where valueIndex or valueDim can be used to specify the dimension on which the min, max or average are calculated.
 *     
 *     If in cartesian, you can only specify xAxis or yAxis to define a mark area based on only X or Y axis, see sample scatter-weight
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     
 *         [
 *             {
 *                 name: From average to max,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: Mark area between two points in data coordiantes,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: From 60 to 80,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: Mark area covers all data
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     
 *     Specify the coordinate in data coordinate system (i.e., cartesian) using
 *     coord, which can be also set as min, max, average (e.g, coord: [23, min], or coord: [average, max]).
 *     
 *     Locate the point on the min value or max value of series.data using type, where valueIndex or valueDim can be used to specify the dimension on which the min, max or average are calculated.
 *     
 *     If in cartesian, you can only specify xAxis or yAxis to define a mark area based on only X or Y axis, see sample scatter-weight
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     
 *         [
 *             {
 *                 name: From average to max,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: Mark area between two points in data coordiantes,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: From 60 to 80,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: Mark area covers all data
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     
 *     Specify the coordinate in data coordinate system (i.e., cartesian) using
 *     coord, which can be also set as min, max, average (e.g, coord: [23, min], or coord: [average, max]).
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     
 *         [
 *             {
 *                 name: Mark area between two points in data coordiantes,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: From 60 to 80,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: Mark area covers all data
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     
 *     Specify the coordinate in data coordinate system (i.e., cartesian) using
 *     coord, which can be also set as min, max, average (e.g, coord: [23, min], or coord: [average, max]).
 *     
 *     Locate the point on the min value or max value of series.data using type, where valueIndex or valueDim can be used to specify the dimension on which the min, max or average are calculated.
 *     
 *     If in cartesian, you can only specify xAxis or yAxis to define a mark area based on only X or Y axis, see sample scatter-weight
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     
 *         [
 *             {
 *                 name: From average to max,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: Mark area between two points in data coordiantes,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: From 60 to 80,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: Mark area covers all data
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 *  * @property MarkArea\Label $label
 *    Label in mark area.
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    Style of the mark area.
 *
 * @property MarkArea\Emphasis $emphasis
 *    Emphasis status of mark area.
 *
 * @property MarkArea\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkArea\Data $data
 *    The scope of the area is defined by data, which is an array with two item, representing the left-top point and the right-bottom point of rectangle area. Each item can be defined as follows:
 *     
 *     Specify the coordinate in screen coordinate system using x, y, where the unit is pixel (e.g., the value is 5), or percent (e.g., the value is 35%).
 *     
 *     
 *     Specify the coordinate in data coordinate system (i.e., cartesian) using
 *     coord, which can be also set as min, max, average (e.g, coord: [23, min], or coord: [average, max]).
 *     
 *     Locate the point on the min value or max value of series.data using type, where valueIndex or valueDim can be used to specify the dimension on which the min, max or average are calculated.
 *     
 *     If in cartesian, you can only specify xAxis or yAxis to define a mark area based on only X or Y axis, see sample scatter-weight
 *     
 *     The priority follows as above if more than one above definition used.
 *     data: [
 *     
 *     
 *         [
 *             {
 *                 name: From average to max,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: Mark area between two points in data coordiantes,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: From 60 to 80,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: Mark area covers all data
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *     [
 *             {
 *                 name: Mark area in two screen points,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 * {_more_}
 */
class MarkArea extends Property {}