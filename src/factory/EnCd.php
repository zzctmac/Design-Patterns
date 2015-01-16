<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 11:02
 */

namespace factory;


class EnCd implements Cd{
    public $name;
    public $time;

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param null $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    function __construct($name=null, $time=null)
    {
        $this->name = $name;
        $this->time = $time;
    }

    public function getInfo()
    {
        return $this->name .'{'.$this->time.'}';
    }
}