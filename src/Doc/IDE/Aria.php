<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $enabled Default: false
 *    Whether or not aria is turned on. If not, the label or decal effect is not applied.
 *
 * @property Aria\Label $label
 *    If aria.enabled is set to true, label is enabled by default. When enabled, the description of the chart will be automatically and intelligently generated based on the chart, data, title, etc. Users can also modify the description through the configuration item.
 *     Example:
 *     option = {
 *         aria: {
 *             // The following lines can be omitted because label.enabled defaults to true.
 *             // label: {
 *             // enabled: true
 *             // },
 *             enabled: true
 *         },
 *         title: {
 *             text: User access sources for a site,
 *             x: center
 *         },
 *         series: [
 *             {
 *                 name: access source,
 *                 type: pie,
 *                 data: [
 *                     { value: 335, name: Direct Access },
 *                     { value: 310, name: Email Marketing },
 *                     { value: 234, name: Affiliate Ads },
 *                     { value: 135, name: Video Ads },
 *                     { value: 1548, name: Search Engine }
 *                 ]
 *             }
 *         ]
 *     };
 *     
 *     
 *     
 *     
 *     On the generated chart DOM, there is an aria-label attribute that allows the blind to understand the chart with the help of a reading device. Its value is.
 *     
 *     This is a chart of Source of user access to a site. The chart type is a pie chart that indicates the source of the visit. The data is - direct access data is 335, mail marketing data is 310, union ad data is 234, video ad data is 135, search engine data is 1548.
 *     
 *     The basic process for generating the description is that if aria.enabled is set to true (not the default) and aria.label.enabled is set to true (the default), then the accessibility description is generated. Otherwise it is not generated. If aria.label.description is defined, it is used as the full description of the chart, otherwise the description is generated according to the template stitching. We provide a default algorithm for generating descriptions, and only if the generated descriptions are not quite right, you need to modify these templates, or even override them completely with aria.label.description.
 *     When using the template, whether title.text is used along with aria.label.general.withTitle while aria.label.general.withoutTitle is used if there is no title text. aria.general.withTitle supports a template {title}, which will be replaced with chart title. This means, if aria.general.withTitle is set to be The chart title is {title}. and the chart title is Price Distribution, it will be interpreted into The chart title is Price Distribution.
 *     After generating the title, the description of the series (aria.label.series) and the description of the data for each series (aria.label.data) are generated in turn. The following is an example of a template. Likewise, each template may include template variables to replace actual values.
 *     The complete description generation process is:
 *
 * @property Aria\Decal $decal
 *    Decal patterns are added to series data as an additional hint other than colors to help differentiate the data. It is easy to enabled the default decal patterns by enabling it:
 *     aria: {
 *         enabled: true,
 *         decal: {
 *             show: true
 *         }
 *     }
 *     
 *     
 *     
 *     Most series types are supported, including: line, bar, pie, radar, treemap, sunburst, boxplot, sankey, funnel, gauge, pictorialBar, themeRiver, custom and so on. Among them, some series have no filling color by default (such as line, radar, boxplot), which take effect only if the areaStyle is set.
 *
 * {_more_}
 */
class Aria extends Property {}