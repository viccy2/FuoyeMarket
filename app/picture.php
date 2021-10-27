<?php
session_start();
$id=$_POST['id'];
$_SESSION['seller_id'];
require 'dc.php';
$target_dir = "profile-pics/";
$target_file = strtolower($target_dir . basename($_FILES["fileToUpload"]["name"]));
$time = time();
$image_name = $_FILES["fileToUpload"]["name"];
$image_type = $_FILES["fileToUpload"]["type"];
$tmp_name =  $_FILES["fileToUpload"]["tmp_name"];
$image_explode = explode('.', $image_name);
$image_ext = end($image_explode);
$extensions = ['png', 'jpeg', 'jpg'];
$new_image =  $time.$image_name;

if ($target_file=="profile-pics/") {
	echo "select an image";
}
else{
	$st=mysqli_query($con, "update product_tb set display_pic ='profile-pics/$new_image' where seller_id='$_SESSION[seller_id]' and product_id = '$id'");
if ($st) {
	move_uploaded_file($tmp_name,"profile-pics/".$new_image);
	echo "updated successfully";
	$set=mysqli_query($con, "select * from product_tb where product_id = '$id'");
	 while ($wow=mysqli_fetch_array($set)) {
           $_SESSION['company_pic'] = $wow['display_pic'];
           }
	
}
else{
	echo "error";
}
}


			
			




?>