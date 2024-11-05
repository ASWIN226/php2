<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class sup{

    public $name;
    public $age;

    public function __construct($name,$age) {
        $this->name = $name;
        $this->age=$age;
    }


    function get_name(){

        return $this->name;
    }


    function get_age(){

        return $this->age;
    }






}

$aswin=new sup('aswin',23);
echo $aswin->get_name() . ' '.'age :  ' .$aswin->get_age();

echo '<br>';

$arun=new sup('arun',20);
echo $arun->get_name() . ' '.'age :  ' .$arun->get_age();


echo '<br>';

$mon=new sup('Monish',21);
echo $mon->get_name() . ' '.'age :  ' .$mon->get_age();











?>


    
</body>
</html>