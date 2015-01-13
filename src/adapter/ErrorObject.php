<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/13
 * Time: 17:36
 */

namespace adapter;


class ErrorObject {
    private $_error;
    public function __construct($error){
        $this->_error = $error;
    }

    public function getError(){
        return $this->_error;
    }
} 