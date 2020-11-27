<?php

namespace CommandPattern\Commands;

require_once('CommandInterface.php');

class ChangeCartProductQuantityCommand
    implements CommandInterface
{
    private $_shoppingCartRepository = null;
    private $_productRepository = null;
    private $_product = null;
    private $_operation = null;
    
    const INCREASE_OPERATION = 'increase';
    const DECREASE_OPERATION = 'decrease';
    
    public function __construct(string $operation,
        \CommandPattern\Repositories\ShoppingCartRepository $shoppingCartRepository,
        \CommandPattern\Repositories\ProductRepository $productRepository,
        \CommandPattern\Entities\Product $product)
    {
        $this->_operation = $operation;
        $this->_shoppingCartRepository = $shoppingCartRepository;
        $this->_productRepository = $productRepository;
        $this->_product = $product;
    }
    
    public function canExecute(): bool
    {
        switch($this->_operation)
        {
            case self::DECREASE_OPERATION:
                echo "Can decrease {$this->_product->getName()} quantity in cart?\n";
                return $this->_shoppingCartRepository->get($this->_product)->quantity != 0;
            
            case self::INCREASE_OPERATION:
                echo "Can increase {$this->_product->getName()} quantity in cart?\n";
                return ($this->_productRepository->getStockFor($this->_product) - 1) >= 0;
            
            default:
                return false;
        }
        
        return false;
    }
    
    public function execute()
    {
        switch($this->_operation)
        {
            case self::DECREASE_OPERATION:
                $this->_productRepository->increaseStockBy($this->_product, 1);
                $this->_shoppingCartRepository.decreaseQuantity($this->_product, 1);
                echo "Decreased {$this->_product->getName()} quantity in cart\n";
                break;
            
            case self::INCREASE_OPERATION:
                 $this->_productRepository->decreaseStockBy($this->_product, 1);
                $this->_shoppingCartRepository->increaseQuantity($this->_product, 1);
                echo "Increased {$this->_product->getName()} quantity in cart\n";
                break;
        }
    }
    
    public function undo()
    {
        switch($this->_operation)
        {
            case self::DECREASE_OPERATION:
                $this->_productRepository->decreaseStockBy($this->_product, 1);
                $this->_shoppingCartRepository->increaseQuantity($this->_product, 1);
                break;
            
            case self::INCREASE_OPERATION:
                 $this->_productRepository->increaseStockBy($this->_product, 1);
                $this->_shoppingCartRepository->decreaseQuantity($this->_product, 1);
                break;
        }
    }                    
}