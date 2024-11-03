<?php

class Elephant extends Animal implements Herbivorous
{

    public function getSpecies()
    {
        return "Słoń";
    }

    public function eatPlants()
    {
        echo "{$this->name} je rośliny.\n";
    }
}