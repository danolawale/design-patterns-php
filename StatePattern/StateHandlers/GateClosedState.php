<?php

namespace StatePattern\StateHandlers;

class GateClosedState
    implements GateStateInterface
{
    public function push(): \StatePattern\StateHandlers\GateStateInterface
    {
        return $this;
    }
    public function pay(): \StatePattern\StateHandlers\GateStateInterface
    {
        return new GateProcessingState();
    }
    public function payOk(): \StatePattern\StateHandlers\GateStateInterface
    {
        return new GateOpenedState();
    }
    public function payFailed(): \StatePattern\StateHandlers\GateStateInterface
    {
        return $this;
    }
    
    public function __toString()
    {
        $str = "Gate is closed, expecting pay action\n";
        
        return $str;
    }
}