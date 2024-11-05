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
        echo $this->name.' '.'color : '.' '. $this->color;
      



    }

    }


    class inh extends fruit{

      function msg(){
        echo 'hello from child class';

      }



    }





$orange=new fruit('orange','orange');
$orange->display();
echo "<br>";

$apple=new inh('apple','red');
$apple->display();
echo '<br>';


$apple=new inh('apple','red');
$apple->display();
echo '<br>';
$apple->msg();
echo '<br>';



$banana=new inh('banana','yellow');
$banana->display();
echo '<br>';

echo '<br>';











  









?>
</body>
</html>