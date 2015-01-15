<?php
include './vendor/autoload.php';
//normal type (if..else..)
$playlist = new \delegate\Playlist();

$playlist->addSong('/usr/local/php/goodbye.mp3', 'GoodBye');
$type = 'pls';
if($type == 'pls'){
    echo $playlist->getPLS();
}
else {
    echo $playlist->getM3U();
}

// delegate way

$newplaylist = new \delegate\NewPlaylist('M3u');

$newplaylist->addSong('/usr/local/php/goodbye1.mp3', 'GoodBye');
$newplaylist->addSong('/usr/local/php/video game.mp3', 'Video Game');

echo $newplaylist->getPlayList();
 