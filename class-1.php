<?php
class Car
{
    public $manufacter = "Nissan";
    public $speed = 300;
    public $position = 120;
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function move()
    {
        echo "<br>";
        echo "I am Speed with the speed of " . $this->speed . "kmph";
    }
}
$car1 = new Car("Chiron");
$car2 = new Car("Skyline");
$car1->speed = 314;
echo $car1->manufacter;
echo "<br>";
echo $car1->speed;
$car2->manufacter = "Mitsubishi";
$car2->speed = 290;
echo "<br>";
echo $car2->manufacter;
echo "<br>";
echo $car2->speed;
echo "<br>";
echo $car2->name;
echo "<br>";
echo $car1->name;
