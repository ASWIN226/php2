<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class animals{
    public $name;
    public $type;



    function set_name($name){
        $this->name=$name;

    }

    function get_name(){
        return $this->name." ". 'is a';

    }
    

    function set_type($type){
        $this->type=$type;
    }

    function get_type(){

        return $this->type.' '.'animal';
     
    }







}





$tiger=new animals();
$tiger->set_name('tiger');
echo $tiger->get_name();
echo "<br>";

$tiger->set_type('wild');
echo $tiger->get_type();

echo '<br>';
echo '<br>';

$rabbit=new animals();
$rabbit->set_name('rabbit');
echo $rabbit->get_name();
echo "<br>";

$rabbit->set_type('domestic');
echo $rabbit->get_type();


echo '<br>';
echo '<br>';

$tiger=new animals();
$tiger->set_name('tiger');
echo $tiger->get_name();
echo "<br>";

$tiger->set_type('wild');
echo $tiger->get_type();



echo '<br>';
echo '<br>';

$tiger=new animals();
$tiger->set_name('tiger');
echo $tiger->get_name();
echo "<br>";

$tiger->set_type('wild');
echo $tiger->get_type();











?>
    
</body>
</html>