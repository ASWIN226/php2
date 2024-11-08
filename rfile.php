<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$rfile=fopen('aswin.txt','r') or die('unable to open file');

echo fread($rfile,filesize('aswin.txt'));

fclose($rfile);

echo '<br>';

echo '<br>';



?>


    
</body>
</html>