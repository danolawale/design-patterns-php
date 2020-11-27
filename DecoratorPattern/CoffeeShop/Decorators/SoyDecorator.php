<?php
namespace DecoratorPattern\CoffeeShop\Decorators;

require_once('AbstractAddonDecorator.php');

class SoyDecorator extends AbstractAddonDecorator
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
    return  $this->_beverage->getDescription() . ' with soy;';
  }

  public function getCost(): float
  {
    return $this->_beverage->getCost() + 0.9;
  }
}
