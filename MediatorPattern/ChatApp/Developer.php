<?php

namespace MediatorPattern\ChatApp;

class Developer
    extends AbstractTeamMember
{
    public function receive(string $from, string $message)
    {
        echo "{$this->_name} has received: ";
        
        parent::receive($from, $message);
    }
}