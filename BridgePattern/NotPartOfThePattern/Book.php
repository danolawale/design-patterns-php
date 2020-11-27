<?php

namespace NotPartOfThePattern;

class Book
{
    public function intro(): string
    {
        return "This book will inspire you to do something great";
    }
    
    public function bookUrl(): string
    {
        return "http://www.testimageofbook.jpg";
    }
}