<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class players{
    public $name;
    public $age;

function set_name($name){
    $this->name=$name;

}


function get_name(){
    return $this->name;

}


function set_age($age){
    $this->age=$age;

}


function get_age(){
    return 'Age'.'  '.$this->age;

}
   
    
    

}

// virat

echo '<br>';

$virat=new players();
$virat->set_name('VIRAT KOHLI');
echo $virat->get_name();
echo "<br>";

$virat->set_age('35');
echo $virat->get_age();

echo '<br>';

// ms dhoni


echo '<br>';

$ms=new players();
$ms->set_name('MS DHONI');
echo $ms->get_name();
echo "<br>";

$ms->set_age('42');
echo $ms->get_age();



echo '<br>';



// sanju samson


echo '<br>';

$ss=new players();
$ss->set_name('SANJU SAMSON');
echo $ss->get_name();
echo "<br>";

$ss->set_age('28');
echo $ss->get_age();











?>
    
</body>
</html>