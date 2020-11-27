<?php

namespace BridgePattern\NonDependentClasses;

class BookResource
        implements ResourceInterface
{
    private $_book;
    
    public function __construct(
        \NotPartOfThePattern\Book $book)
    {
        $this->_book = $book;
    }
    
    public function snippets(): string
    {
        return $this->_book->intro();
    }
    
    public function imageUrl(): string
    {
        return $this->_book->bookUrl();
    }
}