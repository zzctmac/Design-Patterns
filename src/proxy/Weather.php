<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 16:46
 */

namespace proxy;


interface Weather
{
    public function request($city);
    public function display($city);
    public function isValidCity($city);

}