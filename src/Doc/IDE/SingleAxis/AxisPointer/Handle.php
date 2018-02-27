<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\SingleAxis\AxisPointer;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    当 show 设为 true 时开启，这时显示手柄，并且 axisPointer 会一直显示。
 *
 * @property * $icon
 *    手柄的图标。
 *     可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     参见 使用图片的例子
 *
 * @property int|array $size Default: 45
 *    手柄的尺寸，可以设置单值，如 45，也可以设置为数组：[width, height]。
 *
 * @property int $margin Default: 50
 *    手柄与轴的距离。注意，这是手柄中心点和轴的距离。
 *
 * @property string $color Default: '#333'
 *    手柄颜色。
 *
 * @property int $throttle Default: 40
 *    手柄拖拽时触发视图更新周期，单位毫秒，调大这个数值可以改善性能，但是降低体验。
 *
 * @property int $shadowBlur Default: 3
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor Default: '#aaa'
 *    阴影颜色。支持的格式同color。
 *
 * @property int $shadowOffsetX Default: 2
 *    阴影水平方向上的偏移距离。
 *
 * @property int $shadowOffsetY Default: 0
 *    阴影垂直方向上的偏移距离。
 *
 * {_more_}
 */
class Handle extends Property {}