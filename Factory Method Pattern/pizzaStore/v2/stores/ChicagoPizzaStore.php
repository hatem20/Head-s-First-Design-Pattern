<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 7:15 PM
 */

use pizzaStore\v2\PizzaStore;

class ChicagoPizzaStore extends PizzaStore
{
    function createPizza($pizzaType)
    {
        $chicagofactory = new ChicagoPizzaFactory($pizzaType);

        $pizza = $chicagofactory->createPizza();

        return $pizza;
    }
}