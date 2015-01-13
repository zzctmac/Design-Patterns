<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/13
 * Time: 18:27
 */
use builder\Product;
use builder\ProductBuilder;
include './vendor/autoload.php';

$configs = array(
    'color'=>'ffffff',
    'size'=>18,
    'type'=>'square'
);

$builder = new ProductBuilder($configs);
$product = $builder->build()->getProduct();

var_dump($product);