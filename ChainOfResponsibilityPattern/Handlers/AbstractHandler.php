<?php

namespace ChainOfResponsibility\Handlers;

require_once('HandlerInterface.php');

abstract class AbstractHandler
    implements HandlerInterface
{
    private $_next;
    protected $_value;
    
    public function __construct($value)
    {
        $this->_value = $value;
    }
    
    public function setNext(HandlerInterface $next): HandlerInterface
    {
        $this->_next = $next;
        
        return $this->_next;
    }
    
     public function handle(\ChainOfResponsibility\Requests\RequestInterface $request)
    {
        if($this->_next)
        {
            $this->_next->handle($request);
        }
    }
}