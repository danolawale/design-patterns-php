<?php

namespace StatePattern;

interface GateControllerInterface
{
    public function push();
    public function pay(string $method);
}