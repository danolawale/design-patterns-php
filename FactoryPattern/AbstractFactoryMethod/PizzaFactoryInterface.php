<?php

namespace FactoryPattern\AbstractFactoryMethod;

interface PizzaFactoryInterface
{
  public function createPizza(string $type): PizzaTypes\PizzaInterface;
  
  public function createPizzaAddon(string $type): PizzaAddonTypes\PizzaAddonInterface;

  public function order(string $type): PizzaTypes\PizzaInterface;
}
