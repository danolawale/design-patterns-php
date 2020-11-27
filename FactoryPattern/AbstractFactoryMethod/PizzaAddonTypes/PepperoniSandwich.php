<?php

namespace FactoryPattern\AbstractFactoryMethod\PizzaAddonTypes;

require_once('AbstractPizzaAddon.php');

class PepperoniSandwich
    extends AbstractPizzaAddon
{
  public function setName()/*: void*/
  {
    $this->name = "Pepperoni Sandwich";
  }
}