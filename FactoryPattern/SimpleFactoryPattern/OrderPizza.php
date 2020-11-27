<?php //Client
namespace FactoryPattern\SimpleFactoryPattern;

require_once('SimplePizzaFactory.php');

class OrderPizza
{
  private $_pizzaType = null;
  private $_factory;

  public function __construct(
    SimplePizzaFactory $factory)
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

  public function getPizzaStatus()
  {
    //$pizza = $this->_factory->createPizza($this->_pizzaType);
    $pizzaFactory = $this->_factory;
    $pizza = $pizzaFactory($this->_pizzaType);

    $pizza->prepare();

    $pizza->cook();
  }
}

$order = new OrderPizza(new SimplePizzaFactory);

$order->getPizzaStatus();
