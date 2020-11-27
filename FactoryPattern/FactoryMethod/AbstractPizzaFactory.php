<?php

namespace FactoryPattern\FactoryMethod;

abstract class AbstractPizzaFactory
        implements PizzaFactoryInterface
{
  abstract public function create(string $type): PizzaTypes\PizzaInterface;

  public function order(string $type): PizzaTypes\PizzaInterface
  {
    $pizza = $this->create($type);
    $pizza->setName();

    echo "Making Pizza: {$pizza->getName()} from $this->_factoryName Factory\n";

    $pizza->prepare();
    $pizza->bake();
    $pizza->cut();
    $pizza->box();

    return $pizza;
  }
}
