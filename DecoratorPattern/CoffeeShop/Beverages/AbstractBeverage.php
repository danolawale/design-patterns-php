<?php
namespace DecoratorPattern\CoffeeShop\Beverages;

require_once('BeverageInterface.php');

abstract class AbstractBeverage
          implements BeverageInterface
{
  abstract public function getDescription(): string;

  abstract public function getCost(): float;
}
 ?>
