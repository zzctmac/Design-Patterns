<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 16:46
 *
 * 由于众所周知的原因
 */

namespace proxy;


class RealWeather implements Weather
{
    protected $_url = 'http://www.google.com/ig/api?&oe=utf-8&hl=zh-cn&weather=';
    protected $_weatherXml = '' ;
    function __construct(){

    }

    public function request($city){
        $this->_weatherXml = file_get_contents($this->_url . $city );
    }
    public function display($city ){
        if ($this->_weatherXml == '') {
            $this->request($city);
        }
        //$this->_weatherXml = mb_convert_encoding($this->_weatherXml, 'UTF-8', 'GB2312');
        $weatherxml = simplexml_load_string($this->_weatherXml);
        $low = intval($weatherxml->weather->forecast_conditions[0]->low->attributes());
        $high = $weatherxml->weather->forecast_conditions[0]->high->attributes();
        $icon= 'http://www.google.com'. $weatherxml->weather->forecast_conditions[0]->icon->attributes();
        $condition=$weatherxml->weather->forecast_conditions[0]->condition->attributes();
        $weather = date('Y年n月j日').'  天气预报：<span class="cor_ff6c00 f_bold">'.$city_names[$city].' </span>  <img class="v_middle" src="'.$icon.'" alt="'.$condition.'" width="16" height="17" align="absmiddle" /> <span class="f_bold"></span>：    '.$low.'°C ~ '.$high.'°C '.$condition;
        echo  $weather;
    }

    public function isValidCity($city){

    }

}