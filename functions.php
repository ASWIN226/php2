<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function fruit(){

    echo 'IM FRUIT SECTION';

}

fruit();
echo '<br>';


function spfruit($name,$rate){
    return $name.' '.' '.'RS : '.$rate;
    echo '<br>';

}


 $k=spfruit('Apple','250');
 echo $k;



?>
    
</body>
</html>