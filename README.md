[![Latest Stable Version](https://poser.pugx.org/hisune/Echarts-PHP/v/stable)](https://packagist.org/packages/hisune/Echarts-PHP) 
[![Total Downloads](https://poser.pugx.org/hisune/Echarts-PHP/downloads)](https://packagist.org/packages/hisune/Echarts-PHP) 
[![Latest Unstable Version](https://poser.pugx.org/hisune/Echarts-PHP/v/unstable)](https://packagist.org/packages/hisune/Echarts-PHP) 

# Echarts-PHP

Echarts-PHP is a PHP library that works as a wrapper for the **Echarts js** library (https://github.com/ecomfe/echarts). Support Echarts version from 2.2.x to 4.x.

## Setup

The recommended way to install Echarts-PHP is through  [`Composer`](http://getcomposer.org). Just run the composer command to install it:
```sh
composer require "hisune/echarts-php"
```

## Table of Contents
  - [Backward Incompatibility Warning](#backward-incompatibility-warning)
  - Class: ECharts
    - [__construct([string] $dist = '')](#simple-recommend-using-php-property)
    - [addSeries(Series $series)](#add-series-with-property) 
    - [addXAxis(XAxis $xAxis)](#add-xaxis-with-property) 
    - [addYAxis(YAxis $yAxis)](#add-yaxis-with-property) 
    - [setOption(array $option)](#or-you-can-set-option-array-directly) 
    - [getOption([array] $render = null, [boolean] $jsObject = false)](#or-you-can-set-option-array-directly) 
    - [setJsVar(string $name = null)](#customer-js-variable-name) 
    - [getJsVar()](#customer-js-variable-name) 
    - [render(string $id, [array] $attribute = [], [string] $theme = null)](#customer-attribute) 
    - [addEvent(string $event, string $callback)](#events-for-3x) 
    - [jsExpr(string $string)](#javascript-function)
    - [eventMethod(string $name)](#events-for-3x)
    - [addExtraScript(string $file, [string] $dist = null)](#add-extra-script-from-cdn)
  - Class: Config
    - [$dist](#customer-dist)
    - [$distType](#dist-type)
    - [$version](#dist-version)
    - [$minify](#whether-or-not-load-minify-js-file)
    - [$renderScript](#render-scripts)
    - [addExtraScript](#add-extra-script-from-cdn)
  - Class: InitOptions
    - [$devicePixelRatio](#initoptionsdevicepixelratio)
    - [$renderer](#initoptionsrenderer)
    - [$width](#initoptionswidth)
    - [$height](#initoptionsheight)
  - [Theme](#the-example-for-echarts-theme-use-addextrascript)
  - [PHPDoc for property](#full-echarts-phpdoc)
  
## Backward Incompatibility Warning
Due to major changes to the `Config` class, there are some backward incompatibilities between version 1.0.12 and >= 1.0.13.
  - functions removed: 
    - `eventMethod` does not exist anymore
    - `on` - now relocated to `ECharts` and renamed to `addEvent`
  - functions relocated to `ECharts` and are not static anymore: 
    - `jsExpr` 
    - `optionMethod` - is now protected to `ECharts`
    - `jsonEncode`
    - `render`
    - `addExtraScript`
  - properties relocated to `ECharts`:
    - `$scripts` - is now protected to `ECharts`
    - `$method`
    - `$extraScript`
    - `$prefix` and `$jsVar` - now possible to define javascript variable name per instance - both protected in  `ECharts`
    - `$_events` - is now protected in `ECharts`
  - **overrideable parameters:** following parameters can now be defined globally in `Config` or be overridden per instance:
    - `$dist` (override using `setDist()`)
    - `$version` (override using `setVersion()`)
    - `$distType` (override using `setDistType()`)
    - `$minify` (override using `setMinify()`)
  - other issues:
    - it's not possible to change `$prefix` or `$jsVar` after `getJsVar(true)` function (and as a consequence of that `renderEvents`, `preRender` or `render`) has been called. this ensures that further js-related functions will always return the created name.
  - new features:
    - echarts library and extra scripts can now be rendered using `renderScripts()`
    - echarts\ instance events can now be rendered using `renderEvents()`

## Usage

### Simple, recommend using PHP property
`public ECharts::__construct([string] $dist = '')`
 - Param `dist` is your customer dist url.
```php
// The most simple example
use Hisune\EchartsPHP\ECharts;
$chart = new ECharts();
$chart->tooltip->show = true;
$chart->legend->data[] = '销量';
$chart->xAxis[] = array(
    'type' => 'category',
    'data' => array("衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子")
);
$chart->yAxis[] = array(
    'type' => 'value'
);
$chart->series[] = array(
    'name' => '销量',
    'type' => 'bar',
    'data' => array(5, 20, 40, 10, 10, 20)
);
echo $chart->render('simple-custom-id');
```

### Add series with property
`void ECharts::addSeries(\Hisune\EchartsPHP\Doc\IDE\Series $series)`
```php
use \Hisune\EchartsPHP\Doc\IDE\Series;
$series = new Series();
$series->type = 'map';
$series->map = 'world';
$series->data = array(
    array(
        'name' => 'China',
        'value' => 100,
    )
);
$series->label->emphasis->textStyle->color = '#fff';
$series->roam = true;
$series->scaleLimit->min = 1;
$series->scaleLimit->max = 5;
$series->itemStyle->normal->borderColor = '#F2EFF4';
$series->itemStyle->normal->areaColor = '#993399';
$series->itemStyle->emphasis->areaColor = '#993399';
$chart->addSeries($series);
```

### Add XAxis with property
`void ECharts::addXAxis(\Hisune\EchartsPHP\Doc\IDE\XAxis $xAxis)`
```php
use Hisune\EchartsPHP\Doc\IDE\XAxis;
$xAxis = new XAxis();
$xAxis->type = 'category';
$xAxis->data = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
$chart->addXAxis($xAxis);
```

### Add YAxis with property
`void ECharts::addYAxis(\Hisune\EchartsPHP\Doc\IDE\YAxis $yAxis)`
```php
use Hisune\EchartsPHP\Doc\IDE\YAxis;
$yAxis = new YAxis();
$yAxis->type = 'value';
$chart->addYAxis($yAxis);
```

### Or you can set option array directly
`void ECharts::setOption(array $option)`
 - Param `option` is ECharts option array to be set.

`array|string ECharts::getOption([array] $render = null, [boolean] $jsObject = false)`
 - Param `render` is ECharts option array.
 - Param `jsObject` is whether or not to return json string, return PHP array by default.
```php
$option = array (
  'tooltip' =>
  array (
    'show' => true,
  ),
  'legend' =>
  array (
    'data' =>
    array (
      0 => '销量',
    ),
  ),
  // ...
)
$chart->setOption($option);
```

### Array key support

```php
$chart->legend->data[] = '销量';
$chart->yAxis[0] = array('type' => 'value');
```

### Javascript function
`string $chart->jsExpr(string $string)`
```php
// With 'function' letter startup
'axisLabel' => array(
    // this array value will automatic conversion to js callback function
    'formatter' => "
        function (value)
        {
            return value + ' °C'
        }
    "
)
```
```php
// Or you can add any js expr with jsExpr
use \Hisune\EchartsPHP\Config;
'backgroundColor' => $this->jsExpr('
    new echarts.graphic.RadialGradient(0.5, 0.5, 0.4, [{
        offset: 0,
        color: "#4b5769"
    }, {
        offset: 1,
        color: "#404a59"
    }])
');
```
### Customer JS variable name
`void ECharts::setJsVar(string $name = null)`
 - Param `name` is your customer js variable name. By default, js variable name will generate by random.  

`string ECharts::getJsVar()`
```php
$chart->setJsVar('test');
echo $chart->getJsVar(); // echo test
// var chart_test = echarts.init( ...
```

### Customer attribute
`string render(string $id, [array] $attribute = [], [string] $theme = null)`
 - Param `id` is your html dom ID.
 - Param `attribute` is your html dom attribute.
 - Param `theme` is your ECharts theme.
 - Return html string.
```php
$chart->render('simple-custom-id2', array('style' => 'height: 500px;'));
```

### Events (for 3.x+)
`void addEvent(string $event, string $callback)`
 - Param `event` is event name, available: `click`, `dblclick`, `mousedown`, `mousemove`, `mouseup`, `mouseover`, `mouseout`
 - Param `callback` is event callback.
 ```php
 $chart->addEvent('mousemove', function(param){console.log(param);});
 ```

### Customer dist
defines where to access the echarts library. it is also used by `addExtraScript` in case the script's dist url is not defined 
```php
// for all instances

Hisune\EchartsPHP\Config::$dist = 'your dist url';

//or per instance
$chart->setDist('your dist url');
```

### Dist type
defines the dist-type of the echarts library.
```php
// for all instances
\Hisune\EchartsPHP\Config::$distType = 'common'; // '' or 'common' or 'simple'

//or per instance
$chart->setDistType('common');
```

### Dist Version
defines the dist-version of the echarts library.
```php
// for all instances
\Hisune\EchartsPHP\Config::$version = '4.0.4'; //

//or per instance
$chart->setVersion('4.0.4');
```

### Whether or not load minify js file
if set to true, loads the minified version of echarts library; otherwise the normal version is loaded. 

> if the desired version is not available, nothing will be done. please ensure that the minified/full file exist in the dist-url.
```php
// for all instances
\Hisune\EchartsPHP\Config::$minify = false; // default is true

//or per instance
$chart->setMinify(false);
```

### Render Scripts
controls whether to prepare \<script> tags for charts or not. if set to false, `echarts`-javascript as well as scripts defined using `addExtraScript` will not be automatically loaded when rendering the chart.
 ```php
 // for all instances
\Hisune\EchartsPHP\Config::$renderScript = false; // default is true

//or per instance
$chart->setRenderScript(false);
 ```

### Add extra script from cdn
```php
/**
 * @param $file - is your extra script filename.
 * @Param $dist - is your dist CDN uri - if left empty, value from $chart->getDist() will be used.
 */
$chart->addExtraScript('extension/dataTool.js'); // the second param is your customer dist url
```

### The example for ECharts theme use `addExtraScript`
```php
$chart->addExtraScript('vintage.js', 'http://echarts.baidu.com/asset/theme/');
echo $chart->render('simple-custom-id', array(), 'vintage');
```

### `InitOptions::$devicePixelRatio`
please refer to [opts.devicePixelRatio](https://ecomfe.github.io/echarts-doc/public/en/api.html#echarts.init) for details.

```php
$chart->initOptions->devicePixelRatio = 1;
```

### `InitOptions::$renderer`
please refer to [opts.renderer](https://ecomfe.github.io/echarts-doc/public/en/api.html#echarts.init) for details.

```php
$chart->initOptions->renderer = 'svg'; // 'svg' or 'canvas'
```


### `InitOptions::$width` 
### `InitOptions::$height`
please refer to [opts.width|opts.height](https://ecomfe.github.io/echarts-doc/public/en/api.html#echarts.init) for details.

```php
$chart->initOptions->width = '500px';
$chart->initOptions->height = '300px';
```


### Full Echarts PHPDoc
For more detail visit: https://hisune.com/view/50/echarts-php-property-phpdoc-auto-generate

## Demos

https://demo.hisune.com/echarts-php/

[demo](demo)

All the Echarts live demos present on http://echarts.baidu.com/.

## License
MIT
