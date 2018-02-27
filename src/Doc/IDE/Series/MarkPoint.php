<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string $symbol Default: 'pin'
 *    标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array|callable $symbolSize Default: 50
 *    标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *     如果需要每个数据的图形大小不一样，可以设置为如下格式的回调函数：
 *     (value: Array|number, params: Object) =&gt; number|Array
 *     
 *     其中第一个参数 value 为 data 中的数据值。第二个参数params 是其它的数据项参数。
 *
 * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    标记相对于原本位置的偏移。默认情况下，标记会居中置放在数据对应的位置，但是如果 symbol 是自定义的矢量路径或者图片，就有可能不希望 symbol 居中。这时候可以使用该配置项配置 symbol 相对于原本居中的偏移，可以是绝对的像素值，也可以是相对的百分比。
 *     例如 [0, 50%] 就是把自己向上移动了一半的位置，在 symbol 图形是气泡的时候可以让图形下端的箭头对准数据点。
 *
 * @property boolean $silent Default: false
 *    图形是否不响应和触发鼠标事件，默认为 false，即响应和触发鼠标事件。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 指定是在哪个维度上的最大值、最小值、平均值。或者可以使用 valueDim 指定在哪个维度上的最大值、最小值、平均值。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 最大值,
 *             type: max
 *         }, 
 *         {
 *             name: 某个坐标,
 *             coord: [10, 20]
 *         }, {
 *             name: 固定 x 像素位置,
 *             yAxis: 10,
 *             x: 90%
 *         }, 
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 * @property boolean $animation Default: true
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
 *     prefix
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 指定是在哪个维度上的最大值、最小值、平均值。或者可以使用 valueDim 指定在哪个维度上的最大值、最小值、平均值。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 最大值,
 *             type: max
 *         }, 
 *         {
 *             name: 某个坐标,
 *             coord: [10, 20]
 *         }, {
 *             name: 固定 x 像素位置,
 *             yAxis: 10,
 *             x: 90%
 *         }, 
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 指定是在哪个维度上的最大值、最小值、平均值。或者可以使用 valueDim 指定在哪个维度上的最大值、最小值、平均值。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 最大值,
 *             type: max
 *         }, 
 *         {
 *             name: 某个坐标,
 *             coord: [10, 20]
 *         }, {
 *             name: 固定 x 像素位置,
 *             yAxis: 10,
 *             x: 90%
 *         }, 
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 指定是在哪个维度上的最大值、最小值、平均值。或者可以使用 valueDim 指定在哪个维度上的最大值、最小值、平均值。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 最大值,
 *             type: max
 *         }, 
 *         {
 *             name: 某个坐标,
 *             coord: [10, 20]
 *         }, {
 *             name: 固定 x 像素位置,
 *             yAxis: 10,
 *             x: 90%
 *         }, 
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 指定是在哪个维度上的最大值、最小值、平均值。或者可以使用 valueDim 指定在哪个维度上的最大值、最小值、平均值。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 最大值,
 *             type: max
 *         }, 
 *         {
 *             name: 某个坐标,
 *             coord: [10, 20]
 *         }, {
 *             name: 固定 x 像素位置,
 *             yAxis: 10,
 *             x: 90%
 *         }, 
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 指定是在哪个维度上的最大值、最小值、平均值。或者可以使用 valueDim 指定在哪个维度上的最大值、最小值、平均值。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 最大值,
 *             type: max
 *         }, 
 *         {
 *             name: 某个坐标,
 *             coord: [10, 20]
 *         }, {
 *             name: 固定 x 像素位置,
 *             yAxis: 10,
 *             x: 90%
 *         }, 
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 某个坐标,
 *             coord: [10, 20]
 *         }, {
 *             name: 固定 x 像素位置,
 *             yAxis: 10,
 *             x: 90%
 *         }, 
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 指定是在哪个维度上的最大值、最小值、平均值。或者可以使用 valueDim 指定在哪个维度上的最大值、最小值、平均值。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 最大值,
 *             type: max
 *         }, 
 *         {
 *             name: 某个坐标,
 *             coord: [10, 20]
 *         }, {
 *             name: 固定 x 像素位置,
 *             yAxis: 10,
 *             x: 90%
 *         }, 
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 *  * @property int $symbolRotate
 *    标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property MarkPoint\Label $label
 *    标注的文本。
 *
 * @property MarkPoint\ItemStyle $itemStyle
 *    标注的样式。
 *
 * @property MarkPoint\Emphasis $emphasis
 *    标注的高亮样式。
 *
 * @property array $data
 *    标注的数据数组。每个数组项是一个对象，有下面几种方式指定标注的位置。
 *     
 *     通过 x, y 属性指定相对容器的屏幕坐标，单位像素，支持百分比。
 *     
 *     用 coord 属性指定数据在相应坐标系上的坐标位置，单个维度支持设置 min, max, average。
 *     
 *     直接用 type 属性标注系列中的最大值，最小值。这时候可以使用 valueIndex 指定是在哪个维度上的最大值、最小值、平均值。或者可以使用 valueDim 指定在哪个维度上的最大值、最小值、平均值。
 *     
 *     
 *     当多个属性同时存在时，优先级按上述的顺序。
 *     示例：
 *     data: [
 *         {
 *             name: 最大值,
 *             type: max
 *         }, 
 *         {
 *             name: 某个坐标,
 *             coord: [10, 20]
 *         }, {
 *             name: 固定 x 像素位置,
 *             yAxis: 10,
 *             x: 90%
 *         }, 
 *         {
 *             name: 某个屏幕坐标,
 *             x: 100,
 *             y: 100
 *         }
 *     ]
 *
 * {_more_}
 */
class MarkPoint extends Property {}