<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/15
 * Time: 14:37
 */

namespace delegate;


class NewPlaylist {
    private $_song;
    private $_typeObject;

    public function __construct($type)
    {
        $this->_song = array();
        $object = "delegate\\{$type}Delegate";
        $this->_typeObject = new $object;
    }

    public function addSong($location, $title){
        $song = array('location'=>$location, 'title'=>$title);
        $this->_song[] = $song;
    }

    public function getPlayList() {
        $playlist = $this->_typeObject->getPlayList($this->_song);
        return $playlist;
    }


} 