<?php

require_once '../vendor/autoload.php';

use Symfony\Component\EventDispatcher\EventDispatcher;
use EventDispatchers\Events\DemoEvent;
use EventDispatchers\Listeners\DemoListener;

// init event dispatcher
$dispatcher = new EventDispatcher();

// register listener for the 'demo.event' event
$listener = new DemoListener();
$dispatcher->addListener(DemoEvent::NAME, [$listener, 'onDemoEvent']);

// dispatch
$dispatcher->dispatch(new DemoEvent(), DemoEvent::NAME);
