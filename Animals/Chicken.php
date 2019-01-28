<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/01/2019
 * Time: 11:40
 */
include_once (dirname(__FILE__) . "/../Abstract Class/Animal.php");
include_once (dirname(__FILE__) . "/../InterfaceClass/Edible.php");
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }
    public function howtoEat()
    {
        return "could be fried";
    }
}