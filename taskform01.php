<!DOCTYPE html>
<html lang="en">
<head>
  
 
    <link rel="stylesheet" href="taskletter.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="pp"></div>
    <div class="top"><h1>Patient Enrollment Form</h1></div>

    <?php


    $name=$dob='';
    $nameErr=$empn=$dberr="";

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=rp_fs($_POST['name']);

        if(empty(rp_fs($_POST['name']))){
            $empn='fill name field ';
        }

        else{
            $name=rp_fs($_POST['name']);
        }



        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
           
           $nameErr="only letters allowed * ";
           $name='';
            
        }
        else{
            $name=rp_fs($_POST['name']);
        }


        $dob=rp_fs($_POST['db']);

        if(empty(rp_fs($_POST['db']))){
            $dberr='enter your dob ';
            $name='';
        }

        else{
            $dob=rp_fs($_POST['db']);
            
        }






    }




    function rp_fs($data){
        $data=stripslashes($data);
        $data=trim($data);
        $data=htmlspecialchars($data);
        return $data;
    }


    ?>

    <div class="forms">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

<!-- name input section -->
<input type="text" name='name' class='inp' placeholder="enter your name">

<div class="ne">
<?php echo $nameErr; echo $empn;  ?> <br>

</div> <br>

<!-- date input -->

<input type="date" class="inp" name='db'>

<div class="ne">
<?php echo $dberr;  ?> <br>

</div> <br>




<input type="submit" value="submit"> <br>


 <div class="phd">
 <?php

echo "<h1>$name</h1>";
echo '<br>';
echo "<h1>$dob</h1>";



?>

 </div>


</form>



    </div>

 




  
   

    
</body>
</html>