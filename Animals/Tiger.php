<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/01/2019
 * Time: 11:38
 */
include_once (dirname(__FILE__) . "/../Abstract Class/Animal.php");
class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger: Roarrrrrr!";
    }
}