<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/13
 * Time: 17:43
 */

namespace adapter;


class LogToConsole {
    private $_errorObject;

    public function __construct($errorObject) {
        $this->_errorObject = $errorObject;
    }

    public function write(){
        echo $this->_errorObject->getError();
    }
} 