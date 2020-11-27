<?php

namespace FactoryPattern\AbstractFactoryMethod;

require_once('PizzaTypes/CheesePizza.php');
require_once('PizzaTypes/PepperoniPizza.php');
require_once('PizzaTypes/VeggiePizza.php');

require_once('PizzaAddonTypes/CheeseSandwich.php');
require_once('PizzaAddonTypes/PepperoniSandwich.php');
require_once('PizzaAddonTypes/VeggieSandwich.php');

class LondonPizzaFactory
        extends AbstractPizzaFactory
{
  protected $_factoryName = 'London';

  public function createPizza(string $type): PizzaTypes\PizzaInterface
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
  
  public function createPizzaAddon(string $type): PizzaAddonTypes\PizzaAddonInterface
  {
    $addon = null;
    switch ($type)
    {
      case 'cheese':
        $addon = new PizzaAddonTypes\CheeseSandwich();
        break;
      case 'pepperoni':
        $addon = new PizzaAddonTypes\PepperoniSandwich();
        break;
      case 'veggie':
        $addon = new PizzaAddonTypes\VeggieSandwich();
        break;
    }

    return $addon;
  }
}
