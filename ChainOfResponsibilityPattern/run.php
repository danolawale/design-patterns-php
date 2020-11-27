<?php

require_once('Handlers/UserValidations/SocialSecurityValidationHandler.php');
require_once('Handlers/UserValidations/NameValidationHandler.php');
require_once('Handlers/UserValidations/AgeValidationHandler.php');
require_once('Handlers/UserValidations/CitizenshipValidationHandler.php');

require_once('Requests/UserRequest.php');

function validations(): bool
{
    try
    {
        $handler = new \ChainOfResponsibility\Handlers\UserValidations\SocialSecurityValidationHandler('test125');
        
        $handler
            ->setNext(new \ChainOfResponsibility\Handlers\UserValidations\NameValidationHandler('Daniel'))
            ->setNext(new \ChainOfResponsibility\Handlers\UserValidations\AgeValidationHandler(29))
            ->setNext(new \ChainOfResponsibility\Handlers\UserValidations\CitizenshipValidationHandler('US'));
            
        $handler->handle(new ChainOfResponsibility\Requests\UserRequest);
        
        return true;
    }
    catch(\Exception $e)
    {
        echo "{$e->getMessage()}\n";
        
        return false;
    }
}

if(validations())
{
    echo "All validations successfully completed\n";
}
else
{
    echo "Validations failed\n";
}
