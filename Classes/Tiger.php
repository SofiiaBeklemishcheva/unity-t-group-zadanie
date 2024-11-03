<?php

class Tiger extends Animal implements Carnivorous, HasFur
{
    public function getSpecies()
    {
        return "Tygrys";
    }

    public function eatMeat()
    {
        echo "{$this->name} je mięso.\n";
    }

    public function groomFur()
    {
        echo "{$this->name} jest czesany.\n";
    }
}
