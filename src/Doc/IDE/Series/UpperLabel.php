<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    是否显示标签。
 *
 * @property string|array $position Default: 'inside'
 *    标签的位置。
 *     可选：
 *     
 *     [x, y]
 *       通过相对的百分比或者绝对像素值表示标签相对于图形包围盒左上角的位置。
 *       示例：
 *       // 绝对的像素值
 *       position: [10, 10],
 *       // 相对的百分比
 *       position: [50%, 50%]
 *     
 *     
 *     top
 *     
 *     left
 *     right
 *     bottom
 *     inside
 *     insideLeft
 *     insideRight
 *     insideTop
 *     insideBottom
 *     insideTopLeft
 *     insideBottomLeft
 *     insideTopRight
 *     insideBottomRight
 *     
 *     参见：label position。
 *
 * @property int $distance Default: 5
 *    距离图形元素的距离。当 position 为字符描述值（如 top、insideRight）时候有效。
 *     参见：label position。
 *
 * @property int $rotate
 *    标签旋转。从 -90 度到 90 度。正值是逆时针。
 *     参见：label rotation。
 *
 * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
 *     示例：
 *     formatter: {b}: {@score}
 *     
 *     回调函数
 *     回调函数格式：
 *     (params: Object|Array) =&gt; string
 *     
 *     参数 params 是 formatter 需要的单个数据集。格式如下：
 *     {
 *         componentType: series,
 *         // 系列类型
 *         seriesType: string,
 *         // 系列在传入的 option.series 中的 index
 *         seriesIndex: number,
 *         // 系列名称
 *         seriesName: string,
 *         // 数据名，类目名
 *         name: string,
 *         // 数据在传入的 data 数组中的 index
 *         dataIndex: number,
 *         // 传入的原始数据项
 *         data: Object,
 *         // 传入的数据值
 *         value: number|Array,
 *         // 数据图形的颜色
 *         color: string,
 *     
 *     }
 *     
 *     。
 *
 * @property string $color Default: '"#fff"'
 *    文字的颜色。
 *     如果设置为 auto，则为视觉映射得到的颜色，如系列色。
 *
 * @property string $fontStyle Default: 'normal'
 *    文字字体的风格
 *     可选：
 *     
 *     normal
 *     italic
 *     oblique
 *
 * @property string $fontWeight Default: 'normal'
 *    文字字体的粗细
 *     可选：
 *     
 *     normal
 *     bold
 *     bolder
 *     lighter
 *     100 | 200 | 300 | 400...
 *
 * @property string $fontFamily Default: 'sans-serif'
 *    文字的字体系列
 *     还可以是 serif , monospace, Arial, Courier New, Microsoft YaHei, ...
 *
 * @property int $fontSize Default: 12
 *    文字的字体大小
 *
 * @property string $align
 *    文字水平对齐方式，默认自动。
 *     可选：
 *     
 *     left
 *     center
 *     right
 *     
 *     rich 中如果没有设置 align，则会取父层级的 align。例如：
 *     {
 *         align: right,
 *         rich: {
 *             a: {
 *                 // 没有设置 `align`，则 `align` 为 right
 *             }
 *         }
 *     }
 *
 * @property string $verticalAlign
 *    文字垂直对齐方式，默认自动。
 *     可选：
 *     
 *     top
 *     middle
 *     bottom
 *     
 *     rich 中如果没有设置 verticalAlign，则会取父层级的 verticalAlign。例如：
 *     {
 *         verticalAlign: bottom,
 *         rich: {
 *             a: {
 *                 // 没有设置 `verticalAlign`，则 `verticalAlign` 为 bottom
 *             }
 *         }
 *     }
 *
 * @property int $lineHeight
 *    行高。
 *     rich 中如果没有设置 lineHeight，则会取父层级的 lineHeight。例如：
 *     {
 *         lineHeight: 56,
 *         rich: {
 *             a: {
 *                 // 没有设置 `lineHeight`，则 `lineHeight` 为 56
 *             }
 *         }
 *     }
 *
 * @property string|array $backgroundColor Default: 'transparent'
 *    文字块背景色。
 *     可以是直接的颜色值，例如：#123234, red, rgba(0,23,11,0.3)。
 *     可以支持使用图片，例如：
 *     backgroundColor: {
 *         image: xxx/xxx.png
 *         // 这里可以是图片的 URL，
 *         // 或者图片的 dataURI，
 *         // 或者 HTMLImageElement 对象，
 *         // 或者 HTMLCanvasElement 对象。
 *     }
 *     
 *     当使用图片的时候，可以使用 width 或 height 指定高宽，也可以不指定自适应。
 *     如果设置为 auto，则为视觉映射得到的颜色，如系列色。
 *
 * @property string $borderColor Default: 'transparent'
 *    文字块边框颜色。
 *     如果设置为 auto，则为视觉映射得到的颜色，如系列色。
 *
 * @property int $borderWidth Default: 0
 *    文字块边框宽度。
 *
 * @property int|array $borderRadius Default: 0
 *    文字块的圆角。
 *
 * @property int|array $padding Default: 0
 *    文字块的内边距。例如：
 *     
 *     padding: [3, 4, 5, 6]：表示 [上, 右, 下, 左] 的边距。
 *     padding: 4：表示 padding: [4, 4, 4, 4]。
 *     padding: [3, 4]：表示 padding: [3, 4, 3, 4]。
 *     
 *     注意，文字块的 width 和 height 指定的是内容高宽，不包含 padding。
 *
 * @property string $shadowColor Default: 'transparent'
 *    文字块的背景阴影颜色。
 *
 * @property int $shadowBlur Default: 0
 *    文字块的背景阴影长度。
 *
 * @property int $shadowOffsetX Default: 0
 *    文字块的背景阴影 X 偏移。
 *
 * @property int $shadowOffsetY Default: 0
 *    文字块的背景阴影 Y 偏移。
 *
 * @property int|string $width
 *    文字块的宽度。一般不用指定，不指定则自动是文字的宽度。在想做表格项或者使用图片（参见 backgroundColor）时，可能会使用它。
 *     注意，文字块的 width 和 height 指定的是内容高宽，不包含 padding。
 *     width 也可以是百分比字符串，如 100%。表示的是所在文本块的 contentWidth（即不包含文本块的 padding）的百分之多少。之所以以 contentWidth 做基数，因为每个文本片段只能基于 content box 布局。如果以 outerWidth 做基数，则百分比的计算在实用中不具有意义，可能会超出。
 *     注意，如果不定义 rich 属性，则不能指定 width 和 height。
 *
 * @property int|string $height
 *    文字块的高度。一般不用指定，不指定则自动是文字的高度。在使用图片（参见 backgroundColor）时，可能会使用它。
 *     注意，文字块的 width 和 height 指定的是内容高宽，不包含 padding。
 *     注意，如果不定义 rich 属性，则不能指定 width 和 height。
 *
 * @property string $textBorderColor Default: 'transparent'
 *    文字本身的描边颜色。
 *     如果设置为 auto，则为视觉映射得到的颜色，如系列色。
 *
 * @property int $textBorderWidth Default: 0
 *    文字本身的描边宽度。
 *
 * @property string $textShadowColor Default: 'transparent'
 *    文字本身的阴影颜色。
 *
 * @property int $textShadowBlur Default: 0
 *    文字本身的阴影长度。
 *
 * @property int $textShadowOffsetX Default: 0
 *    文字本身的阴影 X 偏移。
 *
 * @property int $textShadowOffsetY Default: 0
 *    文字本身的阴影 Y 偏移。
 *
 * @property UpperLabel\Rich $rich
 *    在 rich 里面，可以自定义富文本样式。利用富文本样式，可以在标签中做出非常丰富的效果。
 *     例如：
 *     label: {
 *         // 在文本中，可以对部分文本采用 rich 中定义样式。
 *         // 这里需要在文本中使用标记符号：
 *         // `{styleName|text content text content}` 标记样式名。
 *         // 注意，换行仍是使用 \n。
 *         formatter: [
 *             {a|这段文本采用样式a},
 *             {b|这段文本采用样式b}这段用默认样式{x|这段用样式x}
 *         ].join(\n),
 *     
 *         rich: {
 *             a: {
 *                 color: red,
 *                 lineHeight: 10
 *             },
 *             b: {
 *                 backgroundColor: {
 *                     image: xxx/xxx.jpg
 *                 },
 *                 height: 40
 *             },
 *             x: {
 *                 fontSize: 18,
 *                 fontFamily: Microsoft YaHei,
 *                 borderColor: #449933,
 *                 borderRadius: 4
 *             },
 *             ...
 *         }
 *     }
 *     
 *     详情参见教程：富文本标签
 *
 * @property UpperLabel\Ellipsis $ellipsis Default: true
 *    当文字超出的时候，是否超出部分替换为省略号。
 *
 * {_more_}
 */
class UpperLabel extends Property {}