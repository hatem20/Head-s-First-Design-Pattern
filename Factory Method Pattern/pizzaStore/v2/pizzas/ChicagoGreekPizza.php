<?php
/**
 * Created by PhpStorm.
 * User: hatem
 * Date: 8/21/17
 * Time: 7:31 PM
 */

namespace pizzaStore\v2;


class ChicagoGreekPizza
{
    function __construct()
    {
        $this->name = 'Chicago Greek Pizza';
        $this->sauce = 'chocolate sauce';
        $this->dough = 'crispy dough';
        $this->toppings = ['Kalamata Olives'];
    }

    public function getName()
    {
        return $this->name;
    }
}