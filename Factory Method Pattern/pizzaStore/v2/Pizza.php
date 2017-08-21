<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 4:25 PM
 */
namespace pizzaStore\v2;

abstract class Pizza
{
    function __construct()
    {
        $this->name = '';
        $this->sauce = '';
        $this->dough = '';
        $this->toppings = [];
    }

    public function preparePizza()
    {
        echo  'preparing ' . $this->name . '</br>';
        echo  'tossing dough' . '</br>';
        echo  'adding ' . $this->sauce . '</br>';
        echo  'adding topping: ';

        $sep = '';

        foreach ($this->toppings as $topping) {

            echo $sep . $topping;
            $sep = ' ,';
        }
    }

    public function bakePizza()
    {
        echo '</br>' . 'bake for 25 min at 350 C';
    }

    public function cutPizza()
    {
        echo '</br>' . 'cutting the pizza at diagonal slices';
    }

    public function boxPizza()
    {
        echo '</br>' . 'placing pizza in official pizzaStore Box';

    }

    public function getName()
    {
        return $this->name;
    }
}