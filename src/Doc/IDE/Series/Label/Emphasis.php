<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\Label;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    是否显示标签。
 *
 * @property string|array $position
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
 * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}，分别表示系列名，数据名，数据值。
 *     示例：
 *     formatter: {b}: {c}
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
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property string|array $position
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
 * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}，分别表示系列名，数据名，数据值。
 *     示例：
 *     formatter: {b}: {c}
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
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}、{d}，分别表示系列名，数据名，数据值，百分比。
 *     示例：
 *     formatter: {b}: {d}
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
 *         // 百分比
 *         percent: number,
 *     
 *     }
 *
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property string|array $position
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
 * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}，分别表示系列名，数据名，数据值。
 *     示例：
 *     formatter: {b}: {c}
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
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property string|array $position
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
 * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}，分别表示系列名，数据名，数据值。
 *     示例：
 *     formatter: {b}: {c}
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
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property string|array $position
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
 * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}，分别表示系列名，数据名，数据值。
 *     示例：
 *     formatter: {b}: {c}
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
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property string|array $position Default: 'inside'
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
 * @property Emphasis\TextStyle $textStyle
 *    
 *
 *  * @property Emphasis\TextStyle $textStyle
 *    高亮状态下的标签文本样式。
 *
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}，分别表示系列名，数据名，数据值。
 *     示例：
 *     formatter: {b}: {c}
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
 * @property Emphasis\TextStyle $textStyle
 *    
 *
 *  * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}、{d}，分别表示系列名，数据名，数据值，百分比。
 *     示例：
 *     formatter: {b}: {d}
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
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}、{d}，分别表示系列名，数据名，数据值，百分比。
 *     示例：
 *     formatter: {b}: {d}
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
 *         // 百分比
 *         percent: number,
 *     
 *     }
 *
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     模板变量有 {a}、{b}、{c}，分别表示系列名，数据名，数据值。
 *     示例：
 *     formatter: {b}: {c}
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
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 *  * @property array $offset
 *    是否对文字进行偏移。默认不偏移。例如：[30, 40] 表示文字在横向上偏移 30，纵向上偏移 40。
 *
 * @property Emphasis\TextStyle $textStyle
 *    标签的字体样式。
 *
 * {_more_}
 */
class Emphasis extends Property {}