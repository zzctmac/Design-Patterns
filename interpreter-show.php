<?php

include './vendor/autoload.php';

$name = 'aaron';
$user = new \interpreter\User($name);
$interpreter = new \interpreter\UserInterpreter();
$interpreter->setUser($user);
print $interpreter->getInterpreted();