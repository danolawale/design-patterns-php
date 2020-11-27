<?php

namespace MediatorPattern\ChatApp;

require_once('AbstractChatroom.php');
require_once('AbstractTeamMember.php');

class TeamChatroom
    extends AbstractChatroom
{
    private $_memebers = [];
    
    public function register(AbstractTeamMember $member)
    {
        $member->setChatroom($this);
        
        $this->_members[] = $member;
    }
    
    public function registerMembers(array $members)//convenience method to register multiple members at once
    {
        foreach($members as $member)
        {
            $this->register($member);
        }
    }
    
    public function send(string $from, string $message)
    {
        array_walk($this->_members, function($member) use($from, $message)
        {
            $member->receive($from, $message);
        });
    }
    
     public function sendTo(string $from, string $group, string $message)
    {
        array_walk($this->_members, function($member) use($from, $group, $message)
        {
            if($member instanceof $group)
            {
                 $member->receive($from, $message);
            }
           
        });
    }
}