<!DOCTYPE html>
<html lang="en">
<head>
   

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<marquee behavior="scroll" direction="left"><h1>PHP FORM-01</h1>
</marquee>

<div class="md01">
<?php
$name=$age=$nationality=$mobile="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=fn_gt($_POST["name"]);
    $age=fn_gt($_POST["age"]);
    $nationality=fn_gt($_POST["nat"]);
    $mobile=fn_gt($_POST["mob"]);


}

function fn_gt($dta){
    $dta=trim($dta);
    $dta=stripslashes($dta);
    $dta=htmlspecialchars($dta);
    return $dta;

}


?>

<form method="post"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">



<input type="text" name="name" class="st" placeholder="enter your name"> <br>
<input type="text" name="age" class='st' placeholder="enter your age"> <br>
<input type="text" name="nat" class='st' placeholder="enter your nationality"> <br>
<input type="text" name="mob" class='st' placeholder="enter your mobile"> <br>

<input type="submit" class='sp'>


</form>

<div class='dv'>
<?php

echo "<h1>hello $name</h1>";
echo "<h1>Your age is  $age</h1>";
echo "<h1>Your nationality is  $nationality</h1>";
echo "<h1>Your mobile number is  $mobile</h1>";





?>


</div>


</div>




</body>
</html>