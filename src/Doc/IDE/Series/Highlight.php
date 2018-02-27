<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property Highlight\Label $label
 *    label 描述了每个扇形块中，文本标签的样式。
 *     优先级：series.data.label &gt; series.levels.label &gt; series.label。
 *     图形上的文本标签，可用于说明图形的一些数据信息，比如值，名称等，label选项在 ECharts 2.x 中放置于itemStyle下，在 ECharts 3 中为了让整个配置项结构更扁平合理，label 被拿出来跟 itemStyle 平级，并且跟 itemStyle 一样拥有 emphasis 状态。
 *
 * @property Highlight\ItemStyle $itemStyle
 *    旭日图扇形块的样式。
 *     可以在 series.itemStyle 定义所有扇形块的样式，也可以在 series.levels.itemStyle 定义每一层扇形块的样式，还可以在 series.data.itemStyle 定义每个扇形块单独的样式，这三者的优先级从低到高。也就是说，如果定义了 series.data.itemStyle，将会覆盖 series.itemStyle 和 series.levels.itemStyle。
 *     优先级：series.data.itemStyle &gt; series.levels.itemStyle &gt; series.itemStyle。
 *     ECharts 中，通常使用 emphasis 表示鼠标移动到图形上后的高亮状态。对于旭日图而言，我们引入了另两种状态：highlight 表示由于高亮了某个扇形块引起的其他相关扇形块的高亮；downplay 表示除了 highlight 扇形块之外的被淡化的扇形块。参见 highlightPolicy。
 *
 * {_more_}
 */
class Highlight extends Property {}