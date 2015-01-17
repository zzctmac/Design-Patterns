<?php
use template\Cd;
include './vendor/autoload.php';

$cd = new Cd();
$cd->price = 5;
$cd->setPriceAdjustments();
echo $cd->price;

 