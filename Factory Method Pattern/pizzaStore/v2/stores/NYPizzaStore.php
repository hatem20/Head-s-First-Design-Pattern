<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 7:14 PM
 */

use pizzaStore\v2\PizzaStore;

class NYPizzaStore extends pizzaStore
{
    function createPizza($pizzaType)
    {
        $nyfactory = new NYPizzaFactory($pizzaType);

        $pizza = $nyfactory->createPizza();

        return $pizza;
    }
}