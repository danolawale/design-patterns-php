<?php

namespace CommandPattern\Entities;

class Product
{
    private $_id;
    
    private $_quantity = 0;
    
    private $_name = null;
    
    public function __construct(
        int $id, string $name, int $quantity)
    {
        $this->_id = $id;
        
        $this->_name = $name;
        
        $this->_quantity = $quantity;
    }
    
    public function getId(): int
    {
        return $this->_id;
    }
    
    public function getName(): string
    {
        return $this->_name;
    }
    
    public function getQuantity(): int
    {
        return $this->_quantity;
    }
    
    public function updateQuantity(int $quantity)
    {
        $this->_quantity = $quantity;
    }
}