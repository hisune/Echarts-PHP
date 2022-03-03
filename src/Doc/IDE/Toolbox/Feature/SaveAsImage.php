<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

use Hisune\EchartsPHP\Property;

/**
 * @property string $type Default: 'png'
 *    
 *     
 *     File suffix of the image saved.
 *     
 *     If the renderer is set to be canvas when chart initialized (default), then png (default) and jpg are supported.
 *     If the renderer is set to be svg when when chart initialized, then only svg is supported for type (svg type is supported since v4.8.0).
 *
 * @property string $name
 *    
 *     
 *     Name to save the image, whose default value is title.text.
 *
 * @property string $backgroundColor Default: 'auto'
 *    
 *     
 *     Background color to save the image, whose default value is backgroundColor. If backgroundColor is not set, white color is used.
 *
 * @property string $connectedBackgroundColor Default: '#fff'
 *    
 *     
 *     When echarts.connect is used to connect the interaction of multiple chart series, they will all be included in the exported image. This option sets the background color between these charts.
 *
 * @property array $excludeComponents Default: '[\'toolbox\']'
 *    Components to be excluded when export. By default, toolbox is excluded.
 *
 * @property boolean $show Default: true
 *    Whether to show the tool.
 *
 * @property string $title Default: 'save as image'
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
 * @property SaveAsImage\IconStyle $iconStyle
 *    The style setting of save as image icon. Since icon label is displayed only when hovering on the icon, the label configuration options are available under emphasis.
 *
 * @property SaveAsImage\Emphasis $emphasis
 *    
 *
 * @property int $pixelRatio Default: 1
 *    
 *     
 *     Resolution ratio to save image, whose default value is that of the container. Values larger than 1 (e.g.: 2) is supported when you need higher resolution.
 *
 * {_more_}
 */
class SaveAsImage extends Property {}