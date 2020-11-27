<?php

namespace FactoryPattern\AbstractFactoryMethod\PizzaTypes;

require_once('AbstractPizza.php');

class VeggiePizza
      extends AbstractPizza
{
public function setName()/*: void*/
{
  $this->name = "Vegetable Pizza";
}
}
