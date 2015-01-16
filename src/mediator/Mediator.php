<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 14:24
 */

namespace mediator;


class Mediator {
    public $c1;
    public $c2;



    public function actionByC1($num){
        $this->c2->num += $num;
    }
    public function actionByC2($num){
        $this->c1->num += $num;
    }
} 