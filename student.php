<?php
include_once'person.php';

class Student extends People{
    protected $studentid,$course;

    public function __construct($name,$sex,$email,$salary,$studentid,$course){
        parent::__construct($name,$sex,$email,$salary);
        $this->studentid=$studentid;
        $this->course=$course;
    }

    public function getDetails(){
        return parent::getDetails(). "<br/>studentId".$this->studentid. "<br/>couse".$this->course;
    }
}
?>