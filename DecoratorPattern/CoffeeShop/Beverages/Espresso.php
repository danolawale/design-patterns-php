<?php
namespace DecoratorPattern\CoffeeShop\Beverages;

class Espresso extends AbstractBeverage
{
  public function getDescription(): string
  {
    return 'Espresso Coffee';
  }

  public function getCost(): float
  {
    return 2.80;
  }
}
 ?>
