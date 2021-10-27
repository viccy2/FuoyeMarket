<?php
require 'dc.php';
require 'create_avatar.php';
session_start();
// function for form validation
function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
}

$uname    =    strtolower(validateData($_POST['username']));
$email    =    strtolower(validateData($_POST['email']));
$password =    md5(strtolower(validateData($_POST['password'])));  
$validate =    uniqid(mt_rand(1));
date_default_timezone_set('Africa/Lagos');
$date     =      date("Y-m-d");
$time     =      date("h:i:sa");
$user_id  =uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10)).uniqid(mt_rand(10));
$nameFirstChar = strtoupper($uname[0]);
$target_path = createAvatarImage($nameFirstChar);

  $sql = mysqli_query($con, "select email from sellers_tb where email='{$email}'");
  if (mysqli_num_rows($sql)>0) 
 	{
            $msg="This email exist";
            echo $msg;
    }
    else{
           $save=mysqli_query($con, "insert into sellers_tb(firstname,lastname,username,email,password,picture,phone,gender,state,country,date,time,validation_code,question,answer,user_id,active)values('nill','nill','$uname','$email','$password','$target_path','nill','nill','nill', 'nill','$date','$time','$validate','nill','nill','$user_id',0)");
            
            $msg= "Account created successfully";
            echo $msg;

    }
?>