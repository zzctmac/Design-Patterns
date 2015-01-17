<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/17
 * Time: 14:31
 */

namespace visitor;


interface Element {
    public function accept(Visitor $visitor);
} 