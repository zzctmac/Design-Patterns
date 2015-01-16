<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/16
 * Time: 15:00
 */

namespace observer;


class BuyObserver implements Observer{

    public function update(Cd $cd)
    {
        $activity = "The CD named {$cd->title} by ";
        $activity .= "{$cd->band} ws just purchased. ";
        ActivityStream::addNewItem($activity);
    }
}