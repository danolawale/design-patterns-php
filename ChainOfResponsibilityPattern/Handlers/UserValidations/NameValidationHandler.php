<?php

namespace ChainOfResponsibility\Handlers\UserValidations;

require_once('Handlers/AbstractHandler.php');

class NameValidationHandler
    extends \ChainOfResponsibility\Handlers\AbstractHandler
{
    public function handle(\ChainOfResponsibility\Requests\RequestInterface $request)
    {
        if(!$request->validate('name', $this->_value))
        {
            throw new \Exception("Invalid name request {$this->_value}");
        }
        
        echo "Handling name validation request in NameValidtionHandler\n";
        
        parent::handle($request);
    }
}