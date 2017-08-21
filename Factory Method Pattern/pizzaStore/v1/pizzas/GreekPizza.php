<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 4:30 PM
 */

namespace pizzaStore\v1;
use pizzaStore\v1\Pizza;

class GreekPizza extends Pizza
{
    function __construct()
    {
        $this->name = 'Greek Pizza';
        $this->sauce = 'Salsa sauce';
        $this->dough = 'soft dough';
        $this->toppings = ['Jalapeno Peppers', 'Kalamata Olives'];
    }

    public function getName()
    {
        return $this->name;
    }
}