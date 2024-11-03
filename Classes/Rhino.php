<?php

class Rhino extends Animal implements Herbivorous
{

    public function getSpecies()
    {
        return "Nosorożec";
    }

    public function eatPlants()
    {
        echo "{$this->name} je rośliny.\n";
    }
}