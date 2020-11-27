<?php

namespace IteratorPattern\Inventories;

class OfficeInventory
    implements InventoryInterface
{
    public $_inventory;
    
    public function __construct(
        \InventoryItems\OfficeInventoryItems $inventory)
    {
        $this->_inventory = $inventory;
    }
    
    public function &getInventoryItems(): iterable
    {
        $items = $this->_inventory->getInventoryItems();
        
        return $items;
    }
    
    public function getInventoryCount(): int
    {
        return $this->_inventory->getCount();
    }
    
    public function getInventoryIterator():
                \IteratorPattern\InventoryIterators\InventoryIteratorInterface
    {
        return new \IteratorPattern\InventoryIterators\OfficeInventoryIterator($this);
    }
}