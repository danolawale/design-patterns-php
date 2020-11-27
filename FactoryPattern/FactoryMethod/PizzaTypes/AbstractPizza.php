<?php

namespace FactoryPattern\FactoryMethod\PizzaTypes;

require_once('PizzaInterface.php');

abstract class AbstractPizza
    implements PizzaInterface
{
  protected $name = null;

  abstract public function setName()/*: void*/;

  public function getName(): string
  {
    return $this->name;
  }

  public function prepare()
  {
    echo "{$this->name} is being prepared\n";
  }

  public function bake()
  {
    echo "{$this->name} is being baked\n";
  }

  public function cut()
  {
      echo "{$this->name} is being cut\n";
  }

  public function box()
  {
      echo "{$this->name} is being boxed\n";
  }
}
