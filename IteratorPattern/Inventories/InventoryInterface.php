<?php

namespace IteratorPattern\Inventories;

Interface InventoryInterface
{
    public function getInventoryIterator():
                \IteratorPattern\InventoryIterators\InventoryIteratorInterface;
    public function getInventoryCount(): int;
}