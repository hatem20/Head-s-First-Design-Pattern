<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 7:28 PM
 */

namespace pizzaStore\v2;

class ChicagoCheesePizza extends Pizza
{
    function __construct()
    {
        $this->name = 'Chicago Cheese Pizza';
        $this->sauce = 'marinara sauce with pepper';
        $this->dough = 'thick crust dough';
        $this->toppings = ['chreded mozzarila cheese', 'Pineapple'];
    }

    public function getName()
    {
        return $this->name;
    }
}