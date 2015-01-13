<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/13
 * Time: 18:22
 */

namespace builder;


class Product {
    protected $_type;
    protected $_size;
    protected $_color;

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->_color = $color;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->_size = $size;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->_type = $type;
    }


} 