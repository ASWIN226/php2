<!DOCTYPE html>
<html lang="en">
<head>
   
 
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="taskletter.css">
</head>
<body>
    <div class="pp"></div>
    <div class="top"><h1>Patient Enrollment Form</h1></div>

    <?php


    $name=$dob=$mail=$insurance=$sele=$gender='';
    $nameErr=$empn=$dberr=$mailerr=$inserr=$selErr=$gendererr="";

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

        if($name==""){
            $dob="";
        }


        $mail=rp_fs($_POST['email']);

        if(empty(rp_fs($_POST['email']))){
            $mailerr='enter your email';
            $mail='';
            $name='';
            $dob='';
            
            
        }
        else{
            $mail=rp_fs($_POST['email']);
        }

        $insurance=rp_fs($_POST['ins']);

        if(empty(rp_fs($_POST['ins']))){
            $inserr='required insurance name';
            $mail='';
            $name='';
            $dob='';
        

        }
        if($mail=='' || $name=='' || $dob=='' ){
            $insurance="";
        }
        else{
            $insurance=rp_fs($_POST['ins']);

        }


        $sele=rp_fs($_POST["st"]);
        // if(empty(rp_fs($_POST["st"]))){
        //     $selErr='select state';
          
        // }

        if($sele==''){
            $selErr='select state';
            $mail='';
            $name='';
            $dob='';
            $insurance='';
        }

        if($mail=='' || $name=='' || $dob=='' || $insurance=='' ){
            $sele='';
        }

       
        else{
            $sele=rp_fs($_POST['st']);

        }

        $gender=rp_fs($_POST["gender"]);

        if($gender==''){
            $gendererr='select gender';
            $mail='';
            $name='';
            $dob='';
            $insurance='';
            $sele='';
        }

        if($mail=='' || $name=='' || $dob=='' || $insurance=='' || $sele=='' ){
            $gender='';
        }

       
        else{
            $gender=rp_fs($_POST['gender']);

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

<!-- email -->

<input type="email" name='email' class='inp' placeholder='enter your email id'> 
<div class="ne">
<?php echo $mailerr;  ?> <br>


</div> <br> 
<!-- state -->
<select name="st" class='sl'>
    <option value="">select state</option>
    <option value="TAMILNADU">TAMILNADU</option>
    <option value="kerala">KERALA</option>
    <option value="Pondichery">Pondichery</option>


</select>

<div class="ne">
<?php echo $selErr;  ?> <br> <br>

<!-- gender -->

<select name="gender" class='sl'>
    <option value="">Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Transgender">Transgender</option>


</select>
<div class="ne">
<?php echo $gendererr;  ?> <br>



</div>

<br>


<input type="submit" value="submit" class="sbmt"> <br>



<!-- insurance -->
<div class='samp'>
    <input type="text" class='inp' placeholder='insurance name' name='ins'>

    <div class="ne">
<?php echo $inserr;  ?> <br> <br>



<!-- Notes -->
 <textarea name="tex" class='tk' cols='35' rows='5' placeholder='ask your questions ? '></textarea>
 



 
</div>
















</form>



    </div>




    
 <div class="phd">
 <?php

echo "<h5>$name</h5>";

echo "<h5>$dob</h5>";

echo "<h5>$mail</h5>";

echo "<h5>$insurance</h5>";

echo "<h5>$sele</h5>";

echo "<h5>$gender</h5>";






?>

 </div>



 




  
   

    
</body>
</html>