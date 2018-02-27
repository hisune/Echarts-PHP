<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $silent Default: false
 *    图形是否不响应和触发鼠标事件，默认为 false，即响应和触发鼠标事件。
 *
 * @property MarkArea\Label $label
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标域，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *         [
 *             {
 *                 name: 平均值到最大值,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
 *                 x: 100,
 *                 y: 100
 *             }, {
 *                 x: 90%,
 *                 y: 10%
 *             }
 *         ]
 *     ]
 *
 * @property boolean $animation Default: false
 *    是否开启动画。
 *
 * @property int $animationThreshold Default: 2000
 *    是否开启动画的阈值，当单个系列显示的图形数量大于这个阈值时会关闭动画。
 *
 * @property int $animationDuration Default: 1000
 *    初始动画的时长，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果：
 *     animationDuration: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasing Default: 'cubicOut'
 *    初始动画的缓动效果。不同的缓动效果可以参考 缓动示例。
 *
 * @property int|callable $animationDelay Default: 0
 *    初始动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的初始动画效果。
 *     如下示例：
 *     animationDelay: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *     
 *     也可以看该示例
 *
 * @property int|callable $animationDurationUpdate Default: 300
 *    数据更新动画的时长。
 *     支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果：
 *     animationDurationUpdate: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *
 * @property string $animationEasingUpdate Default: 'cubicOut'
 *    数据更新动画的缓动效果。
 *
 * @property int|callable $animationDelayUpdate Default: 0
 *    数据更新动画的延迟，支持回调函数，可以通过每个数据返回不同的 delay 时间实现更戏剧的更新动画效果。
 *     如下示例：
 *     animationDelayUpdate: function (idx) {
 *         // 越往后的数据延迟越大
 *         return idx * 100;
 *     }
 *     
 *     也可以看该示例
 *
 *  * @property MarkArea\Label $label
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标域，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *         [
 *             {
 *                 name: 平均值到最大值,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标域，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *         [
 *             {
 *                 name: 平均值到最大值,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标域，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *         [
 *             {
 *                 name: 平均值到最大值,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标域，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *         [
 *             {
 *                 name: 平均值到最大值,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标域，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *         [
 *             {
 *                 name: 平均值到最大值,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标域，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *         [
 *             {
 *                 name: 平均值到最大值,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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
 *    标域文本配置。
 *
 * @property MarkArea\ItemStyle $itemStyle
 *    该标域的样式。
 *
 * @property MarkArea\Emphasis $emphasis
 *    高亮的标域样式
 *
 * @property MarkArea\Data $data
 *    标域的数据数组。每个数组项是一个两个项的数组，分别表示标域左上角和右下角的位置，每个项支持通过下面几种方式指定自己的位置
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 或者 valueDim 指定是在哪个维度上的最大值、最小值、平均值。
 *     
 *     如果是笛卡尔坐标系的话，也可以通过只指定 xAxis 或者 yAxis 来实现 X 轴或者 Y 轴为某值的标域，见示例 scatter-weight
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     data: [
 *     
 *         [
 *             {
 *                 name: 平均值到最大值,
 *                 type: average
 *             },
 *             {
 *                 type: max
 *             }
 *         ],
 *     
 *         [
 *             {
 *                 name: 两个坐标之间的标域,
 *                 coord: [10, 20]
 *             },
 *             {
 *                 coord: [20, 30]
 *             }
 *         ], [
 *             {
 *                 name: 60分到80分,
 *                 yAxis: 60
 *             },
 *             {
 *                 yAxis: 80
 *             }
 *         ], [
 *             {
 *                 name: 所有数据范围区间
 *                 coord: [min, min]
 *             },
 *             {
 *                 coord: [max, max]
 *             }
 *         ],
 *         [
 *             {
 *                 name: 两个屏幕坐标之间的标域,
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