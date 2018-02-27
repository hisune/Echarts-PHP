<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    是否显示特效。
 *
 * @property int $period Default: 4
 *    特效动画的时间，单位为 s。
 *
 * @property int|callable $delay
 *    特效动画的延时，支持设置成数字或者回调。单位ms
 *
 * @property int $constantSpeed Default: 0
 *    配置特效图形的移动动画是否是固定速度，单位像素/秒，设置为大于 0 的值后会忽略 period 配置项。
 *
 * @property string $symbol Default: 'circle'
 *    特效图形的标记。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     上面示例中就是使用自定义 path 的 symbol 表现飞机的图形。
 *     Tip: symbol 的角度会随着轨迹的切线变化，如果使用自定义 path 的 symbol，需要保证 path 图形的朝向是朝上的，这样在 symbol 沿着轨迹运动的时候可以保证图形始终朝着运动的方向。
 *
 * @property array|int $symbolSize Default: 3
 *    特效标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示高和宽，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property string $color
 *    特效标记的颜色，默认取 lineStyle.color。
 *
 * @property int $trailLength Default: 0.2
 *    特效尾迹的长度。取从 0 到 1 的值，数值越大尾迹越长。
 *
 * @property boolean $loop Default: true
 *    是否循环显示特效。
 *
 * {_more_}
 */
class Effect extends Property {}