<?php

namespace ChainOfResponsibility\Handlers\UserValidations;

require_once('Handlers/AbstractHandler.php');

class CitizenshipValidationHandler
    extends \ChainOfResponsibility\Handlers\AbstractHandler
{
    public function handle(\ChainOfResponsibility\Requests\RequestInterface $request)
    {
        if(!$request->validate('citizenship', $this->_value))
        {
            throw new \Exception("Invalid citizenship request {$this->_value}");
        }
        
        echo "Handling citizenship request in CitizenshipValidatorHandler\n";
        
        parent::handle($request);
    }
}