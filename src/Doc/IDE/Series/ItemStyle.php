<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property string|callable $color Default: '自适应'
 *    图形的颜色。 默认从全局调色盘 option.color 获取颜色 
 *     
 *     颜色可以使用 RGB 表示，比如 rgb(128, 128, 128)，如果想要加上 alpha 通道表示不透明度，可以使用 RGBA，比如 rgba(128, 128, 128, 0.5)，也可以使用十六进制格式，比如 #ccc。除了纯色之外颜色也支持渐变色和纹理填充
 *     // 线性渐变，前四个参数分别是 x0, y0, x2, y2, 范围从 0 - 1，相当于在图形包围盒中的百分比，如果 globalCoord 为 `true`，则该四个值是绝对的像素位置
 *     color: {
 *         type: linear,
 *         x: 0,
 *         y: 0,
 *         x2: 0,
 *         y2: 1,
 *         colorStops: [{
 *             offset: 0, color: red // 0% 处的颜色
 *         }, {
 *             offset: 1, color: blue // 100% 处的颜色
 *         }],
 *         globalCoord: false // 缺省为 false
 *     }
 *     // 径向渐变，前三个参数分别是圆心 x, y 和半径，取值同线性渐变
 *     color: {
 *         type: radial,
 *         x: 0.5,
 *         y: 0.5,
 *         r: 0.5,
 *         colorStops: [{
 *             offset: 0, color: red // 0% 处的颜色
 *         }, {
 *             offset: 1, color: blue // 100% 处的颜色
 *         }],
 *         globalCoord: false // 缺省为 false
 *     }
 *     // 纹理填充
 *     color: {
 *         image: imageDom, // 支持为 HTMLImageElement, HTMLCanvasElement，不支持路径字符串
 *         repeat: repeat // 是否平铺, 可以是 repeat-x, repeat-y, no-repeat
 *     }
 *     
 *     
 *     支持使用回调函数。回调函数格式如下：
 *     (params: Object) =&gt; Color
 *     
 *     传入的是数据项 seriesIndex, dataIndex, data, value 等各个参数。
 *
 * @property string $borderColor Default: '"#000"'
 *    图形的描边颜色。支持的颜色格式同 color，不支持回调函数。
 *
 * @property int $borderWidth Default: 0
 *    描边线宽。为 0 时无描边。
 *
 * @property string $borderType Default: 'solid'
 *    柱条的描边类型，默认为实线，支持 solid, dashed, dotted。
 *
 * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * @property int $shadowOffsetX Default: 0
 *    阴影水平方向上的偏移距离。
 *
 * @property int $shadowOffsetY Default: 0
 *    阴影垂直方向上的偏移距离。
 *
 * @property int $opacity
 *    图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
 *
 *  * @property int|array $barBorderRadius Default: 0
 *    圆角半径，单位px，支持传入数组分别指定 4 个圆角半径。
 *     如:
 *     barBorderRadius: 5, // 统一设置四个角的圆角大小
 *     barBorderRadius: [5, 5, 0, 0] //（顺时针左上，右上，右下，左下）
 *
 * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * @property int $opacity
 *    图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * @property int $opacity
 *    图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * @property int $opacity
 *    图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * @property int $opacity
 *    图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * @property int $opacity
 *    图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * @property int $opacity
 *    图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
 *
 *  * @property int $colorAlpha
 *    矩形颜色的透明度。取值范围是 0 ~ 1 之间的浮点数。
 *
 * @property int $colorSaturation
 *    矩形颜色的饱和度。取值范围是 0 ~ 1 之间的浮点数。
 *
 * @property int $gapWidth Default: 0
 *    矩形内部子矩形（子节点）的间隔距离。
 *
 * @property string $borderColorSaturation
 *    矩形边框的颜色的饱和度。取值范围是 0 ~ 1 之间的浮点数。
 *     注意：
 *     如果设置此属性，则 borderColor 的设置无效，而是：取当前节点计算出的颜色（比如从父节点遗传而来），在此颜色值上设置 borderColorSaturation 得到最终颜色。这种方式，能够做出『不同区块有不同色调的矩形间隔线』的效果，能够便于区分层级。
 *     
 *     矩形边框（border）/缝隙（gap）设置如何避免混淆
 *     如果统一用一种颜色设置矩形的缝隙（gap），那么当不同层级的矩形同时展示时可能会出现混淆。
 *     参见 例子，注意其中红色的区块中的子矩形其实是更深层级，和其他用白色缝隙区分的矩形不是在一个层级。所以，红色区块中矩形的分割线的颜色，我们在 borderColorSaturation 中设置为『加了饱和度变化的红颜色』，以示区别。
 *
 * @property string $strokeColor
 *    每个矩形的描边颜色。
 *
 * @property int $strokeWidth
 *    每个矩形的描边宽度。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * @property int $opacity Default: 1
 *    图形透明度。支持从 0 到 1 的数字，为 0 时不绘制该图形。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property string $color0 Default: '#314656'
 *    阴线 图形的颜色。
 *     
 *     颜色可以使用 RGB 表示，比如 rgb(128, 128, 128)，如果想要加上 alpha 通道表示不透明度，可以使用 RGBA，比如 rgba(128, 128, 128, 0.5)，也可以使用十六进制格式，比如 #ccc。除了纯色之外颜色也支持渐变色和纹理填充
 *     // 线性渐变，前四个参数分别是 x0, y0, x2, y2, 范围从 0 - 1，相当于在图形包围盒中的百分比，如果 globalCoord 为 `true`，则该四个值是绝对的像素位置
 *     color: {
 *         type: linear,
 *         x: 0,
 *         y: 0,
 *         x2: 0,
 *         y2: 1,
 *         colorStops: [{
 *             offset: 0, color: red // 0% 处的颜色
 *         }, {
 *             offset: 1, color: blue // 100% 处的颜色
 *         }],
 *         globalCoord: false // 缺省为 false
 *     }
 *     // 径向渐变，前三个参数分别是圆心 x, y 和半径，取值同线性渐变
 *     color: {
 *         type: radial,
 *         x: 0.5,
 *         y: 0.5,
 *         r: 0.5,
 *         colorStops: [{
 *             offset: 0, color: red // 0% 处的颜色
 *         }, {
 *             offset: 1, color: blue // 100% 处的颜色
 *         }],
 *         globalCoord: false // 缺省为 false
 *     }
 *     // 纹理填充
 *     color: {
 *         image: imageDom, // 支持为 HTMLImageElement, HTMLCanvasElement，不支持路径字符串
 *         repeat: repeat // 是否平铺, 可以是 repeat-x, repeat-y, no-repeat
 *     }
 *
 * @property string $borderColor0 Default: '#314656'
 *    阴线 图形的描边颜色。
 *     
 *     颜色可以使用 RGB 表示，比如 rgb(128, 128, 128)，如果想要加上 alpha 通道表示不透明度，可以使用 RGBA，比如 rgba(128, 128, 128, 0.5)，也可以使用十六进制格式，比如 #ccc。除了纯色之外颜色也支持渐变色和纹理填充
 *     // 线性渐变，前四个参数分别是 x0, y0, x2, y2, 范围从 0 - 1，相当于在图形包围盒中的百分比，如果 globalCoord 为 `true`，则该四个值是绝对的像素位置
 *     color: {
 *         type: linear,
 *         x: 0,
 *         y: 0,
 *         x2: 0,
 *         y2: 1,
 *         colorStops: [{
 *             offset: 0, color: red // 0% 处的颜色
 *         }, {
 *             offset: 1, color: blue // 100% 处的颜色
 *         }],
 *         globalCoord: false // 缺省为 false
 *     }
 *     // 径向渐变，前三个参数分别是圆心 x, y 和半径，取值同线性渐变
 *     color: {
 *         type: radial,
 *         x: 0.5,
 *         y: 0.5,
 *         r: 0.5,
 *         colorStops: [{
 *             offset: 0, color: red // 0% 处的颜色
 *         }, {
 *             offset: 1, color: blue // 100% 处的颜色
 *         }],
 *         globalCoord: false // 缺省为 false
 *     }
 *     // 纹理填充
 *     color: {
 *         image: imageDom, // 支持为 HTMLImageElement, HTMLCanvasElement，不支持路径字符串
 *         repeat: repeat // 是否平铺, 可以是 repeat-x, repeat-y, no-repeat
 *     }
 *
 * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property string $areaColor Default: '#eee'
 *    地图区域的颜色。
 *
 * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 *  * @property int $shadowBlur
 *    图形阴影的模糊大小。该属性配合 shadowColor,shadowOffsetX, shadowOffsetY 一起设置图形的阴影效果。
 *     示例：
 *     {
 *         shadowColor: rgba(0, 0, 0, 0.5),
 *         shadowBlur: 10
 *     }
 *
 * @property string $shadowColor
 *    阴影颜色。支持的格式同color。
 *
 * {_more_}
 */
class ItemStyle extends Property {}