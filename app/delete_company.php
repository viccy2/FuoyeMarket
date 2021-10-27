<?php
session_start();
if (isset($_SESSION['seller_id'])){ 
 require 'dc.php';
  $chat_id = $_POST['id'];
 	$_SESSION['seller_id'];
  $del = mysqli_query($con, "delete from product_tb where (seller_id='$_SESSION[seller_id]') and (product_id='$chat_id') ");
  if($del){
    $sa="account deleted";
    echo $sa;
      }
    
?>

<?php
}
else{
  header("location:account");
}
?>