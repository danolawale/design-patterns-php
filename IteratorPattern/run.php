<?php

require_once('Inventories/InventoryInterface.php');
require_once('Inventories/HouseholdInventory.php');
require_once('Inventories/OfficeInventory.php');
require_once('InventoryItems/InventoryItemsInterface.php');
require_once('InventoryItems/HouseholdInventoryItems.php');
require_once('InventoryItems/OfficeInventoryItems.php');
require_once('InventoryIterators/InventoryIteratorInterface.php');
require_once('InventoryIterators/HouseholdInventoryIterator.php');
require_once('InventoryIterators/OfficeInventoryIterator.php');


$inv = new \IteratorPattern\Inventories\HouseholdInventory(
                        new \InventoryItems\HouseholdInventoryItems());

$invIterator = $inv->getInventoryIterator();

while($invIterator->hasNext())
{
    var_dump($invIterator->current());
    
    $invIterator->next();
}

echo "\n******************************************************************8\n";

$inv = new \IteratorPattern\Inventories\OfficeInventory(
                        new \InventoryItems\OfficeInventoryItems());

$invIterator = $inv->getInventoryIterator();
while($invIterator->hasNext())
{
    var_dump($invIterator->current());
    
    $invIterator->next();
}
