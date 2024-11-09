<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a=array("aswin"=>'1',"ashlin"=>'2');
    ksort($a);

    foreach($a as $pp=>$sp){
        echo $pp;
        echo '<br>';
        echo $sp;
        echo '<br>';
    }



?>
</body>
</html>