<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 14:21
 */

namespace mediator;


abstract class Colleague {
    public $num;
    public $m;

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    public function __construct($num, Mediator $m)
    {
        $this->num = $num;
        $this->m = $m;
    }

    public abstract function notify();
} 