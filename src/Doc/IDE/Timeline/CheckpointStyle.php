<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

use Hisune\EchartsPHP\Property;

/**
 * @property string $symbol Default: 'circle'
 *    timeline.checkpointStyle 标记的图形。
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property int|array $symbolSize Default: 13
 *    timeline.checkpointStyle 标记的大小，可以设置成诸如 10 这样单一的数字，也可以用数组分开表示宽和高，例如 [20, 10] 表示标记宽为20，高为10。
 *
 * @property int $symbolRotate
 *    timeline.checkpointStyle 标记的旋转角度。注意在 markLine 中当 symbol 为 arrow 时会忽略 symbolRotate 强制设置为切线的角度。
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    timeline.checkpointStyle 标记相对于原本位置的偏移。默认情况下，标记会居中置放在数据对应的位置，但是如果 symbol 是自定义的矢量路径或者图片，就有可能不希望 symbol 居中。这时候可以使用该配置项配置 symbol 相对于原本居中的偏移，可以是绝对的像素值，也可以是相对的百分比。
 *     例如 [0, 50%] 就是把自己向上移动了一半的位置，在 symbol 图形是气泡的时候可以让图形下端的箭头对准数据点。
 *
 * @property string $color Default: '#c23531'
 *    timeline组件中『当前项』（checkpoint）的颜色。
 *
 * @property int $borderWidth Default: 5
 *    timeline组件中『当前项』（checkpoint）的边框宽度。
 *
 * @property string $borderColor Default: 'rgba(194,53,49, 0.5)'
 *    timeline组件中『当前项』（checkpoint）的边框颜色。
 *
 * @property boolean $animation Default: true
 *    timeline组件中『当前项』（checkpoint）在 timeline 播放切换中的移动，是否有动画。
 *
 * @property int $animationDuration Default: 300
 *    timeline组件中『当前项』（checkpoint）的动画时长。
 *
 * @property string $animationEasing Default: 'quinticInOut'
 *    timeline组件中『当前项』（checkpoint）的动画的缓动效果。不同的缓动效果可以参考 缓动示例。
 *
 * {_more_}
 */
class CheckpointStyle extends Property {}