<?php

class Rabbit extends Animal implements Herbivorous, HasFur
{

    public function getSpecies()
    {
        return "Królik";
    }

    public function eatPlants()
    {
        echo "{$this->name} je rośliny.\n";
    }

    public function groomFur()
    {
        echo "{$this->name} jest czesany.\n";
    }
}