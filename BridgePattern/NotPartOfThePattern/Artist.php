<?php

namespace NotPartOfThePattern;

class Artist
{
    public function bio(): string
    {
        return "This artist's work was made popular in 1972\n";
    }
    
    public function imageUrl(): string
    {
        return "http://www.testimageofartist.png";
    }
}