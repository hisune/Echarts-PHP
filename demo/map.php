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

use Hisune\EchartsPHP\ECharts;
use \Hisune\EchartsPHP\Config;
use \Hisune\EchartsPHP\Doc\IDE\Series;

$chart = new ECharts();
$chart->visualMap->min = 0;
$chart->visualMap->max = 100;
$chart->visualMap->text = ['High', 'Low'];
$chart->visualMap->calculable = true;
$chart->visualMap->inRange->color = ['#993399', '#003767'];

$series = new Series();
$series->type = 'map';
$series->map = 'world';
$series->data = [
    [
        'name' => 'China',
        'value' => 100,
    ],
    [
        'name' => 'United States of America',
        'value' => 50,
    ]
];
$series->label->emphasis->textStyle->color = '#fff';
$series->roam = true;
$series->scaleLimit->min = 1;
$series->scaleLimit->max = 5;
$series->itemStyle->normal->borderColor = '#F2EFF4';
$series->itemStyle->normal->areaColor = '#993399';
$series->itemStyle->emphasis->areaColor = '#993399';
$chart->addSeries($series);

Config::addExtraScript('world.js', 'http://echarts.baidu.com/asset/map/js/');
echo $chart->render('map');