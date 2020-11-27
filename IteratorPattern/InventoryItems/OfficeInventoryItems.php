<?php

namespace InventoryItems;

class OfficeInventoryItems
    implements InventoryItemsInterface
{
    public function getInventoryItems(): iterable
    {
        yield 'Computers';
        
        yield 'Monitors';
        
        yield 'Notepads';
        
        yield 'Pens';
    }
    
    public function getCount(): int
    {
        $count = 0;
        
        foreach ($this->getInventoryItems() as $item)
        {
            $count++;
        }
        
        return $count;
    }
}