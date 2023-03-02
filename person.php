<?php
class People{
    const minimum =20000;
    protected $name,$sex,$email,$salary;


    public function __construct($name,$sex,$email,$salary){
        $this->name=$name;
        $this->sex=$sex;
        $this->email=$email;

        if($salary<self::minimum){
            echo'<h4>Invalid salary </h4>';
        }else{
        $this->salary=$salary;

        }
    }

    public function getDetails(){
       return " name: ".$this->name. "<br/> Sex: ". $this->sex. " <br/>Email: ". $this->email. " <br/> Amount:".$this->salary; 
    }
}
?>