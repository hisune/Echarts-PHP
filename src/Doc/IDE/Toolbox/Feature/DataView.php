<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    Whether to show the tool.
 *
 * @property string $title Default: 'data view'
 *    
 *
 * @property * $icon
 *    It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *
 * @property DataView\IconStyle $iconStyle
 *    The style setting of data view icon. Since icon label is displayed only when hovering on the icon, the label configuration options are available under emphasis.
 *
 * @property DataView\Emphasis $emphasis
 *    
 *
 * @property boolean $readOnly Default: false
 *    
 *     
 *     Whether it is read-only.
 *
 * @property callable $optionToContent
 *    (option:Object) =&gt; HTMLDomElement|string
 *     
 *     Define a function to present dataView. It is used to replace default textarea for richer data editing. It can return a DOM object, or an HTML string.
 *     For example:
 *     optionToContent: function(opt) {
 *         var axisData = opt.xAxis[0].data;
 *         var series = opt.series;
 *         var table = &lt;table style=width:100%;text-align:center&gt;&lt;tbody&gt;&lt;tr&gt;
 *                      + &lt;td&gt;Time:&lt;/td&gt;
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
 *     When optionToContent is used, if you want to support refreshing chart after data changes, you need to implement the logic to merge options in this function.
 *
 * @property array $lang Default: '[\'data view\', \'turn off\', \'refresh\']'
 *    There are 3 names in data view, which are [data view, turn off and refresh].
 *
 * @property string $backgroundColor Default: '#fff'
 *    
 *     
 *     Background color of the floating layer in data view.
 *
 * @property string $textareaColor Default: '#fff'
 *    
 *     
 *     Background color of input area of the floating layer in data view.
 *
 * @property string $textareaBorderColor Default: '#333'
 *    
 *     
 *     Border color of input area of the floating layer in data view.
 *
 * @property string $textColor Default: '#000'
 *    
 *     
 *     Text color.
 *
 * @property string $buttonColor Default: '#c23531'
 *    
 *     
 *     Button color.
 *
 * @property string $buttonTextColor Default: '#fff'
 *    
 *     
 *     Color of button text.
 *
 * {_more_}
 */
class DataView extends Property {}