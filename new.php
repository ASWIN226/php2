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
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=fn_gt($_POST['name']);
}

function fn_gt($out){
    $out=trim($out);
    $out=stripslashes($out);
    $out=htmlspecialchars($out);

    return $out;

}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method='post'>

<input type="text" name="name">
<input type="submit" value="submit">

</form>


<?php
echo $name;




?>
    
</body>
</html>