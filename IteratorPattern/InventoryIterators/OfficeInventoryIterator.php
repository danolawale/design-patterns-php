<?php
 
namespace IteratorPattern\InventoryIterators;

class OfficeInventoryIterator
    implements InventoryIteratorInterface
{
    private $_officeInventory;
    private $_generator;
    public function __construct(
        \IteratorPattern\Inventories\OfficeInventory $officeInventory)
    {
        $this->_officeInventory = $officeInventory;
    }
    
    public function hasNext(): bool
    {
       if(!$this->_generator)
       {
          $this->_generator = $this->_officeInventory->getInventoryItems();
       }
       return $this->_generator->valid();
    }
    
    public function next()
    {
       $this->_generator->next();
    }
    
    public function current()/*: ?string*/
    {
      return $this->_generator->current();
    }
}