Echarts-PHP
=============

Echarts-PHP is a PHP library that works as a wrapper for the **Echarts js** library (https://github.com/ecomfe/echarts).

Setup
-----

The recommended way to install Echarts-PHP is through  [`Composer`](http://getcomposer.org). Just run the composer command to install it:
```sh
composer require "hisune/echarts-php"
```

Usage
-----

### Simple

```php
// The most simple example
use Hisune\EchartsPHP\ECharts;
$chart = new ECharts();
$chart->tooltip->show = true;
$chart->legend->data = array('销量');
$chart->xAxis = array(
    array(
        'type' => 'category',
        'data' => array("衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子")
    )
);
$chart->yAxis = array(
    array('type' => 'value')
);
$chart->series = array(
    array(
        'name' => '销量',
        'type' => 'bar',
        'data' => array(5, 20, 40, 10, 10, 20)
    )
);
echo $chart->render('simple-custom-id');
```

### Javascript function
```php
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

### Customer attribute
```php
$chart->render('simple-custom-id2', ['style' => 'height: 500px;']);
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
