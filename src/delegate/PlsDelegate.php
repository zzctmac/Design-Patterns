<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 14:41
 */

namespace delegate;


class PlsDelegate {
    public function getPlayList($_song){
        $pls = "{playlist}<br />NumberOfEntries=" . count($_song) ."<br /><br />";
        foreach($_song as $k => $song){
            $counter = $k + 1;
            $pls .= "File{$counter}={$song['location']}<br />";
            $pls .= "Title{$counter}={$song['title']}<br />";
            $pls .= "Length{$counter}=-1<br /><br />";
        }
        return $pls;
    }
} 