<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 14:33
 */

namespace visitor;


class CdReader implements Visitor{


    public function visit(Element $element)
    {
        echo $element->name .',' . $element->band;
    }
}