<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$age=array('aswin'=>'23','ashlin'=>'22','abhijith'=>'10');


asort($age);

foreach($age as $key=>$value){
    echo $key.$value.'<br>';

}








?>
    
</body>
</html>