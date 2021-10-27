<?php
session_start();
require 'dc.php';
function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
} 
$uname = strtolower(validateData($_POST['username']));  

if(!empty($uname))	{
		$st=mysqli_query($con,"update sellers_tb set username = '$uname' where user_id='$_SESSION[seller_id]' and active = 1");
		echo "profile updated";
		$saves=mysqli_query($con, "select * from sellers_tb where user_id='$_SESSION[seller_id]' and active=1");
		while($dos=mysqli_fetch_array($saves)){
			$_SESSION['username']  =  $dos['username'];
			}

}
else{
	echo "fill all inputs";
}