<?php
/**
 * Created by Hisune.
 * User: Hisune <hi@hisune.com>
 * Date: 2017/3/29
 * Time: 14:47
 *
 * example for php 5.4+
 */
header('Content-Type: text/html; charset=utf-8');
require('../vendor/autoload.php');

use \Hisune\EchartsPHP\ECharts;
use \Hisune\EchartsPHP\Config;
use \Hisune\EchartsPHP\Doc\IDE\Series;

$chart = new ECharts();
$chart->visualMap->min = 0;
$chart->visualMap->max = 100;
$chart->visualMap->text = ['High', 'Low'];
$chart->visualMap->calculable = true;
$chart->visualMap->inRange->color = ['#C843C8', '#441744'];
$chart->tooltip->trigger = 'item';
$chart->tooltip->formatter = '{a}<br>{b}  {c}';

$series = new Series();
$series->name = 'Times';
$series->type = 'map';
$series->map = 'world';
// echart默认是用不规范的英文国家名做映射关系，这里转为标准的ISO3166-1国家短码
$series->nameMap = \Hisune\EchartsPHP\Countries::nameMap();
// 在data中使用ISO3166-1国家短码
$series->data = [
    [
        'name' => 'CN',
        'value' => 100,
    ],
    [
        'name' => 'US',
        'value' => 50,
    ],
    [
        'name' => 'RU',
        'value' => 80,
    ],
    [
        'name' => 'IN',
        'value' => 20,
    ],
    [
        'name' => 'CA',
        'value' => 80,
    ],
    [
        'name' => 'AU',
        'value' => 30,
    ]
];
$series->label->emphasis->show = false;
$series->label->emphasis->textStyle->color = '#fff';
$series->roam = true;
$series->scaleLimit->min = 1;
$series->scaleLimit->max = 5;
$series->itemStyle->normal->borderColor = '#bbb';
$series->itemStyle->normal->areaColor = '#F5F6FA';
$series->itemStyle->emphasis->areaColor = '#441744';
$chart->addSeries($series);

Config::addExtraScript('world.js', 'https://cdn.rawgit.com/hisune/images/7b31b0a0/echarts');
echo $chart->render('map', ['style' => 'height: 500px;']);