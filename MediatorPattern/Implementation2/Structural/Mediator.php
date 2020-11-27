<?php

namespace MediatorPattern\Implementation2\Structural;

abstract class Mediator
{
    abstract public function register(Colleague $colleague);
    abstract public function Send(string $message, Colleague $colleague);
    abstract public function createColleague(string $callable): Colleague;//for run2
}