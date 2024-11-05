<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo "hello world";
echo "<h1>hello world h1 tag</h1>","<br>";
echo "<h2>hello world h2 tag</h2>","<br>";
echo "<h3>hello world h3 tag</h3>","<br>";
echo "<h4>hello world h4 tag</h4>","<br>";
echo "<h5>hello world h5 tag</h5>","<br>";
echo "<h6>hello world h6 tag</h6>","<br>";

// arithmetic opeRATIONS
echo '<h1>Arithmetic operators</h1>';
$a=10;
$b=24;
$c="hello";

echo $a+$b,"<br>";
echo $a-$b,"<br>";
echo $a*$b,"<br>";
echo $a/$b,"<br>";
echo $a%$b,"<br>";
echo $a**$b,"<br>";

// var_dump ($a>$b)


echo str_replace('hello','Bye','hello World'),"<br>";
echo str_replace('Bye','Hello','Bye World'),"<br>";

echo "<h1>comparison operators</h1>","<br>";

var_dump($a!=$b);
echo "<br>";
var_dump($a==$b);
echo "<br>";
var_dump($a!=$b);
echo "<br>";
var_dump($a<>$b);
echo "<br>";

var_dump($a===$c);
echo "<br>";
var_dump($a>$b);
echo "<br>";
var_dump($a<$b);
echo "<br>";
var_dump($a>=$b);
echo "<br>";
var_dump($a<=$b);
echo "<br>";
var_dump($a<=>$b);
echo "<br>";

echo $a++,"<br>";
echo $a--,"<br>";
echo $b++,"<br>";
echo $a++,"<br>";
echo ++$a,"<br>";


// str pos

echo strpos("hello world","world"),"<br>";
echo strlen('hello world by php'),"<br>";
echo str_word_count("aswin");
echo strrev("HELLO WORLD BY PHP");
echo "<br>";
echo str_replace('aswin','world','hello aswin');







?>


</body>
</html>