<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 10:29
 */

namespace facade;


class Cd {
    public $tracks = array();
    public $band = '';
    public $title = '';

    public function __construct($band, $title, $tracks)
    {
        $this->band = $band;
        $this->title = $title;
        $this->tracks = $tracks;
    }

}