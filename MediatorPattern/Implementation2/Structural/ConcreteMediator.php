<?php

namespace MediatorPattern\Implementation2\Structural;

require_once('Mediator.php');

class ConcreteMediator
    extends Mediator
{
    private $_colleagues = [];
    
    public function register(Colleague $colleague)
    {
        //set up bidrectional references here
        $colleague->setMediator($this);
        $this->_colleagues[] = $colleague;
    }
    
    //for run2
    public function createColleague(string $callable): Colleague
    {
        $colleague = new $callable;
        $colleague->setMediator($this);
        $this->_colleagues[] = $colleague;
        
        return $colleague;
    }
    
    public function send(string $message, Colleague $colleague)
    {
        array_walk($this->_colleagues, function($member) use($colleague, $message)
        {
            if($member != $colleague)
            {
                $member->handleNotification($message);
            }
            
        });
    }
}