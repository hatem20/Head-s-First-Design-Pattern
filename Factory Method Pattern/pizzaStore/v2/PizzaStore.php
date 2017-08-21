<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 7:13 PM
 */

namespace pizzaStore\v2;

abstract class PizzaStore
{
    function __construct()
    {
        $this->pizza = '';
    }

    public function orderPizza($pizzaType)
    {
        $this->pizza = $this->createPizza($pizzaType);
        $this->pizza->preparePizza();
        $this->pizza->bakePizza();
        $this->pizza->cutPizza();
        $this->pizza->boxPizza();
    }

    public abstract function createPizza($pizzaType);
}
