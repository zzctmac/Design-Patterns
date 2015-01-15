<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 9:27
 */

namespace decorator;


class CondimentDecorator extends Beverage{
    public $_beverage;

    public function __construct(Beverage $beverage){
        $this->_beverage = $beverage;
    }

    public function cost()
    {
        return $this->_beverage->cost();
    }
}