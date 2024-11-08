<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$name=$_POST['name'];
$pass=$_POST['password'];
$txt=$_POST['text'];

echo 'your name is'. $name;
echo '<br>';
echo 'your password is' .' '.$pass;
echo '<br>';
echo 'Message : ' .$txt;




?>

<a href="form2.html">click</a>



    
</body>
</html>