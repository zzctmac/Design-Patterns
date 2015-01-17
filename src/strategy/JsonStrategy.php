<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 14:01
 */

namespace strategy;


class JsonStrategy extends Strategy{

    public function get(Cd $cd)
    {
        $arr = array();
        $arr['CD']['name'] = $cd->name;
        $arr['CD']['band'] = $cd->band;
        return json_encode($arr);
    }
}