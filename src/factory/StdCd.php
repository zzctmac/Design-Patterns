<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 11:01
 */
namespace factory;
class StdCd implements Cd{
    public $name;

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    function __construct($name=null)
    {
        $this->name = $name;
    }


    public function getInfo(){
        return $this->name;
    }
} 