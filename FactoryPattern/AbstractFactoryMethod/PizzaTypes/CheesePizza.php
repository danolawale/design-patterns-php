<?php

namespace FactoryPattern\AbstractFactoryMethod\PizzaTypes;

require_once('AbstractPizza.php');

class CheesePizza
    extends AbstractPizza
{
  
  public function setName()/*: void*/
  {
    $this->name = "Cheese Pizza";
  }
}
