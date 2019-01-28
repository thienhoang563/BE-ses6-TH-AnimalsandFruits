<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/01/2019
 * Time: 13:58
 */
include_once (dirname(__FILE__) . "/../Abstract Class/Fruits.php");

class Apple extends Fruits
{
    public function howtoEat()
    {
        return "Apple could be slided";
    }
}