<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$age=$name=$nationality=$gender="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $age=pp_ss($_POST["age"]);
    $name=pp_ss($_POST["name"]);
    $nationality=pp_ss($_POST["nationality"]);
    $gender=pp_ss($_POST["gender"]);
}

function pp_ss($rk){
    $rk=stripslashes($rk);
    $rk=trim($rk);
    $rk=htmlspecialchars($rk);
    return $rk;
}


?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

<input type="text" name="name" placeholder="Enter your name" required='True' required title='Please enter your name'> <br> <br>

<input type="text" name="age" placeholder="Enter your age"> <br> <br>


Gender : Male <input type="radio" name="gender" value="male"> Female <input type="radio" name="gender" value="female"> Transgender <input type="radio" name="gender" value="transgender"><br> <br>

<input type="text" name="nationality" placeholder="Your nationality"> <br> <br>
<input type="submit" value="submit">
    


</form>
<br> <br>

<?php
echo 'Name'.' '.":".' '. $name;
echo '<br>';
echo 'Age'.' '.":".' '. $age;
echo '<br>';
echo 'Gender'.' '.":".' '. $gender;
echo "<br>";
echo 'Nationality'.' '.":".' '. $nationality;


?>




    
</body>
</html>