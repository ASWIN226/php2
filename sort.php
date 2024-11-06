<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$a=array('apple','banana','cat','dog','elephant','fox','goat','helicopter','ink','jug','kite','lemon','monkey','nine','orange','pineapple','quee','race','seven','thanks','umberella','van','wolf','yolk','xampp','zion');
sort($a);

$cnt=count($a);

for($x=0;$x<$cnt;$x++){
    echo $a[$x];
    echo '<br>';


}












?>
    
</body>
</html>