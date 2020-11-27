<?php

namespace StatePattern\StateHandlers;

interface GateStateInterface
{
    public function push(): \StatePattern\StateHandlers\GateStateInterface;
    public function pay(): \StatePattern\StateHandlers\GateStateInterface;
    public function payOk(): \StatePattern\StateHandlers\GateStateInterface;
    public function payFailed(): \StatePattern\StateHandlers\GateStateInterface;
}