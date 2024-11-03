<?php
require 'auto-load.php';

$zoo = new Zoo();

$tiger = new Tiger("Sheru");
$elephant = new Elephant("Dumbo");
$rhino = new Rhino("Rocky");
$fox = new Fox("Foxy");
$snowLeopard = new SnowLeopard("Leo");
$rabbit = new Rabbit("Bunny");
$bear = new Bear("Baloo");

$zoo->addAnimal($tiger);
$zoo->addAnimal($elephant);
$zoo->addAnimal($rhino);
$zoo->addAnimal($fox);
$zoo->addAnimal($snowLeopard);
$zoo->addAnimal($rabbit);
$zoo->addAnimal($bear);

$zoo->listAnimals();
$zoo->feedAndGroomAnimals();