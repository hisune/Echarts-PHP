<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: false
 *    Whether to show special effect.
 *
 * @property int $period Default: 4
 *    The duration of special effect, which unit is second.
 *
 * @property int|callable $delay
 *    Effect animation delay. Can be number or callback function.
 *
 * @property int $constantSpeed Default: 0
 *    If symbol movement of special effect has a constant speed, which unit is pixel per second. period will be ignored if constantSpeed is larger than 0.
 *
 * @property string $symbol Default: 'circle'
 *    The symbol of special effect.
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
 *     The above example uses a custom path of plane shape.
 *     Tip: Ahe angle of symbol changes as the tangent of track changes. If you use a custom path, you should make sure that the path shape are upward oriented. It would ensure that the symbol will always move toward the right moving direction when the symbol moves along the track.
 *
 * @property array|int $symbolSize Default: 3
 *    The symbol size of special effect, which could be set as single number such as 10. Whats more, arrays could be used to decribe the width and height respectively. For instance, [20, 10] indicates 20 for width and  10 for height.
 *
 * @property string $color
 *    The color of special effect symbol, which defaults to be same with lineStyle.color.
 *
 * @property int $trailLength Default: 0.2
 *    The length of trail of special effect.  The values from 0 to 1 could be set. Trail would be longer as the the value becomes larger.
 *
 * @property boolean $loop Default: true
 *    Whether to loop the special effect animation.
 *
 * {_more_}
 */
class Effect extends Property {}