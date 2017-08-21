<?php
ini_set('display_errors',0);

require './Pizza.php';
require './PizzaStore.php';

require './pizzas/NYCheesePizza.php';
require './pizzas/NYGreekPizza.php';
require './pizzas/NYPepperoniPizza.php';
require './pizzas/ChicagoCheesePizza.php';
require './pizzas/ChicagoGreekPizza.php';
require './pizzas/ChicagoPepperoniPizza.php';

require './stores/ChicagoPizzaStore.php';
require './stores/NYPizzaStore.php';

$pizzaStore = new ChicagoPizzaStore();
$pizzaStore->orderPizza('cheese');

echo "<hr>";

$pizzaStore = new NYPizzaStore();
$pizzaStore->orderPizza('greek');
