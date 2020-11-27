<?php
namespace DecoratorPattern\CoffeeShop;

require_once('Decorators/CaramelDecorator.php');
require_once('Decorators/SoyDecorator.php');
require_once('Beverages/Decaf.php');
require_once('Beverages/Espresso.php');

use \DecoratorPattern\CoffeeShop\Decorators\CaramelDecorator;
use \DecoratorPattern\CoffeeShop\Decorators\SoyDecorator;
use \DecoratorPattern\CoffeeShop\Beverages\Decaf;
use \DecoratorPattern\CoffeeShop\Beverages\Espresso;


//Caramel Decorated Decaf Coffee;
$caramelDecaf = new CaramelDecorator(new Decaf());
echo "Coffee Name = {$caramelDecaf->getDescription()}\n";
echo "Total Cost = {$caramelDecaf->getCost()}\n";


//Soy Decorated Espresso Coffee;
$soyEspresso = new SoyDecorator(new Espresso());
echo "Coffee Name = {$soyEspresso->getDescription()}\n";
echo "Total Cost = {$soyEspresso->getCost()}\n";


//Caramel Decorated, Soy Decorated, Espresso
$caramelSoyEspresso = new CaramelDecorator(new SoyDecorator(new Espresso));
echo "Coffee Name = {$caramelSoyEspresso->getDescription()}\n";
echo "Total Cost = {$caramelSoyEspresso->getCost()}\n";

//Caramel Decorated, Soy Decorated, Decaf
$caramelSoyDecaf = new SoyDecorator(new CaramelDecorator(new Decaf));
echo "Coffee Name = {$caramelSoyDecaf->getDescription()}\n";
echo "Total Cost = {$caramelSoyDecaf->getCost()}\n";

//Double Caramel Decorated Espresso
$doubleCaramelEspresso = new CaramelDecorator(new CaramelDecorator(new Espresso));
echo "Coffee Name = {$doubleCaramelEspresso->getDescription()}\n";
echo "Total Cost = {$doubleCaramelEspresso->getCost()}\n";

 ?>
