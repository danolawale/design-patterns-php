<?php
namespace DecoratorPattern\CoffeeShop\Beverages;

class Decaf extends AbstractBeverage
{
  public function getDescription(): string
  {
    return 'Decaf Coffee';
  }

  public function getCost(): float
  {
    return 2.20;
  }
}
 ?>
