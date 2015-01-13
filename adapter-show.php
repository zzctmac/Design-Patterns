<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/13
 * Time: 17:40
 */
use adapter\ErrorObject;
use adapter\LogToConsole;
use adapter\LogToScvAdapter;
use adapter\LogToScv;
include './vendor/autoload.php';

$error_object = new ErrorObject('404:Not Found');
$log = new LogToConsole($error_object);
$log->write();

$error_object_adapter = new LogToScvAdapter('404:Not Found');
$log_scv = new LogToScv($error_object_adapter);
$log_scv->write();