<?php

include './vendor/autoload.php';

$title = "Waste of a Rib";
$band = "Never Again";
$cd = new \observer\Cd($title, $band);
$observer = new \observer\BuyObserver();
$cd->attachObserver('purchased', $observer);
$cd->buy();
 