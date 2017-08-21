<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 4:43 PM
 */

namespace pizzaStore\v2;

class SimplePizzaFactory
{
    function __construct($pizzaType)
    {
        $this->pizzaType = $pizzaType;
    }

    public function createPizze()
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