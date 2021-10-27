<?php
	session_start();
	require 'dc.php';
	function validateData($data)
{
    $resultData = htmlspecialchars(stripslashes(trim($data)));
    return $resultData;
}
	$email         =   strtolower(validateData($_POST['text'])); 
	$activate_code = validateData($_POST['code']);
	$saves         = mysqli_query($con, "select * from sellers_tb where email='$email'");
	
	while ($k=mysqli_fetch_array($saves)) {
		$emails=$k['email'];
		$acts_code=$k['validation_code'];
		$active=$k['active'];
	}
	if (!empty($activate_code) && !empty($email)) {
		if($emails='$email' and $active==1 and $acts_code==0){
		$tes="Your account has been activated already";
		echo $tes;
		
	}
	elseif ($active==0 and $activate_code==$acts_code) {
		$st=mysqli_query($con,"update sellers_tb set validation_code=0,active=1 where email='$email'");
			echo "Activation successfull";
			
			
	}
	else{
		$t="Incorrect email or activation code";
		echo $t;
	}
	}
	else{
	 	$t="All fields are required";
		echo $t;
	}
	

	

?>

