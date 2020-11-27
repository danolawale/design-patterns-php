<?php

namespace FactoryPattern\AbstractFactoryMethod\PizzaAddonTypes;

require_once('AbstractPizzaAddon.php');

class VeggieSandwich
    extends AbstractPizzaAddon
{
  public function setName()/*: void*/
  {
    $this->name = "Veggie Sandwich";
  }
}