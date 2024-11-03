<?php

class Zoo {
    private $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function listAnimals() {
        foreach ($this->animals as $animal) {
            echo $animal . "\n";
        }
    }

    public function feedAndGroomAnimals() {
        foreach ($this->animals as $animal) {

            if ($animal instanceof Carnivorous) {
                $animal->eatMeat();
            }
            if ($animal instanceof Herbivorous) {
                $animal->eatPlants();
            }

            if ($animal instanceof HasFur) {
                $animal->groomFur();
            }
        }
    }
}
