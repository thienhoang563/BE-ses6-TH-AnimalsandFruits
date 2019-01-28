<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/01/2019
 * Time: 14:12
 */
include_once (dirname(__FILE__) . "/../Abstract Class/Fruits.php");
class Orange extends Fruits
{
    public function howtoEat()
    {
        return "Orange could be juiced";
    }
}