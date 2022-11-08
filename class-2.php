<?php
class Animal
{
    public $weight = 40;
    public $age = 4;
    public $color = 'black';

    public function move()
    {
        echo "Moving lol <br>";
    }
    public function eat()
    {
        echo "Eating cereal";
    }
}

class Dog extends Animal
{
}

$dog = new Dog();
$dog->move();
