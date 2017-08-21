<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 7:33 PM
 */

use pizzaStore\v2\SimplePizzaFactory;
use pizzaStore\v2\ChicagoCheesePizza;
use pizzaStore\v2\ChicagoPepperoniPizza;
use pizzaStore\v2\ChicagoGreekPizza;

class ChicagoPizzaFactory extends SimplePizzaFactory
{
    function __construct($pizzaType)
    {
        $this->pizzaType = $pizzaType;
    }

    public function createPizza()
    {
        if ($this->pizzaType == 'cheese') {

            return new ChicagoCheesePizza();

        } elseif ($this->pizzaType == 'greek') {

            return new ChicagoGreekPizza();

        } elseif ($this->pizzaType == 'pepperoni') {

            return new ChicagoPepperoniPizza();

        } else {

            echo 'sorry ' . $this->pizzaType . ' pizza is not available at this time';
        }

    }
}