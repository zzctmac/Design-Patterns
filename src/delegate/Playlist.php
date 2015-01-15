<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 14:23
 */

namespace delegate;


class Playlist {
    private $_song;

    public function __construct(){
        $this->_song = array();
    }

    public function addSong($location, $title){
        $song = array('location'=>$location, 'title'=>$title);
        $this->_song[] = $song;
    }

    public function getM3U(){
        $m3u = "#EXTM3U<br /><br />";

        foreach($this->_song as $song) {
            $m3u .= "#EXTINF:-1,{$song['title']}<br />";
            $m3u .= "{$song['location']}<br />";
        }
        return $m3u;
    }

    public function getPLS(){
        $pls = "{playlist}<br />NumberOfEntries=" . count($this->_song) ."<br /><br />";
        foreach($this->_song as $k => $song){
            $counter = $k + 1;
            $pls .= "File{$counter}={$song['location']}<br />";
            $pls .= "Title{$counter}={$song['title']}<br />";
            $pls .= "Length{$counter}=-1<br /><br />";
        }
        return $pls;
    }
} 