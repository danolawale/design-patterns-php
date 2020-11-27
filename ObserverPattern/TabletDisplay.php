<?php
namespace DesignPatterns\ObserverPattern;

require_once("ObserverInterface.php");

class TabletDisplay
    implements ObserverInterface
{
  public $_station;

  private $_reading;

  public function __construct(WeatherStation $station)
  {
    $this->_station = $station;
  }

  public function update()
  {
    $this->_reading = $this->_station->getCurrentReading();

    echo "\nReading from Tablet display is {$this->_reading}\n";
  }
}
 ?>
