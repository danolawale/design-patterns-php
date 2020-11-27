<?php

namespace CommandPattern\Repositories;

class ShoppingCartRepository
{
    private $_products = [];
    private $_productCartQuantity = [];
    
    public function add(\CommandPattern\Entities\Product $product)
    {
        $this->_products[] = $product;
        
        $this->_productCartQuantity[$product->getId()] = 1;
    }
    
    public function get(\CommandPattern\Entities\Product $product): \CommandPattern\Entities\Product
    {
        return $this->_getProduct($product);
    }
    
    public function remove(\CommandPattern\Entities\Product $product)
    {
        if($index = array_search($product, $this->_products))
        {
            unset($this->_products[$index]);
        }
    }
    
    public function removeAll()
    {
        $this->_products = [];
    }
    
    public function increaseQuantity(\CommandPattern\Entities\Product $product, int $quantity = 1)
    {
        $cartProduct = $this->_getProduct($product);
        
        $this->_productCartQuantity[$cartProduct->getId()] += $quantity;
        
        echo "Increasing cart product count for {$cartProduct->getName()} to {$this->_productCartQuantity[$cartProduct->getId()]}\n";
    }
    
    public function decreaseQuantity(\CommandPattern\Entities\Product $product, int $quantity = 1)
    {
         $cartProduct = $this->_getProduct($product);
        
       $this->_productCartQuantity[$cartProduct->getId()] -= $quantity;
       
        echo "Decreasing cart product count for {$cartProduct->getName()} to {$this->_productCartQuantity[$cartProduct->getId()]}\n";
    }
    
    public function getStockForProduct( \CommandPattern\Entities\Product $product): int
    {
        $cartProduct = $this->_getProduct($product);
        
        return $cartProduct->quantity;
    }
    
    public function getTotalItemsInCart(): int
    {
        return count($this->_products);
    }
    
    private function _getProduct(\CommandPattern\Entities\Product $product): \CommandPattern\Entities\Product
    {
        if(count($this->_products) == 0)
        {
            throw new \Exception("No products in cart");
        }
        
        return array_values(array_filter($this->_products, function($prd) use ($product)
        {
            return $product->getId() == $prd->getId();
        }))[0];
    }
}