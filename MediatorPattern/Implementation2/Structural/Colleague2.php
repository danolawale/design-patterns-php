<?php

namespace MediatorPattern\Implementation2\Structural;

require_once('Structural/Colleague.php');

class Colleague2
    extends Colleague
{   
    public function handleNotification(string $message)
    {
        echo "Colleague2 receives notification message: {$message}\n";
    }
}