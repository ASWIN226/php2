<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class fruit{

    public $name;


    function set($name){
        $this->name=$name;
    }

    function get(){
        return $this->name. " "."".''.'is the fruit';
        
    }







}

$orange=new fruit();
$orange->set('orange');

echo $orange->get();
echo '<br>';

$apple=new fruit();
$apple->set('apple');


echo $apple->get();
echo '<br>';

$kiwi=new fruit();
$kiwi->set('kiwi');


echo $kiwi->get();
echo '<br>';



$mango=new fruit();
$mango->set('mango');


echo $mango->get();


















?>
    
</body>
</html>