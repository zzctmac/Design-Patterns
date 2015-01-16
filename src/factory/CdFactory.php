<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 11:04
 */

namespace factory;


class CdFactory {
    public static function generateCd($type){
        $type = "factory\\".ucfirst($type).'Cd';
        $cd = new $type();
        return $cd;

    }
} 