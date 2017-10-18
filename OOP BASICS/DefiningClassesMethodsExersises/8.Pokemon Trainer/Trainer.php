<?php

namespace Pokemon;


class Trainer//Trainers have a name, number of badges and a collection of pokemon
{
    private $name;
    private $numberOfBadges=0;
    private $collectionOfPokemons;

    public function __construct($name, $numberOfBadges, $collectionOfPokemons)
    {
        $this->name = $name;
        $this->numberOfBadges = $numberOfBadges;
        $this->collsectionOfPokemons =$collectionOfPokemons;
    }

}