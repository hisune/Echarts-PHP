<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\VisualMap;

use Hisune\EchartsPHP\Property;

/**
 * @property array $inRange
 *    Define visual channels that will mapped from dataValues that are in selected range. (User can interact with visualMap component and make a seleced range by mouse or touch.)
 *     Possiable visual channels includes:
 *     
 *     symbol: Type of symbol.
 *     symbolSize: Symbol size.
 *     color: Symbol color.
 *     colorAlpha: Symbol alpha channel.
 *     opacity: Opacity of symbol and others (like labels).
 *     colorLightness: Lightness in HSL.
 *     colorSaturation: Saturation in HSL.
 *     colorHue: Hue in HSL.
 *     
 *     
 *     inRange could customize visual channels both in series (by visualMap-continuous.seriesIndex) and in visualMap-continuous itself.
 *     For instance, if a visualMap-continuous component is used on a scatter chart, the mapping approach from data to color (or symbol, size, ...) can be both customized in the scatter chart and visualMap-continuous component itself. See the code as following:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels both in target series and visualMap-continuous component itself:
 *             inRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [30, 100]
 *             }
 *         }
 *     ]
 *     
 *     If you want to define visual channels for target series and visualMap-continuous component separately, you should do as follows:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels only for target series.
 *             target: {
 *                 inRange: {
 *                     color: [#121122, rgba(3,4,5,0.4), red],
 *                     symbolSize: [60, 200]
 *                 }
 *             },
 *             // Define visual channels only for visualMap-continuous component.
 *             controller: {
 *                 inRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     Or define as follows:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels for both target series and visualMap-continuous component.
 *             inRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [60, 200]
 *             },
 *             // Define visual channels only for visualMap-continuous component, which
 *             // will overlap the properties with the same name in the above common
 *             // definition. (symbolSize is overlapped by [30, 100] while color
 *             // keeps the original value)
 *             controller: {
 *                 inRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     
 *     
 *     ✦ About visual channels ✦
 *     
 *     Various visual channels (such as color、symbolSize and ect.) can be defined in inRange at the same time and all of them will be apopted.
 *     
 *     Basically visual channels opacity is recommended, rather than colorAlpha. The former controls the transparency of both graphical element and its attachments (like label), whereas the latter only controls the transparency of graphical element.
 *     
 *     There are two approaches of visual mapping supported: Linear Mapping and Table Mapping.
 *     
 *     
 *     
 *     
 *     ✦ Linear Mapping to visual channel ✦
 *     Linear Mapping means that linear calculation will be performed on each dataValue (value of series.data), mapping them from the domain of [visaulMap.min, visualMap.max] to a given range of [visual value 1, visual value 2] and obtaining a final value (say visual value) for visual channel rendering.
 *     For instance, [visualMap.min, visualMap.max] is set to be [0, 100], and there is series.data: [50, 10, 100]. We intend to map them to an opacity range [0.4, 1], by which the size of value can be demostrated by the transparency of graphical elements. visualMap component will then linear calculate them and get opacity values [0.7, 0.44, 1], cooresponding to each dataValue.
 *     We can also set the visual range inversely, such as opacity: [1, 0.4], and the final mapping result for the given series.data above will be [0.7, 0.96, 0.4].
 *     Notice: [visualMap.min, visualMap.max] should be set manually and is [0, 100] by defualt, but not dataMin and dataMax in series.data.
 *     How to configure visualMap component to do Linear Mapping?
 *     
 *     When use visualMap-continuous, or
 *     
 *     When use visualMap-piecewise and visualMap-piecewise.categories is not used.
 *     
 *     
 *     About the value of visual channel (visual value):
 *     
 *     Basically Array is used to express the range of visual value, e.g., color: [#333, #777].
 *     
 *     Single number or single string can also be used, which will be converted to an Array by visualMap component. e.g.:  opacity: 0.4 will be converted to opacity: [0.4, 0.4], color: #333 will be converted to color: [#333, #333].
 *     
 *     For visual channel symbolSize, opacity, colorAlpha, colorLightness, colorSaturation, colorHue, the range of visual value is always in the form of: [visual value of visualMap.min, visual value of visualMap.max]. For example, colorLightness: [0.8, 0.2] means that the dataValue in series.data that equals to visualMap.min (if any) will be mapped to lightness 0.8, and the dataValue that equals to visualMap.max (if any) will be mapped to lightness 0.2, and other dataValues will be mapped by the linear calculateion based on the domain of [visualMap.min, visualMap.max] and the range of [0.8, 0.2].
 *     
 *     For visual channel color, array is used, like: [#333, #78ab23, blue], which means a color ribbon is formed based on the three color stops, and dataValues will be mapped to the ribbon. Specifically, the dataValue that equals to visualMap.min will be mapped onto #333, the dataValue that equals to visualMap.max will be mapped onto blue, and other dataValues will be piecewisely interpolated to get the final color.
 *     
 *     For visual channel symbol, array is used, like: [circle, rect, diamond], where the dataValue that equals to visualMap.min will be mapped onto circle, the dataValue that equals to visualMap.max will be mapped onto diamond, and other dataValues will be caculated based on the numerical distance to visualMax.min and to visualMap.max, and mapped onto one of circle, rect, diamond.
 *     
 *     
 *     About the possible value range of visual value:
 *     
 *     opacity、colorAlpha、colorLightness、colorSaturation，visual value
 *       possible value range is [0, 1].
 *     
 *     colorHue
 *       possible value range is [0, 360].
 *     
 *     color：
 *       color can use RGB expression, like rgb(128, 128, 128), or RGBA expression, like rgba(128, 128, 128, 0.5), or Hex expression, like #ccc.
 *     
 *     symbol：
 *     
 *     
 *     Icon types provided by ECharts includes 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow, none
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *     
 *     
 *     ✦ Table Mapping to visual channel ✦
 *     Table Mapping could be used when dataValue (values in series.data, specified by visualMap.dimension) is enumerable and we intend to map them to visual value by looking up a given table.
 *     For instance, in a visualMap-piecewise component, visualMap-piecewise.categories is set to [Demon Hunter, Blademaster, Death Knight, Warden, Paladin]. And there is series.data: [Demon Hunter, Death Knight, Warden, Paladin]. Then we can establish the lookup rule for color: color: {Warden: red, Demon Hunter: black}, by which the visualMap component will map dataValue to color.
 *     How to configure visualMap component to do Table Mapping?
 *     When use visualMap-piecewise and visualMap-piecewise.categoriesis set.
 *     About the value of visual channel (visual value):
 *     Generally Object or Array is used, for instance:
 *     visualMap: {
 *         type: piecewise,
 *         // categories defines the items that to be displayed in visualMap-piecewise component.
 *         categories: [
 *             Demon Hunter, Blademaster, Death Knight, Warden, Paladin
 *         ],
 *         inRange: {
 *             // visual value can be an Object：
 *             color: {
 *                 Warden: red,
 *                 Demon Hunter: black,
 *                 : green // Blank string means that except Warden and Demon Hunter,
 *                             // all other dataValues should be mapped to green.
 *             }
 *             // visual value can also be a single value,
 *             // means that all dataValues should be mapped to the value.
 *             color: green,
 *             // visual value can also be a array, with the same length
 *             // as the array of categories and one-one mapping onto it.
 *             color: [red, black, green, yellow, white]
 *         }
 *     }
 *     
 *     Example
 *     
 *     ✦ How to modity configurations of vsiual encoding? ✦
 *     If you want to modify the configurations of visual encoding after chart been rendered (by invoke setOption to set the initial option), setOption can be used again to modify configurations of visual encoding. For instance:
 *     chart.setOption({
 *         visualMap: {
 *             inRange: {color: [red, blue]}
 *         }
 *     });
 *     
 *     Notice:
 *     
 *     These visualMap properties (i.e. inRange, outOfRange, target, controller) do not support merge, that is, anyone among them is modified when use setOption again, all of the original values of them will not be kept but erased. The merge brings complication in implemnentation and understanding, whereas erase all normalize the practise: once you want to modify some visual values, you should pass all of them to setOption, no matter they are to be changed.
 *     
 *     This way, getOption() -&gt; modify the gotten option -&gt; setOption(modified option), is strongly not recommended, for instance:
 *     
 *     
 *     // Not recommended approach, regardless of its correctness:
 *     
 *     var option = chart.getOption(); // Get the entire option.
 *     option.visualMap.inRange.color = [red, blue]; // modify color, which is what you want.
 *     
 *     // You have to modify those two properties, otherwise you will not get what you want.
 *     option.visualMap.target.inRange.color = [red, blue];
 *     option.visualMap.controller.inRange.color = [red, blue];
 *     
 *     chart.setOption(option); // set the modified option back.
 *     // You should not use this approach, but use the
 *     // approach demostrated before this example.
 *     
 *     Notice: There is default color [#f6efa6, #d88273, #bf444c] in inRange if you not set inRange. If you dont want it, set inRange: {color: null} to disable it.
 *
 * @property array $outOfRange
 *    Define visual channels that will mapped from dataValues that are out of selected range. (User can interact with visualMap component and make a seleced range by mouse or touch.)
 *     Possiable visual channels includes:
 *     
 *     symbol: Type of symbol.
 *     symbolSize: Symbol size.
 *     color: Symbol color.
 *     colorAlpha: Symbol alpha channel.
 *     opacity: Opacity of symbol and others (like labels).
 *     colorLightness: Lightness in HSL.
 *     colorSaturation: Saturation in HSL.
 *     colorHue: Hue in HSL.
 *     
 *     outOfRange could customize visual channels both in series (by visualMap-continuous.seriesIndex) and in visualMap-continuous itself.
 *     For instance, if a visualMap-continuous component is used on a scatter chart, the mapping approach from data to color (or symbol, size, ...) can be both customized in the scatter chart and visualMap-continuous component itself. See the code as following:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels both in target series and visualMap-continuous component itself:
 *             outOfRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [30, 100]
 *             }
 *         }
 *     ]
 *     
 *     If you want to define visual channels for target series and visualMap-continuous component separately, you should do as follows:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels only for target series.
 *             target: {
 *                 outOfRange: {
 *                     color: [#121122, rgba(3,4,5,0.4), red],
 *                     symbolSize: [60, 200]
 *                 }
 *             },
 *             // Define visual channels only for visualMap-continuous component.
 *             controller: {
 *                 outOfRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     Or define as follows:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels for both target series and visualMap-continuous component.
 *             outOfRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [60, 200]
 *             },
 *             // Define visual channels only for visualMap-continuous component, which
 *             // will overlap the properties with the same name in the above common
 *             // definition. (symbolSize is overlapped by [30, 100] while color
 *             // keeps the original value)
 *             controller: {
 *                 outOfRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     
 *     
 *     ✦ About visual channels ✦
 *     
 *     Various visual channels (such as color、symbolSize and ect.) can be defined in outOfRange at the same time and all of them will be apopted.
 *     
 *     Basically visual channels opacity is recommended, rather than colorAlpha. The former controls the transparency of both graphical element and its attachments (like label), whereas the latter only controls the transparency of graphical element.
 *     
 *     There are two approaches of visual mapping supported: Linear Mapping and Table Mapping.
 *     
 *     
 *     
 *     
 *     ✦ Linear Mapping to visual channel ✦
 *     Linear Mapping means that linear calculation will be performed on each dataValue (value of series.data), mapping them from the domain of [visaulMap.min, visualMap.max] to a given range of [visual value 1, visual value 2] and obtaining a final value (say visual value) for visual channel rendering.
 *     For instance, [visualMap.min, visualMap.max] is set to be [0, 100], and there is series.data: [50, 10, 100]. We intend to map them to an opacity range [0.4, 1], by which the size of value can be demostrated by the transparency of graphical elements. visualMap component will then linear calculate them and get opacity values [0.7, 0.44, 1], cooresponding to each dataValue.
 *     We can also set the visual range inversely, such as opacity: [1, 0.4], and the final mapping result for the given series.data above will be [0.7, 0.96, 0.4].
 *     Notice: [visualMap.min, visualMap.max] should be set manually and is [0, 100] by defualt, but not dataMin and dataMax in series.data.
 *     How to configure visualMap component to do Linear Mapping?
 *     
 *     When use visualMap-continuous, or
 *     
 *     When use visualMap-piecewise and visualMap-piecewise.categories is not used.
 *     
 *     
 *     About the value of visual channel (visual value):
 *     
 *     Basically Array is used to express the range of visual value, e.g., color: [#333, #777].
 *     
 *     Single number or single string can also be used, which will be converted to an Array by visualMap component. e.g.:  opacity: 0.4 will be converted to opacity: [0.4, 0.4], color: #333 will be converted to color: [#333, #333].
 *     
 *     For visual channel symbolSize, opacity, colorAlpha, colorLightness, colorSaturation, colorHue, the range of visual value is always in the form of: [visual value of visualMap.min, visual value of visualMap.max]. For example, colorLightness: [0.8, 0.2] means that the dataValue in series.data that equals to visualMap.min (if any) will be mapped to lightness 0.8, and the dataValue that equals to visualMap.max (if any) will be mapped to lightness 0.2, and other dataValues will be mapped by the linear calculateion based on the domain of [visualMap.min, visualMap.max] and the range of [0.8, 0.2].
 *     
 *     For visual channel color, array is used, like: [#333, #78ab23, blue], which means a color ribbon is formed based on the three color stops, and dataValues will be mapped to the ribbon. Specifically, the dataValue that equals to visualMap.min will be mapped onto #333, the dataValue that equals to visualMap.max will be mapped onto blue, and other dataValues will be piecewisely interpolated to get the final color.
 *     
 *     For visual channel symbol, array is used, like: [circle, rect, diamond], where the dataValue that equals to visualMap.min will be mapped onto circle, the dataValue that equals to visualMap.max will be mapped onto diamond, and other dataValues will be caculated based on the numerical distance to visualMax.min and to visualMap.max, and mapped onto one of circle, rect, diamond.
 *     
 *     
 *     About the possible value range of visual value:
 *     
 *     opacity、colorAlpha、colorLightness、colorSaturation，visual value
 *       possible value range is [0, 1].
 *     
 *     colorHue
 *       possible value range is [0, 360].
 *     
 *     color：
 *       color can use RGB expression, like rgb(128, 128, 128), or RGBA expression, like rgba(128, 128, 128, 0.5), or Hex expression, like #ccc.
 *     
 *     symbol：
 *     
 *     
 *     Icon types provided by ECharts includes 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow, none
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *     
 *     
 *     ✦ Table Mapping to visual channel ✦
 *     Table Mapping could be used when dataValue (values in series.data, specified by visualMap.dimension) is enumerable and we intend to map them to visual value by looking up a given table.
 *     For instance, in a visualMap-piecewise component, visualMap-piecewise.categories is set to [Demon Hunter, Blademaster, Death Knight, Warden, Paladin]. And there is series.data: [Demon Hunter, Death Knight, Warden, Paladin]. Then we can establish the lookup rule for color: color: {Warden: red, Demon Hunter: black}, by which the visualMap component will map dataValue to color.
 *     How to configure visualMap component to do Table Mapping?
 *     When use visualMap-piecewise and visualMap-piecewise.categoriesis set.
 *     About the value of visual channel (visual value):
 *     Generally Object or Array is used, for instance:
 *     visualMap: {
 *         type: piecewise,
 *         // categories defines the items that to be displayed in visualMap-piecewise component.
 *         categories: [
 *             Demon Hunter, Blademaster, Death Knight, Warden, Paladin
 *         ],
 *         outOfRange: {
 *             // visual value can be an Object：
 *             color: {
 *                 Warden: red,
 *                 Demon Hunter: black,
 *                 : green // Blank string means that except Warden and Demon Hunter,
 *                             // all other dataValues should be mapped to green.
 *             }
 *             // visual value can also be a single value,
 *             // means that all dataValues should be mapped to the value.
 *             color: green,
 *             // visual value can also be a array, with the same length
 *             // as the array of categories and one-one mapping onto it.
 *             color: [red, black, green, yellow, white]
 *         }
 *     }
 *     
 *     Example
 *     
 *     ✦ How to modity configurations of vsiual encoding? ✦
 *     If you want to modify the configurations of visual encoding after chart been rendered (by invoke setOption to set the initial option), setOption can be used again to modify configurations of visual encoding. For instance:
 *     chart.setOption({
 *         visualMap: {
 *             inRange: {color: [red, blue]}
 *         }
 *     });
 *     
 *     Notice:
 *     
 *     These visualMap properties (i.e. inRange, outOfRange, target, controller) do not support merge, that is, anyone among them is modified when use setOption again, all of the original values of them will not be kept but erased. The merge brings complication in implemnentation and understanding, whereas erase all normalize the practise: once you want to modify some visual values, you should pass all of them to setOption, no matter they are to be changed.
 *     
 *     This way, getOption() -&gt; modify the gotten option -&gt; setOption(modified option), is strongly not recommended, for instance:
 *     
 *     
 *     // Not recommended approach, regardless of its correctness:
 *     
 *     var option = chart.getOption(); // Get the entire option.
 *     option.visualMap.inRange.color = [red, blue]; // modify color, which is what you want.
 *     
 *     // You have to modify those two properties, otherwise you will not get what you want.
 *     option.visualMap.target.inRange.color = [red, blue];
 *     option.visualMap.controller.inRange.color = [red, blue];
 *     
 *     chart.setOption(option); // set the modified option back.
 *     // You should not use this approach, but use the
 *     // approach demostrated before this example.
 *
 *  * @property array $inRange
 *    Define visual channels that will mapped from dataValues that are in selected range. (User can interact with visualMap component and make a seleced range by mouse or touch.)
 *     Possiable visual channels includes:
 *     
 *     symbol: Type of symbol.
 *     symbolSize: Symbol size.
 *     color: Symbol color.
 *     colorAlpha: Symbol alpha channel.
 *     opacity: Opacity of symbol and others (like labels).
 *     colorLightness: Lightness in HSL.
 *     colorSaturation: Saturation in HSL.
 *     colorHue: Hue in HSL.
 *     
 *     
 *     inRange could customize visual channels both in series (by visualMap-piecewise.seriesIndex) and in visualMap-piecewise itself.
 *     For instance, if a visualMap-piecewise component is used on a scatter chart, the mapping approach from data to color (or symbol, size, ...) can be both customized in the scatter chart and visualMap-piecewise component itself. See the code as following:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels both in target series and visualMap-piecewise component itself:
 *             inRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [30, 100]
 *             }
 *         }
 *     ]
 *     
 *     If you want to define visual channels for target series and visualMap-piecewise component separately, you should do as follows:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels only for target series.
 *             target: {
 *                 inRange: {
 *                     color: [#121122, rgba(3,4,5,0.4), red],
 *                     symbolSize: [60, 200]
 *                 }
 *             },
 *             // Define visual channels only for visualMap-piecewise component.
 *             controller: {
 *                 inRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     Or define as follows:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels for both target series and visualMap-piecewise component.
 *             inRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [60, 200]
 *             },
 *             // Define visual channels only for visualMap-piecewise component, which
 *             // will overlap the properties with the same name in the above common
 *             // definition. (symbolSize is overlapped by [30, 100] while color
 *             // keeps the original value)
 *             controller: {
 *                 inRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     
 *     
 *     ✦ About visual channels ✦
 *     
 *     Various visual channels (such as color、symbolSize and ect.) can be defined in inRange at the same time and all of them will be apopted.
 *     
 *     Basically visual channels opacity is recommended, rather than colorAlpha. The former controls the transparency of both graphical element and its attachments (like label), whereas the latter only controls the transparency of graphical element.
 *     
 *     There are two approaches of visual mapping supported: Linear Mapping and Table Mapping.
 *     
 *     
 *     
 *     
 *     ✦ Linear Mapping to visual channel ✦
 *     Linear Mapping means that linear calculation will be performed on each dataValue (value of series.data), mapping them from the domain of [visaulMap.min, visualMap.max] to a given range of [visual value 1, visual value 2] and obtaining a final value (say visual value) for visual channel rendering.
 *     For instance, [visualMap.min, visualMap.max] is set to be [0, 100], and there is series.data: [50, 10, 100]. We intend to map them to an opacity range [0.4, 1], by which the size of value can be demostrated by the transparency of graphical elements. visualMap component will then linear calculate them and get opacity values [0.7, 0.44, 1], cooresponding to each dataValue.
 *     We can also set the visual range inversely, such as opacity: [1, 0.4], and the final mapping result for the given series.data above will be [0.7, 0.96, 0.4].
 *     Notice: [visualMap.min, visualMap.max] should be set manually and is [0, 100] by defualt, but not dataMin and dataMax in series.data.
 *     How to configure visualMap component to do Linear Mapping?
 *     
 *     When use visualMap-continuous, or
 *     
 *     When use visualMap-piecewise and visualMap-piecewise.categories is not used.
 *     
 *     
 *     About the value of visual channel (visual value):
 *     
 *     Basically Array is used to express the range of visual value, e.g., color: [#333, #777].
 *     
 *     Single number or single string can also be used, which will be converted to an Array by visualMap component. e.g.:  opacity: 0.4 will be converted to opacity: [0.4, 0.4], color: #333 will be converted to color: [#333, #333].
 *     
 *     For visual channel symbolSize, opacity, colorAlpha, colorLightness, colorSaturation, colorHue, the range of visual value is always in the form of: [visual value of visualMap.min, visual value of visualMap.max]. For example, colorLightness: [0.8, 0.2] means that the dataValue in series.data that equals to visualMap.min (if any) will be mapped to lightness 0.8, and the dataValue that equals to visualMap.max (if any) will be mapped to lightness 0.2, and other dataValues will be mapped by the linear calculateion based on the domain of [visualMap.min, visualMap.max] and the range of [0.8, 0.2].
 *     
 *     For visual channel color, array is used, like: [#333, #78ab23, blue], which means a color ribbon is formed based on the three color stops, and dataValues will be mapped to the ribbon. Specifically, the dataValue that equals to visualMap.min will be mapped onto #333, the dataValue that equals to visualMap.max will be mapped onto blue, and other dataValues will be piecewisely interpolated to get the final color.
 *     
 *     For visual channel symbol, array is used, like: [circle, rect, diamond], where the dataValue that equals to visualMap.min will be mapped onto circle, the dataValue that equals to visualMap.max will be mapped onto diamond, and other dataValues will be caculated based on the numerical distance to visualMax.min and to visualMap.max, and mapped onto one of circle, rect, diamond.
 *     
 *     
 *     About the possible value range of visual value:
 *     
 *     opacity、colorAlpha、colorLightness、colorSaturation，visual value
 *       possible value range is [0, 1].
 *     
 *     colorHue
 *       possible value range is [0, 360].
 *     
 *     color：
 *       color can use RGB expression, like rgb(128, 128, 128), or RGBA expression, like rgba(128, 128, 128, 0.5), or Hex expression, like #ccc.
 *     
 *     symbol：
 *     
 *     
 *     Icon types provided by ECharts includes 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow, none
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *     
 *     
 *     ✦ Table Mapping to visual channel ✦
 *     Table Mapping could be used when dataValue (values in series.data, specified by visualMap.dimension) is enumerable and we intend to map them to visual value by looking up a given table.
 *     For instance, in a visualMap-piecewise component, visualMap-piecewise.categories is set to [Demon Hunter, Blademaster, Death Knight, Warden, Paladin]. And there is series.data: [Demon Hunter, Death Knight, Warden, Paladin]. Then we can establish the lookup rule for color: color: {Warden: red, Demon Hunter: black}, by which the visualMap component will map dataValue to color.
 *     How to configure visualMap component to do Table Mapping?
 *     When use visualMap-piecewise and visualMap-piecewise.categoriesis set.
 *     About the value of visual channel (visual value):
 *     Generally Object or Array is used, for instance:
 *     visualMap: {
 *         type: piecewise,
 *         // categories defines the items that to be displayed in visualMap-piecewise component.
 *         categories: [
 *             Demon Hunter, Blademaster, Death Knight, Warden, Paladin
 *         ],
 *         inRange: {
 *             // visual value can be an Object：
 *             color: {
 *                 Warden: red,
 *                 Demon Hunter: black,
 *                 : green // Blank string means that except Warden and Demon Hunter,
 *                             // all other dataValues should be mapped to green.
 *             }
 *             // visual value can also be a single value,
 *             // means that all dataValues should be mapped to the value.
 *             color: green,
 *             // visual value can also be a array, with the same length
 *             // as the array of categories and one-one mapping onto it.
 *             color: [red, black, green, yellow, white]
 *         }
 *     }
 *     
 *     Example
 *     
 *     ✦ How to modity configurations of vsiual encoding? ✦
 *     If you want to modify the configurations of visual encoding after chart been rendered (by invoke setOption to set the initial option), setOption can be used again to modify configurations of visual encoding. For instance:
 *     chart.setOption({
 *         visualMap: {
 *             inRange: {color: [red, blue]}
 *         }
 *     });
 *     
 *     Notice:
 *     
 *     These visualMap properties (i.e. inRange, outOfRange, target, controller) do not support merge, that is, anyone among them is modified when use setOption again, all of the original values of them will not be kept but erased. The merge brings complication in implemnentation and understanding, whereas erase all normalize the practise: once you want to modify some visual values, you should pass all of them to setOption, no matter they are to be changed.
 *     
 *     This way, getOption() -&gt; modify the gotten option -&gt; setOption(modified option), is strongly not recommended, for instance:
 *     
 *     
 *     // Not recommended approach, regardless of its correctness:
 *     
 *     var option = chart.getOption(); // Get the entire option.
 *     option.visualMap.inRange.color = [red, blue]; // modify color, which is what you want.
 *     
 *     // You have to modify those two properties, otherwise you will not get what you want.
 *     option.visualMap.target.inRange.color = [red, blue];
 *     option.visualMap.controller.inRange.color = [red, blue];
 *     
 *     chart.setOption(option); // set the modified option back.
 *     // You should not use this approach, but use the
 *     // approach demostrated before this example.
 *     
 *     Notice: There is default color [#f6efa6, #d88273, #bf444c] in inRange if you not set inRange. If you dont want it, set inRange: {color: null} to disable it.
 *
 * @property array $outOfRange
 *    Define visual channels that will mapped from dataValues that are out of selected range. (User can interact with visualMap component and make a seleced range by mouse or touch.)
 *     Possiable visual channels includes:
 *     
 *     symbol: Type of symbol.
 *     symbolSize: Symbol size.
 *     color: Symbol color.
 *     colorAlpha: Symbol alpha channel.
 *     opacity: Opacity of symbol and others (like labels).
 *     colorLightness: Lightness in HSL.
 *     colorSaturation: Saturation in HSL.
 *     colorHue: Hue in HSL.
 *     
 *     outOfRange could customize visual channels both in series (by visualMap-piecewise.seriesIndex) and in visualMap-piecewise itself.
 *     For instance, if a visualMap-piecewise component is used on a scatter chart, the mapping approach from data to color (or symbol, size, ...) can be both customized in the scatter chart and visualMap-piecewise component itself. See the code as following:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels both in target series and visualMap-piecewise component itself:
 *             outOfRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [30, 100]
 *             }
 *         }
 *     ]
 *     
 *     If you want to define visual channels for target series and visualMap-piecewise component separately, you should do as follows:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels only for target series.
 *             target: {
 *                 outOfRange: {
 *                     color: [#121122, rgba(3,4,5,0.4), red],
 *                     symbolSize: [60, 200]
 *                 }
 *             },
 *             // Define visual channels only for visualMap-piecewise component.
 *             controller: {
 *                 outOfRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     Or define as follows:
 *     visualMap: [
 *         {
 *             ...,
 *             // Define visual channels for both target series and visualMap-piecewise component.
 *             outOfRange: {
 *                 color: [#121122, rgba(3,4,5,0.4), red],
 *                 symbolSize: [60, 200]
 *             },
 *             // Define visual channels only for visualMap-piecewise component, which
 *             // will overlap the properties with the same name in the above common
 *             // definition. (symbolSize is overlapped by [30, 100] while color
 *             // keeps the original value)
 *             controller: {
 *                 outOfRange: {
 *                     symbolSize: [30, 100]
 *                 }
 *             }
 *         }
 *     ]
 *     
 *     
 *     
 *     ✦ About visual channels ✦
 *     
 *     Various visual channels (such as color、symbolSize and ect.) can be defined in outOfRange at the same time and all of them will be apopted.
 *     
 *     Basically visual channels opacity is recommended, rather than colorAlpha. The former controls the transparency of both graphical element and its attachments (like label), whereas the latter only controls the transparency of graphical element.
 *     
 *     There are two approaches of visual mapping supported: Linear Mapping and Table Mapping.
 *     
 *     
 *     
 *     
 *     ✦ Linear Mapping to visual channel ✦
 *     Linear Mapping means that linear calculation will be performed on each dataValue (value of series.data), mapping them from the domain of [visaulMap.min, visualMap.max] to a given range of [visual value 1, visual value 2] and obtaining a final value (say visual value) for visual channel rendering.
 *     For instance, [visualMap.min, visualMap.max] is set to be [0, 100], and there is series.data: [50, 10, 100]. We intend to map them to an opacity range [0.4, 1], by which the size of value can be demostrated by the transparency of graphical elements. visualMap component will then linear calculate them and get opacity values [0.7, 0.44, 1], cooresponding to each dataValue.
 *     We can also set the visual range inversely, such as opacity: [1, 0.4], and the final mapping result for the given series.data above will be [0.7, 0.96, 0.4].
 *     Notice: [visualMap.min, visualMap.max] should be set manually and is [0, 100] by defualt, but not dataMin and dataMax in series.data.
 *     How to configure visualMap component to do Linear Mapping?
 *     
 *     When use visualMap-continuous, or
 *     
 *     When use visualMap-piecewise and visualMap-piecewise.categories is not used.
 *     
 *     
 *     About the value of visual channel (visual value):
 *     
 *     Basically Array is used to express the range of visual value, e.g., color: [#333, #777].
 *     
 *     Single number or single string can also be used, which will be converted to an Array by visualMap component. e.g.:  opacity: 0.4 will be converted to opacity: [0.4, 0.4], color: #333 will be converted to color: [#333, #333].
 *     
 *     For visual channel symbolSize, opacity, colorAlpha, colorLightness, colorSaturation, colorHue, the range of visual value is always in the form of: [visual value of visualMap.min, visual value of visualMap.max]. For example, colorLightness: [0.8, 0.2] means that the dataValue in series.data that equals to visualMap.min (if any) will be mapped to lightness 0.8, and the dataValue that equals to visualMap.max (if any) will be mapped to lightness 0.2, and other dataValues will be mapped by the linear calculateion based on the domain of [visualMap.min, visualMap.max] and the range of [0.8, 0.2].
 *     
 *     For visual channel color, array is used, like: [#333, #78ab23, blue], which means a color ribbon is formed based on the three color stops, and dataValues will be mapped to the ribbon. Specifically, the dataValue that equals to visualMap.min will be mapped onto #333, the dataValue that equals to visualMap.max will be mapped onto blue, and other dataValues will be piecewisely interpolated to get the final color.
 *     
 *     For visual channel symbol, array is used, like: [circle, rect, diamond], where the dataValue that equals to visualMap.min will be mapped onto circle, the dataValue that equals to visualMap.max will be mapped onto diamond, and other dataValues will be caculated based on the numerical distance to visualMax.min and to visualMap.max, and mapped onto one of circle, rect, diamond.
 *     
 *     
 *     About the possible value range of visual value:
 *     
 *     opacity、colorAlpha、colorLightness、colorSaturation，visual value
 *       possible value range is [0, 1].
 *     
 *     colorHue
 *       possible value range is [0, 360].
 *     
 *     color：
 *       color can use RGB expression, like rgb(128, 128, 128), or RGBA expression, like rgba(128, 128, 128, 0.5), or Hex expression, like #ccc.
 *     
 *     symbol：
 *     
 *     
 *     Icon types provided by ECharts includes 
 *     circle, rect, roundRect, triangle, diamond, pin, arrow, none
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *     
 *     
 *     ✦ Table Mapping to visual channel ✦
 *     Table Mapping could be used when dataValue (values in series.data, specified by visualMap.dimension) is enumerable and we intend to map them to visual value by looking up a given table.
 *     For instance, in a visualMap-piecewise component, visualMap-piecewise.categories is set to [Demon Hunter, Blademaster, Death Knight, Warden, Paladin]. And there is series.data: [Demon Hunter, Death Knight, Warden, Paladin]. Then we can establish the lookup rule for color: color: {Warden: red, Demon Hunter: black}, by which the visualMap component will map dataValue to color.
 *     How to configure visualMap component to do Table Mapping?
 *     When use visualMap-piecewise and visualMap-piecewise.categoriesis set.
 *     About the value of visual channel (visual value):
 *     Generally Object or Array is used, for instance:
 *     visualMap: {
 *         type: piecewise,
 *         // categories defines the items that to be displayed in visualMap-piecewise component.
 *         categories: [
 *             Demon Hunter, Blademaster, Death Knight, Warden, Paladin
 *         ],
 *         outOfRange: {
 *             // visual value can be an Object：
 *             color: {
 *                 Warden: red,
 *                 Demon Hunter: black,
 *                 : green // Blank string means that except Warden and Demon Hunter,
 *                             // all other dataValues should be mapped to green.
 *             }
 *             // visual value can also be a single value,
 *             // means that all dataValues should be mapped to the value.
 *             color: green,
 *             // visual value can also be a array, with the same length
 *             // as the array of categories and one-one mapping onto it.
 *             color: [red, black, green, yellow, white]
 *         }
 *     }
 *     
 *     Example
 *     
 *     ✦ How to modity configurations of vsiual encoding? ✦
 *     If you want to modify the configurations of visual encoding after chart been rendered (by invoke setOption to set the initial option), setOption can be used again to modify configurations of visual encoding. For instance:
 *     chart.setOption({
 *         visualMap: {
 *             inRange: {color: [red, blue]}
 *         }
 *     });
 *     
 *     Notice:
 *     
 *     These visualMap properties (i.e. inRange, outOfRange, target, controller) do not support merge, that is, anyone among them is modified when use setOption again, all of the original values of them will not be kept but erased. The merge brings complication in implemnentation and understanding, whereas erase all normalize the practise: once you want to modify some visual values, you should pass all of them to setOption, no matter they are to be changed.
 *     
 *     This way, getOption() -&gt; modify the gotten option -&gt; setOption(modified option), is strongly not recommended, for instance:
 *     
 *     
 *     // Not recommended approach, regardless of its correctness:
 *     
 *     var option = chart.getOption(); // Get the entire option.
 *     option.visualMap.inRange.color = [red, blue]; // modify color, which is what you want.
 *     
 *     // You have to modify those two properties, otherwise you will not get what you want.
 *     option.visualMap.target.inRange.color = [red, blue];
 *     option.visualMap.controller.inRange.color = [red, blue];
 *     
 *     chart.setOption(option); // set the modified option back.
 *     // You should not use this approach, but use the
 *     // approach demostrated before this example.
 *
 * {_more_}
 */
class Controller extends Property {}