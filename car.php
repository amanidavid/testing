<?php
class Person{
    public $name;
    protected $age;
    private $email;

    public function __construct($name,$age,$email){
        $this->name = $name;
        $this->age=$age;
        $this->email=$email;
    }

public function result(){
    return "hello my name is  " . $this->name. " i am  " . $this->age. " years ". "and my email is ". $this->email;
}
public function getMail(){
    return $this->email;
}

public function setMail($email){
    $this->email = $email;

}

public function __destruct() {
    #echo "Object destroyed";
  }
}


?>