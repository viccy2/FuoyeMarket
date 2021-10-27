<?php
session_start();
if (isset($_SESSION['seller_id'])){ 
  require 'dc.php';
  $id = $_POST['id'];
  $_SESSION['seller_id'];
  function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
}
$name = strtolower(validateData($_POST['name'])); 
$product_category= strtolower(validateData($_POST['product_category'])); 
$location = strtolower(validateData($_POST['location'])); 

if (!empty($name) && !empty($product_category) && !empty($location)) {
	 $st=mysqli_query($con,"update product_tb set company_name='$name', product_category ='$product_category', location ='$location' where seller_id='$_SESSION[seller_id]' and product_id = '$id'"); 
	echo "updated successfully";
}
elseif (empty($name)) {
	$st=mysqli_query($con,"update product_tb set product_category ='$product_category', location ='$location' where seller_id='$_SESSION[seller_id]' and product_id = '$id'"); 
	echo "updated successfully";
}
elseif (empty($product_category)) {
	$st=mysqli_query($con,"update product_tb set company_name='$name', location ='$location' where seller_id='$_SESSION[seller_id]' and product_id = '$id'"); 
	echo "updated successfully";
}
elseif (empty($location)) {
	$st=mysqli_query($con,"update product_tb set company_name='$name', product_category ='$product_category' where seller_id='$_SESSION[seller_id]' and product_id = '$id'"); 
	echo "updated successfully";
}
else{
	echo "updated successfully";
}

// $st=mysqli_query($con,"update product_tb set company_name='$name', product_category ='$product_category', location ='$location' where seller_id='$_SESSION[seller_id]' and product_id = '$id'"); 
// if ($st) {
// 	echo "updated successfully";
// }
// else{
// 	echo "error";
// }
	

?>

<?php
}
else{
  header("location:account");
}
?>