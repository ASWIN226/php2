<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


// loop
for($x=10;$x<=20;$x++){
    echo $x;
    echo "<br>";


};

$colors=array('red','white','yellow','blue');

foreach($colors as $value){
    echo $value;
    echo "<br>";
};

$s=10;
do{
    echo $s;
    echo "<br>";
    $s++;
   

}

while($s<=20);



$t=10;
while($t>=0){
    echo $t;
    echo "<br>";
    $t--;

};




$k=10;
$l=30;
if($k==10 and $l==30){
    echo ("hello world");
}
else{
    echo ("bye world");
};

echo "<br>";



$a1="hello";
$a2="world by php";
$a3=$a1.$a2;
echo $a3;

echo "<br>";

$a5=$a2.=$a1;
echo $a5;

echo"<br>";


echo $a2.=$a1;
echo "<br>";


// switch case

$variable="tr";
switch ($variable) {
    case 'apple':
        echo 'its an apple';
        break;
    case 'orange':
        echo 'its an orange';
        break;

    
    default:
        echo 'none';
        break;
}











?>
    
</body>
</html>