<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Timeline;

use Hisune\EchartsPHP\Property;

/**
 * @property string $symbol Default: 'circle'
 *    Symbol of timeline.checkpointStyle .
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
 * @property int|array $symbolSize Default: 13
 *    timeline.checkpointStyle  symbol size. It can be set to single numbers like 10, or use an array to represent width and height. For example, [20, 10] means symbol width is 20, and height is10.
 *
 * @property int $symbolRotate
 *    Rotate degree of timeline.checkpointStyle  symbol. Note that when symbol is set to be arrow in markLine, symbolRotate value will be ignored, and compulsively use tangent angle.
 *
 * @property boolean $symbolKeepAspect Default: false
 *    Whether to keep aspect for symbols in the form of path://.
 *
 * @property array $symbolOffset Default: '[0, 0]'
 *    Offset of timeline.checkpointStyle  symbol relative to original position. By default, symbol will be put in the center position of data. But if symbol is from user-defined vector path or image, you may not expect symbol to be in center. In this case, you may use this attribute to set offset to default position. It can be in absolute pixel value, or in relative percentage value.
 *     For example, [0, 50%] means to move upside side position of symbol height. It can be used to make the arrow in the bottom to be at data position when symbol is pin.
 *
 * @property string $color Default: '#c23531'
 *    Color of checkpoint in timeline component.
 *
 * @property int $borderWidth Default: 5
 *    The border-width of checkpoint in timeline component.
 *
 * @property string $borderColor Default: 'rgba(194,53,49, 0.5)'
 *    The border-color of checkpoint in timeline component.
 *
 * @property boolean $animation Default: true
 *    In timeline component, whether there is animation in checkpoint moving during the process of timeline playing and switching.
 *
 * @property int $animationDuration Default: 300
 *    The animation duration of checkpoint in timeline component.
 *
 * @property string $animationEasing Default: 'quinticInOut'
 *    The easing effect of animation of checkpoint in timeline component. Refers to easing sample for different easing effects.
 *
 * {_more_}
 */
class CheckpointStyle extends Property {}