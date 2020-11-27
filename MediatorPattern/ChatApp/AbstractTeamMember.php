<?php

namespace MediatorPattern\ChatApp;

abstract class AbstractTeamMember
{
    protected $_name = null;
    private $_chatroom = null;
    
    public function __construct(string $memberName)
    {
        $this->_name = $memberName;
    }
    
    public function setChatroom(AbstractChatroom $chatroom)
    {
        $this->_chatroom = $chatroom;
    }
    
    public function send(string $message)
    {
        $this->_chatroom->send($this->_name, $message);
    }
    
    public function sendTo(string $groupName, string $message)
    {
        $this->_chatroom->sendTo($this->_name, $groupName, $message);
    }
    
    public function receive(string $from, string $message)
    {
        echo "From {$from}: '{$message}'\n";
    }
}