<?php
session_start();
$id=$_POST['id'];
$_SESSION['seller_id'];
require 'dc.php';
function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
}
$website = strtolower(validateData($_POST['website'])); 
$whatsapp = strtolower(validateData($_POST['whatsapp'])); 
$facebook = strtolower(validateData($_POST['facebook'])); 
$instagram = strtolower(validateData($_POST['instagram']));
$contact = strtolower(validateData($_POST['contact']));
$address = strtolower(validateData($_POST['address']));

$st=mysqli_query($con,"update product_tb set website='$website', whatsapp ='$whatsapp', facebook ='$facebook', instagram = '$instagram', contact = '$contact', address = '$address' where seller_id='$_SESSION[seller_id]' and product_id = '$id'");
if ($st) {
	echo "details added";
}
else{
	echo "error";
}
			
			




?>