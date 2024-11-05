<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$age=array('kumar'=>'23','abhinav'=>'21');
echo 'age of kumar'.$age['kumar']. 'and the age of abhinav'.$age['abhinav'];



$cars=array(

    array('volvo','red','225'),
    array('BMW','black','5434'),

);

echo "<br>";

echo $cars[0][0].' '.'model'.' ' .$cars[0][2];
echo '<br>';

echo $cars[1][0] . "is not available";
echo '<br>';

echo $cars[1][2] . 'is available';








?>
    
</body>
</html>