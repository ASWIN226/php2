<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo 'my name is Aswin '."<br>";
echo '<h1>Hello Aswin</h1>';

$a=10;
$b=20;
echo($a+$b);
echo '<br>';
echo($a-$b);
echo('<br>');
echo($a/$b);
echo '<br>';
var_dump($a==$b);
echo '<br>';

function call_name($name){
   
    echo $name;
    
}

call_name('aswin');


$fruits = array(

    array('apple','mango'),
    array('kiwi','banana'),
    array('jackfruit','dragonfruit')


);

echo '<br>';

var_dump($a==$b);
echo '<br>';
var_dump($a<$b);
echo '<br>';
var_dump($a>$b);
echo '<br>';
var_dump($a!=$b);
echo '<br>';
var_dump($a===$b);

echo '<br>';



class details{
    public $name;
    public $age;
    public $mobile;
    public $gender;


    public function __construct($name,$age,$mobile,$gender) {
        $this->name=$name;
        $this->age=$age;
        $this->mobile=$mobile;
        $this->gender=$gender;


      
    }

    function display(){
        echo 'My name is '.$this->name.' '.'and my age is'
        .' '.$this->age. ' '.'mobile number is ' .' '.$this->mobile .'gender'.' '.$this->gender;

        echo '<br>';


    }

};


echo '<br>';



$aswin=new details('Aswin','23','8754312837','male');
$aswin->display();


$aswin=new details('Arun','22','8434237856','male');
$aswin->display();


$aswin=new details('Rahul','20','9765435263','male');
$aswin->display();

$aswin=new details('Rajesh','20','9765435263','male');
$aswin->display();

class math{

    var $a=10;
    var $b=20;

    function result(){

        echo $this->a + $this->b;


    }

};


echo '<br>';

$resul=new math();
$resul->result();



?>
    
</body>
</html>