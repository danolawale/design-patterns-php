<?php
namespace DesignPatterns\ObserverPattern;

class WeatherReadings
{
  private $_readings;
  
  public function __construct(array $readings)
  {
    $this->_readings = $readings;
  }

  public function getAverageReading()
  {
    return array_sum($this->_readings) / count($this->_readings);
  }
}

 ?>
