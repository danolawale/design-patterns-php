<?php

namespace MediatorPattern\Implementation1\Structural;

abstract class Colleague
{
    protected $_mediator;
    
    public function __construct(Mediator $mediator)
    {
        $this->_mediator = $mediator;
    }
    
    public function send(string $message)
    {
        $this->_mediator->send($message, $this);
    }
    
    abstract public function handleNotification(string $message);
}