<?php
/**
 * Created by Hisune.
 * User: hi@hisune.com
 * Date: 2018/2/27
 * Time: 19:13
 * 通用方法举例，双折线
 */
header('Content-Type: text/html; charset=utf-8');
require('../vendor/autoload.php');

function chartLine($xAxisData, $seriesData, $title = '')
{
    $chart = new Hisune\EchartsPHP\ECharts();
    $xAxis = new Hisune\EchartsPHP\Doc\IDE\XAxis();
    $yAxis = new Hisune\EchartsPHP\Doc\IDE\YAxis();

    $color = ['#c23531','#2f4554', '#61a0a8', '#d48265', '#91c7ae','#749f83',  '#ca8622', '#bda29a','#6e7074', '#546570', '#c4ccd3'];
    shuffle($color);

    $title && $chart->title->text = $title;
    $chart->color = $color;
    $chart->tooltip->trigger = 'axis';
    $chart->toolbox->show = true;
    $chart->toolbox->feature->dataZoom->yAxisIndex = 'none';
    $chart->toolbox->feature->dataView->readOnly = false;
    $chart->toolbox->feature->magicType->type = ['line', 'bar'];
    $chart->toolbox->feature->saveAsImage = [];

    $xAxis->type = 'category';
    $xAxis->boundaryGap = false;
    $xAxis->data = $xAxisData;

    foreach($seriesData as $ser){
        $chart->legend->data[] = $ser['name'];
        $series = new \Hisune\EchartsPHP\Doc\IDE\Series();
        $series->name = $ser['name'];
        $series->type = isset($ser['type']) ?: 'line';
        $series->data = $ser['data'];
        $chart->addSeries($series);
    }

    $chart->addXAxis($xAxis);
    $chart->addYAxis($yAxis);

    return $chart->render(uniqid());
}

echo chartLine(
    ['2018-01-01','2018-01-02','2018-01-03','2018-01-04','2018-01-05','2018-01-06','2018-01-07','2018-01-08','2018-01-09','2018-01-10'],
    [
        ['name' => '数据1', 'data' => [99,102,20,235,112,675,76,24,657,32]],
        ['name' => '数据2', 'data' => [199,202,30,335,212,575,176,124,457,132]],
    ],
    '测试数据'
);