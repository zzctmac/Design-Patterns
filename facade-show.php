<?php
header('Content-Type:text/xml;charset=utf-8');
include './vendor/autoload.php';

$tracks = array('Make It Means', 'Brrr', 'GoodBye');
$title = 'Waste of a Rib';
$band = 'Never Again';
$cd = new \facade\Cd($band, $title, $tracks);

print \facade\XmlServiceFacade::MakeXmlCall($cd);
 