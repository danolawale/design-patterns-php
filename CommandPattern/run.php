<?php

namespace CommandPattern;

require_once('Entities/Product.php');
require_once('Repositories/ShoppingCartRepository.php');
require_once('Repositories/ProductRepository.php');
require_once('Commands/AddToCartCommand.php');
require_once('Commands/ChangeCartProductQuantityCommand.php');
require_once('CommandManager.php');

$shoppingCartRepo = new Repositories\ShoppingCartRepository();

$productRepo = new Repositories\ProductRepository();

$product = new Entities\Product(1, 'bacon', 5);

$addToCartCommand = new Commands\AddToCartCommand($shoppingCartRepo, $productRepo,$product);

$changeCartProductQuantityCommand = new Commands\ChangeCartProductQuantityCommand(
    Commands\ChangeCartProductQuantityCommand::INCREASE_OPERATION, $shoppingCartRepo, $productRepo,$product);

    
$manager = new CommandManager;
echo "*******************Adding Product to cart***********************************\n";
$manager($addToCartCommand);

echo "*******************Changing cart product quantity***********************************\n";
$manager($changeCartProductQuantityCommand);

echo "*******************Changing cart product quantity***********************************\n";
$manager($changeCartProductQuantityCommand);


echo "*******************UndoAll changes***********************************\n";
$manager->undoAll();