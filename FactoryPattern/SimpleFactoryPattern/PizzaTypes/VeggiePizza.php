<?php

namespace FactoryPattern\SimpleFactoryPattern\PizzaTypes;

class VeggiePizza
    implements PizzaInterface
{
  public function prepare()
  {
    echo "Vegetable Pizza is being prepared\n";
  }

  public function cook()
  {
    echo "Vegetable Pizza is being cooked\n";
  }
}
