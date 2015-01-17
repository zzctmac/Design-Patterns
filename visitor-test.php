<?php

include './vendor/autoload.php';

$cd = new \visitor\Cd('sony', 'video game');
$cdreader = new \visitor\CdReader();
$cd->accept($cdreader);
 