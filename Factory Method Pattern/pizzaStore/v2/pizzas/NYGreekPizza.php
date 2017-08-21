<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 4:30 PM
 */

namespace pizzaStore\v2;
use pizzaStore\v2\Pizza;

class NYGreekPizza extends Pizza
{
    function __construct()
    {
        $this->name = 'NY Greek Pizza';
        $this->sauce = 'Salsa sauce';
        $this->dough = 'soft dough';
        $this->toppings = ['Jalapeno Peppers', 'Kalamata Olives'];
    }

    public function getName()
    {
        return $this->name;
    }
}