<?php

namespace FactoryPattern\FactoryMethod;

interface PizzaFactoryInterface
{
  public function create(string $type): PizzaTypes\PizzaInterface;

  public function order(string $type): PizzaTypes\PizzaInterface;
}
