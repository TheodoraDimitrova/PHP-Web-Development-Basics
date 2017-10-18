<?php

class Pokemon
{
    private $pokemonName;
    private $pokemonType;

    public function __construct(string $pokemonName,  string $pokemonType)
    {
        $this->pokemonName = $pokemonName;
        $this->pokemonType = $pokemonType;
    }

    function __toString()
    {
        return "{$this->pokemonName} {$this->pokemonType}";
    }


}