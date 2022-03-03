<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Legend\ItemStyle;

use Hisune\EchartsPHP\Property;

/**
 * @property string|array $symbol Default: 'rect'
 *    The symbol type of the decal. If it is in the type of string[], it means the symbols are used one by one.
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
 * @property int $symbolSize Default: 1
 *    Range of values: 0 to 1, representing the size of symbol relative to decal.
 *
 * @property boolean $symbolKeepAspect Default: true
 *    Whether or not to keep the aspect ratio of the pattern.
 *
 * @property string $color Default: 'rgba(0, 0, 0, 0.2)'
 *    For the color of the decal pattern, it is recommended to use a translucent color, which can be superimposed on the color of the series itself.
 *
 * @property string $backgroundColor
 *    The background color of the decal will be over the color of the series itself, under the decal pattern.
 *
 * @property int|array $dashArrayX Default: 5
 *    The basic pattern of the decal pattern is an infinite loop in the form of Pattern - Blank - Pattern - Blank - Pattern - Blank both horizontally and vertically, respectively. By setting the length of each pattern and blank, complex pattern effects can be achieved.
 *     dashArrayX controls the horizontal pattern pattern. When its value is of type number or number[], it is similar to SVG stroke-dasharray.
 *     
 *     If it is of type number, it means that the pattern and the blank space are of this value respectively. For example, 5 means the pattern with width 5 is displayed first, then 5 pixels empty, then the pattern with width 5 is displayed...
 *     
 *     In the case of number[] type, it means that the pattern and empty space are loops of an array of values. For example: [5, 10, 2, 6] means the pattern is 5 pixels wide, then 10 pixels empty, then the pattern is 2 pixels wide, then 6 pixels empty, then the pattern is 5 pixels wide...
 *     
 *     If of type (number | number[])[], it means that each row is a loop with an array of values for the pattern and blank space. For example: [10, [2, 5]] means that the first line will be 10 pixels by 10 pixels and empty space, the second line will be 2 pixels by 2 pixels and empty space, and the third line will be 10 pixels by 10 pixels and empty space...
 *     
 *     
 *     This interface can be better understood with the following examples.
 *
 * @property int|array $dashArrayY Default: 5
 *    The basic pattern of the decal pattern is an infinite loop in the form of Pattern - Blank - Pattern - Blank - Pattern - Blank both horizontally and vertically, respectively. By setting the length of each pattern and blank, complex pattern effects can be achieved.
 *     dashArrayY controls the horizontal pattern pattern. Similar to SVG stroke-dasharray.
 *     
 *     If it is a number type, it means the pattern and the blank are each of this value. For example, 5 means that the pattern with a height of 5 is displayed first, then 5 pixels empty, then the pattern with a height of 5 is displayed...
 *     
 *     In the case of number[] type, it means that the pattern and empty space are loops of sequential array values. For example: [5, 10, 2, 6] means the pattern is 5 pixels high, then 10 pixels empty, then the pattern is 2 pixels high, then 6 pixels empty, then the pattern is 5 pixels high...
 *     
 *     
 *     This interface can be better understood with the following examples.
 *
 * @property int $rotation Default: 0
 *    The overall rotation angle (in radians) of the pattern, in the range from `-Math.
 *
 * @property int $maxTileWidth Default: 512
 *    The upper limit of the width of the generated pattern before it is duplicated. Usually this value is not necessary, but you can try to increase it if you notice discontinuous seams in the pattern when it repeats.
 *
 * @property int $maxTileHeight Default: 512
 *    The upper limit of the height of the generated pattern before it repeats. This value is usually not necessary to set, but you can try to increase it if you find that the pattern has discontinuous seams when it is repeated.
 *
 * {_more_}
 */
class Decal extends Property {}