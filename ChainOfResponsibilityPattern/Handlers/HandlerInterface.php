<?php

namespace ChainOfResponsibility\Handlers;

interface HandlerInterface
{
    public function setNext(HandlerInterface $next): HandlerInterface;
    
    public function handle(\ChainOfResponsibility\Requests\RequestInterface $request);
}