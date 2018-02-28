<?php
/**
 * Created by PhpStorm.
 * User: Hisune <hi@hisune.com>
 * Date: 2017/3/23
 * Time: 11:30
 *
 * Auto generate PHPDoc for Echarts-PHP from option.json
 */

namespace Hisune\EchartsPHP\Doc;

if (!php_sapi_name() == 'cli') {
    exit('Not in cli mode.');
}

class AutoGenerate
{

    public $optionJson = [
        'cn' => 'http://echarts.baidu.com/documents/cn/option.json',
        'en' => 'https://ecomfe.github.io/echarts-doc/public/en/documents/en/option.json',
    ];

    protected $language;

    protected $dir = __DIR__ . '/IDE';

    private $anyOf = [];

    public function __construct($language = 'en')
    {
        $this->delTree($this->dir);
        $this->setLanguage($language);
    }

    private function delTree($dir) {
        $files = array_diff(scandir($dir), array('.','..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file") && !is_link($dir)) ? $this->delTree("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        if(!isset($this->optionJson[$language])){
            throw new \Exception('Not found language option setting: ' . $language);
        }else{
            $this->language = $language;
        }
        echo "init as {$this->language}\n";
    }

    public function generate()
    {
        $url = $this->optionJson[$this->language];
        echo "start generate\n";
        try{
            echo "get json from {$url}\n";
            $json = json_decode(file_get_contents($url), true);

            if($json && is_array($json) && isset($json['option']['properties'])){
                echo "start auto generate PHPDoc\n";
                $this->_properties($json['option']['properties']);
            }else{
                throw new \Exception('Unknown option format.');
            }
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    protected function _properties($properties, $dir = '')
    {
        if(!$dir){
            echo "/**\n * Class ECharts\n * Created by Hisune EchartsPHP AutoGenerate.\n * @package Hisune\\EchartsPHP\n * \n";
        }

        foreach($properties as $top => $property){
            if(!preg_match('/^[A-Za-z]+$/', $top)) continue; // option.json mistake

            $classPropertyString = '';
            $top = ucfirst($top);

            if(isset($property['items']['anyOf']) && $property['items']['anyOf']){
                foreach ($property['items']['anyOf'] as $any){
                    if(isset($any['properties'])){
                        foreach ($any['properties'] as $classPropertyName => $classProperty){
                            $anyOfKey = $dir . '/' . $top . '/' . $classPropertyName;
                            if(!isset($this->anyOf[$anyOfKey])){
                                $classPropertyString .= $this->_propertyTemplate($classPropertyName, $classProperty, $top, $dir);
                                $this->anyOf[$anyOfKey] = true;
                            }
                        }
                        $this->_properties($any['properties'], $dir . '/' . $top);
                    }
                }
            }elseif(isset($property['properties'])){
                foreach ($property['properties'] as $classPropertyName => $classProperty){
                    $classPropertyString .= $this->_propertyTemplate($classPropertyName, $classProperty, $top, $dir);
                }
                $this->_properties($property['properties'], $dir . '/' . $top);
            }

            $dirToWrite = $this->dir . $dir;
            if($classPropertyString){
                if(!file_exists($dirToWrite)){
                    mkdir($dirToWrite, 0700, true);
                }
                $fileToWrite = $dirToWrite . '/' . $top . '.php';
                if(file_exists($fileToWrite)){
                    file_put_contents($fileToWrite, str_replace('{_more_}', $classPropertyString . ' * {_more_}', file_get_contents($fileToWrite)));
                }else{
                    file_put_contents($fileToWrite, $this->_classTemplate($top, $dir, $classPropertyString));
                }
            }

            // 输出ECharts类的property doc
            if(!$dir){
                $description = isset($property['descriptionCN']) ? $this->_replaceDescription($property['descriptionCN'], false) . "\n *" : '';
                if(file_exists($dirToWrite . '/' . $top . '.php')){
                    echo " * @property Doc\\IDE\\{$top} \$" . lcfirst($top) . "\n *   " . $description . "\n";
                }else{
                    echo " * @property callable \$" . lcfirst($top) . "\n *   " . $description . "\n";
                }
            }
        }

        if(!$dir){
            echo " */\n";
        }
    }

    protected function _classTemplate($name, $dir = '', $property = '')
    {
        $namespace = str_replace('/', '\\', $dir);

        return <<<PHP
<?php
/**
 * Created by Hisune EchartsPHP AutoGenerate.
 * @author: Hisune <hi@hisune.com>
 */

namespace Hisune\EchartsPHP\Doc\IDE{$namespace};

use Hisune\EchartsPHP\Property;

/**
{$property} * {_more_}
 */
class {$name} extends Property {}
PHP;
    }

    protected function _propertyTemplate($name, $detail, $top, $dir)
    {
        if(isset($detail['default'])){
            if(($detail['type'] == 'boolean' || in_array('boolean', $detail['type'])) && ($detail['default'] === true || $detail['default'] === false)){
                $default = " Default: " . ($detail['default'] ? 'true' : 'false') . "\n";
            }elseif(($detail['type'] == 'number' || in_array('number', $detail['type'])) && is_numeric($detail['default'])){
                $default = " Default: " . $detail['default'] . "\n";
            }else{
                $default = " Default: '" . str_replace("'", "\\'", trim($detail['default'], "'")) . "'\n";
            }
        }else{
            $default = "\n";
        }

        $detail['descriptionCN'] = isset($detail['descriptionCN']) ? $this->_replaceDescription($detail['descriptionCN'], true, 0, 4) : '';

        if(isset($detail['type'])){
            if(!isset($detail['properties'])){
                if(is_array($detail['type'])){
                    foreach ($detail['type'] as $k => $v){
                        $detail['type'][$k] = $this->_replacePropertyType($v);
                    }
                }else if(is_string($detail['type'])){
                    $detail['type'] = $this->_replacePropertyType($detail['type']);
                }
                $line = $this->_propertyLine((is_array($detail['type']) ? implode('|', $detail['type']) : $detail['type']), $name, $default, $detail['descriptionCN'], $top, $dir);
            }else{
                $line = $this->_propertyLine(ltrim(str_replace('/', '\\', $top) . '\\' . ucfirst($name), '\\'), $name, $default, $detail['descriptionCN'], $top, $dir);
            }
        }else{
            $line = $this->_propertyLine('mixed', $name, $default, $detail['descriptionCN'], $top, $dir);
        }

        return $line;

    }

    private function _propertyLine($type, $name, $default, $description, $top, $dir)
    {
        if($dir){
            $file = $this->dir . $dir . '/' . $top . '.php';
            if(file_exists($file)){
                $contents = file_get_contents($file);
                if(strpos($contents, ' $' . $name . ' ') > 0){
                    return '';
                }
            }
        }
        return sprintf(" * @property %s $%s%s *    %s\n *\n", $type, $name, $default, $description);
    }

    protected function _replacePropertyType($type)
    {
        $type = strtolower($type);
        switch ($type){
            case 'numbr': // option.json mistake
            case 'number':
                $type = 'int';
                break;
            case 'object':
            case 'array':
                $type = 'array';
                break;
            case 'date':
            case 'color':
                $type = 'string';
                break;
            case 'function':
                $type = 'callable';
                break;
        }

        return $type;
    }

    protected function _replaceDescription($description, $multiLine = true, $leftPad = 4, $rightPad = 0)
    {
        if($multiLine){
            return str_replace("\n", "\n" . str_repeat(' ', $leftPad) . " * " . str_repeat(' ', $rightPad), rtrim(str_replace(["&quot;", '&#39;', '/*', '*/'], '', strip_tags($description))));
        }else{
            $explode = explode("\n", $description);
            return rtrim(str_replace(["&quot;", '&#39;', '/*', '*/'], '', strip_tags($explode[0])));
        }
    }

}

$autoGenerate = new AutoGenerate(isset($argv[1]) ? $argv[1] : 'en');
$autoGenerate->generate();