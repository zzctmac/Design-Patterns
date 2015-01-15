<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 14:40
 */

namespace delegate;


class M3uDelegate {
    public function getPlayList($_song){
        $m3u = "#EXTM3U<br /><br />";

        foreach($_song as $song) {
            $m3u .= "#EXTINF:-1,{$song['title']}<br />";
            $m3u .= "{$song['location']}<br />";
        }
        return $m3u;
    }
} 