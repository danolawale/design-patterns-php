<?php //client
namespace FactoryPattern\FactoryMethod;

require_once('PizzaFactoryInterface.php');
require_once('AbstractPizzaFactory.php');
require_once('LondonPizzaFactory.php');
require_once('ManchesterPizzaFactory.php');
require_once('PizzaTypes/AbstractPizza.php');

class OrderPizza
{
  private $_pizzaType = null;
  private $_factory;

  public function __construct(
    PizzaFactoryInterface $factory)
  {
    $args = $_SERVER['argv'];

    $this->_factory = $factory;

    $this->_setType($args[1]);
  }

  private function _validTypes(): array
  {
    return [
      'cheese',
      'veggie',
      'pepperoni'
    ];
  }

  private function _setType($type)
  {
    $validTypes = $this->_validTypes();

    if(in_array($type, $validTypes))
    {
      $this->_pizzaType = $type;
    }
    else
    {
      echo "Pizza Type must be one of ".implode(', ', $validTypes)."\n";
      exit;
    }
  }

  public function orderPizza()
  {
    $pizza = $this->_factory->order($this->_pizzaType);

  }
}

$order = new OrderPizza(new LondonPizzaFactory);

$order->orderPizza();
