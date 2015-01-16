<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 10:33
 */

namespace facade;


class CdMakeXml {
    public static function create(Cd $cd) {
        $doc = new \DOMDocument();

        $root = $doc->createElement('CD');
        $root = $doc->appendChild($root);

        $title = $doc->createElement('TITLE', $cd->title);
        $title = $root->appendChild($title);

        $band = $doc->createElement('BAND', $cd->band);
        $band = $root->appendChild($band);

        $tracks = $doc->createElement('TRACKS');
        $tracks = $root->appendChild($tracks);

        foreach($cd->tracks as $track){
            $track = $doc->createElement('TRACK', $track);
            $track = $tracks->appendChild($track);
        }

        return $doc->saveXML();

    }
} 