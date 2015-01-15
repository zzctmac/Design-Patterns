<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 9:27
 */

namespace decorator;


class CondimentDecorator extends Coffee{
    public $_beverage;

    public function __construct(Beverage $beverage){
        $this->_beverage = $beverage;
    }

} 