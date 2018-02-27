<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type Default: 'continuous'
 *    类型为连续型。
 *
 * @property int $min
 *    指定 visualMapContinuous 组件的允许的最小值。min 必须用户指定。[visualMap.min, visualMax.max] 形成了视觉映射的『定义域』。
 *
 * @property int $max
 *    指定 visualMapContinuous 组件的允许的最大值。max 必须用户指定。[visualMap.min, visualMax.max] 形成了视觉映射的『定义域』。
 *
 * @property array $range
 *    指定手柄对应数值的位置。range 应在 min max 范围内。例如：
 *     chart.setOption({
 *         visualMap: {
 *             min: 0,
 *             max: 100,
 *             // 两个手柄对应的数值是 4 和 15
 *             range: [4, 15],
 *             ...
 *         }
 *     });
 *     
 *     setOption 改变 min、max 时 range 的自适应
 *     
 *     如果 range 不设置（或设置为 null）
 *     
 *     例如：
 *     chart.setOption({visualMap: {min: 10, max: 300}}); // 不设置 range，则 range 默认为 [min, max]，即 [10, 300]。
 *     
 *     chart.setOption({visualMap: {min: 0, max: 400}}); // 再次使用 setOption 改变 min、max。
 *     // 此时 range 也自然会更新成改变过后的 [min, max]，即 [0, 400]。
 *     
 *     
 *     如果 range 被以具体值设置了（例如设置为 [10, 300]）
 *     
 *     例如：
 *     chart.setOption({visualMap: {min: 10, max: 300, range: [20, 80]}}); // 设置了 range
 *     
 *     chart.setOption({visualMap: {min: 0, max: 400}}); // 再次使用 setOption 改变 min、max。
 *     // 此时 range 不会改变而仍维持本来的数值，仍为 [20, 80]。
 *     
 *     chart.setOption({visualMap: {range: null}}); // 再把 range 设为 null。
 *     // 则 range 恢复为 [min, max]，即 [0, 400]，同时也恢复了自动随 min max 而改变的能力。
 *     
 *     getOption 得到的 range 总是 Array，不会为 null 或 undefined。
 *
 * @property boolean $calculable Default: false
 *    是否显示拖拽用的手柄（手柄能拖拽调整选中范围）。
 *     （注：为兼容 ECharts2，当 visualMap.type 未指定时，假如设置了 calculable，则type自动被设置为continuous，无视 visualMap-piecewise.splitNumber 等设置。所以，建议使用者不要不指定 visualMap.type，否则表意不清晰。）
 *
 * @property boolean $realtime Default: true
 *    拖拽时，是否实时更新。
 *     
 *     如果为ture则拖拽手柄过程中实时更新图表视图。
 *     
 *     如果为false则拖拽结束时，才更新视图。
 *
 * @property boolean $inverse Default: false
 *    是否反转 visualMap 组件。
 *     当inverse为false时，数据大小的位置规则，和直角坐标系相同，即：
 *     
 *     当 visualMap.orient 为vertical时，数据上大下小。
 *     当 visualMap.orient 为horizontal时，数据右大左小。
 *     
 *     当inverse为true时，相反。
 *
 * @property int $precision Default: 0
 *    数据展示的小数精度，默认为0，无小数点。
 *
 * @property int $itemWidth Default: 20
 *    图形的宽度，即长条的宽度。
 *
 * @property int $itemHeight Default: 140
 *    图形的高度，即长条的高度。
 *
 * @property string $align Default: 'auto'
 *    指定组件中手柄和文字的摆放位置，可选值为：
 *     
 *     auto 自动决定。
 *     left 手柄和label在右，orient 为 horizontal 时有效。
 *     right 手柄和label在左，orient 为 horizontal 时有效。
 *     top 手柄和label在下，orient 为 vertical 时有效。
 *     bottom 手柄和label在上，orient 为 vertical 时有效。
 *
 * @property array $text
 *    两端的文本，如 [High, Low]。参见例子。
 *     text 中的顺序，其实试试就知道。若要看详细的规则，参见 visualMap.inverse。
 *
 * @property array $textGap Default: '10'
 *    两端文字主体之间的距离，单位为px。参见 visualMap-continuous.text
 *
 * @property boolean $show Default: true
 *    是否显示 visualMap-continuous 组件。如果设置为 false，不会显示，但是数据映射的功能还存在。
 *
 * @property int $dimension
 *    指定用数据的『哪个维度』，映射到视觉元素上。『数据』即 series.data。
 *     可以把 series.data 理解成一个二维数组，例如：
 *     [
 *         [12, 23, 43],
 *         [12, 23, 43],
 *         [43, 545, 65],
 *         [92, 23, 33]
 *     ]
 *     
 *     其中每个列是一个维度，即 dimension。
 *     例如 dimension 为 1 时，取第二列（即 23，23，545，23），映射到视觉元素上。
 *     默认取 data 中最后一个维度。
 *
 * @property int|array $seriesIndex
 *    指定取哪个系列的数据，即哪个系列的 series.data。
 *     默认取所有系列。
 *
 * @property boolean $hoverLink Default: true
 *    打开 hoverLink 功能时，鼠标悬浮到 visualMap 组件上时，鼠标位置对应的数值 在 图表中对应的图形元素，会高亮。
 *     反之，鼠标悬浮到图表中的图形元素上时，在 visualMap 组件的相应位置会有三角提示其所对应的数值。
 *
 * @property array $inRange
 *    定义 在选中范围中 的视觉元素。（用户可以和 visualMap 组件交互，用鼠标或触摸选择范围）
 *     可选的视觉元素有：
 *     
 *     symbol: 图元的图形类别。
 *     symbolSize: 图元的大小。
 *     color: 图元的颜色。
 *     colorAlpha: 图元的颜色的透明度。
 *     opacity: 图元以及其附属物（如文字标签）的透明度。
 *     colorLightness: 颜色的明暗度，参见 HSL。
 *     colorSaturation: 颜色的饱和度，参见 HSL。
 *     colorHue: 颜色的色调，参见 HSL。
 *     
 *     
 *     inRange 能定义目标系列（参见 visualMap-continuous.seriesIndex）视觉形式，也同时定义了 visualMap-continuous 本身的视觉样式。通俗来讲就是，假如 visualMap-continuous控制的是散点图，那么 inRange 同时定义了散点图的 颜色、尺寸 等，也定义了 visualMap-continuous 本身的 颜色、尺寸 等。这二者能对应上。
 *     定义方式，例如：
 *     visualMap: [
 *         {
 *             ...,
 *             inRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [30, 100]
 *             }
 *         }
 *     ]
 *     
 *     如果想分别定义 visualMap-continuous 本身的视觉样式和 目标系列 的视觉样式，则这样定义：
 *     visualMap: [
 *         {
 *             ...,
 *             // 表示 目标系列 的视觉样式。
 *             target: {
 *                 inRange: {
 *                     color: [#121122, rgba(3,4,5,0.4), red],
 *                     symbolSize: [60, 200]
 *                 }
 *             },
 *             // 表示 visualMap-continuous 本身的视觉样式。
 *             controller: {
 *                 inRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     或者这样定义：
 *     visualMap: [
 *         {
 *             ...,
 *             // 表示 目标系列 的视觉样式 和 visualMap-continuous 共有的视觉样式。
 *             inRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [60, 200]
 *             },
 *             // 表示 visualMap-continuous 本身的视觉样式，会覆盖共有的视觉样式。比如，symbolSize 覆盖成为 [30, 100]，而 color 不变。
 *             controller: {
 *                 inRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     ✦ 关于视觉通道 ✦
 *     
 *     inRange 中，可以有任意几个的『视觉通道』定义（如 color、symbolSize 等）。这些视觉通道，会被同时采用。
 *     
 *     一般来说，建议使用 透明度（opacity） ，而非 颜色透明度（colorAlpha） （他们细微的差异在于，前者能也同时控制图元中的附属物（如 label）的透明度，而后者只能控制图元本身颜色的透明度）。
 *     
 *     视觉映射的方式：支持两种方式：线性映射、查表映射。
 *     
 *     
 *     ✦ 视觉通道 -- 线性映射 ✦
 *     线性映射 表示 series.data 中的每一个值（dataValue）会经过线性映射计算，从 [visualMap.min, visualMap.max] 映射到设定的 [visual value 1, visual value 2] 区间中的某一个视觉的值（下称 visual value）。
 *     例如，我们设置了 [visualMap.min, visualMap.max] 为 [0, 100]，并且我们有 series.data: [50, 10, 100]。我们想将其映射到范围为 [0.4, 1] 的 opacity 上，从而达到用透明度表达数值大小的目的。那么 visualMap 组件会对 series.data 中的每一个 dataValue 做线性映射计算，得到一个 opacityValue。最终得到的 opacityValues 为 [0.7, 0.44, 1]。
 *     visual 范围也可以反向，例如上例，可以设定 opacity 范围为 [1, 0.4]，则上例得到的 opacityValues 为 [0.7, 0.96, 0.4]。
 *     注意，[visualMap.min, visualMap.max] 须手动设置，不设置则默认取 [0, 100]，而非 series.data 中的 dataMin 和 dataMax。
 *     如何设定为线性映射？以下情况时，会设定为 线性映射：
 *     
 *     当 visualMap 为 visualMap-continuous 时，或者
 *     
 *     当 visualMap 为 visualMap-piecewise 且 未设置 visualMap-piecewise.categories 时。
 *     
 *     
 *     视觉通道的值（visual value）：
 *     
 *     视觉通道的值一般都以 Array 形式表示，例如：color: [#333, #777]。
 *     
 *     如果写成 number 或 string，会转成 Array。例如，写成 opacity: 0.4 会转成 opacity: [0.4, 0.4]，color: #333 会转成 color: [#333, #333]。
 *     
 *     对于 图形大小（symbolSize）、透明度（opacity）、颜色透明度（colorAlpha）、颜色明暗度（colorLightness）、颜色饱和度（colorSaturation）、色调（colorHue）：形如Array 的视觉范围总是表示：[最小数据值对应的视觉值, 最大数据值对应的视觉值]。比如：colorLightness: [0.8, 0.2]，表示 series.data 中，和 visualMap.min 相等的值（如果有的话）映射到 颜色明暗 的 0.8，和 visualMap.max 相等的值（如果有的话）映射到 颜色明暗 的 0.2，中间其他数据值，按照线性计算出映射结果。
 *     
 *     对于 颜色（color），使用数组表示例如：[#333, #78ab23, blue]。意思就是以这三个点作为基准，形成一种『渐变』的色带，数据映射到这个色带上。也就是说，与 visualMap.min 相等的值会映射到 #333，与 visualMap.max 相等的值会映射到 blue。对于 visualMap.min 和 visualMap.max 中间的其他点，以所给定的 #333, #78ab23, blue 这三个颜色作为基准点进行分段线性插值，得到映射结果。
 *     
 *     对于 图形类别（symbol）：使用数据表示例如：[circle, rect, diamond]。与 visualMap.min 相等的值会映射到 circle，与 visualMap.max 相等的值会映射到 diamond。对于 中间的其他点，会根据他们和 visualMap.min 和 visualMap.max 的数值距离，映射到 circle, rect, diamond 中某个值上。
 *     
 *     
 *     visual value 的取值范围：
 *     
 *     透明度（opacity）、颜色透明度（colorAlpha）、颜色明暗度（colorLightness）、颜色饱和度（colorSaturation），visual value
 *       取值范围是 [0, 1]。
 *     
 *     色调（colorHue）
 *       取值范围是 [0, 360]。
 *     
 *     颜色（color）：
 *       颜色可以使用 RGB 表示，比如 rgb(128, 128, 128)，如果想要加上 alpha 通道，可以使用 RGBA，比如 rgba(128, 128, 128, 0.5)，也可以使用十六进制格式，比如 #ccc。
 *     
 *     图形类别（symbol）：
 *     
 *     
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     ✦ 视觉通道 -- 查表映射 ✦
 *     查表映射 表示 series.data 中的所有值（dataValue）是可枚举的，会根据给定的映射表查表得到映射结果。
 *     例如，在 visualMap-piecewise 中，我们设定了 visualMap-piecewise.categories 为 [Demon Hunter, Blademaster, Death Knight, Warden, Paladin]。我们有 series.data: [Demon Hunter, Death Knight, Warden, Paladin]。然后我们可以定立查表映射规则：color: {Warden: red, Demon Hunter: black}，于是 visualMap 组件会按照表来将 dataValue 映射到 color。
 *     如何设定为查表映射？当 visualMap 为 visualMap-piecewise 且 设置了 visualMap-piecewise.categories 时，会进行查表映射。
 *     视觉通道的值（visual value）：一般使用 Object 或 Array 来表示，例如：
 *     visualMap: {
 *         type: piecewise,
 *         // categories 定义了 visualMap-piecewise 组件显示出来的项。
 *         categories: [
 *             Demon Hunter, Blademaster, Death Knight, Warden, Paladin
 *         ],
 *         inRange: {
 *             // visual value 可以配成 Object：
 *             color: {
 *                 Warden: red,
 *                 Demon Hunter: black,
 *                 : green // 空字串，表示除了Warden、Demon Hunter外，都对应到 green。
 *             }
 *             // visual value 也可以只配一个单值，表示所有都映射到一个值，如：
 *             color: green,
 *             // visual value 也可以配成数组，这个数组须和 categories 数组等长，
 *             // 每个数组项和 categories 数组项一一对应：
 *             color: [red, black, green, yellow, white]
 *         }
 *     }
 *     
 *     参见示例
 *     
 *     ✦ 修改视觉编码 ✦
 *     如果在图表被渲染后（即已经使用 setOption 设置了初始 option 之后），想修改 visualMap 的各种 视觉编码，按照惯例，再次使用 setOption 即可。例如：
 *     chart.setOption({
 *         visualMap: {
 *             inRange: {color: [red, blue]}
 *         }
 *     });
 *     
 *     但请注意：
 *     
 *     visualMap option 中的这几个属性，inRange, outOfRange, target, controller，在 setOption 时不支持 merge。否则会带来过于复杂的 merge 逻辑。也就是说，setOption 时，一旦修改了以上几个属性中的一项，其他项也会被清空，而非保留当前状态。所以，设置 visual 值时，请一次性全部设置，而非只设置一部分。
 *     
 *     不推荐使用 getOption -&gt; 修改option -&gt; setOption 的方式：
 *     
 *     
 *     // 不推荐这样做（尽管也能达到和上面的例子相同的结果）：
 *     var option = chart.getOption(); // 获取所有option。
 *     option.visualMap.inRange.color = [red, blue]; // 改动color（我想要改变 color）。
 *     
 *     // 如下两处也要进行同步改动，否则可能达不到期望效果。
 *     option.visualMap.target.inRange.color = [red, blue];
 *     option.visualMap.controller.inRange.color = [red, blue];
 *     
 *     chart.setOption(option); // option设置回 visualMap
 *     
 *     注意，inRange 没有指定，则会默认会设置 color: [#f6efa6, #d88273, #bf444c]，如果你不想要这个color，可以
 *     inRange: {color: null} 来去除。
 *
 * @property array $outOfRange
 *    定义 在选中范围外 的视觉元素。（用户可以和 visualMap 组件交互，用鼠标或触摸选择范围）
 *     可选的视觉元素有：
 *     
 *     symbol: 图元的图形类别。
 *     symbolSize: 图元的大小。
 *     color: 图元的颜色。
 *     colorAlpha: 图元的颜色的透明度。
 *     opacity: 图元以及其附属物（如文字标签）的透明度。
 *     colorLightness: 颜色的明暗度，参见 HSL。
 *     colorSaturation: 颜色的饱和度，参见 HSL。
 *     colorHue: 颜色的色调，参见 HSL。
 *     
 *     
 *     outOfRange 能定义目标系列（参见 visualMap-continuous.seriesIndex）视觉形式，也同时定义了 visualMap-continuous 本身的视觉样式。通俗来讲就是，假如 visualMap-continuous控制的是散点图，那么 outOfRange 同时定义了散点图的 颜色、尺寸 等，也定义了 visualMap-continuous 本身的 颜色、尺寸 等。这二者能对应上。
 *     定义方式，例如：
 *     visualMap: [
 *         {
 *             ...,
 *             outOfRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [30, 100]
 *             }
 *         }
 *     ]
 *     
 *     如果想分别定义 visualMap-continuous 本身的视觉样式和 目标系列 的视觉样式，则这样定义：
 *     visualMap: [
 *         {
 *             ...,
 *             // 表示 目标系列 的视觉样式。
 *             target: {
 *                 outOfRange: {
 *                     color: [#121122, rgba(3,4,5,0.4), red],
 *                     symbolSize: [60, 200]
 *                 }
 *             },
 *             // 表示 visualMap-continuous 本身的视觉样式。
 *             controller: {
 *                 outOfRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     或者这样定义：
 *     visualMap: [
 *         {
 *             ...,
 *             // 表示 目标系列 的视觉样式 和 visualMap-continuous 共有的视觉样式。
 *             outOfRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [60, 200]
 *             },
 *             // 表示 visualMap-continuous 本身的视觉样式，会覆盖共有的视觉样式。比如，symbolSize 覆盖成为 [30, 100]，而 color 不变。
 *             controller: {
 *                 outOfRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     ✦ 关于视觉通道 ✦
 *     
 *     outOfRange 中，可以有任意几个的『视觉通道』定义（如 color、symbolSize 等）。这些视觉通道，会被同时采用。
 *     
 *     一般来说，建议使用 透明度（opacity） ，而非 颜色透明度（colorAlpha） （他们细微的差异在于，前者能也同时控制图元中的附属物（如 label）的透明度，而后者只能控制图元本身颜色的透明度）。
 *     
 *     视觉映射的方式：支持两种方式：线性映射、查表映射。
 *     
 *     
 *     ✦ 视觉通道 -- 线性映射 ✦
 *     线性映射 表示 series.data 中的每一个值（dataValue）会经过线性映射计算，从 [visualMap.min, visualMap.max] 映射到设定的 [visual value 1, visual value 2] 区间中的某一个视觉的值（下称 visual value）。
 *     例如，我们设置了 [visualMap.min, visualMap.max] 为 [0, 100]，并且我们有 series.data: [50, 10, 100]。我们想将其映射到范围为 [0.4, 1] 的 opacity 上，从而达到用透明度表达数值大小的目的。那么 visualMap 组件会对 series.data 中的每一个 dataValue 做线性映射计算，得到一个 opacityValue。最终得到的 opacityValues 为 [0.7, 0.44, 1]。
 *     visual 范围也可以反向，例如上例，可以设定 opacity 范围为 [1, 0.4]，则上例得到的 opacityValues 为 [0.7, 0.96, 0.4]。
 *     注意，[visualMap.min, visualMap.max] 须手动设置，不设置则默认取 [0, 100]，而非 series.data 中的 dataMin 和 dataMax。
 *     如何设定为线性映射？以下情况时，会设定为 线性映射：
 *     
 *     当 visualMap 为 visualMap-continuous 时，或者
 *     
 *     当 visualMap 为 visualMap-piecewise 且 未设置 visualMap-piecewise.categories 时。
 *     
 *     
 *     视觉通道的值（visual value）：
 *     
 *     视觉通道的值一般都以 Array 形式表示，例如：color: [#333, #777]。
 *     
 *     如果写成 number 或 string，会转成 Array。例如，写成 opacity: 0.4 会转成 opacity: [0.4, 0.4]，color: #333 会转成 color: [#333, #333]。
 *     
 *     对于 图形大小（symbolSize）、透明度（opacity）、颜色透明度（colorAlpha）、颜色明暗度（colorLightness）、颜色饱和度（colorSaturation）、色调（colorHue）：形如Array 的视觉范围总是表示：[最小数据值对应的视觉值, 最大数据值对应的视觉值]。比如：colorLightness: [0.8, 0.2]，表示 series.data 中，和 visualMap.min 相等的值（如果有的话）映射到 颜色明暗 的 0.8，和 visualMap.max 相等的值（如果有的话）映射到 颜色明暗 的 0.2，中间其他数据值，按照线性计算出映射结果。
 *     
 *     对于 颜色（color），使用数组表示例如：[#333, #78ab23, blue]。意思就是以这三个点作为基准，形成一种『渐变』的色带，数据映射到这个色带上。也就是说，与 visualMap.min 相等的值会映射到 #333，与 visualMap.max 相等的值会映射到 blue。对于 visualMap.min 和 visualMap.max 中间的其他点，以所给定的 #333, #78ab23, blue 这三个颜色作为基准点进行分段线性插值，得到映射结果。
 *     
 *     对于 图形类别（symbol）：使用数据表示例如：[circle, rect, diamond]。与 visualMap.min 相等的值会映射到 circle，与 visualMap.max 相等的值会映射到 diamond。对于 中间的其他点，会根据他们和 visualMap.min 和 visualMap.max 的数值距离，映射到 circle, rect, diamond 中某个值上。
 *     
 *     
 *     visual value 的取值范围：
 *     
 *     透明度（opacity）、颜色透明度（colorAlpha）、颜色明暗度（colorLightness）、颜色饱和度（colorSaturation），visual value
 *       取值范围是 [0, 1]。
 *     
 *     色调（colorHue）
 *       取值范围是 [0, 360]。
 *     
 *     颜色（color）：
 *       颜色可以使用 RGB 表示，比如 rgb(128, 128, 128)，如果想要加上 alpha 通道，可以使用 RGBA，比如 rgba(128, 128, 128, 0.5)，也可以使用十六进制格式，比如 #ccc。
 *     
 *     图形类别（symbol）：
 *     
 *     
 *     ECharts 提供的标记类型包括 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     也可以通过 image://url 设置为图片，其中 url 为图片的链接，或者 dataURI。
 *     可以通过 path:// 将图标设置为任意的矢量路径。这种方式相比于使用图片的方式，不用担心因为缩放而产生锯齿或模糊，而且可以设置为任意颜色。路径图形会自适应调整为合适的大小。路径的格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *     ✦ 视觉通道 -- 查表映射 ✦
 *     查表映射 表示 series.data 中的所有值（dataValue）是可枚举的，会根据给定的映射表查表得到映射结果。
 *     例如，在 visualMap-piecewise 中，我们设定了 visualMap-piecewise.categories 为 [Demon Hunter, Blademaster, Death Knight, Warden, Paladin]。我们有 series.data: [Demon Hunter, Death Knight, Warden, Paladin]。然后我们可以定立查表映射规则：color: {Warden: red, Demon Hunter: black}，于是 visualMap 组件会按照表来将 dataValue 映射到 color。
 *     如何设定为查表映射？当 visualMap 为 visualMap-piecewise 且 设置了 visualMap-piecewise.categories 时，会进行查表映射。
 *     视觉通道的值（visual value）：一般使用 Object 或 Array 来表示，例如：
 *     visualMap: {
 *         type: piecewise,
 *         // categories 定义了 visualMap-piecewise 组件显示出来的项。
 *         categories: [
 *             Demon Hunter, Blademaster, Death Knight, Warden, Paladin
 *         ],
 *         outOfRange: {
 *             // visual value 可以配成 Object：
 *             color: {
 *                 Warden: red,
 *                 Demon Hunter: black,
 *                 : green // 空字串，表示除了Warden、Demon Hunter外，都对应到 green。
 *             }
 *             // visual value 也可以只配一个单值，表示所有都映射到一个值，如：
 *             color: green,
 *             // visual value 也可以配成数组，这个数组须和 categories 数组等长，
 *             // 每个数组项和 categories 数组项一一对应：
 *             color: [red, black, green, yellow, white]
 *         }
 *     }
 *     
 *     参见示例
 *     
 *     ✦ 修改视觉编码 ✦
 *     如果在图表被渲染后（即已经使用 setOption 设置了初始 option 之后），想修改 visualMap 的各种 视觉编码，按照惯例，再次使用 setOption 即可。例如：
 *     chart.setOption({
 *         visualMap: {
 *             inRange: {color: [red, blue]}
 *         }
 *     });
 *     
 *     但请注意：
 *     
 *     visualMap option 中的这几个属性，inRange, outOfRange, target, controller，在 setOption 时不支持 merge。否则会带来过于复杂的 merge 逻辑。也就是说，setOption 时，一旦修改了以上几个属性中的一项，其他项也会被清空，而非保留当前状态。所以，设置 visual 值时，请一次性全部设置，而非只设置一部分。
 *     
 *     不推荐使用 getOption -&gt; 修改option -&gt; setOption 的方式：
 *     
 *     
 *     // 不推荐这样做（尽管也能达到和上面的例子相同的结果）：
 *     var option = chart.getOption(); // 获取所有option。
 *     option.visualMap.inRange.color = [red, blue]; // 改动color（我想要改变 color）。
 *     
 *     // 如下两处也要进行同步改动，否则可能达不到期望效果。
 *     option.visualMap.target.inRange.color = [red, blue];
 *     option.visualMap.controller.inRange.color = [red, blue];
 *     
 *     chart.setOption(option); // option设置回 visualMap
 *
 * @property VisualMap\Controller $controller
 *    visualMap 组件中，控制器 的 inRange outOfRange 设置。如果没有这个 controller 设置，控制器 会使用外层的 inRange outOfRange 设置；如果有这个 controller 设置，则会采用这个设置。适用于一些控制器视觉效果需要特殊定制或调整的场景。
 *
 * @property int $zlevel Default: 0
 *    所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
 *
 * @property int $z Default: 4
 *    组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
 *
 * @property string|int $left Default: 0
 *    visualMap 组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
 *
 * @property string|int $top Default: 'auto'
 *    visualMap 组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
 *
 * @property string|int $right Default: 'auto'
 *    visualMap 组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *
 * @property string|int $bottom Default: 0
 *    visualMap 组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *
 * @property string $orient Default: 'vertical'
 *    如何放置 visualMap 组件，水平（horizontal）或者竖直（vertical）。
 *
 * @property int|array $padding Default: 5
 *    visualMap-continuous内边距，单位px，默认各方向内边距为5，接受数组分别设定上右下左边距。
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
 * @property string $backgroundColor Default: 'rgba(0,0,0,0)'
 *    背景色。
 *
 * @property string $borderColor Default: '#ccc'
 *    边框颜色。
 *
 * @property int $borderWidth Default: 0
 *    边框线宽，单位px。
 *
 * @property array $color Default: '[\'#bf444c\', \'#d88273\', \'#f6efa6\']'
 *    这个配置项，是为了兼容 ECharts2 而存在，ECharts3 中已经不推荐使用。它的功能已经移到了 visualMap-continuous.inRange 和 visualMap-continuous.outOfRange 中。
 *     如果要使用，则须注意，color属性中的顺序是由数值 大 到 小，但是 visualMap-continuous.inRange 或 visualMap-continuous.outOfRange 中 color 的顺序，总是由数值 小 到 大。二者不一致。
 *
 * @property VisualMap\TextStyle $textStyle
 *    
 *
 * @property string|callable $formatter
 *    标签的格式化工具。
 *     
 *     如果为string，表示模板，例如：aaaa{value}。其中 {value} 是当前的范围边界值。
 *     如果为 Function，表示回调函数，形如：
 *     
 *     formatter: function (value) {
 *         return aaaa + value; // 范围标签显示内容。
 *     }
 *
 * @property int $splitNumber Default: 5
 *    对于连续型数据，自动平均切分成几段。默认为5段。
 *     连续数据的范围需要 max 和 min 来指定。
 *     如果设置了 visualMap-piecewise.pieces 或者 visualMap-piecewise.categories，则 splitNumber 无效。
 *
 * @property array $pieces
 *    自定义『分段式视觉映射组件（visualMapPiecewise）』的每一段的范围，以及每一段的文字，以及每一段的特别的样式。例如：
 *     pieces: [
 *         {min: 1500}, // 不指定 max，表示 max 为无限大（Infinity）。
 *         {min: 900, max: 1500},
 *         {min: 310, max: 1000},
 *         {min: 200, max: 300},
 *         {min: 10, max: 200, label: 10 到 200（自定义label）},
 *         {value: 123, label: 123（自定义特殊颜色）, color: grey}, // 表示 value 等于 123 的情况。
 *         {max: 5}     // 不指定 min，表示 min 为无限大（-Infinity）。
 *     ]
 *     
 *     或者，更精确得，可以使用 lt（小于，little than），gt（大于，greater than），lte（小于等于 lettle than or equals），gte（大于等于，greater than or equals）来表达边界：
 *     pieces: [
 *         {gt: 1500},            // (1500, Infinity]
 *         {gt: 900, lte: 1500},  // (900, 1500]
 *         {gt: 310, lte: 1000},  // (310, 1000]
 *         {gt: 200, lte: 300},   // (200, 300]
 *         {gt: 10, lte: 200, label: 10 到 200（自定义label）},       // (10, 200]
 *         {value: 123, label: 123（自定义特殊颜色）, color: grey},  // [123, 123]
 *         {lt: 5}                 // (-Infinity, 5)
 *     ]
 *     
 *     注意，如果两个 piece 的区间重叠，则会自动进行去重。
 *     在每个 piece 中支持的 visualMap 属性有：
 *     
 *     symbol: 图元的图形类别。
 *     symbolSize: 图元的大小。
 *     color: 图元的颜色。
 *     colorAlpha: 图元的颜色的透明度。
 *     opacity: 图元以及其附属物（如文字标签）的透明度。
 *     colorLightness: 颜色的明暗度，参见 HSL。
 *     colorSaturation: 颜色的饱和度，参见 HSL。
 *     colorHue: 颜色的色调，参见 HSL。
 *     
 *     参见示例
 *     （注：在 ECharts2 中，pieces 叫做 splitList。现在后者仍兼容，但推荐使用 pieces）
 *     pieces 中的顺序，其实试试就知道。若要看详细的规则，参见 visualMap.inverse。
 *
 * @property array $categories
 *    用于表示离散型数据（或可以称为类别型数据、枚举型数据）的全集。
 *     当所指定的维度（visualMap-piecewise.dimension）的数据为离散型数据时，例如数据值为『优』、『良』等，那么可如下配置：
 *     categories: [严重污染, 重度污染, 中度污染, 轻度污染, 良, 优],
 *     
 *     参见示例
 *     categories 中的顺序，其实试试就知道。若要看详细的规则，参见 visualMap.inverse。
 *
 * @property boolean $minOpen
 *    当 type 为 piecewise 且使用 min/max/splitNumber 时，此参数有效。当值为 true 时，界面上会额外多出一个『&lt; min』的选块。
 *
 * @property boolean $maxOpen
 *    当 type 为 piecewise 且使用 min/max/splitNumber 时，此参数有效。当值为 true 时，界面上会额外多出一个『&gt; max』的选块。
 *
 * @property string $selectedMode Default: 'multiple'
 *    选择模式，可以是：
 *     
 *     multiple（多选）。
 *     single（单选）。
 *
 * @property boolean $showLabel
 *    是否显示每项的文本标签。默认情况是，如果 visualMap-piecewise.text 被使用则不显示文本标签，否则显示。
 *
 * @property int $itemGap Default: 10
 *    每两个图元之间的间隔距离，单位为px。
 *
 * @property string $itemSymbol Default: 'roundRect'
 *    默认的图形。可选值为：
 *     circle, rect, roundRect, triangle, diamond, pin, arrow
 *     。
 *     symbol的设置参见 visualMap-piecewise.inRange 和 visualMap-piecewise.outOfRange。
 *     当他们没有进行指定时，取此 itemSymbol 为默认值（但是只在 visualMap 组件上使用，不在 chart 中使用）。
 *
 * {_more_}
 */
class VisualMap extends Property {}