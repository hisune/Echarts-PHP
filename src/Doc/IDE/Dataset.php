<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property array|array $source
 *    原始数据。一般来说，原始数据表达的是二维表。可以用如下这些格式表达二维表：
 *     二维数组，其中第一行/列可以给出 维度名，也可以不给出，直接就是数据：
 *     [
 *         [product, 2015, 2016, 2017],
 *         [Matcha Latte, 43.3, 85.8, 93.7],
 *         [Milk Tea, 83.1, 73.4, 55.1],
 *         [Cheese Cocoa, 86.4, 65.2, 82.5],
 *         [Walnut Brownie, 72.4, 53.9, 39.1]
 *     ]
 *     
 *     按行的 key-value 形式（对象数组），其中键（key）表明了 维度名：
 *     [
 *         {product: Matcha Latte, count: 823, score: 95.8},
 *         {product: Milk Tea, count: 235, score: 81.4},
 *         {product: Cheese Cocoa, count: 1042, score: 91.2},
 *         {product: Walnut Brownie, count: 988, score: 76.9}
 *     ]
 *     
 *     按列的 key-value 形式，每一项表示二维表的 “一列”：
 *     {
 *         product: [Matcha Latte, Milk Tea, Cheese Cocoa, Walnut Brownie],
 *         count: [823, 235, 1042, 988],
 *         score: [95.8, 81.4, 91.2, 76.9]
 *     }
 *     
 *     关于 dataset 的详情，请参见教程。
 *
 * @property array $dimensions
 *    使用 dimensions 定义 series.data 或者 dataset.source 的每个维度的信息。
 *     注意：如果使用了 dataset，那么可以在 dataset.source 的第一行/列中给出 dimension 名称。于是就不用在这里指定 dimension。但是，如果在这里指定了 dimensions，那么 ECharts 不再会自动从 dataset.source 的第一行/列中获取维度信息。
 *     例如：
 *     option = {
 *         dataset: {
 *             source: [
 *                 // 有了上面 dimensions 定义后，下面这五个维度的名称分别为：
 *                 // date, open, close, highest, lowest
 *                 [12, 44, 55, 66, 2],
 *                 [23, 6, 16, 23, 1],
 *                 ...
 *             ]
 *         },
 *         series: {
 *             type: xxx,
 *             // 定义了每个维度的名称。这个名称会被显示到默认的 tooltip 中。
 *             dimensions: [date, open, close, highest, lowest]
 *         }
 *     }
 *     
 *     series: {
 *         type: xxx,
 *         dimensions: [
 *             null,                // 如果此维度不想给出定义，则使用 null 即可
 *             {type: ordinal},   // 只定义此维度的类型。
 *                                  // ordinal 表示离散型，一般文本使用这种类型。
 *                                  // 如果类型没有被定义，会自动猜测类型。
 *             {name: good, type: number},
 *             bad                // 等同于 {name: bad}
 *         ]
 *     }
 *     
 *     dimensions 数组中的每一项可以是：
 *     
 *     string，如 someName，等同于 {name: someName}
 *     Object，属性可以有：
 *     name: string。
 *     type: string，支持
 *     number，默认，表示普通数据。
 *     ordinal，对于类目、文本这些 string 类型的数据，如果需要能在数轴上使用，须是 ordinal 类型。ECharts 默认会自动判断这个类型。但是自动判断也是不可能很完备的，所以使用者也可以手动强制指定。
 *     float，即 Float64Array。
 *     int，即 Int32Array。
 *     time，表示时间类型。设置成 time 则能支持自动解析数据成时间戳（timestamp），比如该维度的数据是 2017-05-10，会自动被解析。时间类型的支持参见 data。
 *     
 *     
 *     displayName: 一般用于 tooltip 中维度名的展示。string 如果没有指定，默认使用 name 来展示。
 *     
 *     
 *     
 *     值得一提的是，当定义了 dimensions 后，默认 tooltip 中对个维度的显示，会变为『竖排』，从而方便显示每个维度的名称。如果没有定义 dimensions，则默认 tooltip 会横排显示，且只显示数值没有维度名称可显示。
 *
 * @property boolean $sourceHeader
 *    dataset.source 第一行/列是否是 维度名 信息。可选值：
 *     
 *     null/undefine：默认，自动探测。
 *     true：第一行/列是维度名信息。
 *     false：第一行/列直接开始是数据。
 *     
 *     注意：“第一行/列” 的意思是，如果 series.seriesLayoutBy 设置为 column（默认值），则取第一行，如果 series.seriesLayoutBy 设置为 row，则取第一列。
 *
 * {_more_}
 */
class Dataset extends Property {}