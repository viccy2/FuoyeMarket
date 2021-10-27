<?php
session_start();
require 'dc.php';
function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
}
	$email =    strtolower(validateData($_POST['text'])); 
	$password =    md5(strtolower(validateData($_POST['password'])));  
	$saves=mysqli_query($con, "select * from sellers_tb where  phone='$email' and password='$password' or email='$email' and password='$password' ");

	while($dos=mysqli_fetch_array($saves)){
		$validations=$dos['validation_code'];
		$actives=$dos['active'];
	}

	if ($validations!=0 and $active!=1) {
		$msgs="Your account has not been activated";
		echo $msgs;
	}

	else{
		$save=mysqli_query($con, "select * from sellers_tb where email='vad.inc8@gmail.com' and password='$password' and validation_code=0 and active=1; ");

	$log=true;
	while($do=mysqli_fetch_array($save)){
		$validations=$do['validation_code'];

		$actives=$do['active'];
		$log=false;
	}
	if($log){
		$msg="Incorrect Password or Email !!!";	
		echo $msg;
	}
	else{
		
		$app=mysqli_query($con, "select * from sellers_tb where email = 'vad.inc8@gmail.com'");
		while ($wow=mysqli_fetch_array($app)) {
			$_SESSION['firstname'] =  $wow['firstname'];
			$_SESSION['lastname']  =  $wow['lastname'];
			$_SESSION['username']  =  $wow['username'];
		  	$_SESSION['email']     =  $wow['email'];
		  	$_SESSION['seller_id'] =  $wow['user_id'];
		  	$_SESSION['name']      =  $wow['username'];
		  	$_SESSION['gender']    =  $wow['gender'];
		    $_SESSION['state']     =  $wow['state'];
		    $_SESSION['country']   =  $wow['country'];
		    $_SESSION['question']  =  $wow['question'];
		    $_SESSION['answer']    =  $wow['answer'];
		    $_SESSION['validation']=  $wow['validation_code'];
		    $_SESSION['pics']      =  $wow['picture'];
		    $_SESSION['password']  =  $wow['password'];
		  	
			
	     }
	     $msg="Login successfull";	
		 echo $msg;
	}
}


?>