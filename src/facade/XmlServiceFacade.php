<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 10:38
 */

namespace facade;


class XmlServiceFacade {
    public static function MakeXmlCall(Cd $cd){
        CdUpperCase::makeString($cd, 'title');
        CdUpperCase::makeString($cd, 'band');
        CdUpperCase::makeArray($cd, 'tracks');

        return CdMakeXml::create($cd);
    }
} 