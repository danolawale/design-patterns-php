<?php

namespace ChainOfResponsibility\Handlers\UserValidations;

require_once('Handlers/AbstractHandler.php');

class AgeValidationHandler
    extends \ChainOfResponsibility\Handlers\AbstractHandler
{
    public function handle(\ChainOfResponsibility\Requests\RequestInterface $request)
    {
        if(!$request->validate('age', $this->_value))
        {
            throw new \Exception("Invalid age request {$this->_value}");
        }
        
        echo "Handling age validation request at AgeValidaitonHandler\n";
        
        parent::handle($request);
    }
}