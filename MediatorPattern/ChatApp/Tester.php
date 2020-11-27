<?php

namespace MediatorPattern\ChatApp;

class Tester
    extends AbstractTeamMember
{
    public function receive(string $from, string $message)
    {
        echo "{$this->_name} has received: ";
        
        parent::receive($from, $message);
    }
}