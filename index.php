<?php
include'car.php';
include'student.php';
include'landcruiserv8.php';

#ob_start(); //start an output buffer
$callable=function (){
    echo "hello amani<br>";
};
#$callable="hello";
$callable();

$name = 'John';

if (isset($name)) {
    echo "The variable $name is set and has a value of  " . $name;
} else {
    echo 'The variable $name is not set </br>';
};

$x = 5;
$y = 6;
echo "\t\$" . $x-- * $y++;

$name = 'Dolly';
echo "<br>Hello, $name"; 

/*$book['title'] = "\nPHP 7 Solutions: Dynamic Web Design Made Easy, Fourth Edition";
$book['author'] = 'David Powers';
$book['publisher'] = 'Apress';*/
$book = [
    'title' => "\nPHP 7 Solutions: Dynamic Web Design Made Easy, Fourth Edition",
    'author' => 'David Powers',
    'publisher' => 'Apress'
   ];


echo "{$book['title']} was written by {$book['author']} and published by {$book['publisher']}.";
#print_r($book);
$age=17;
echo $faretype = $age > 17? "\nAdilt":"\nchild";

$shoppingList = ['wine', 'fish', 'bread', 'grapes', 'cheese'];
foreach ($shoppingList as $item) {
 echo $item.'<br>';
}
$a="hello";
// $price=10;

function display(){ 
    global $a;
    $date = date("l");
   echo strlen($a);
   echo strpos($a,'l',2);
   echo substr($a,0,5);
   echo str_replace("hello","amani",$a);
    echo $date; 
   //output: 03/01/2
}
// echo $a;
  display();
  echo "<br/>";
  $courses = array("HDIT","HDCS","BIT","BCS");
for ($i = 0; $i < sizeof($courses); ++$i){
echo $courses[$i]."<br />";
}


#$output = ob_get_clean(); #retrieve contents of a buffer and store it as a variable

#echo nl2br($output) #convert escape sequences to HTML to be directly displayed on browser



//
//create an object//
$person1= new Person("amani","30","amani@gmail.com");
$person2= new Person("peter","19","peter@gmail.com");

#var_dump($fruit1 instanceof Fruit);

//set properties
/*$fruit1->name="banana";
$fruit1->color="yellow <br/>";

$fruit2->name="mango";
$fruit2->color="red";*/

#call method
echo $person1->result();
echo"<br/>";
echo $person2->result();
echo "<br/>";

$student= new Student("amani david", "male","amanidavid@gmail.com",100000,"IMC/BCS/2124687","Computer Science");

echo $student->getDetails();
echo"<br/>";
echo"<br/>";

$landcruiser = new landCruiser("Toyota","camry","2022","$3000,000,000","white",4);
echo $landcruiser->displayCarInfo();

/*$person1->setMail("amani@gmail.com");
echo $person1->getMail();

$person2->setMail("peter@gmail.com");
echo $person2->getMail();*/

?>
