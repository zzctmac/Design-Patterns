<?php
header('Content-Type:text/json;charset=utf-8');
include './vendor/autoload.php';

$cd = new \strategy\Cd('sony', 'video game');
$strategy = new \strategy\JsonStrategy();
$cd->setStrategy($strategy);
echo $cd->get();
 