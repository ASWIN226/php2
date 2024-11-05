<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class car{

    public $model;
    public $color;

    function set($model,$color){

        $this->model=$model;
        $this->color=$color;

    }

    function get(){

        echo "<h2>$this->model</h2>";
        echo "<br>";
        // echo $this->color;
        echo "<h2>$this->color</h2>";
    }


}

$maruthi=new car();
$maruthi->set('maruthi','red');
$maruthi->get();

echo "<br>";


$audi=new car();
$audi->set('audi','red');
$audi->get();


echo "<br>";

echo "<br>";


$alto=new car();
$alto->set('alto','black');
$alto->get();


echo "<br>";




?>
    
</body>
</html>