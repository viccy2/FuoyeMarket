<?php
require 'dc.php';
	$s = $_POST['first'];
    $quest= mysqli_query($con,"select * from product_tb where company_name like '%".$s."%'  or product_category like '%".$s."%' ");
	$data=mysqli_fetch_all($quest, MYSQLI_ASSOC);

$da=json_encode($data);
echo $da;
?>
