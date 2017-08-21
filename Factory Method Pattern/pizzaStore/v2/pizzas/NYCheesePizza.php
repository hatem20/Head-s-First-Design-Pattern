<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 4:26 PM
 */

namespace pizzaStore\v2;
use pizzaStore\v2\Pizza;

class NYCheesePizza extends Pizza
{
    function __construct()
    {
        $this->name = 'New York Cheese Pizza';
        $this->sauce = 'marinara sauce';
        $this->dough = 'thin crust dough';
        $this->toppings = ['chreded mozzarila cheese', 'Broccoli', 'Pineapple'];
    }

    public function getName()
    {
        return $this->name;
    }
}