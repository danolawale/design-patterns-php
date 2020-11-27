<?php

namespace InventoryItems;

class HouseholdInventoryItems
    implements InventoryItemsInterface
{
    public function getInventoryItems(): iterable
    {
        return [
           'Table', 'Chairs', 'Beds', 'Pots' 
        ];
    }
    
    public function getCount(): int
    {
        return count($this->getInventoryItems());
    }
}