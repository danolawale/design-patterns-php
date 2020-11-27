<?php

namespace CommandPattern\Commands;

require_once('CommandInterface.php');

class AddToCartCommand
    implements CommandInterface
{
    private $_shoppingCartRepository = null;
    private $_productRepository = null;
    private $_product = null;
    
    public function __construct(
        \CommandPattern\Repositories\ShoppingCartRepository $shoppingCartRepository,
        \CommandPattern\Repositories\ProductRepository $productRepository,
        \CommandPattern\Entities\Product $product)
    {
        $this->_shoppingCartRepository = $shoppingCartRepository;
        $this->_productRepository = $productRepository;
        $this->_product = $product;
    }
    
    public function canExecute(): bool
    {
         if($this->_product === null)
        {
            return false;
        }
        
        echo "Can add product {$this->_product->getName()} to cart\n";
        
        return $this->_productRepository->getStockFor($this->_product) > 0;
    }
    
    public function execute()
    {
        if($this->_product === null)
        {
            return;
        }
        
        echo "Adding product {$this->_product->getName()} to cart\n";
        
        $this->_productRepository->decreaseStockBy($this->_product, 1);
        
        $this->_shoppingCartRepository->add($this->_product);                
    }
    
    public function undo()
    {
         if($this->_product === null)
        {
            return;
        }
        
        echo "Removing product {$this->_product->getName()} from cart\n";
        
        $product = $this->_shoppingCartRepository->get($this->_product);
        
        $this->_productRepository->increaseStockBy($product, 1);
        
        $this->_shoppingCartRepository->remove($product);
    }                    
}