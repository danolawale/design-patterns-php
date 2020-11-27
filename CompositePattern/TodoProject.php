<?php

namespace CompositePattern\Todo;

class TodoProject
    implements TodoInterface
{
    /**
     * @var TodoInterface
     * */
    private $_todoList = [];
    private $_title;
    
    public function __construct(
        string $title, array $todos)
    {
        $this->_title = $title;
        
        $this->_todoList = $todos;
    }
    
    public function getHtml(): string
    {
        $html = '<h1>';
        $html .= $this->_title;
        $html .= '</h1><ul>';
        
        $html .= array_reduce($this->_todoList, function($carry, $todo){
            
            $str = "<li>" . $todo->getHtml() . "</li>";
            $carry .= $str;
            return $carry;
        });
        
        $html .= '</ul>';
        
        return $html;
    }
}