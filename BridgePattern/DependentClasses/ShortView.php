<?php

namespace BridgePattern\DependentClasses;

class ShortView
    extends AbstractView
{
    public function show(): string
    {
        $viewMsg = "View from ShortView. \n";
        
        return $viewMsg . $this->_resource->snippets();
    }
}