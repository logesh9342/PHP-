<?php
class car{
    public $car_name = "volvo,<br>";
    public $model = "2025";
    public $car_color = "black";
    public $car_num ="2409";
    public $car_interior = "modified";
    public $car_exterior ="modified";
    public $car_design = "imported";
    public $car_FC = "cleared";
    public $car_seat = "white";

}

$car_class = new car();
echo $car_class->car_name ;
echo $car_class->model;
echo $car_class->car_color;
echo $car_class->car_num;
echo $car_class->car_interior;
echo $car_class->car_exterior;
echo $car_class->car_design;
echo $car_class->car_FC;
echo $car_class->car_seat;

?>
