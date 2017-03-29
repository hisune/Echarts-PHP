<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\MarkLine\Data;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type
 *    特殊的标注类型，用于标注最大值最小值等。
 *     可选:
 *     
 *     min 最大值。
 *     max 最大值。
 *     average 平均值。
 *
 * @property int $valueIndex
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
 *
 * @property string $valueDim
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
 *
 * @property array $coord
 *    起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
 *     注：对于 axis.type 为 category 类型的轴
 *     
 *     如果 coord 值为 number，则表示 axis.data 的 index。
 *     如果 coord 值为 string，则表示 axis.data 中具体的值。注意使用这种方式时，xAxis.data 不能写成 [number, number, ...]，而只能写成 [string, string, ...]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *     
 *     例如：
 *     {
 *         xAxis: {
 *             type: category,
 *             data: [5, 6, 9, 13, 19, 33]
 *             // 注意这里不建议写成 [5, 6, 9, 13, 19, 33]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *         },
 *         series: {
 *             type: line,
 *             data: [11, 22, 33, 44, 55, 66],
 *             markPoint: { // markLine 也是同理
 *                 data: [{
 *                     coord: [5, 33.4], // 其中 5 表示 xAxis.data[5]，即 33 这个元素。
 *                     // coord: [5, 33.4] // 其中 5 表示 xAxis.data中的 5 这个元素。
 *                                           // 注意，使用这种方式时，xAxis.data 不能写成 [number, number, ...]
 *                                           // 而只能写成 [string, string, ...]
 *                 }]
 *             }
 *         }
 *     }
 *
 * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    终点标记相对于原本位置的偏移。默认情况下，标记会居中置放在数据对应的位置，但是如果 symbol 是自定义的矢量路径或者图片，就有可能不希望 symbol 居中。这时候可以使用该配置项配置 symbol 相对于原本居中的偏移，可以是绝对的像素值，也可以是相对的百分比。
 *     例如 [0, 50%] 就是把自己向上移动了一半的位置，在 symbol 图形是气泡的时候可以让图形下端的箭头对准数据点。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property string $type
 *    特殊的标注类型，用于标注最大值最小值等。
 *     可选:
 *     
 *     min 最大值。
 *     max 最大值。
 *     average 平均值。
 *
 * @property int $valueIndex
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
 *
 * @property string $valueDim
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
 *
 * @property array $coord
 *    起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
 *     注：对于 axis.type 为 category 类型的轴
 *     
 *     如果 coord 值为 number，则表示 axis.data 的 index。
 *     如果 coord 值为 string，则表示 axis.data 中具体的值。注意使用这种方式时，xAxis.data 不能写成 [number, number, ...]，而只能写成 [string, string, ...]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *     
 *     例如：
 *     {
 *         xAxis: {
 *             type: category,
 *             data: [5, 6, 9, 13, 19, 33]
 *             // 注意这里不建议写成 [5, 6, 9, 13, 19, 33]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *         },
 *         series: {
 *             type: line,
 *             data: [11, 22, 33, 44, 55, 66],
 *             markPoint: { // markLine 也是同理
 *                 data: [{
 *                     coord: [5, 33.4], // 其中 5 表示 xAxis.data[5]，即 33 这个元素。
 *                     // coord: [5, 33.4] // 其中 5 表示 xAxis.data中的 5 这个元素。
 *                                           // 注意，使用这种方式时，xAxis.data 不能写成 [number, number, ...]
 *                                           // 而只能写成 [string, string, ...]
 *                 }]
 *             }
 *         }
 *     }
 *
 * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property string $type
 *    特殊的标注类型，用于标注最大值最小值等。
 *     可选:
 *     
 *     min 最大值。
 *     max 最大值。
 *     average 平均值。
 *
 * @property int $valueIndex
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
 *
 * @property string $valueDim
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
 *
 * @property array $coord
 *    起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
 *     注：对于 axis.type 为 category 类型的轴
 *     
 *     如果 coord 值为 number，则表示 axis.data 的 index。
 *     如果 coord 值为 string，则表示 axis.data 中具体的值。注意使用这种方式时，xAxis.data 不能写成 [number, number, ...]，而只能写成 [string, string, ...]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *     
 *     例如：
 *     {
 *         xAxis: {
 *             type: category,
 *             data: [5, 6, 9, 13, 19, 33]
 *             // 注意这里不建议写成 [5, 6, 9, 13, 19, 33]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *         },
 *         series: {
 *             type: line,
 *             data: [11, 22, 33, 44, 55, 66],
 *             markPoint: { // markLine 也是同理
 *                 data: [{
 *                     coord: [5, 33.4], // 其中 5 表示 xAxis.data[5]，即 33 这个元素。
 *                     // coord: [5, 33.4] // 其中 5 表示 xAxis.data中的 5 这个元素。
 *                                           // 注意，使用这种方式时，xAxis.data 不能写成 [number, number, ...]
 *                                           // 而只能写成 [string, string, ...]
 *                 }]
 *             }
 *         }
 *     }
 *
 * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property string $type
 *    特殊的标注类型，用于标注最大值最小值等。
 *     可选:
 *     
 *     min 最大值。
 *     max 最大值。
 *     average 平均值。
 *
 * @property int $valueIndex
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
 *
 * @property string $valueDim
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
 *
 * @property array $coord
 *    起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
 *     注：对于 axis.type 为 category 类型的轴
 *     
 *     如果 coord 值为 number，则表示 axis.data 的 index。
 *     如果 coord 值为 string，则表示 axis.data 中具体的值。注意使用这种方式时，xAxis.data 不能写成 [number, number, ...]，而只能写成 [string, string, ...]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *     
 *     例如：
 *     {
 *         xAxis: {
 *             type: category,
 *             data: [5, 6, 9, 13, 19, 33]
 *             // 注意这里不建议写成 [5, 6, 9, 13, 19, 33]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *         },
 *         series: {
 *             type: line,
 *             data: [11, 22, 33, 44, 55, 66],
 *             markPoint: { // markLine 也是同理
 *                 data: [{
 *                     coord: [5, 33.4], // 其中 5 表示 xAxis.data[5]，即 33 这个元素。
 *                     // coord: [5, 33.4] // 其中 5 表示 xAxis.data中的 5 这个元素。
 *                                           // 注意，使用这种方式时，xAxis.data 不能写成 [number, number, ...]
 *                                           // 而只能写成 [string, string, ...]
 *                 }]
 *             }
 *         }
 *     }
 *
 * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property string $type
 *    特殊的标注类型，用于标注最大值最小值等。
 *     可选:
 *     
 *     min 最大值。
 *     max 最大值。
 *     average 平均值。
 *
 * @property int $valueIndex
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
 *
 * @property string $valueDim
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
 *
 * @property array $coord
 *    起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
 *     注：对于 axis.type 为 category 类型的轴
 *     
 *     如果 coord 值为 number，则表示 axis.data 的 index。
 *     如果 coord 值为 string，则表示 axis.data 中具体的值。注意使用这种方式时，xAxis.data 不能写成 [number, number, ...]，而只能写成 [string, string, ...]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *     
 *     例如：
 *     {
 *         xAxis: {
 *             type: category,
 *             data: [5, 6, 9, 13, 19, 33]
 *             // 注意这里不建议写成 [5, 6, 9, 13, 19, 33]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *         },
 *         series: {
 *             type: line,
 *             data: [11, 22, 33, 44, 55, 66],
 *             markPoint: { // markLine 也是同理
 *                 data: [{
 *                     coord: [5, 33.4], // 其中 5 表示 xAxis.data[5]，即 33 这个元素。
 *                     // coord: [5, 33.4] // 其中 5 表示 xAxis.data中的 5 这个元素。
 *                                           // 注意，使用这种方式时，xAxis.data 不能写成 [number, number, ...]
 *                                           // 而只能写成 [string, string, ...]
 *                 }]
 *             }
 *         }
 *     }
 *
 * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property string $type
 *    特殊的标注类型，用于标注最大值最小值等。
 *     可选:
 *     
 *     min 最大值。
 *     max 最大值。
 *     average 平均值。
 *
 * @property int $valueIndex
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
 *
 * @property string $valueDim
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
 *
 * @property array $coord
 *    起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
 *     注：对于 axis.type 为 category 类型的轴
 *     
 *     如果 coord 值为 number，则表示 axis.data 的 index。
 *     如果 coord 值为 string，则表示 axis.data 中具体的值。注意使用这种方式时，xAxis.data 不能写成 [number, number, ...]，而只能写成 [string, string, ...]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *     
 *     例如：
 *     {
 *         xAxis: {
 *             type: category,
 *             data: [5, 6, 9, 13, 19, 33]
 *             // 注意这里不建议写成 [5, 6, 9, 13, 19, 33]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *         },
 *         series: {
 *             type: line,
 *             data: [11, 22, 33, 44, 55, 66],
 *             markPoint: { // markLine 也是同理
 *                 data: [{
 *                     coord: [5, 33.4], // 其中 5 表示 xAxis.data[5]，即 33 这个元素。
 *                     // coord: [5, 33.4] // 其中 5 表示 xAxis.data中的 5 这个元素。
 *                                           // 注意，使用这种方式时，xAxis.data 不能写成 [number, number, ...]
 *                                           // 而只能写成 [string, string, ...]
 *                 }]
 *             }
 *         }
 *     }
 *
 * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property int $valueIndex
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
 *
 * @property string $valueDim
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
 *
 * @property array $coord
 *    起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
 *     注：对于 axis.type 为 category 类型的轴
 *     
 *     如果 coord 值为 number，则表示 axis.data 的 index。
 *     如果 coord 值为 string，则表示 axis.data 中具体的值。注意使用这种方式时，xAxis.data 不能写成 [number, number, ...]，而只能写成 [string, string, ...]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *     
 *     例如：
 *     {
 *         xAxis: {
 *             type: category,
 *             data: [5, 6, 9, 13, 19, 33]
 *             // 注意这里不建议写成 [5, 6, 9, 13, 19, 33]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *         },
 *         series: {
 *             type: line,
 *             data: [11, 22, 33, 44, 55, 66],
 *             markPoint: { // markLine 也是同理
 *                 data: [{
 *                     coord: [5, 33.4], // 其中 5 表示 xAxis.data[5]，即 33 这个元素。
 *                     // coord: [5, 33.4] // 其中 5 表示 xAxis.data中的 5 这个元素。
 *                                           // 注意，使用这种方式时，xAxis.data 不能写成 [number, number, ...]
 *                                           // 而只能写成 [string, string, ...]
 *                 }]
 *             }
 *         }
 *     }
 *
 * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property string $type
 *    特殊的标注类型，用于标注最大值最小值等。
 *     可选:
 *     
 *     min 最大值。
 *     max 最大值。
 *     average 平均值。
 *
 * @property int $valueIndex
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
 *
 * @property string $valueDim
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
 *
 * @property array $coord
 *    起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
 *     注：对于 axis.type 为 category 类型的轴
 *     
 *     如果 coord 值为 number，则表示 axis.data 的 index。
 *     如果 coord 值为 string，则表示 axis.data 中具体的值。注意使用这种方式时，xAxis.data 不能写成 [number, number, ...]，而只能写成 [string, string, ...]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *     
 *     例如：
 *     {
 *         xAxis: {
 *             type: category,
 *             data: [5, 6, 9, 13, 19, 33]
 *             // 注意这里不建议写成 [5, 6, 9, 13, 19, 33]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *         },
 *         series: {
 *             type: line,
 *             data: [11, 22, 33, 44, 55, 66],
 *             markPoint: { // markLine 也是同理
 *                 data: [{
 *                     coord: [5, 33.4], // 其中 5 表示 xAxis.data[5]，即 33 这个元素。
 *                     // coord: [5, 33.4] // 其中 5 表示 xAxis.data中的 5 这个元素。
 *                                           // 注意，使用这种方式时，xAxis.data 不能写成 [number, number, ...]
 *                                           // 而只能写成 [string, string, ...]
 *                 }]
 *             }
 *         }
 *     }
 *
 * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 *  * @property string $type
 *    特殊的标注类型，用于标注最大值最小值等。
 *     可选:
 *     
 *     min 最大值。
 *     max 最大值。
 *     average 平均值。
 *
 * @property int $valueIndex
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值，可以是 0（xAxis, radiusAxis），1（yAxis, angleAxis），默认使用第一个数值轴所在的维度。
 *
 * @property string $valueDim
 *    在使用 type 时有效，用于指定在哪个维度上指定最大值最小值。这可以是维度的直接名称，例如折线图时可以是x、angle等、candlestick 图时可以是open、close等维度名称。
 *
 * @property array $coord
 *    起点或终点的坐标。坐标格式视系列的坐标系而定，可以是直角坐标系上的 x, y，也可以是极坐标系上的 radius, angle。
 *     注：对于 axis.type 为 category 类型的轴
 *     
 *     如果 coord 值为 number，则表示 axis.data 的 index。
 *     如果 coord 值为 string，则表示 axis.data 中具体的值。注意使用这种方式时，xAxis.data 不能写成 [number, number, ...]，而只能写成 [string, string, ...]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *     
 *     例如：
 *     {
 *         xAxis: {
 *             type: category,
 *             data: [5, 6, 9, 13, 19, 33]
 *             // 注意这里不建议写成 [5, 6, 9, 13, 19, 33]，否则不能被 markPoint / markLine 用『具体值』索引到。
 *         },
 *         series: {
 *             type: line,
 *             data: [11, 22, 33, 44, 55, 66],
 *             markPoint: { // markLine 也是同理
 *                 data: [{
 *                     coord: [5, 33.4], // 其中 5 表示 xAxis.data[5]，即 33 这个元素。
 *                     // coord: [5, 33.4] // 其中 5 表示 xAxis.data中的 5 这个元素。
 *                                           // 注意，使用这种方式时，xAxis.data 不能写成 [number, number, ...]
 *                                           // 而只能写成 [string, string, ...]
 *                 }]
 *             }
 *         }
 *     }
 *
 * @property int $x
 *    相对容器的屏幕 x 坐标，单位像素。
 *
 * @property int $y
 *    相对容器的屏幕 y 坐标，单位像素。
 *
 * @property int $value
 *    标注值，可以不设。
 *
 * @property string $symbol
 *    终点标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接。
 *     在 ECharts 3 里可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适（如果是 symbol 的话就是 symbolSize）的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize
 *    终点标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    终点标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property 1\LineStyle $lineStyle
 *    该数据项线的样式，起点和终点项的 lineStyle会合并到一起。
 *
 * @property 1\Label $label
 *    该数据项标签的样式，起点和终点项的 label会合并到一起。
 *
 * {_more_}
 */
class 1 extends Property {}