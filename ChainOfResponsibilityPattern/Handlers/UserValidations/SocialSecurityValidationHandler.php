<?php

namespace ChainOfResponsibility\Handlers\UserValidations;

require_once('Handlers/AbstractHandler.php');

class SocialSecurityValidationHandler
    extends \ChainOfResponsibility\Handlers\AbstractHandler
{
    public function handle(\ChainOfResponsibility\Requests\RequestInterface $request)
    {
        if(!$request->validate('socialSecurityNumber', $this->_value))
        {
            throw new \Exception("Invalid social number request");
        }
        
        echo "Handling social security number validation request at socialSecurityNumberValidationHandler\n";
        
        parent::handle($request);
    }
}