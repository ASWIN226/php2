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
        public $color;

    public function __construct($name,$color) {
        $this->name=$name;
        $this->color=$color;

     
    }


    function display(){
        echo $this->name;
        echo '  ' . ' ';
        echo $this->color;
      

    }


}

class child extends fruit{
    function ph(){

        echo "hello from child";

    }

}

$orange=new fruit('orange','red');
$orange->display();
echo '<br>';

$apple=new child('apple','red');
$apple->display();
echo '<br>';
$apple->ph();







?>
    
</body>
</html>