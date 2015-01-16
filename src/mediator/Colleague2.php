<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 14:23
 */

namespace mediator;


class Colleague2 extends Colleague{

    public function notify()
    {
        $this->m->actionByC2(-10);
    }
}