<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 14:32
 */

namespace visitor;


class Cd implements Element{
    public $name;
    public $band;

    function __construct($band, $name)
    {
        $this->band = $band;
        $this->name = $name;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visit($this);
    }
}