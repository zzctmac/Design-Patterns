<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 11:01
 */

namespace single;


class Conn {
    protected static $ins = null;

    public static function getIns(){
        if(!self::$ins instanceof self) {
            self::$ins = new self;
        }
        return self::$ins;
    }

    protected function __construct() {
        echo "single exist";
    }

} 