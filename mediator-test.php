<?php

include './vendor/autoload.php';
$mediator = new \mediator\Mediator();
$c1 = new \mediator\Colleague1(100,$mediator);
$c2 = new \mediator\Colleague2(50,$mediator);
$mediator->c1 = $c1;
$mediator->c2 = $c2;
echo $c1->num,' ', $c2->num.'<br />';
$c1->notify();
$c2->notify();
echo $c1->num,' ', $c2->num.'<br />';
 