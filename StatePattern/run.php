<?php

require_once('StateHandlers/GateStateInterface.php');
require_once('StateHandlers/GateClosedState.php');
require_once('StateHandlers/GateOpenedState.php');
require_once('StateHandlers/GateProcessingState.php');
require_once('StateHandlers/GateIgnoredState.php');

require_once('ValidationHandlers/PaymentValidation.php');
require_once('GateControllerInterface.php');
require_once('GateController.php');

$validation = new \ValidationHandlers\PaymentValidation();

$gateController = new \StatePattern\GateController($validation);

echo "\n..............Customer Action sequence 1...............\n";
$gateController->pay('Debit Card');

$gateController->push();

echo "\n..............Customer Action sequence 2...............\n";
$gateController->pay('Invalid payment');

$gateController->push();

echo "\n..............Customer Action sequence 3...............\n";

$gateController->push();