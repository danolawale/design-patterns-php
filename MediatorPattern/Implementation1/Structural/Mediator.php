<?php

namespace MediatorPattern\Implementation1\Structural;

abstract class Mediator
{
    abstract public function Send(string $message, Colleague $colleague);
}