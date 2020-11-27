<?php
namespace DesignPatterns\ObserverPattern;

require_once("ObservableInterface.php");

class WeatherStation
    implements ObservableInterface
{
  /**
   * @var ObserverInterface an array of ObserverInterface classes.
   */
 private $_observersList = [];

 private $_readings;

 public function __construct(WeatherReadings $readings)
 {
   $this->_readings = $readings;
 }

  public function add(ObserverInterface $observer)
  {
    $this->_observersList[] = $observer;
  }

  public function remove(ObserverInterface $observer)
  {
    $key = array_search($observer, $this->_observersList);
    unset($this->_observersList[$key]);
  }

  public function notify()
  {
    foreach($this->_observersList as $observer)
    {
      $observer->update();
    }
  }

  public function getCurrentReading()
  {
    return $this->_readings->getAverageReading();
  }
}


 ?>
