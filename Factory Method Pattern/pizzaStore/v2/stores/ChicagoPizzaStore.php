<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 7:15 PM
 */

use pizzaStore\v2\PizzaStore;
use pizzaStore\v2\ChicagoCheesePizza;
use pizzaStore\v2\ChicagoGreekPizza;
use pizzaStore\v2\ChicagoPepperoniPizza;

class ChicagoPizzaStore extends PizzaStore
{
    function createPizza($pizzaType)
    {
        if ($pizzaType == 'cheese') {

            return new ChicagoCheesePizza();

        } elseif ($pizzaType == 'greek') {

            return new ChicagoGreekPizza();

        } elseif ($pizzaType == 'pepperoni') {

            return new ChicagoPepperoniPizza();

        } else {

            echo 'sorry ' . $pizzaType . ' pizza is not available at this time';
        }
    }
}