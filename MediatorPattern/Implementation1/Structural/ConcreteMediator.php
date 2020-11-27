<?php

namespace MediatorPattern\Implementation1\Structural;

require_once('Mediator.php');

class ConcreteMediator
    extends Mediator
{
    public $colleague1;
    public $colleague2;
    
    public function send(string $message, Colleague $colleague)
    {
        if($colleague == $this->colleague1)
        {
            $this->colleague2->handleNotification($message);
        }
        else
        {
             $this->colleague1->handleNotification($message);
        }
    }
}