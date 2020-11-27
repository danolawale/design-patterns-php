<?php

namespace InventoryItems;

Interface InventoryItemsInterface
{
    public function getInventoryItems(): iterable;
    public function getCount(): int;
}