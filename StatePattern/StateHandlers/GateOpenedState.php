<?php

namespace StatePattern\StateHandlers;

class GateOpenedState
    implements GateStateInterface
{
    public function push(): \StatePattern\StateHandlers\GateStateInterface
    {
        return $this;
    }
    public function pay(): \StatePattern\StateHandlers\GateStateInterface
    {
        return new GateIgnoredState();
    }
    public function payOk(): \StatePattern\StateHandlers\GateStateInterface
    {
        return new GateIgnoredState();
    }
    public function payFailed(): \StatePattern\StateHandlers\GateStateInterface
    {
        return new GateIgnoredState();
    }
    
    public function __toString()
    {
        sleep(1);
        
        $str = "Gate is opened, expecting push action\n";
        
        return $str;
    }
}