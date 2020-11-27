<?php
namespace DecoratorPattern\CoffeeShop\Decorators;

require_once('Beverages/AbstractBeverage.php');

abstract class AbstractAddonDecorator
          extends \DecoratorPattern\CoffeeShop\Beverages\AbstractBeverage
{
  abstract public function getDescription(): string;

  abstract public function getCost(): float;
}
 ?>
