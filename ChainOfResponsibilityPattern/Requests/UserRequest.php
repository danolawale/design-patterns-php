<?php

namespace ChainOfResponsibility\Requests;

require_once('RequestInterface.php');

class UserRequest
    implements RequestInterface
{
    public function validate(string $type, string $value): bool
    {
        switch($type)
        {
            case 'name':
                return $this->_validateName($value);
            
            case 'citizenship':
                return $this->_validateCitizenship($value);
            
            case 'age':
                return $this->_validateAge($value);
            
            case 'socialSecurityNumber':
                return $this->_validateSocialSecurityNumber($value);
            
            default:
                return false;
   
        }
    }
    
    private function _validateName(string $name): bool
    {
         if(strlen($name) <= 1 )
        {
            return false;
        }
        
        return true;
    }
    
    private function _validateAge(int $age): bool
    {
          if($age !== 0 && $age < 18 )
        {
            return false;
        }
        
        return true;
    }
    
    private function _validateCitizenship(string $value): bool
    {
        if(!in_array($value, ['GB', 'DE', 'US', 'NG']))
        {
            return false;
        }
        
        return true;
    }
    
    private function _validateSocialSecurityNumber(string $value): bool
    {
        if(strlen($value) > 7 )
        {
            return false;
        }
        
        return true;
    }
}