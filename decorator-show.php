<?php
use decorator\Coffee;
use decorator\Suger;
include './vendor/autoload.php';

$coffee = new Coffee();

$suger = new Suger($coffee);

echo $suger->cost();
 