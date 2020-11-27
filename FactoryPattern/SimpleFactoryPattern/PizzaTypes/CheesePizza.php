<?php

namespace FactoryPattern\SimpleFactoryPattern\PizzaTypes;

class CheesePizza
    implements PizzaInterface
{
  public function prepare()
  {
    echo "Cheese Pizza is being prepared\n";
  }

  public function cook()
  {
    echo "Cheese Pizza is being cooked\n";
  }
}
