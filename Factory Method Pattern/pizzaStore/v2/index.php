<?php
ini_set('display_errors',1);

require './Pizza.php';
require './SimplePizzaFactory.php';
require './PizzaStore.php';

require './pizzas/NYCheesePizza.php';
require './pizzas/NYGreekPizza.php';
require './pizzas/NYPepperoniPizza.php';
require './pizzas/ChicagoCheesePizza.php';
require './pizzas/ChicagoGreekPizza.php';
require './pizzas/ChicagoPepperoniPizza.php';

require './factories/NYPizzaFactory.php';
require './factories/ChicagoPizzaFactory.php';

require './stores/ChicagoPizzaStore.php';
require './stores/NYPizzaStore.php';

$pizzaStore = new ChicagoPizzaStore();
$pizzaStore->orderPizza('cheese');
