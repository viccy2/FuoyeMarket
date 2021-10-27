<?php
session_start();
require 'dc.php';
	$s = $_POST['first'];
	$_SESSION['category'];
	$_SESSION['u_id'];
    $quest= mysqli_query($con,"select * from subproducts_tb where company_name = '$s'  ");
	$data=mysqli_fetch_all($quest, MYSQLI_ASSOC);

$da=json_encode($data);
echo $da;
?>
