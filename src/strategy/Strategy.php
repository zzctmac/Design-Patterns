<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 14:00
 */

namespace strategy;


abstract class Strategy {
    abstract public function get(Cd $cd);
} 