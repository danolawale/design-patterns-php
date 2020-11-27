<?php

namespace IteratorPattern\InventoryIterators;

Interface InventoryIteratorInterface
{
    public function hasNext(): bool;
    public function next();/*: void*/
    public function current();
}