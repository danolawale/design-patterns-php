<?php
 namespace DecoratorPattern\CoffeeShop\Decorators;

require_once('AbstractAddonDecorator.php');

class CaramelDecorator extends AbstractAddonDecorator
{
  /**
  * @var \DecoratorPattern\CoffeeShop\Beverages\BeverageInterface
  **/
  private $_beverage;

  public function __construct(
    \DecoratorPattern\CoffeeShop\Beverages\BeverageInterface $beverage)
  {
    $this->_beverage = $beverage;
  }
  public function getDescription(): string
  {
    return $this->_beverage->getDescription() . ' with caramel;';
  }

  public function getCost(): float
  {
    return $this->_beverage->getCost() + 1.2;
  }
}
