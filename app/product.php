<?php
session_start();
$_SESSION['seller_id'];
require 'dc.php';
function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
}
$company = strtolower(validateData($_POST['company'])); 
$category = strtolower(validateData($_POST['product_category'])); 
$location = strtolower(validateData($_POST['location'])); 

$save=mysqli_query($con, "insert into product_tb(seller_id,company_name,product_category,location,address,website,contact,whatsapp,facebook,instagram, display_pic)values('$_SESSION[seller_id]','$company','$category','$location','address','website page link','contact','whatsapp page link','facebook page link','instagram page link',' $_SESSION[pics] ')");
 $msg= "Product created";
 echo $msg;


$app=mysqli_query($con, "select * from product_tb where seller_id = '$_SESSION[seller_id]'");
		while ($wow=mysqli_fetch_array($app)) {
			$_SESSION['company_name']  =  $wow['company_name'];
			$_SESSION['product_name']  =  $wow['product_name'];
			$_SESSION['location']      =  $wow['location'];
		  	$_SESSION['address']       =  $wow['address'];
		  	$_SESSION['website']       =  $wow['website'];
		  	$_SESSION['contact_number']=  $wow['contact_number'];
		  	$_SESSION['product_id']    =  $wow['product_id'];
		   
		  	
			
	     }




?>