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

    public function __construct($name,$age) {
        $this->name=$name;
        $this->age=$age;

        
    }

    function display(){
        echo 'player : '.' '.$this->name . " ".$this->age;
        echo '<br>';

    }


}

class indianplayer extends players{

    function shw(){
        echo 'Indian';
        echo '<br>';

    }



}

$virat=new players('virat','35');
$virat->display();

$virat=new players('virat','35');
$virat->display();


$sanju=new indianplayer('sanju','29');
$sanju->display();
$sanju->shw();

$sanju=new indianplayer('sanju','29');
$sanju->display();
$sanju->shw();














?>
    
</body>
</html>