<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 14:19
 */

namespace template;


class Cd extends SaleItemTemplate{

    protected function taxAddition()
    {
        return round($this->price * 0.05, 2);
    }
}