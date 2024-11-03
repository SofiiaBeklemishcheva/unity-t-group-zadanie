<?php


class Bear extends Animal implements Omnivorous, HasFur {
    public function getSpecies() {
        return "Niedźwiedź";
    }

    public function eatMeat() {
        echo "{$this->name} je mięso.\n";
    }

    public function eatPlants() {
        echo "{$this->name} je rośliny.\n";
    }

    public function groomFur() {
        echo "{$this->name} jest czesany.\n";
    }
}
