<?php

namespace CommandPattern\Repositories;

class ProductRepository
{
    public function getStockFor(\CommandPattern\Entities\Product $product): int
    {
        echo "Getting stock count for product {$product->getName()} as {$product->getQuantity()}\n";
        
        return $product->getQuantity();
    }
    
    public function increaseStockBy(\CommandPattern\Entities\Product $product, int $quantity = 1)
    {
        $updatedQuantity = $product->getQuantity() + $quantity;
        
        $product->UpdateQuantity($updatedQuantity);
        
        echo "Increasing stock count for product {$product->getName()} to {$product->getQuantity()}\n";
    }
    
    public function decreaseStockBy(\CommandPattern\Entities\Product $product, int $quantity = 1)
    {
       $updatedQuantity = $product->getQuantity() - $quantity;
       
       $product->UpdateQuantity($updatedQuantity);
       
        echo "Decreasing stock count for product {$product->getName()} to {$product->getQuantity()}\n";
    }
}