<?php

namespace FactoryPattern\AbstractFactoryMethod\PizzaAddonTypes;

interface PizzaAddonInterface
{
  public function setName();/*: void*/
  public function getName(): string;
  public function prepare();
   public function box();
}
