<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 4:26 PM
 */

namespace pizzaStore\v1;
use pizzaStore\v1\Pizza;

class CheesePizza extends Pizza
{
    function __construct()
    {
        $this->name = 'Cheese Pizza';
        $this->sauce = 'marinara sauce';
        $this->dough = 'thin crust dough';
        $this->toppings = ['chreded mozzarila cheese', 'Broccoli', 'Pineapple'];
    }

    public function getName()
    {
        return $this->name;
    }
}