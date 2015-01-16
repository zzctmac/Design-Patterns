<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 16:47
 */

namespace proxy;


class ProxyWeather  implements Weather {
    private $_client ;
    private function client() {
        if (! $this->_client instanceof RealWeather) {
            $this->_client = new RealWeather();
        }
        return $this->_client;

    }
    public function request($city){
        $this->_client()->request($city);
    }

    public function isValidCity($city) {
        return $this->_client()->isValidCity($city);
    }


    public function display($city) {
        return $this->client()->display($city);
    }
}