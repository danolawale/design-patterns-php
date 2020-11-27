<?php

namespace CommandPattern;

require_once('Commands/CommandInterface.php');

class CommandManager
{
    private $_commands = []; //LIFO data structure to help undo commands in the right order
    
    public function __invoke(Commands\CommandInterface $command)
    {
        if($command->canExecute())
        {
            $this->_commands[] = $command;
            
            $command->execute();
        }
    }
    
    public function undoLastOperation()
    {
        if(count($this->_commands) > 0)
        {
            $command = array_pop($this->_commands);
            
            $command->undo();
        }
    }
    
    public function undoAll()
    {
        while(count($this->_commands) > 0)
        {
            $command = array_pop($this->_commands);
            
            $command->undo();
        }
    }
}