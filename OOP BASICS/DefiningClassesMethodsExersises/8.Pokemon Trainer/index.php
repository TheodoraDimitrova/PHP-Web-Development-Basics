<?php //ne dovurshena
use Pokemon\Pokemon;

include 'Trainer.php';
include 'Pokemon.php';


$line = trim(fgets(STDIN));
while ($line != "Tournament") {
    // “<TrainerName> <PokemonName> <PokemonElement> <PokemonHealth>”
    $line = explode(' ', $line);
    // print_r($line);
    $trainerName = $line[0];
    $pokemonName = $line[1];
    $pokemonElement = $line[2];
    $pokemonHealth = $line[3];


    $line = trim(fgets(STDIN));
}
$command = trim(fgets(STDIN));
while ($command != "End") {
    if ($command == 'Fire') {


    } elseif ($command == 'Water') {


    } elseif ($command == 'Electricity'){


    }


        $command = trim(fgets(STDIN));
}