[![Latest Stable Version](https://poser.pugx.org/hisune/Echarts-PHP/v/stable)](https://packagist.org/packages/hisune/Echarts-PHP) 
[![Total Downloads](https://poser.pugx.org/hisune/Echarts-PHP/downloads)](https://packagist.org/packages/hisune/Echarts-PHP) 
[![Latest Unstable Version](https://poser.pugx.org/hisune/Echarts-PHP/v/unstable)](https://packagist.org/packages/hisune/Echarts-PHP) 

Echarts-PHP
=============

Echarts-PHP is a PHP library that works as a wrapper for the **Echarts js** library (https://github.com/ecomfe/echarts). Support echarts version from 2.2.x to 3.x.

Setup
-----

The recommended way to install Echarts-PHP is through  [`Composer`](http://getcomposer.org). Just run the composer command to install it:
```sh
composer require "hisune/echarts-php:~1.0.6"
```

Usage
-----

### Simple

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

### Set option array
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
'backgroundColor' => \Hisune\EchartsPHP\Config::jsExpr('
    new echarts.graphic.RadialGradient(0.5, 0.5, 0.4, [{
        offset: 0,
        color: '#4b5769'
    }, {
        offset: 1,
        color: '#404a59'
    }])
');
```

### Customer attribute
```php
$chart->render('simple-custom-id2', ['style' => 'height: 500px;']);
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
```php
Hisune\EchartsPHP\Config::addExtraScript('extension/dataTool.js'); // the second param is your customer dist url
```

Demos
-----

All the Echarts live demos present on http://echarts.baidu.com/.

For Yii2
-----

https://github.com/hisune/Echarts-PHP/issues/2

(Thx for [@bubifengyun](https://github.com/bubifengyun))

About author
-----
Hisune [lyx](http://hisune.com)

License
-----
MIT
