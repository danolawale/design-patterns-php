<?php
 
namespace IteratorPattern\InventoryIterators;

class HouseholdInventoryIterator
    implements InventoryIteratorInterface
{
    private $_houseInventory;
    private $_index = 0;
    public function __construct(
        \IteratorPattern\Inventories\HouseholdInventory $houseInventory)
    {
        $this->_houseInventory = $houseInventory;
    }
    
    public function hasNext(): bool
    {
       return $this->_index != $this->_houseInventory->getInventoryCount();
    }
    
    public function next()
    {
       $this->_index += 1;
    }
    
    public function current()/*: ?string*/
    {
      return $this->_houseInventory->getInventoryItems()[$this->_index];
    }
}