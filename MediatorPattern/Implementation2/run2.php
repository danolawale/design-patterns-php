<?php

namespace MediatorPattern\Implementation2;

require_once('Structural/ConcreteMediator.php');
require_once('Structural/Colleague1.php');
require_once('Structural/Colleague2.php');

$mediator = new Structural\ConcreteMediator;

$c1 = $mediator->createColleague(Structural\Colleague1::class);
$c2 = $mediator->createColleague(Structural\Colleague2::class);

$c1->send("Hello, world! from c1");
$c2->send("Hi, there! from c2");
