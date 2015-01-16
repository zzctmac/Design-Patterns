<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 11:43
 */

namespace interpreter;


class UserCd {
    protected $user = null;

    public function __construct($user){
        $this->user = $user;
    }

    public function getTitle(){
        return "Waste of a Rib";
    }

} 