<?php
abstract class Vehicle{
    protected $make,$model,$year,$price,$color;

    public function __construct($make,$model,$year,$price,$color){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
        $this->color = $color;

    }

    abstract public function displayCarInfo();

    public function getMake(){
        return $this->make;
    }

    public function getModel(){
        return $this->model;
    }

    public function getYear(){
        return $this->year;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getColor(){
        return $this->color ;
    }
}
?>