<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class math{
    var $a;
    var $b;



    public function __construct($a,$b) {
        $this->a=$a;
        $this->b=$b;
  
    }
    
    
    function acc(){
        $total=$this->a + $this->b;
        echo $total;

    }


    function ac(){
        $total=$this->a * $this->b;
        echo $total;

    }


    function ab(){
        $total=$this->a - $this->b;
        echo $total;

    }



}

$fin=new math(20,20);
$fin->acc();
echo '<br>';


$cv=new math(23,23);
$cv->ac();
echo '<br>';


$min=new math(20,20);
$min->ab();











?>
    
</body>
</html>