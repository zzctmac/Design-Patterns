<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/13
 * Time: 18:24
 */

namespace builder;


class ProductBuilder {
    protected $_product;
    protected $_configs ;

    public function __construct($configs){
        $this->_product = new Product();
        $this->_configs = $configs;
    }

    public function build(){
        $this->_product->setColor($this->_configs['color']);
        $this->_product->setType($this->_configs['type']);
        $this->_product->setSize($this->_configs['size']);
        return $this;
    }

    public function getProduct(){
        return $this->_product;
    }


} 