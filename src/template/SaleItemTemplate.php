<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 14:15
 */

namespace template;


abstract class SaleItemTemplate {
    public $price = 0;
    public final function setPriceAdjustments() {
        $this->price += $this->oversizeAddition();
        $this->price += $this->taxAddition();
    }

    public function oversizeAddition() {
        return 0;
    }

    abstract protected function taxAddition();
} 