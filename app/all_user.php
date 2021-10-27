<?php
session_start();
if (isset($_SESSION['seller_id'])){ 
 require 'dc.php';
	$s = $_POST['first'];
    $quest= mysqli_query($con,"select * from sellers_tb where username like '%".$s."%' and validation_code=0 and active=1 ");
	$data=mysqli_fetch_all($quest, MYSQLI_ASSOC);

$da=json_encode($data);
echo $da;
?>
  <?php
}
else{
  header("location:admin_log");
}
?>