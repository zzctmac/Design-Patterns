<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 16:47
 */

namespace proxy;


class Client{

    static function main(){
        $proxy = new ProxyWeather();
        $report = $proxy->display('beijing');
    }
    static function Genericmain(){
        //$proxy = new GenericProxyWeather(new RealWeather());
        //$report = $proxy->display('beijing');
    }
}