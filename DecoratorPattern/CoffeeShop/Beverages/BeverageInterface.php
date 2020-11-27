<?php
namespace DecoratorPattern\CoffeeShop\Beverages;

Interface BeverageInterface
{
  public function getDescription(): string;

  public function getCost(): float;
}
