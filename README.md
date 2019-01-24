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
    - [on(string $event, string $callback)](#events-for-3x) 
  - Class: Config
    - [jsExpr(string $string)](#javascript-function)
    - [eventMethod(string $name)](#events-for-3x)
    - [addExtraScript(string $file, [string] $dist = null)](#add-extra-script-from-cdn)
    - [$dist](#customer-dist)
    - [$distType](#dist-type)
    - [$minify](#whether-or-not-load-minify-js-file)
    - $renderScript
    - $version
  - [Theme](#the-example-for-echarts-theme-use-addextrascript)
  - [PHPDoc for property](#full-echarts-phpdoc)
    
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
`string Config::jsExpr(string $string)`
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
'backgroundColor' => Config::jsExpr('
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
`string ECharts::render(string $id, [array] $attribute = [], [string] $theme = null)`
 - Param `id` is your html dom ID.
 - Param `attribute` is your html dom attribute.
 - Param `theme` is your ECharts theme.
 - Return html string.
```php
$chart->render('simple-custom-id2', array('style' => 'height: 500px;'));
```

### Events (for 3.x+)
`void ECharts::on(string $event, string $callback)`
 - Param `event` is event name, available: `click`, `dblclick`, `mousedown`, `mousemove`, `mouseup`, `mouseover`, `mouseout`
 - Param `callback` is event callback.

`string Config::eventMethod(string $name)`
 - Param `name` is your js function name which to be run in event callback.
 - Return js string, eg: Config::eventMethod('test') => test(params);
```php
use \Hisune\EchartsPHP\Config;
// Recommend standard
$chart->on('click', Config::eventMethod('console.log'));
// Or write js directly
$chart->on('mousedown', 'console.log(params);');
```

### Customer dist
```php
Hisune\EchartsPHP\Config::$dist = 'your dist url';
```

### Dist type
```php
\Hisune\EchartsPHP\Config::$distType = 'common'; // '' or 'common' or 'simple'
```

### Whether or not load minify js file
```php
\Hisune\EchartsPHP\Config::$minify = false; // default is true
```

### Add extra script from cdn
`string Config::addExtraScript(string $file, [string] $dist = null)`
 - Param `file` is your extra script filename.
 - Param `dist` is your dist CDN uri.
```php
Hisune\EchartsPHP\Config::addExtraScript('extension/dataTool.js'); // the second param is your customer dist url
```
### The example for ECharts theme use `addExtraScript`
```php
use \Hisune\EchartsPHP\Config;
Config::addExtraScript('vintage.js', 'http://echarts.baidu.com/asset/theme/');
echo $chart->render('simple-custom-id', array(), 'vintage');
```

### Full Echarts PHPDoc
For more detail visit: https://hisune.com/view/50/echarts-php-property-phpdoc-auto-generate

## Demos

https://demo.hisune.com/echarts-php/

[demo](demo)

All the Echarts live demos present on http://echarts.baidu.com/.

## License
MIT
