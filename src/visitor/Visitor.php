<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 14:32
 */

namespace visitor;


interface Visitor {
    public function visit(Element $element);
} 