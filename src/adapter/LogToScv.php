<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/13
 * Time: 17:50
 */

namespace adapter;


class LogToScv {
    private $_errorObject;

    public function __construct(ErrorObject $errorObject){
        $this->_errorObject = $errorObject;
    }

    public function write(){
        echo '<h1>'.$this->_errorObject->getErrorNumber().'</h1>';
        echo ':' . $this->_errorObject->getErrorText();
    }
} 