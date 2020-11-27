<?php

namespace MediatorPattern\Implementation2\Structural;

abstract class Colleague
{
    protected $_mediator;
    
    public function setMediator(Mediator $mediator)
    {
         $this->_mediator = $mediator;
    }
    
    public function send(string $message)
    {
        $this->_mediator->send($message, $this);
    }
    
    abstract public function handleNotification(string $message);
}