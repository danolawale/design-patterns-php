<?php

namespace BridgePattern\DependentClasses;

class LongView
    extends AbstractView
{
    public function show(): string
    {
        $viewMsg = "View from LongView. \n";
        
        return $viewMsg . $this->_resource->snippets();
    }
}