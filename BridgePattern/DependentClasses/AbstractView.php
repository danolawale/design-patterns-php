<?php

namespace BridgePattern\DependentClasses;

abstract class AbstractView
{
    protected $_resource;
    
    public function __construct(
        \BridgePattern\NonDependentClasses\ResourceInterface $resource)
    {
        $this->_resource = $resource;
    }
    
    abstract public function show(): string;

}