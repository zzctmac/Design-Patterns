<?php

include './vendor/autoload.php';

$type = 'en';

$cd = \factory\CdFactory::generateCd($type);

$cd->setTime("3:50s");
$cd->setName("Video Games");

echo $cd->getInfo();
 