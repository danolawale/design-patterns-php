<?php
namespace DesignPatterns\ObserverPattern;

require_once("WeatherReadings.php");
require_once("WeatherStation.php");
require_once("PhoneDisplay.php");
require_once("TabletDisplay.php");

$readings = new WeatherReadings([4, 5, 2, 3]);

$station = new WeatherStation($readings);

$phoneDisplay = new PhoneDisplay($station);

$tabletDisplay = new TabletDisplay($station);

$station->add($phoneDisplay);

$station->add($tabletDisplay);

$station->notify();

$station->remove($tabletDisplay);

$station->notify();

 ?>
