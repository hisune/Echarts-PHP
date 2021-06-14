<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series\MarkLine\Label;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    Whether show label or not.
 *
 * @property string $position Default: 'end'
 *    Positions of labels can be:
 *     
 *     start starting point of the line.
 *     middle middle point of the line.
 *     end ending point of the line.
 *
 * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 *  * @property string|callable $formatter
 *    Data label formatter, which supports string template and callback function. In either form, \n is supported to represent a new line.
 *     String template
 *     Model variation includes:
 *     
 *     {a}: series name.
 *     {b}: the name of a data item.
 *     {c}: the value of a data item.
 *     {d}: the percent.
 *     {@xxx}: the value of a dimension namedxxx, for example,{@product}refers the value ofproduct` dimension.
 *     {@[n]}: the value of a dimension at the index ofn, for example,{@[3]}` refers the value at dimensions[3].
 *     
 *     example: 
 *     formatter: {b}: {d}
 *     
 *     Callback function
 *     Callback function is in form of:
 *     (params: Object|Array) =&gt; string
 *     
 *     where params is the single dataset needed by formatter, which is formed as:
 *     {
 *         componentType: series,
 *         // Series type
 *         seriesType: string,
 *         // Series index in option.series
 *         seriesIndex: number,
 *         // Series name
 *         seriesName: string,
 *         // Data name, or category name
 *         name: string,
 *         // Data index in input data array
 *         dataIndex: number,
 *         // Original data as input
 *         data: Object,
 *         // Value of data. In most series it is the same as data.
 *         // But in some series it is some part of the data (e.g., in map, radar)
 *         value: number|Array|Object,
 *         // encoding info of coordinate system
 *         // Key: coord, like (x y radius angle)
 *         // value: Must be an array, not null/undefined. Contain dimension indices, like:
 *         // {
 *         //     x: [2] // values on dimension index 2 are mapped to x axis.
 *         //     y: [0] // values on dimension index 0 are mapped to y axis.
 *         // }
 *         encode: Object,
 *         // dimension names list
 *         dimensionNames: Array&lt;String&gt;,
 *         // data dimension index, for example 0 or 1 or 2 ...
 *         // Only work in `radar` series.
 *         dimensionIndex: number,
 *         // Color of data
 *         color: string,
 *     
 *     }
 *     
 *     Note: the usage of encode and dimensionNames can be:
 *     If data is:
 *     dataset: {
 *         source: [
 *             [Matcha Latte, 43.3, 85.8, 93.7],
 *             [Milk Tea, 83.1, 73.4, 55.1],
 *             [Cheese Cocoa, 86.4, 65.2, 82.5],
 *             [Walnut Brownie, 72.4, 53.9, 39.1]
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.encode.y[0]]
 *     
 *     If data is:
 *     dataset: {
 *         dimensions: [product, 2015, 2016, 2017],
 *         source: [
 *             {product: Matcha Latte, 2015: 43.3, 2016: 85.8, 2017: 93.7},
 *             {product: Milk Tea, 2015: 83.1, 2016: 73.4, 2017: 55.1},
 *             {product: Cheese Cocoa, 2015: 86.4, 2016: 65.2, 2017: 82.5},
 *             {product: Walnut Brownie, 2015: 72.4, 2016: 53.9, 2017: 39.1}
 *         ]
 *     }
 *     
 *     We can get values that corresponding to y axis by:
 *     params.value[params.dimensionNames[params.encode.y[0]]]
 *
 * {_more_}
 */
class Emphasis extends Property {}