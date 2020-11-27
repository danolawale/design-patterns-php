<?php

namespace StatePattern\StateHandlers;

class GateProcessingState
    implements GateStateInterface
{
    public function push(): \StatePattern\StateHandlers\GateStateInterface
    {
        return new GateIgnoredState();;
    }
    public function pay(): \StatePattern\StateHandlers\GateStateInterface
    {
        return new GateIgnoredState();
    }
    public function payOk(): \StatePattern\StateHandlers\GateStateInterface
    {
       return new GateOpenedState(); 
    }
    public function payFailed(): \StatePattern\StateHandlers\GateStateInterface
    {
        return new GateClosedState();
    }
    
    public function __toString()
    {
        $str = "Gate is processing your last action.....\n";
        
        return $str;
    }
}