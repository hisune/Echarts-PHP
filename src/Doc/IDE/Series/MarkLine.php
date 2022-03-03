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
 * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property int $precision Default: 2
 *    Precision of marking line value, which is useful when displaying average value mark line.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     
 *     Assign coordinate position with coord attribute, in which min, max, average are supported for each dimension.
 *     
 *     Use type attribute to mark the maximum and minimum values in the series, in which valueIndex or valueDim can be used to assign the dimension.
 *     
 *     You may also create a mark line in Cartesian coordinate at a specific position in X or Y axis by assigning xAxis or yAxis. See scatter-weight for example.
 *     
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     You may also set the type of mark line through type, stating whether it is for the maximum value or average value. Likewise, dimensions can be assigned through valueIndex.
 *     data: [
 *     
 *     {
 *             name: average line,
 *             // average, min, and max are supported
 *             type: average
 *         },
 *         {
 *             name: Horizontal line with Y value at 100,
 *             yAxis: 100
 *         },
 *         [
 *             {
 *                 // Use the same name with starting and ending point
 *                 name: Minimum to Maximum,
 *                 type: min
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     [
 *             {
 *                 name: Markline between two points,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [{
 *             // Mark line with a fixed X position in starting point. This is used to generate an arrow pointing to maximum line.
 *             yAxis: max,
 *             x: 90%
 *         }, {
 *             type: max
 *         }],
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
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
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     
 *     Assign coordinate position with coord attribute, in which min, max, average are supported for each dimension.
 *     
 *     Use type attribute to mark the maximum and minimum values in the series, in which valueIndex or valueDim can be used to assign the dimension.
 *     
 *     You may also create a mark line in Cartesian coordinate at a specific position in X or Y axis by assigning xAxis or yAxis. See scatter-weight for example.
 *     
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     You may also set the type of mark line through type, stating whether it is for the maximum value or average value. Likewise, dimensions can be assigned through valueIndex.
 *     data: [
 *     
 *     {
 *             name: average line,
 *             // average, min, and max are supported
 *             type: average
 *         },
 *         {
 *             name: Horizontal line with Y value at 100,
 *             yAxis: 100
 *         },
 *         [
 *             {
 *                 // Use the same name with starting and ending point
 *                 name: Minimum to Maximum,
 *                 type: min
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     [
 *             {
 *                 name: Markline between two points,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [{
 *             // Mark line with a fixed X position in starting point. This is used to generate an arrow pointing to maximum line.
 *             yAxis: max,
 *             x: 90%
 *         }, {
 *             type: max
 *         }],
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     
 *     Assign coordinate position with coord attribute, in which min, max, average are supported for each dimension.
 *     
 *     Use type attribute to mark the maximum and minimum values in the series, in which valueIndex or valueDim can be used to assign the dimension.
 *     
 *     You may also create a mark line in Cartesian coordinate at a specific position in X or Y axis by assigning xAxis or yAxis. See scatter-weight for example.
 *     
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     You may also set the type of mark line through type, stating whether it is for the maximum value or average value. Likewise, dimensions can be assigned through valueIndex.
 *     data: [
 *     
 *     {
 *             name: average line,
 *             // average, min, and max are supported
 *             type: average
 *         },
 *         {
 *             name: Horizontal line with Y value at 100,
 *             yAxis: 100
 *         },
 *         [
 *             {
 *                 // Use the same name with starting and ending point
 *                 name: Minimum to Maximum,
 *                 type: min
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     [
 *             {
 *                 name: Markline between two points,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [{
 *             // Mark line with a fixed X position in starting point. This is used to generate an arrow pointing to maximum line.
 *             yAxis: max,
 *             x: 90%
 *         }, {
 *             type: max
 *         }],
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     
 *     Assign coordinate position with coord attribute, in which min, max, average are supported for each dimension.
 *     
 *     Use type attribute to mark the maximum and minimum values in the series, in which valueIndex or valueDim can be used to assign the dimension.
 *     
 *     You may also create a mark line in Cartesian coordinate at a specific position in X or Y axis by assigning xAxis or yAxis. See scatter-weight for example.
 *     
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     You may also set the type of mark line through type, stating whether it is for the maximum value or average value. Likewise, dimensions can be assigned through valueIndex.
 *     data: [
 *     
 *     {
 *             name: average line,
 *             // average, min, and max are supported
 *             type: average
 *         },
 *         {
 *             name: Horizontal line with Y value at 100,
 *             yAxis: 100
 *         },
 *         [
 *             {
 *                 // Use the same name with starting and ending point
 *                 name: Minimum to Maximum,
 *                 type: min
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     [
 *             {
 *                 name: Markline between two points,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [{
 *             // Mark line with a fixed X position in starting point. This is used to generate an arrow pointing to maximum line.
 *             yAxis: max,
 *             x: 90%
 *         }, {
 *             type: max
 *         }],
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     
 *     Assign coordinate position with coord attribute, in which min, max, average are supported for each dimension.
 *     
 *     Use type attribute to mark the maximum and minimum values in the series, in which valueIndex or valueDim can be used to assign the dimension.
 *     
 *     You may also create a mark line in Cartesian coordinate at a specific position in X or Y axis by assigning xAxis or yAxis. See scatter-weight for example.
 *     
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     You may also set the type of mark line through type, stating whether it is for the maximum value or average value. Likewise, dimensions can be assigned through valueIndex.
 *     data: [
 *     
 *     {
 *             name: average line,
 *             // average, min, and max are supported
 *             type: average
 *         },
 *         {
 *             name: Horizontal line with Y value at 100,
 *             yAxis: 100
 *         },
 *         [
 *             {
 *                 // Use the same name with starting and ending point
 *                 name: Minimum to Maximum,
 *                 type: min
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     [
 *             {
 *                 name: Markline between two points,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [{
 *             // Mark line with a fixed X position in starting point. This is used to generate an arrow pointing to maximum line.
 *             yAxis: max,
 *             x: 90%
 *         }, {
 *             type: max
 *         }],
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     
 *     Assign coordinate position with coord attribute, in which min, max, average are supported for each dimension.
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Markline between two points,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [{
 *             // Mark line with a fixed X position in starting point. This is used to generate an arrow pointing to maximum line.
 *             yAxis: max,
 *             x: 90%
 *         }, {
 *             type: max
 *         }],
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     
 *     Assign coordinate position with coord attribute, in which min, max, average are supported for each dimension.
 *     
 *     Use type attribute to mark the maximum and minimum values in the series, in which valueIndex or valueDim can be used to assign the dimension.
 *     
 *     You may also create a mark line in Cartesian coordinate at a specific position in X or Y axis by assigning xAxis or yAxis. See scatter-weight for example.
 *     
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     You may also set the type of mark line through type, stating whether it is for the maximum value or average value. Likewise, dimensions can be assigned through valueIndex.
 *     data: [
 *     
 *     {
 *             name: average line,
 *             // average, min, and max are supported
 *             type: average
 *         },
 *         {
 *             name: Horizontal line with Y value at 100,
 *             yAxis: 100
 *         },
 *         [
 *             {
 *                 // Use the same name with starting and ending point
 *                 name: Minimum to Maximum,
 *                 type: min
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     [
 *             {
 *                 name: Markline between two points,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [{
 *             // Mark line with a fixed X position in starting point. This is used to generate an arrow pointing to maximum line.
 *             yAxis: max,
 *             x: 90%
 *         }, {
 *             type: max
 *         }],
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     data: [
 *     
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 *  * @property string|array $symbol
 *    Symbol type at the two ends of the mark line. It can be an array for two ends, or assigned seperately. See data.symbol for more format information.
 *
 * @property int|array $symbolSize
 *    Symbol size at the two ends of the mark line. It can be an array for two ends, or assigned seperately.
 *     Attention:  You cannot assgin width and height seperately as normal symbolSize.
 *
 * @property MarkLine\Label $label
 *    Mark line text.
 *
 * @property MarkLine\LineStyle $lineStyle
 *    Mark line style.
 *
 * @property MarkLine\Emphasis $emphasis
 *    Emphasis status of mark line.
 *
 * @property MarkLine\Blur $blur
 *    
 *     Since v5.0.0
 *     
 *     Configurations of blur state. Whether to blur follows the series.
 *
 * @property MarkLine\Data $data
 *    Data array of marking line. Every array item can be an array of one or two values, representing starting and ending point of the line, and every item is an object. Here are several ways to assign the positions of starting and ending point.
 *     
 *     Assign coordinate according to container with x, y attribute, in which pixel values and percentage are supported.
 *     
 *     
 *     Assign coordinate position with coord attribute, in which min, max, average are supported for each dimension.
 *     
 *     Use type attribute to mark the maximum and minimum values in the series, in which valueIndex or valueDim can be used to assign the dimension.
 *     
 *     You may also create a mark line in Cartesian coordinate at a specific position in X or Y axis by assigning xAxis or yAxis. See scatter-weight for example.
 *     
 *     
 *     When multiple attributes exist, priority is as the above order.
 *     You may also set the type of mark line through type, stating whether it is for the maximum value or average value. Likewise, dimensions can be assigned through valueIndex.
 *     data: [
 *     
 *     {
 *             name: average line,
 *             // average, min, and max are supported
 *             type: average
 *         },
 *         {
 *             name: Horizontal line with Y value at 100,
 *             yAxis: 100
 *         },
 *         [
 *             {
 *                 // Use the same name with starting and ending point
 *                 name: Minimum to Maximum,
 *                 type: min
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     [
 *             {
 *                 name: Markline between two points,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [{
 *             // Mark line with a fixed X position in starting point. This is used to generate an arrow pointing to maximum line.
 *             yAxis: max,
 *             x: 90%
 *         }, {
 *             type: max
 *         }],
 *     [
 *             {
 *                 name: Mark line between two points,
 *                 x: 100,
 *                 y: 100
 *             },
 *             {
 *                 x: 500,
 *                 y: 200
 *             }
 *         ]
 *     ]
 *
 * {_more_}
 */
class MarkLine extends Property {}