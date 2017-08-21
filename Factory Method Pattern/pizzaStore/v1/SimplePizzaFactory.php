<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 4:43 PM
 */

namespace pizzaStore\v1;


class SimplePizzaFactory
{
    function __construct($pizzaType)
    {
        $this->pizzaType = $pizzaType;
    }

    public function createPizze()
    {
        if($this->pizzaType == 'cheese'){

            return new CheesePizza();
        }

        elseif ($this->pizzaType == 'greek'){

            return new GreekPizza();
        }

        elseif($this->pizzaType == 'pepperoni'){

            return new PepperoniPizza();
        }

        else{

            echo 'sorry ' . $this->pizzaType .' pizza is not available at this time';
        }

    }
}