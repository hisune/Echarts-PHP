<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\YAxis\AxisPointer;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    
 *     
 *     Set to true to use handle.
 *
 * @property * $icon
 *    
 *     
 *     The icon of the handle.
 *     It can be set to an image with image://url , in which URL is the link to an image, or dataURI of an image.
 *     An image URL example:
 *     image://http://xxx.xxx.xxx/a/b.png
 *     A dataURI example:
 *     image://data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7
 *     Icons can be set to arbitrary vector path via path:// in ECharts. As compared with a raster image, vector paths prevent jagging and blurring when scaled, and have better control over changing colors. The size of the vector icon will be adapted automatically. Refer to SVG PathData for more information about the format of the path. You may export vector paths from tools like Adobe 
 *     For example:
 *     path://M30.9,53.2C16.8,53.2,5.3,41.7,5.3,27.6S16.8,2,30.9,2C45,2,56.4,13.5,56.4,27.6S45,53.2,30.9,53.2z M30.9,3.5C17.6,3.5,6.8,14.4,6.8,27.6c0,13.3,10.8,24.1,24.101,24.1C44.2,51.7,55,40.9,55,27.6C54.9,14.4,44.1,3.5,30.9,3.5z M36.9,35.8c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H36c0.5,0,0.9,0.4,0.9,1V35.8z M27.8,35.8 c0,0.601-0.4,1-0.9,1h-1.3c-0.5,0-0.9-0.399-0.9-1V19.5c0-0.6,0.4-1,0.9-1H27c0.5,0,0.9,0.4,0.9,1L27.8,35.8L27.8,35.8z
 *     See the example of using image
 *
 * @property int|array $size Default: 45
 *    
 *     
 *     The size of the handle, which can be set as a single value or an array ([width, height]).
 *
 * @property int $margin Default: 50
 *    
 *     
 *     Distance from handle center to axis.
 *
 * @property string $color Default: '#333'
 *    
 *     
 *     The color of the handle.
 *
 * @property int $throttle Default: 40
 *    
 *     
 *     Throttle rate of trigger view update when dragging handle, in ms. Increase the value to improve performance, but decrease the experience.
 *
 * @property int $shadowBlur Default: 3
 *    
 *     
 *     Size of shadow blur. This attribute should be used along with shadowColor,shadowOffsetX, shadowOffsetY to set shadow to component.
 *     For example:
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor Default: '#aaa'
 *    
 *     
 *     Shadow color. Support same format as color.
 *
 * @property int $shadowOffsetX Default: 2
 *    
 *     
 *     Offset distance on the horizontal direction of shadow.
 *
 * @property int $shadowOffsetY Default: 0
 *    
 *     
 *     Offset distance on the vertical direction of shadow.
 *
 * {_more_}
 */
class Handle extends Property {}