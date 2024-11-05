<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class dl{

    public function __construct() {
        $this->name='ASWIN';
 
    }

    function __destruct(){
        echo "destroying". $this->name;



    }




}


$obj=new dl();







?>
    
</body>
</html>