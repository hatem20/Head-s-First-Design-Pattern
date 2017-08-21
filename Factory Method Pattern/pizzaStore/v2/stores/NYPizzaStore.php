<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 7:14 PM
 */

use pizzaStore\v2\PizzaStore;
use pizzaStore\v2\NYCheesePizza;
use pizzaStore\v2\NYGreekPizza;
use pizzaStore\v2\NYPepperoniPizza;

class NYPizzaStore extends pizzaStore
{
    function createPizza($pizzaType)
    {
        if($pizzaType == 'cheese'){

            return new NYCheesePizza();
        }

        elseif($pizzaType == 'greek'){

            return new NYGreekPizza();
        }

        elseif($pizzaType == 'pepperoni'){

            return new NYPepperoniPizza();
        }

        else{

            echo 'sorry ' . $pizzaType .' pizza is not available at this time';
        }
    }
}