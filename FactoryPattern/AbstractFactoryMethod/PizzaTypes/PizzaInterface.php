<?php

namespace FactoryPattern\AbstractFactoryMethod\PizzaTypes;

interface PizzaInterface
{
  public function setName();/*: void*/
  public function getName(): string;
  public function prepare();
  public function bake();
  public function cut();
  public function box();
}
