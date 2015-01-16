<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 11:37
 */

namespace interpreter;


class User {
    protected $username = '';

    public function __construct($username) {
        $this->username = $username;
    }

    public function getProfilePage() {
        $profile = "<h2> I like Never Again</h2>";
        $profile .= "<h2> I love all of their songs. My Favorite CD:</h2>";
        $profile .= "{{myCd.getTitle}}";

        return $profile;
    }

} 