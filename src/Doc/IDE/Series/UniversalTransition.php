<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Series;

use Hisune\EchartsPHP\Property;

/**
 * @property boolean $enabled Default: false
 *    Wheather to enable the universal transition animation.
 *
 * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 * @property int|callable $animationDelay Default: 0
 *    Specify the delay time before animation start. Callback function can be used, where different delay time can be used on different element.
 *     For example:
 *     animationDelay: function (dataIndex, params) {
 *         return params.index * 30;
 *     }
 *     // Or inverse:
 *     animationDelay: function (dataIndex, params) {
 *         return (params.count - 1 - params.index) * 30;
 *     }
 *     
 *     For example:
 *
 * @property int|callable $animationDelayUpdate Default: 0
 *    Specify the delay time before update animation. Callback function can be used, where different delay time can be used on different element.
 *     For example:
 *     animationDelay: function (dataIndex, params) {
 *         return params.index * 30;
 *     }
 *     // Or inverse:
 *     animationDelay: function (dataIndex, params) {
 *         return (params.count - 1 - params.index) * 30;
 *     }
 *     
 *     For example:
 *
 *  * @property string|array $seriesKey
 *    The seriesKey determines how the series to be animated is associated, it defaults to the id of the series when not configured.
 *     Usually this is configured as a string, and transitions between series with the same seriesKey will be applied. It can also be configured as an array like the following.
 *     seriesKey: [male, female]
 *     
 *     Configuring to an array means that all series specified by the array item will be merged into the current series when animating. For example, this configuration means that series with id or seriesKey of male and female will be merged into the current series.
 *
 * @property string $divideShape
 *    divideShape determines how the elements in the current series will split into multiple elements in a one-to-many or many-to-one animation. Currently supports
 *     
 *     split Split the shape into multiple shapes.
 *     clone Get multiple clones from the current element.
 *     
 *     For better results, different series will have different configurations by default, for example, scatter with smaller and more complex element uses clone by default, while more regular ones like bar charts default to split. You can set this to the desired splitting strategy according to the needs of your own scenario.
 *
 * @property callable $delay
 *    (index: number, count: number) =&gt; number
 *     
 *     Configure the animation delay for each shape in a one-to-many or many-to-one animation. Setting different animation delays can bring a more instereting animation. For example, the following code creates a staggered effect with a random delay for each shape.
 *     delay: function (index, count) {
 *         return Math.random() * 1000;
 *     }
 *
 * {_more_}
 */
class UniversalTransition extends Property {}