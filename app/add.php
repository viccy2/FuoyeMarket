<?php
session_start();
if (isset($_SESSION['seller_id'])){ 
 require 'dc.php';
	$s = $_POST['first'];
    $quest= mysqli_query($con,"select * from product_tb where product_id = '$s' and seller_id = '$_SESSION[seller_id]' ");
	$data=mysqli_fetch_all($quest, MYSQLI_ASSOC);

$da=json_encode($data);
echo $da;
?>
  <?php
}
else{
  header("location:account");
}
?>