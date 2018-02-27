<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\MarkLine;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示标签。
 *
 * @property string $position Default: 'end'
 *    标签位置，可选：
 *     
 *     start 线的起始点。
 *     middle 线的中点。
 *     end   线的结束点。
 *
 * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 *  * @property string|callable $formatter
 *    标签内容格式器，支持字符串模板和回调函数两种形式，字符串模板与回调函数返回的字符串均支持用 \n 换行。
 *     字符串模板
 *     字符串模板
 *     模板变量有：
 *     
 *     {a}：系列名。
 *     {b}：数据名。
 *     {c}：数据值。
 *     {d}：百分比。
 *     {@xxx}：数据中名为xxx的维度的值，如{@product}表示名为product` 的维度的值。
 *     {@[n]}：数据中维度n的值，如{@[3]}` 表示维度 3 的值，从 0 开始计数。
 *     
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
 * {_more_}
 */
class Label extends Property {}