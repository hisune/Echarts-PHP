<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示该工具。
 *
 * @property boolean $title Default: '数据视图'
 *    
 *
 * @property * $icon
 *    Icon 的 path 字符串，ECharts 3 中支持使用自定义的 svg path 作为 icon，格式参见 SVG PathData。可以从 Adobe Illustrator 等工具编辑导出。
 *
 * @property DataView\IconStyle $iconStyle
 *    数据视图 icon 样式设置。
 *
 * @property DataView\Emphasis $emphasis
 *    
 *
 * @property boolean $readOnly Default: false
 *    是否不可编辑（只读）。
 *
 * @property callable $optionToContent
 *    (option:Object) =&gt; HTMLDomElement|string
 *     
 *     自定义 dataView 展现函数，用以取代默认的 textarea 使用更丰富的数据编辑。可以返回 dom 对象或者 html 字符串。
 *     如下示例使用表格展现数据值：
 *     optionToContent: function(opt) {
 *         var axisData = opt.xAxis[0].data;
 *         var series = opt.series;
 *         var table = &lt;table style=width:100%;text-align:center&gt;&lt;tbody&gt;&lt;tr&gt;
 *                      + &lt;td&gt;时间&lt;/td&gt;
 *                      + &lt;td&gt; + series[0].name + &lt;/td&gt;
 *                      + &lt;td&gt; + series[1].name + &lt;/td&gt;
 *                      + &lt;/tr&gt;;
 *         for (var i = 0, l = axisData.length; i &lt; l; i++) {
 *             table += &lt;tr&gt;
 *                      + &lt;td&gt; + axisData[i] + &lt;/td&gt;
 *                      + &lt;td&gt; + series[0].data[i] + &lt;/td&gt;
 *                      + &lt;td&gt; + series[1].data[i] + &lt;/td&gt;
 *                      + &lt;/tr&gt;;
 *         }
 *         table += &lt;/tbody&gt;&lt;/table&gt;;
 *         return table;
 *     }
 *
 * @property callable $contentToOption
 *    (container:HTMLDomElement, option:Object) =&gt; Object
 *     
 *     在使用 optionToContent 的情况下，如果支持数据编辑后的刷新，需要自行通过该函数实现组装 option 的逻辑。
 *
 * @property array $lang Default: '[\'数据视图\', \'关闭\', \'刷新\']'
 *    数据视图上有三个话术，默认是[数据视图, 关闭, 刷新]。
 *
 * @property string $backgroundColor Default: '#fff'
 *    数据视图浮层背景色。
 *
 * @property string $textareaColor Default: '#fff'
 *    数据视图浮层文本输入区背景色。
 *
 * @property string $textareaBorderColor Default: '#333'
 *    数据视图浮层文本输入区边框颜色。
 *
 * @property string $textColor Default: '#000'
 *    文本颜色。
 *
 * @property string $buttonColor Default: '#c23531'
 *    按钮颜色。
 *
 * @property string $buttonTextColor Default: '#fff'
 *    按钮文本颜色。
 *
 * {_more_}
 */
class DataView extends Property {}