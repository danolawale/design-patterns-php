<?php

namespace FactoryPattern\SimpleFactoryPattern\PizzaTypes;

class PepperoniPizza
    implements PizzaInterface
{
  public function prepare()
  {
    echo "Pepperoni Pizza is being prepared\n";
  }

  public function cook()
  {
    echo "Pepperoni Pizza is being cooked\n";
  }
}
