<?php

namespace MediatorPattern\Implementation2\Structural;

require_once('Structural/Colleague.php');

class Colleague1
    extends Colleague
{
    public function handleNotification(string $message)
    {
        echo "Colleague1 receives notification message: {$message}\n";
    }
}