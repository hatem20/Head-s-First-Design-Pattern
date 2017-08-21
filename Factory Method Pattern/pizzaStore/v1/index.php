<?php
ini_set('display_errors',0);

require './Pizza.php';
require './pizzas/CheesePizza.php';
require './pizzas/GreekPizza.php';
require './pizzas/PepperoniPizza.php';
require './SimplePizzaFactory.php';

use pizzaStore\v1\SimplePizzaFactory;

$pizzaFactory = new SimplePizzaFactory('cheese');
$pizza = $pizzaFactory->createPizze();
$pizza->preparePizza();
$pizza->bakePizza();
$pizza->cutPizza();
$pizza->boxPizza();
