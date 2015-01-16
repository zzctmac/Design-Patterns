<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 10:31
 */

namespace facade;


class CdUpperCase {
    public static function makeString(Cd $cd , $type){
        $cd->$type = strtoupper($cd->$type);
    }

    public static function makeArray(Cd $cd, $type){
        $cd->$type = array_map('strtoupper', $cd->$type);
    }
} 