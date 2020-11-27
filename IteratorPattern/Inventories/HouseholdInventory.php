<?php

namespace IteratorPattern\Inventories;

class HouseholdInventory
    implements InventoryInterface
{
    public $_inventory;
    
    public function __construct(
        \InventoryItems\HouseholdInventoryItems $inventory)
    {
        $this->_inventory = $inventory;
    }
    
    public function getInventoryItems(): iterable
    {
        return $this->_inventory->getInventoryItems();
    }
    
    public function getInventoryCount(): int
    {
        return $this->_inventory->getCount();
    }
    
    public function getInventoryIterator():
                \IteratorPattern\InventoryIterators\InventoryIteratorInterface
    {
        return new \IteratorPattern\InventoryIterators\HouseholdInventoryIterator($this);
    }
}