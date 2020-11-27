<?php

namespace BridgePattern\NonDependentClasses;

class ArtistResource
        implements ResourceInterface
{
    private $_artist;
    
    public function __construct(
        \NotPartOfThePattern\Artist $artist)
    {
        $this->_artist = $artist;
    }
    
    public function snippets(): string
    {
        return $this->_artist->bio();
    }
    
    public function imageUrl(): string
    {
        return $this->_artist->imageUrl();
    }
}