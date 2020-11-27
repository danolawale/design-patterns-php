<?php

namespace StatePattern\StateHandlers;

class GateIgnoredState
    implements GateStateInterface
{
    public function push(): \StatePattern\StateHandlers\GateStateInterface
    {
        return $this;
    }
    public function pay(): \StatePattern\StateHandlers\GateStateInterface
    {
        return $this;
    }
    public function payOk(): \StatePattern\StateHandlers\GateStateInterface
    {
       return $this;
    }
    public function payFailed(): \StatePattern\StateHandlers\GateStateInterface
    {
        return $this;
    }
    
    public function __toString()
    {
        $str = "Gate is ignoring all commands, processing last action";
        
        return $str;
    }
}