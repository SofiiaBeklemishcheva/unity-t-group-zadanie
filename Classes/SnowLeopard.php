<?php

class SnowLeopard extends Animal implements Carnivorous, HasFur
{

    public function getSpecies()
    {
        return "Irbis Śnieżny";
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