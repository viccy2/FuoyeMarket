<?php
session_start();
if (isset($_SESSION['seller_id'])){ 
 require 'dc.php';
  $chat_id = $_POST['id'];
  $del = mysqli_query($con, "delete  from sellers_tb where user_id='$chat_id' ");
  if($del){
    $sa="user deleted";
    echo $sa;
      }
    
?>

<?php
}
else{
  header("location:admin_log");
}
?>