<?php

namespace FactoryPattern\AbstractFactoryMethod\PizzaAddonTypes;

require_once('AbstractPizzaAddon.php');

class CheeseSandwich
    extends AbstractPizzaAddon
{
  public function setName()/*: void*/
  {
    $this->name = "Cheese Sandwich";
  }
}