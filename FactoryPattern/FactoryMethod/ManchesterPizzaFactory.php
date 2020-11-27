<?php

namespace FactoryPattern\FactoryMethod;

require_once('PizzaTypes/CheesePizza.php');
require_once('PizzaTypes/PepperoniPizza.php');
require_once('PizzaTypes/VeggiePizza.php');

class ManchesterPizzaFactory
        extends AbstractPizzaFactory
{
  protected $_factoryName = 'Manchester';

  public function create(string $type): PizzaTypes\PizzaInterface
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
