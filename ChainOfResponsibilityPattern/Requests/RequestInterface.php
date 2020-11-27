<?php

namespace ChainOfResponsibility\Requests;

interface RequestInterface
{
    public function validate(string $type, string $value): bool;
}