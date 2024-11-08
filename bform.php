<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $name="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=test_input($_POST["name"]);
        $email=test_input($_POST["emai"]);
        $gender=test_input($_POST["gender"]);
        // $comment=test_input($_POST["comment"]);
        // $website=test_input($_POST["website"]);

    }

function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;


}


?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

Name: <input type="text" name="name"> <br>
email: <input type="email" name="emai"> <br>
gender: male<input type="radio" value="male" name="gender"> 
<input type="radio" value="female" name="gender">


<input type="submit" value="submit" name="submit">




</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "<h2>your</h2>";
    echo $name;
    echo "<br>";

    echo $gender;
    echo '<br>';

    echo $email;
 
    
}


?>


    
</body>
</html>