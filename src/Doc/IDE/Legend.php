<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type
 *    图例的类型。可选值：
 *     
 *     plain：普通图例。缺省就是普通图例。
 *     scroll：可滚动翻页的图例。当图例数量较多时可以使用。
 *     
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *     当使用 scroll 时，这些使用这些设置进行细节配置：
 *     
 *     legend.scrollDataIndex
 *     legend.pageButtonItemGap
 *     legend.pageButtonGap
 *     legend.pageButtonPosition
 *     legend.pageFormatter
 *     legend.pageIcons
 *     legend.pageIconColor
 *     legend.pageIconInactiveColor
 *     legend.pageIconSize
 *     legend.pageTextStyle
 *     legend.animation
 *     legend.animationDurationUpdate
 *
 * @property boolean $show Default: true
 *    
 *
 * @property int $zlevel Default: 0
 *    所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
 *
 * @property int $z Default: 2
 *    组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
 *
 * @property string|int $left Default: 'auto'
 *    图例组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
 *
 * @property string|int $top Default: 'auto'
 *    图例组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
 *
 * @property string|int $right Default: 'auto'
 *    图例组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
 *
 * @property string|int $bottom Default: 'auto'
 *    图例组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
 *
 * @property string|int $width Default: 'auto'
 *    图例组件的宽度。默认自适应。
 *
 * @property string|int $height Default: 'auto'
 *    图例组件的高度。默认自适应。
 *
 * @property string $orient Default: 'horizontal'
 *    图例列表的布局朝向。
 *     可选：
 *     
 *     horizontal
 *     vertical
 *
 * @property string $align Default: 'auto'
 *    图例标记和文本的对齐。默认自动，根据组件的位置和 orient 决定，当组件的 left 值为 right 以及纵向布局（orient 为  vertical）的时候为右对齐，及为 right。
 *     可选：
 *     
 *     auto
 *     left
 *     right
 *
 * @property int $padding Default: 5
 *    图例内边距，单位px，默认各方向内边距为5，接受数组分别设定上右下左边距。
 *     使用示例：
 *     // 设置内边距为 5
 *     padding: 5
 *     // 设置上下的内边距为 5，左右的内边距为 10
 *     padding: [5, 10]
 *     // 分别设置四个方向的内边距
 *     padding: [
 *         5,  // 上
 *         10, // 右
 *         5,  // 下
 *         10, // 左
 *     ]
 *
 * @property int $itemGap Default: 10
 *    图例每项之间的间隔。横向布局时为水平间隔，纵向布局时为纵向间隔。
 *
 * @property int $itemWidth Default: 25
 *    图例标记的图形宽度。
 *
 * @property int $itemHeight Default: 14
 *    图例标记的图形高度。
 *
 * @property string|callable $formatter
 *    用来格式化图例文本，支持字符串模板和回调函数两种形式。
 *     示例：
 *     // 使用字符串模板，模板变量为图例名称 {name}
 *     formatter: Legend {name}
 *     // 使用回调函数
 *     formatter: function (name) {
 *         return Legend  + name;
 *     }
 *
 * @property string|boolean $selectedMode Default: true
 *    图例选择的模式，控制是否可以通过点击图例改变系列的显示状态。默认开启图例选择，可以设成 false 关闭。
 *     除此之外也可以设成 single 或者  multiple 使用单选或者多选模式。
 *
 * @property string $inactiveColor Default: '#ccc'
 *    图例关闭时的颜色。
 *
 * @property array $selected
 *    图例选中状态表。
 *     示例：
 *     selected: {
 *         // 选中系列1
 *         系列1: true,
 *         // 不选中系列2
 *         系列2: false
 *     }
 *
 * @property Legend\TextStyle $textStyle
 *    图例的公用文本样式。
 *
 * @property array $tooltip
 *    图例的 tooltip 配置，配置项同 tooltip。默认不显示，可以在 legend 文字很多的时候对文字做裁剪并且开启 tooltip，如下示例：
 *     legend: {
 *         formatter: function (name) {
 *             return echarts.format.truncateText(name, 40, 14px Microsoft Yahei, …);
 *         },
 *         tooltip: {
 *             show: true
 *         }
 *     }
 *
 * @property array $data
 *    图例的数据数组。数组项通常为一个字符串，每一项代表一个系列的 name（如果是饼图，也可以是饼图单个数据的 name）。图例组件会自动根据对应系列的图形标记（symbol）来绘制自己的颜色和标记，特殊字符串 （空字符串）或者 \n（换行字符串）用于图例的换行。
 *     如果 data 没有被指定，会自动从当前系列中获取。多数系列会取自 series.name 或者 series.encode 的 seriesName 所指定的维度。如 饼图 and 漏斗图 等会取自 series.data 中的 name。
 *     如果要设置单独一项的样式，也可以把该项写成配置项对象。此时必须使用 name 属性对应表示系列的 name。
 *     示例
 *     data: [{
 *         name: 系列1,
 *         // 强制设置图形为圆。
 *         icon: circle,
 *         // 设置文本为红色
 *         textStyle: {
 *             color: red
 *         }
 *     }]
 *
 * @property string $backgroundColor Default: 'transparent'
 *    图例背景色，默认透明。
 *     
 *     颜色可以使用 RGB 表示，比如 rgb(128, 128, 128)   ，如果想要加上 alpha 通道，可以使用 RGBA，比如 rgba(128, 128, 128, 0.5)，也可以使用十六进制格式，比如 #ccc
 *
 * @property string $borderColor Default: '#ccc'
 *    图例的边框颜色。支持的颜色格式同 backgroundColor。
 *
 * @property int $borderWidth Default: 1
 *    图例的边框线宽。
 *
 * @property int|array $borderRadius Default: 0
 *    圆角半径，单位px，支持传入数组分别指定 4 个圆角半径。
 *     如:
 *     borderRadius: 5, // 统一设置四个角的圆角大小
 *     borderRadius: [5, 5, 0, 0] //（顺时针左上，右上，右下，左下）
 *
 * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *     
 *     注意：此配置项生效的前提是，设置了 show: true 以及值不为 tranparent 的背景色 backgroundColor。
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *     注意：此配置项生效的前提是，设置了 show: true。
 *
 * @property int $shadowOffsetX Default: 0
 *    阴影水平方向上的偏移距离。
 *     注意：此配置项生效的前提是，设置了 show: true。
 *
 * @property int $shadowOffsetY Default: 0
 *    阴影垂直方向上的偏移距离。
 *     注意：此配置项生效的前提是，设置了 show: true。
 *
 * @property int $scrollDataIndex Default: 0
 *    legend.type 为 scroll 时有效。
 *     图例当前最左上显示项的 dataIndex。
 *     setOption 时指定此项的话，可决定当前图例滚动到哪里。
 *     但是，如果仅仅想改变图例翻页，一般并不调用 setOption（因为这太重量了），仅仅使用 action legendScroll 即可。
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * @property int $pageButtonItemGap Default: 5
 *    legend.type 为 scroll 时有效。
 *     图例控制块中，按钮和页信息之间的间隔。
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * @property int $pageButtonGap
 *    legend.type 为 scroll 时有效。
 *     图例控制块和图例项之间的间隔。
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * @property string $pageButtonPosition Default: 'end'
 *    legend.type 为 scroll 时有效。
 *     图例控制块的位置。可选值为：
 *     
 *     start：控制块在左或上。
 *     end：按钮快在右或下。
 *     
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * @property string|callable $pageFormatter Default: '{current}/{total}'
 *    legend.type 为 scroll 时有效。
 *     图例控制块中，页信息的显示格式。默认为 {current}/{total}，其中 {current} 是当前页号（从 1 开始计数），{total} 是总页数。
 *     如果 pageFormatter 使用函数，须返回字符串，参数为：
 *     {
 *         current: number
 *         total: number
 *     }
 *     
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * @property Legend\PageIcons $pageIcons
 *    legend.type 为 scroll 时有效。
 *     图例控制块的图标。
 *
 * @property string $pageIconColor Default: '#2f4554'
 *    legend.type 为 scroll 时有效。
 *     翻页按钮的颜色。
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * @property string $pageIconInactiveColor Default: '#aaa'
 *    legend.type 为 scroll 时有效。
 *     翻页按钮不激活时（即翻页到头时）的颜色。
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * @property int|array $pageIconSize Default: 15
 *    legend.type 为 scroll 时有效。
 *     翻页按钮的大小。可以是数字，也可以是数组，如 [10, 3]，表示 [宽，高]。
 *     参见 滚动图例（垂直） 或 滚动图例（水平）。
 *
 * @property Legend\PageTextStyle $pageTextStyle
 *    legend.type 为 scroll 时有效。
 *     图例页信息的文字样式。
 *
 * @property boolean $animation
 *    图例翻页是否使用动画。
 *
 * @property int $animationDurationUpdate Default: 800
 *    图例翻页时的动画时长。
 *
 * {_more_}
 */
class Legend extends Property {}