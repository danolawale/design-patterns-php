<?php

namespace FactoryPattern\AbstractFactoryMethod;

abstract class AbstractPizzaFactory
        implements PizzaFactoryInterface
{
  abstract public function createPizza(string $type): PizzaTypes\PizzaInterface;
  
  abstract public function createPizzaAddon(string $type): PizzaAddonTypes\PizzaAddonInterface;

  public function order(string $type): PizzaTypes\PizzaInterface
  {
    $pizza = $this->createPizza($type);
    $addon = $this->createPizzaAddon($type);
    $pizza->setName();
    $addon->setName();

    echo "Making Pizza: {$pizza->getName()} from $this->_factoryName Factory\n";

    $pizza->prepare();
    $pizza->bake();
    $pizza->cut();
    
    echo "Making Addon: {$addon->getName()} from $this->_factoryName Factory\n";
    $addon->prepare();
    
    $pizza->box();
    $addon->box();

    return $pizza;
  }
}