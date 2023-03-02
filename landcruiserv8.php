<?php
include_once'vehicle.php';
class landCruiser extends Vehicle{
    private $doors;

    public function __construct($make,$model,$year,$price,$color,$doors){
        parent::__construct($make,$model,$year,$price,$color);
        $this->doors = $doors;
    }

    public function displayCarInfo(){
        echo "Make:".$this->getMake()."<br/>";
        echo "Model:".$this->getModel()."<br/>";
        echo "Year:".$this->getYear()."<br/>";
        echo "Price:".$this->getPrice()."<br/>";
        echo "Color:".$this->getColor()."<br/>";
        echo "Doors:".$this->doors."<br/>";
    }

    public function getDoors(){
        return $this->doors;
    }
} 
?>