<?php

namespace StatePattern;

class GateController
    implements GateControllerInterface
{
    private $_state;
    private $_paymentValidation;
    
    public function __construct(
            \ValidationHandlers\PaymentValidation $paymentValidation,
            \StatePattern\StateHandlers\GateStateInterface $state = null)
    {
        $this->_state = $state ?: new \StatePattern\StateHandlers\GateClosedState;
        
        $this->_paymentValidation = $paymentValidation; 
    }
    public function push()
    {
        $newState = $this->_state->push();
        
        $this->_setState($newState);
        
        $this->_openGate();
    }
    
    public function pay(string $method)
    {
        $newState = $this->_state->pay();
        
        $this->_setState($newState);
        
        $this->_validatePayment($method);
    }
    
    private function payOk()
    {
        $newState = $this->_state->payOk();
        
        $this->_setState($newState);
    }
    
     private function payFailed()
    {
        $newState = $this->_state->payFailed();
        
        $this->_setState($newState);
    }
    
    private function _setState(\StatePattern\StateHandlers\GateStateInterface $newState)
    {
        if($newState == $this->_state)
        {
            return;
        }
        $this->_state =
            !is_a($newState, \StatePattern\StateHandlers\GateIgnoredState::class)
            ? $newState
            : $this->_state;
        
        echo $this->_state;
    }
    
    private function _validatePayment(string $method)/*: ?\StatePattern\StateHandlers\GateStateInterface*/
    {
        if(is_a($this->_state, \StatePattern\StateHandlers\GateProcessingState::class))
        {
            $errors = $this->_paymentValidation->validatePaymentMethod($method);
            
            if($errors)
            {
                return $this->payFailed();
            }
            
            return $this->payOk();
        }
        else
        {
            return $this->_state;  
        }
    }
    
    private function _openGate()
    {
        if(is_a($this->_state, \StatePattern\StateHandlers\GateOpenedState::class))
        {
            sleep(3);
        
            echo "Customer has entered \n";
        
            $this->_state = new \StatePattern\StateHandlers\GateClosedState;
            
            echo $this->_state;
        }
        else
        {
            echo "Push disabled\n";
        }
    }
    
    
}