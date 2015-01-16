<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 11:44
 */

namespace interpreter;


class UserInterpreter {
    protected $user = null;

    /**
     * @param null $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getInterpreted() {
        $profile = $this->user->getProfilePage();

        if(preg_match_all('/\{\{myCd\.(.*?)\}\}/', $profile,$triggers, PREG_SET_ORDER)) {
            foreach($triggers as $trigger) {
                $replaces[] = $trigger[1];
            }

            $replaces = array_unique($replaces);
            $myCd = new UserCd($this->user);
            foreach($replaces as $replace) {
                $profile = str_replace("{{myCd.{$replace}}}", call_user_func(array($myCd, $replace)), $profile);
            }
        }
        return $profile;
    }

} 