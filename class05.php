<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">


 

</head>

<body>



<div id='kk'>
    
<?php

class fruits{
    public $name;
    public $color;


    public function __construct($name,$color) {
        $this->name=$name;
        $this->color=$color;

        
    }

    function get(){
        return "fruit is " . $this->name.' ' ."and color is ".$this->color;



    }


}




$apple=new fruits('apple','red');
echo $apple->get();
echo '<br>';
echo '<br>';






// apple


// orange

$orange=new fruits('orange','orange');
echo $orange->get();
echo '<br>';
echo '<br>';

// kiwi


$kiwi=new fruits('kiwi','green');
echo $kiwi->get();
echo '<br>';
echo '<br>';


// dragon fruit

$df=new fruits('dragon fruit','red');
echo $df->get();
echo '<br>';
echo '<br>';

// green apple

$ga=new fruits('green apple','green');
echo $ga->get();
echo '<br>';
echo '<br>';

// banana

$ba=new fruits('Banana','Yellow');
echo $ba->get();
echo '<br>';
echo '<br>';

// strawberry

$sb=new fruits('Strawberry','Red');
echo $sb->get();
echo '<br>';
echo '<br>';

// jackfruit

$jf=new fruits('jackfruit','Green');
echo $jf->get();
echo '<br>';
echo '<br>';

// 

$jf=new fruits('jackfruit','Green');
echo $jf->get();
echo '<br>';
echo '<br>';

// 

$jry=new fruits('jerry','Red');
echo $jry->get();
echo '<br>';
echo '<br>';



?>







</div>






























    
</body>
</html>