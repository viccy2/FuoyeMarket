<!DOCTYPE html>
<html>
<head>
	<title>FuoyeMarket || Forgot Password</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
     <!--============================STYLES=====================================================-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/sb-admin-2.css"> -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/preloader.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="../css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="../css/notifications/notifications.css">
	<script src="../js/jquery.3.2.1.min.js"></script>
	<script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script>  


	
</head>
<!--=================================BODY================================================-->
<body >
	<script>
		$(document).ready(function() {
	   $("#SignIn").click(function(){
		var form = $("#signinform");
        var formData = new FormData($("#signinform")[0]);
		  $.ajax({
              url: form.attr("action"),
              type: 'POST',
              data: formData,

               success: function(data){
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
                var match = data.match("Activation successfull");
                var matchs = data.match("Incorrect email or activation code");
                var matches = data.match("Your account has been activated already");
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                    setTimeout(function(){
                window.location.href = '../app/account';
                },5000);
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                };
                if (matches!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                };

                  
                  
               
                var jarvis = new Artyom();
                 jarvis.say(data);
            
                
                  
              },
              error: function(data){
                alert("not success");
              },
             
              cache: false,
              contentType: false,
              processData: false
            });

   });

		});
	</script>
	<div class="container" style="background: -webkit-linear-gradient(top,#673AB7,rgba(0, 0, 0, 0.15));opacity:0.9;">
		<div class="forms-container">
			<div class="signin-signup" style="margin-top:-80px">
				<form action="forgot.php" class="sign-in-form" method="post" id="signinform">
					<h2 class="title" style="color:white;">Forgot password</h2>
					<div class="input-field">
						<i class="fa fa-envelope"></i>
						<input type="email" name="text" placeholder="Email" required>
					</div>
					
					<input type="button" value="get reset link" class="btn solid" id="SignIn">

					<p class="social-text" style="color:white;"> Already have an account ?  </p><a href="account" style="color:white;">click here</a>
					
				</form>
				
				
			</div>
		</div>
		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>Forgot password </h3>
					<p>Create account on <b>FuoyeMarket</b>, get access to showcase your products .</p>
					
				</div>
				<img src="../images/k.png" class="image" alt="">
			</div>
			<!-- <div class="panel right-panel">
				<div class="content">
					<h3>Already have an account ?</h3>
					<p>Sign in now to upload your products.</p>
					<button class="btn transparent" id="sign-in-btn">Sign In</button>
				</div>
				<img src="../images/f.png" class="image" alt="">
			</div> -->
		</div>
		
	</div>
	<div style="position:fixed;bottom:0;width:100%;color:#673AB7;height:30px;padding: 0.4rem">
		<center>
		 <span ><b>FuoyeMarket</b> &copy;  2021</b></span></center>
	</div>
	<!--============================SCRIPTS=====================================================-->
	
 <script src="../js/app.js"></script>
 <script src="../js/notifications/Lobibox.js"></script>
 <script src="../js/sb-admin-2.js"></script>
  
</body>
</html>