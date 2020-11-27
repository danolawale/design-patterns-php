<?php

namespace FactoryPattern\AbstractFactoryMethod\PizzaAddonTypes;

require_once('PizzaAddonInterface.php');

abstract class AbstractPizzaAddon
    implements PizzaAddonInterface
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
  
  public function box()
  {
    echo "{$this->name} is being boxed\n";
  }
}
