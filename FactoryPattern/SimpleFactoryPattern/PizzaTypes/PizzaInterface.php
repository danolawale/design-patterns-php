<?php

namespace FactoryPattern\SimpleFactoryPattern\PizzaTypes;

interface PizzaInterface
{
  public function prepare();
  public function cook();
}
