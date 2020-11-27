<?php

namespace CompositePattern\Todo;

class Todo
    implements TodoInterface
{
    private $_text;
    
    public function __construct(string $text)
    {
        $this->_text = $text;
    }
    
    public function getHtml(): string
    {
        return $this->_text;
    }
}

