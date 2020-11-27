<?php

namespace MediatorPattern\Implementation1\Structural;

require_once('Structural/Colleague.php');

class Colleague2
    extends Colleague
{
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }
    
    public function handleNotification(string $message)
    {
        echo "Colleague2 receives notification message: {$message}\n";
    }
}