<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class pp{
    public $name;

    public function __construct($name) {
        $this->name=$name;
    }


    function display(){
        echo $this->name;
        
    }

}

$obj=new pp('aswin');
$obj->display();




?>


    
</body>
</html>