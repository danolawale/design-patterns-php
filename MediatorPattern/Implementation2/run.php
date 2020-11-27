<?php

namespace MediatorPattern\Implementation2;

require_once('Structural/ConcreteMediator.php');
require_once('Structural/Colleague1.php');
require_once('Structural/Colleague2.php');

$mediator = new Structural\ConcreteMediator;

$c1 = new Structural\Colleague1();
$c2 = new Structural\Colleague2();

$mediator->register($c1);
$mediator->register($c2);

$c1->send("Hello, world! from c1");
$c2->send("Hi, there! from c2");
