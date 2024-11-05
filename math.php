<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class mat{
        private $a;
        private $b;

        public function __construct($a,$b) {
            $this->a=$a;
            $this->b=$b;
       
        }

        function add(){
            echo $this->a+$this->b;


        }

        function mul(){
            echo $this->a*$this->b;


        }

        function div(){
            echo $this->a/$this->b;


        }

        
        function sub(){
            echo $this->a-$this->b;


        }

        function cmp(){
            echo 'Comparison'.' '. ":" .' ';
            var_dump ($this->a==$this->b);
            
            echo'<br>';
            echo 'less than'.' ' .$this->a;

            echo '<br>';

            var_dump ($this->a<$this->b);


        }





    }

    $obj=new mat(10,20);
    $obj->mul();
    echo "<br>";
    $obj->add();
    echo '<br>';
    $obj->div();
    echo '<br>';
    $obj->sub();
    echo '<br>';
    $obj->cmp();



   




?>
</body>
</html>