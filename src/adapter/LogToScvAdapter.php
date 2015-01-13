<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/13
 * Time: 17:52
 */

namespace adapter;


class LogToScvAdapter extends ErrorObject{
    private $_errorNumber, $_errorText;

    public function __construct($error){
        parent::__construct($error);

        $parts = explode(':', $this->getError());
        $this->_errorNumber = $parts[0];
        $this->_errorText = $parts[1];
    }

    public function getErrorNumber(){
        return $this->_errorNumber;
    }

    public function getErrorText(){
        return $this->_errorText;
    }
} 