<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 13:58
 */
namespace strategy;
class Cd {
    private $name;
    private $band;
    private $strategy;
    public function __construct($band, $name)
    {
        $this->band = $band;
        $this->name = $name;
    }

    /**
     * @param mixed $strategy
     */
    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function get(){
        return $this->strategy->get($this);
    }

    public function __get($name)
    {
        if(isset($this->$name))
            return $this->name;
        return false;
    }


} 