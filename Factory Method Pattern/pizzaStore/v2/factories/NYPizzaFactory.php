<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 7:23 PM
 */

use pizzaStore\v2\SimplePizzaFactory;
use pizzaStore\v2\NYCheesePizza;
use pizzaStore\v2\NYGreekPizza;
use pizzaStore\v2\NYPepperoniPizza;

class NYPizzaFactory extends SimplePizzaFactory
{
    function __construct($pizzaType)
    {
        $this->pizzaType = $pizzaType;
    }

    public function createPizza()
    {
        if($this->pizzaType == 'cheese'){

            return new NYCheesePizza();
        }

        elseif ($this->pizzaType == 'greek'){

            return new NYGreekPizza();
        }

        elseif($this->pizzaType == 'pepperoni'){

            return new NYPepperoniPizza();
        }

        else{

            echo 'sorry ' . $this->pizzaType .' pizza is not available at this time';
        }

    }
}