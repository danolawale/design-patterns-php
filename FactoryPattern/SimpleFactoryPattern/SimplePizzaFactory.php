<?php

namespace FactoryPattern\SimpleFactoryPattern;

require_once('PizzaTypes/PizzaInterface.php');
require_once('PizzaTypes/CheesePizza.php');
require_once('PizzaTypes/PepperoniPizza.php');
require_once('PizzaTypes/VeggiePizza.php');

class SimplePizzaFactory
{
  //public function createPizza(string $type): PizzaTypes\PizzaInterface
  public function __invoke(string $type): PizzaTypes\PizzaInterface
  {
    $pizza = null;
    switch ($type)
    {
      case 'cheese':
        $pizza = new PizzaTypes\CheesePizza();
        break;
      case 'pepperoni':
        $pizza = new PizzaTypes\PepperoniPizza();
        break;
      case 'veggie':
        $pizza = new PizzaTypes\VeggiePizza();
        break;
    }

    return $pizza;
  }
}
