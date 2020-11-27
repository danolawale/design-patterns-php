<?php

namespace FactoryPattern\FactoryMethod\PizzaTypes;

require_once('AbstractPizza.php');

class PepperoniPizza
        extends AbstractPizza
{
public function setName()/*: void*/
{
  $this->name = "Pepperoni Pizza";
}
}
