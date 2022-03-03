<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property string $id
 *    Component ID, not specified by default. If specified, it can be used to refer the component in option or API.
 *
 * @property array|array $source
 *    Source data. Generally speaking, a source data describe a table, where these format below can be applied:
 *     2d array, where dimension names can be provided in the first row/column, or do not provide, only data.
 *     [
 *         [product, 2015, 2016, 2017],
 *         [Matcha Latte, 43.3, 85.8, 93.7],
 *         [Milk Tea, 83.1, 73.4, 55.1],
 *         [Cheese Cocoa, 86.4, 65.2, 82.5],
 *         [Walnut Brownie, 72.4, 53.9, 39.1]
 *     ]
 *     
 *     Row based key-value format (object array), where the keys indicate dimension names.
 *     [
 *         {product: Matcha Latte, count: 823, score: 95.8},
 *         {product: Milk Tea, count: 235, score: 81.4},
 *         {product: Cheese Cocoa, count: 1042, score: 91.2},
 *         {product: Walnut Brownie, count: 988, score: 76.9}
 *     ]
 *     
 *     Column based key-value format, where each value represents a column of a table.
 *     {
 *         product: [Matcha Latte, Milk Tea, Cheese Cocoa, Walnut Brownie],
 *         count: [823, 235, 1042, 988],
 *         score: [95.8, 81.4, 91.2, 76.9]
 *     }
 *     
 *     More details about dataset can be checked in the tutorial.
 *
 * @property array $dimensions
 *    dimensions can be used to define dimension info for series.data or dataset.source.
 *     Notice: if dataset is used, we can definite dimensions in dataset.dimensions, or provide dimension names in the first column/row of dataset.source, and not need to specify dimensions here. But if dimensions is specified here, it will be used despite the dimension definitions in dataset.
 *     For example:
 *     option = {
 *         dataset: {
 *             source: [
 *                 // date, open, close, highest, lowest
 *                 [12, 44, 55, 66, 2],
 *                 [23, 6, 16, 23, 1],
 *                 ...
 *             ]
 *         },
 *         series: {
 *             type: xxx,
 *             // Specify name for each dimesions, which will be displayed in tooltip.
 *             dimensions: [date, open, close, highest, lowest]
 *         }
 *     }
 *     
 *     series: {
 *         type: xxx,
 *         dimensions: [
 *             null,                // If you do not intent to defined this dimension, use null is fine.
 *             {type: ordinal},   // Specify type of this dimension.
 *                                  // ordinal is always used in string.
 *                                  // If type is not specified, echarts will guess type by data.
 *             {name: good, type: number},
 *             bad                // Equals to {name: bad}.
 *         ]
 *     }
 *     
 *     Each data item of dimensions can be:
 *     
 *     string, for example, someName, which equals to {name: someName}.
 *     Object, where the attributes can be:
 *     name: string.
 *     type: string, supports:
 *     number
 *     float, that is, Float64Array
 *     int, that is, Int32Array
 *     ordinal, discrete value, which represents string generally.
 *     time, time value, see data to check the format of time value.
 *     
 *     
 *     displayName: string, generally used in tooltip for dimension display. If not specified, use name by default.
 *     
 *     
 *     
 *     When dimensions is specified, the default tooltip will be displayed vertically, which is better to show diemsion names. Otherwise, tooltip will displayed only value horizontally.
 *
 * @property boolean|int $sourceHeader
 *    Whether the first row/column of dataset.source represents dimension names. Optional values:
 *     
 *     null/undefined/auto: means auto detect whether the first row/column is dimension names or data.
 *     true: the first row/column is dimension names.
 *     false: data start from the first row/column.
 *     number: means the row/column count of the dimension names, that is, the start index of data row/column. e.g. sourceHeader: 2 means the front two rows/columns are dimension names, the back ones are data.
 *     
 *     Note: the first row/column means that if series.seriesLayoutBy is set as column, pick the first row, otherwise, if it is set as row, pick the first column.
 *
 * @property array $transform
 *    See the tutorial of data transform.
 *
 * @property int $fromDatasetIndex
 *    Specify the input dataset for dataset.transform.
 *     If dataset.transform specified but both fromDatasetIndex and fromDatasetId are not specified, fromDatasetIndex: 0 will be used by default.
 *     See the tutorial of data transform.
 *
 * @property string $fromDatasetId
 *    Specify the input dataset for dataset.transform.
 *     See the tutorial of data transform.
 *
 * @property int $fromTransformResult
 *    If a dataset.transform produces more than one result, we can use fromTransformResult to retrieve some certain result.
 *     In most cases, fromTransformResult do not need to be specified because most transforms only produce one result. If fromTransformResult is not specified, we use fromTransformResult: 0 by default.
 *     See the tutorial of data transform.
 *
 * {_more_}
 */
class Dataset extends Property {}