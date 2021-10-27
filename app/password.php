<?php
session_start();
require 'dc.php';
function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
} 
$password1 =    md5(strtolower(validateData($_POST['password1'])));
$password2 =    md5(strtolower(validateData($_POST['password2'])));  
$saves=mysqli_query($con, "select * from sellers_tb where user_id='$_SESSION[seller_id]' and username='$_SESSION[username]'");
while($dos=mysqli_fetch_array($saves)){
		$oldpwd=$dos['password'];
		
	}
if(!empty($password1) && !empty($password2))	{
	if($password1==$password2){
		$st=mysqli_query($con,"update sellers_tb set password = '$password1' where user_id='$_SESSION[seller_id]' and username='$_SESSION[username]'");
		echo "password changed";
	}
	else{
		echo "new passwords do not match";
	}

}
else{
	echo "fill all inputs";
}