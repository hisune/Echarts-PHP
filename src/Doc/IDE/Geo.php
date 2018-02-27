<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $show Default: true
 *    是否显示地理坐标系组件。
 *
 * @property string $map Default: ''
 *    地图类型。
 *     ECharts 3 中因为地图精度的提高，不再内置地图数据增大代码体积，你可以在地图下载界面下载到需要的地图文件引入并注册到 ECharts 中。
 *     ECharts 中提供了两种格式的地图数据，一种是可以直接 script 标签引入的 js 文件，引入后会自动注册地图名字和数据。还有一种是 JSON 文件，需要通过 AJAX 异步加载后手动注册。
 *     下面是两种类型的使用示例：
 *      JavaScript 引入示例 
 *     &lt;script src=echarts.js&gt;&lt;/script&gt;
 *     &lt;script src=map/js/china.js&gt;&lt;/script&gt;
 *     &lt;script&gt;
 *     var chart = echarts.init(document.getElementById(main));
 *     chart.setOption({
 *         series: [{
 *             type: map,
 *             map: china
 *         }]
 *     });
 *     &lt;/script&gt;
 *     
 *      JSON 引入示例 
 *     $.get(map/json/china.json, function (chinaJson) {
 *         echarts.registerMap(china, chinaJson);
 *         var chart = echarts.init(document.getElementById(main));
 *         chart.setOption({
 *             series: [{
 *                 type: map,
 *                 map: china
 *             }]
 *         });
 *     });
 *     
 *     ECharts 使用 geoJSON 格式的数据作为地图的轮廓，除了上述数据，你也可以通过其它手段获取地图的 geoJSON 数据注册到 ECharts 中。参见示例 USA Population Estimates
 *
 * @property boolean $roam Default: false
 *    是否开启鼠标缩放和平移漫游。默认不开启。如果只想要开启缩放或者平移，可以设置成 scale 或者 move。设置成 true 为都开启
 *
 * @property array $center
 *    当前视角的中心点，用经纬度表示
 *     例如：
 *     center: [115.97, 29.71]
 *
 * @property int $aspectScale Default: 0.75
 *    这个参数用于 scale 地图的长宽比。
 *     最终的 aspect 的计算方式是：geoBoundingRect.width / geoBoundingRect.height * aspectScale
 *
 * @property array $boundingCoords
 *    二维数组，定义定位的左上角以及右下角分别所对应的经纬度。例如
 *     // 设置为一张完整经纬度的世界地图
 *     map: world,
 *     left: 0, top: 0, right: 0, bottom: 0,
 *     boundingCoords: [
 *         // 定位左上角经纬度
 *         [-180, 90],
 *         // 定位右下角经纬度
 *         [180, -90]
 *     ],
 *
 * @property int $zoom Default: 1
 *    当前视角的缩放比例。
 *
 * @property Geo\ScaleLimit $scaleLimit
 *    滚轮缩放的极限控制，通过min, max最小和最大的缩放值，默认的缩放为1。
 *
 * @property array $nameMap
 *    自定义地区的名称映射，如：
 *     {
 *         China : 中国
 *     }
 *
 * @property boolean|string $selectedMode Default: false
 *    选中模式，表示是否支持多个选中，默认关闭，支持布尔值和字符串，字符串取值可选single表示单选，或者multiple表示多选。
 *
 * @property Geo\Label $label
 *    图形上的文本标签，可用于说明图形的一些数据信息，比如值，名称等，label选项在 ECharts 2.x 中放置于itemStyle下，在 ECharts 3 中为了让整个配置项结构更扁平合理，label 被拿出来跟 itemStyle 平级，并且跟 itemStyle 一样拥有 emphasis 状态。
 *
 * @property Geo\ItemStyle $itemStyle
 *    地图区域的多边形 图形样式。
 *
 * @property Geo\Emphasis $emphasis
 *    高亮状态下的多边形和标签样式。
 *
 * @property int $zlevel Default: 0
 *    所有图形的 zlevel 值。
 *     zlevel用于 Canvas 分层，不同zlevel值的图形会放置在不同的 Canvas 中，Canvas 分层是一种常见的优化手段。我们可以把一些图形变化频繁（例如有动画）的组件设置成一个单独的zlevel。需要注意的是过多的 Canvas 会引起内存开销的增大，在手机端上需要谨慎使用以防崩溃。
 *     zlevel 大的 Canvas 会放在 zlevel 小的 Canvas 的上面。
 *
 * @property int $z Default: 2
 *    组件的所有图形的z值。控制图形的前后顺序。z值小的图形会被z值大的图形覆盖。
 *     z相比zlevel优先级更低，而且不会创建新的 Canvas。
 *
 * @property string|int $left Default: 'auto'
 *    组件离容器左侧的距离。
 *     left 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 left, center, right。
 *     如果 left 的值为left, center, right，组件会根据相应的位置自动对齐。
 *
 * @property string|int $top Default: 'auto'
 *    组件离容器上侧的距离。
 *     top 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比，也可以是 top, middle, bottom。
 *     如果 top 的值为top, middle, bottom，组件会根据相应的位置自动对齐。
 *
 * @property string|int $right Default: 'auto'
 *    组件离容器右侧的距离。
 *     right 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
 *
 * @property string|int $bottom Default: 'auto'
 *    组件离容器下侧的距离。
 *     bottom 的值可以是像 20 这样的具体像素值，可以是像 20% 这样相对于容器高宽的百分比。
 *     默认自适应。
 *
 * @property array $layoutCenter
 *    layoutCenter 和 layoutSize 提供了除了 left/right/top/bottom/width/height 之外的布局手段。
 *     在使用 left/right/top/bottom/width/height 的时候，可能很难在保持地图高宽比的情况下把地图放在某个盒形区域的正中间，并且保证不超出盒形的范围。此时可以通过 layoutCenter 属性定义地图中心在屏幕中的位置，layoutSize 定义地图的大小。如下示例
 *     layoutCenter: [30%, 30%],
 *     // 如果宽高比大于 1 则宽度为 100，如果小于 1 则高度为 100，保证了不超过 100x100 的区域
 *     layoutSize: 100
 *     
 *     设置这两个值后 left/right/top/bottom/width/height 无效。
 *
 * @property int|string $layoutSize
 *    地图的大小，见 layoutCenter。支持相对于屏幕宽高的百分比或者绝对的像素大小。
 *
 * @property array $regions
 *    在地图中对特定的区域配置样式。
 *     例如：
 *     regions: [{
 *         name: 广东,
 *         itemStyle: {
 *             areaColor: red,
 *             color: red
 *         }
 *     }]
 *     
 *     geo 区域的颜色也可以被 map series 所控制，参见 series-map.geoIndex。
 *
 * @property boolean $silent Default: false
 *    图形是否不响应和触发鼠标事件，默认为 false，即响应和触发鼠标事件。
 *
 * {_more_}
 */
class Geo extends Property {}