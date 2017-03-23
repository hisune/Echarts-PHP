<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE\Toolbox\Feature;

class DataView
{            
        
    /**
     * @var boolean Whether to show the tool.
     */
    public $show = true;        
        
    /**
     * @var boolean 
     */
    public $title = 'data view';        
        
    /**
     * @var * Path string for icon. In ECharts 3, user-defined svg path is supported to be used as icon, whose format could be refered at SVG PathData. It could be edited and exported from some graphic tools such as Adobe Illustrator.
     */
    public $icon;        
        
    /**
     * @var DataView\IconStyle The style setting of data view icon.
     */
    public $iconStyle;        
        
    /**
     * @var boolean Whether it is read-only.
     */
    public $readOnly = false;        
        
    /**
     * @var callable (option:Object) =&gt; HTMLDomElement|string
     * 
     * Define a function to present dataView. It is used to replace default textarea for richer data editing. It can return a DOM object, or an HTML string.
     * For example:
     * optionToContent: function(opt) {
     *     var axisData = opt.xAxis[0].data;
     *     var series = opt.series;
     *     var table = &lt;table style=width:100%;text-align:center&gt;&lt;tbody&gt;&lt;tr&gt;
     *                  + &lt;td&gt;Time:&lt;/td&gt;
     *                  + &lt;td&gt; + series[0].name + &lt;/td&gt;
     *                  + &lt;td&gt; + series[1].name + &lt;/td&gt;
     *                  + &lt;/tr&gt;;
     *     for (var i = 0, l = axisData.length; i &lt; l; i++) {
     *         table += &lt;tr&gt;
     *                  + &lt;td&gt; + axisData[i] + &lt;/td&gt;
     *                  + &lt;td&gt; + series[0].data[i] + &lt;/td&gt;
     *                  + &lt;td&gt; + series[1].data[i] + &lt;/td&gt;
     *                  + &lt;/tr&gt;;
     *     }
     *     table += &lt;/tbody&gt;&lt;/table&gt;;
     *     return table;
     * }
     */
    public $optionToContent;        
        
    /**
     * @var callable (container:HTMLDomElement, option:Object) =&gt; Object
     * 
     * When optionToContent is used, if you want to support refreshing chart after data changes, you need to implement the logic to merge options in this function.
     */
    public $contentToOption;        
        
    /**
     * @var array There are 3 names in data view, which are [data view, turn off and refresh].
     */
    public $lang = '[\'data view\', \'turn off\', \'refresh\']';        
        
    /**
     * @var string Background color of the floating layer in data view.
     */
    public $backgroundColor = '#fff';        
        
    /**
     * @var string Background color of input area of the floating layer in data view.
     */
    public $textareaColor = '#fff';        
        
    /**
     * @var string Border color of input area of the floating layer in data view.
     */
    public $textareaBorderColor = '#333';        
        
    /**
     * @var string Text color.
     */
    public $textColor = '#000';        
        
    /**
     * @var string Button color.
     */
    public $buttonColor = '#c23531';        
        
    /**
     * @var string Color of button text.
     */
    public $buttonTextColor = '#fff';

}