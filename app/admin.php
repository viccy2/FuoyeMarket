<?php
session_start();
if (isset($_SESSION['email']) || isset($_COOKIE['email']))
 {
require 'dc.php';
        $_SESSION['email'];
        $_SESSION['username'];
        $_SESSION['pics'];
        $_SESSION['user_id'];
      



  
?>
<!DOCTYPE html>
<html>
<head>
	<title>FuoyeMarket || Admin Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
      <link rel="icon" type="image/x-icon" href="../images/fm.jpeg" >
     <!--============================STYLES=====================================================-->
<!--     <link rel="stylesheet" type="text/css" href="../css/main.css"> -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="../md/css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
  <link rel="stylesheet" type="text/css" href="../css/modal.css">
  <link rel="stylesheet" href="../css/notifications/Lobibox.min.css">
  <link rel="stylesheet" href="../css/notifications/notifications.css">
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="../md/vendor/fontawesome-free/css/all.css" rel="styleshet" type="text/css">
	<script src="../js/jquery.3.2.1.min.js"></script>
	<script src="../artyom.js-master/public/artyom.window.js"></script>
  <script type="../artyom.js-master/public/artyom.js"></script>  
<style>
  form{
  display: flex;
  align-items:center;
  justify-content:center;
  flex-direction:column;
  padding: 0.5rem;
  overflow:hidden;
  grid-column: 1/2;
  grid-row:1/2;
  transition: 0.2s 0.7s ease-in-out;

}
form.sign-in-form{
  z-index: 2;

}
form.sign-up-form{
  z-index: 1;
  opacity:0;
  
}
.title{
  font-size: 2.2rem;
  color: #444;
  margin-bottom: 10px;
}
.input-field{
  max-width:380px;
  width:100%;
  height:55px;
  background-color:#fff;
  margin:10px 0;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0rem;
}
.input-field i {
  text-align: center;
  line-height: 55px;
  color:#673AB7;
  font-size: 1.1rem;
}
.input-field input{
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 300;
  font-size: 15px;
  color:#333;
}

.input-field::placeholder{
  color: #673AB7;
  font-weight:500;
}
</style>

	
</head>
<!--=================================BODY================================================-->
<body onload="searchAll('');">


<!--=======================================NAV=============================================-->

 		<!-- Sidebar -->
<div id="wrapper">

    <ul class="navbar-nav  sidebar sidebar-dark  toggled accordion" id="accordionSidebar" style=" background-color:#673AB7;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
        <p style="font-size:16px;margin-top:25px;color:white;">F<span style="text-transform:lowercase;font-size:16px;margin-top:25px;color:white;">market</span></p>
        </div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active" style="">
        <a class="nav-link" href="#">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span class="text-gray-500">Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-gray-500">
        User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item ">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-fw fa-plus"></i>
          <span class="text-gray-500">product</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded" style="background:<?php echo $_SESSION['bodybgcolor']; ?>">
            <h6 class="collapse-header text-gray-600" style="">Product :</h6>
            <a class="collapse-item text-gray-500" href="#" data-toggle="modal" data-target="#addproductModal" style="color:grey">Add product</a>
          
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading text-gray-500">
        Settings
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fa fa-fw fa-cog"></i>
          <span class="text-gray-500">Account settings</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            <h6 class="collapse-header text-gray-600" style="">User Account:</h6>
            <a class="collapse-item text-gray-500" href="#" data-toggle="modal" data-target="#profileModal">Edit Profile</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header text-gray-600">Login Settings:</h6>
            <a class="collapse-item text-gray-500" href="#" data-toggle="modal" data-target="#passwordModal"style="color:grey">Edit Password</a>
            
          </div>
        </div>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

 <!-- End sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
 <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light  topbar mb-4 " style="background-color:#673AB7">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" style="color:<?php echo $_SESSION['color']?>;background:white">
            <i class="fa fa-bars" style=""></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small searchnow" placeholder="Search for all Users"  onkeyup="searchAll(this.value)" id="search" >
             
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto" >

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-search fa-fw" style="color:white"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in animated zoomIn" aria-labelledby="searchDropdown">

                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small searchnow" placeholder="Search for all Users"  onkeyup="searchAll(this.value)" aria-label="Search" aria-describedby="basic-addon2" id="search2">
                   <!--  <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fa fa-search fa-sm"></i>
                      </button>
                    </div> -->
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
             <?php
             $t = $_SESSION['color'];
              require 'dc.php';
              $result = mysqli_query($con, "select * from clients_tb where email !='$_SESSION[email]' and active=1");
              while ($r = mysqli_fetch_array($result)) {
              $id = $r ['client_id'];
               $_SESSION['las']=$r['passport'];
              }

              ?>
    

        <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell fa-fw" style="color:white"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?php echo $_SESSION['number_request']; ?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in animated zoomIn" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header text-gray-400" style="background: <?php echo $_SESSION['headerbgcolor'];?>; border-color: white">
                  Notifications
                </h6>
                 <a class="dropdown-item  snotes" href="#">
                  
                </a>

               
              
        
            </div>
            </li>

            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small"><?php echo $_SESSION['username']; ?></span>
                <img class="" >
                 <?php echo "<img src='".$_SESSION['pics']."'  style='width:40px;height:40px;border-radius: 50%' >";?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in animated zoomIn" aria-labelledby="userDropdown">
               
               
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-gray-600" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600" style="color:red"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
<!--=======================================/NAV=============================================-->

<!--=======================================BODY=============================================-->
  <div class="container" style="margin-top:00px">

  <div id="displaybox"></div>

  </div>

</div>
</div>
</div>

<!--=======================================/BODY=============================================-->












<!--=======================================/BODY=============================================-->
<!--=======================================FOOTER=============================================-->
<div style="position:fixed;bottom:0;width:100%;color:#673AB7;height:30px;padding: 0.4rem">
    <center>
     <span ><b>FuoyeMarket</b> &copy;  2021 Powered by <b><a href="https://vaad.netlify.app/" style="color:#673AB7">VAD.INC</a></b></span></center>
  </div>
<!--=======================================/FOOTER=============================================-->






  




<!--=======================================MODALs=============================================-->

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:15pc;color:<?php echo $_SESSION['color'] ?>;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor'] ?>;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are you ready to Logout</div>
        <div class="modal-footer">
         <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn" href="" id="sub">Logout</button>
         
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:6pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change password </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="passwordsend" method="post" action="password.php">
          <div class="input-field">
            <i class="fa fa-lock"></i>
            <input type="password" name="password1" placeholder="Enter new password" required="required">
          </div>
          <div class="input-field">
            <i class="fa fa-lock"></i>
            <input type="password" name="password2" placeholder="Confirm new password" required="required">
          </div>
            
          </form>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn" href="" id="sub2">Save changes</button>
         
        </div>
      </div>
    </div>
  </div>


 <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:6pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit profile </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="editprofile" method="post" action="profile.php">
          <div class="input-field">
            <i class="fa fa-user"></i>
            <input type="text" name="username" placeholder="Enter new username" required="required">
          </div>
         
            
          </form>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn" href="" id="sub3">Save changes</button>
         
        </div>
      </div>
    </div>
  </div>



 <div class="modal fade" id="addproductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:6pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add product</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="productreg" method="post" action="product.php">
          <div class="input-field">
            <i class="fa fa-user"></i>
            <input type="text" name="company" placeholder="Enter company name" required="required">
          </div>
           <div class="input-field">
            <i class="fa fa-book"></i>
             <select class="form-control" name="product_category" id="category" required>
                <option value="" selected disabled>Select product's category</option>
                <option value="Food/Beverages">Food/Beverages</option>
                <option value="Phones/Gadgets/Smart Watches">Phones/Gadgets/Smart Watches</option>
                <option value="Jewelries/Accessories">Jewelries/Accessories</option>
                <option value="Cosmetics/Make-up">Cosmetics/Make-up</option>
                <option value="Fashion Designing">Fashion Designing</option>
                <option value="Barbing/Hair-styling">Barbing/Hair-styling</option>
                <option value="Wears/Clothes/Shoes">Wears/Clothes/Shoes</option>
                <option value="Bags/Luggages">Bags/Luggages</option>


                
              </select>
          </div>
           <div class="input-field">
            <i class="fa fa-location-arrow"></i>
             <select class="form-control" name="location" id="category" required>
                <option value="" selected disabled>Select location</option>
                <option value="Oye">Oye</option>
                <option value="Ikole">Ikole</option>
                 <option value="Ikole & Oye">Ikole & Oye</option>
              </select>
          </div>
         
            
          </form>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn" href="" id="sub4">Save changes</button>
         
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:15pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background:<?php echo $_SESSION['bodybgcolor']; ?>;color:<?php echo $_SESSION['color']; ?>;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Want to delete User?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
          <button class="btn text-gray-600" data-dismiss="modal" >Cancel</button>
        <button class="btn text-gray-600" onclick="deleteUser()" id="leave_group">Delete</button>
          
        </div>
      </div>
    </div>
  </div>

   <div class="modal fade" id="companyDetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:3pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add / Update Details</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="details" method="post" action="details.php">
          <input type="text" name="id" value="" id='addDet' hidden>
          <div class="input-field">
            <i class="fa fa-globe"></i>
            <input type="text" name="website" placeholder="Website" required="required" id="website" >
          </div>
          <div class="input-field">
            <i class="fa fa-whatsapp"></i>
            <input type="text" name="whatsapp" placeholder="whatsapp page link" required="required" id="whatsapp">
          </div>
          <div class="input-field">
            <i class="fa fa-facebook"></i>
            <input type="text" name="facebook" placeholder="facebook page link" required="required" id="facebook">
          </div>
          <div class="input-field">
            <i class="fa fa-instagram"></i>
            <input type="text" name="instagram" placeholder="instagram page link" required="required" id="instagram">
          </div>
           <div class="input-field">
            <i class="fa fa-phone"></i>
            <input type="text" name="contact" placeholder="contact number" required="required" id="contact">
          </div>
           <div class="input-field">
            <i class="fa fa-location-arrow"></i>
            <input type="text" name="address" placeholder="Address" required="required" id="address">
          </div>
           
         
            
          </form>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn" href="#" onclick="addDetails()">Save changes</button>
         
        </div>
      </div>
    </div>
  </div>

   <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:3pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Company Info</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="edits" method="post" action="edit_company.php">
          <input type="text" name="id" value="" id='addDets' hidden>
          <div class="input-field">
            <i class="fa fa-globe"></i>
            <input type="text" name="name" placeholder="Company name" required="required" id="cnm">
          </div>
         <div class="input-field">
            <i class="fa fa-book"></i>
             <select class="form-control" name="product_category" id="categorys" required>
                <option value="" selected disabled>Select product's category</option>
                <option value="Food/Beverages">Food/Beverages</option>
                <option value="Phones/Gadgets">Phones/Gadgets/Smart Watches</option>
                <option value="Jewelries/Accessories">Jewelries/Accessories</option>
                <option value="Cosmetics/Make-up">Cosmetics/Make-up</option>
                <option value="Fashion Designing">Fashion Designing</option>
                <option value="Barbing/Hair-styling">Barbing/Hair-styling</option>
                <option value="Wears/Clothes/Shoes">Wears/Clothes/Shoes</option>
                <option value="Bags/Luggages">Bags/Luggages</option>


                
              </select>
          </div>
        <div class="input-field">
            <i class="fa fa-location-arrow"></i>
             <select class="form-control" name="location" id="locations" required>
                <option value="" selected disabled>Select location</option>
                <option value="Oye">Oye</option>
                <option value="Ikole">Ikole</option>
                 <option value="Ikole & Oye">Ikole & Oye</option>
              </select>
          </div>
          </form>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn" href="#" onclick="editSave()">Save changes</button>
         
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="picModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true " style="margin-top:3pc;">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Company Picture</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="picsaves" action="picture.php" method="post">
          <input type="text" name="id" value="" id='addDetss' hidden>
        
              <div class="">
      <center>
          <input type="file" class="inputfile" name="fileToUpload" id="your_picture"  onchange="showPreview(this);" data-multiple-caption="{count} files selected" hidden />
              <label for="your_picture">
              <figure id="meme-bg-target">
                  <img src="../images/your-picture.png" alt="" class="your_picture_image" style="height:100px;width:100px;border-radius:50%">
                   <p class="text-gray-500">Choose Picture</p>
              </figure>
            
          </label>
           <script>
    function showPreview(objFileInput) 
{
    if (objFileInput.files[0]) 
    {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            $("#meme-bg-target img").attr('src', e.target.result);
        }
        fileReader.readAsDataURL(objFileInput.files[0]);
    }
}
           </script> 
           </center>  

          </div>
         
      
       
          </form>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Cancel</button>
        <button class="btn" href="#" onclick="picSave()">Save changes</button>
         
        </div>
      </div>
    </div>
  </div>
<!--=======================================END MODAL=============================================-->
<!--=======================================AJAX=============================================-->

                       <!-- LOGOUT-->
<script>
    $("#sub").click(function(){
        var form = $("#logouts");
        var formData = new FormData($("#logouts")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
              var b = data;
              var match = data.match("Logout successfully");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
                location.reload(true);
                },5000);
                  
                };
               
                var jarvis = new Artyom();
                 jarvis.say("Logout successfully");
                
              },
              error: function(data){
                alert("not success");
              },
              cache: false,
              contentType: false,
              processData: false
            });

         });

</script>

                    <!-- <CHANGE PASSWORD> -->
  <script>
    $("#sub2").click(function(){
        var form = $("#passwordsend");
        var formData = new FormData($("#passwordsend")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
              var b = data;
              var match = data.match("password changed");
              var matchs = data.match("new passwords do not match");
              var matchess = data.match("fill all inputs");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
                
                },5000);
                  
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                };
                 if (matchess!=null) {
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

</script>
                   <!-- <EDIT PROFILE> -->
  <script>
    $("#sub3").click(function(){
        var form = $("#editprofile");
        var formData = new FormData($("#editprofile")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
              var b = data;
              var match = data.match("profile updated");
              var matchs = data.match("new passwords do not match");
              var matchess = data.match("fill all inputs");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
                location.reload(true);
                },5000);
                  
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                };
                 if (matchess!=null) {
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

</script>

                   <!-- <PRODUCT> -->
  <script>
    $("#sub4").click(function(){
        var form = $("#productreg");
        var formData = new FormData($("#productreg")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
              var b = data;
              var match = data.match("Product created");
              var matchs = data.match("new passwords do not match");
            
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
                location.reload(true);
                },5000);
                  
                };
                if (matchs!=null) {
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

</script>
                  <!-- < COMPANY DETAILS> -->
 <script>
      function addDetails(){
     $(document).ready(function(){
        var form = $("#details");
        var formData = new FormData($("#details")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                $("#main").show();
                $("#loader").hide();
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
               var match = data.match("details added");
               var matchs = data.match("error");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
               location.reload(true);
                },5000);
                  var jarvis = new Artyom();
                 jarvis.say(data);
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                   var jarvis = new Artyom();
                 jarvis.say("Already a member");
                };
               
                
                
              },
              error: function(data){
                alert("not success");
              },
              cache: false,
              contentType: false,
              processData: false
         

         }); 
        }); 
        };
 </script>
               <!-- < EDIT COMPANY> -->
 <script>
      function editSave(){
     $(document).ready(function(){
        var form = $("#edits");
        var formData = new FormData($("#edits")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                $("#main").show();
                $("#loader").hide();
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
               var match = data.match("updated successfully");
               var matchs = data.match("error");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
               location.reload(true);
                },5000);
                  
                  var jarvis = new Artyom();
                 jarvis.say(data);
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                   var jarvis = new Artyom();
                 jarvis.say("Already a member");
                };
               
                
                
              },
              error: function(data){
                alert("not success");
              },
              cache: false,
              contentType: false,
              processData: false
         

         }); 
        }); 
        };
 </script>
              <!-- < EDIT COMPANY IMAGE> -->
 <script>
      function picSave(){
     $(document).ready(function(){
        var form = $("#picsaves");
        var formData = new FormData($("#picsaves")[0]);

         $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                $("#main").show();
                $("#loader").hide();
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
                var match = data.match("updated successfully");
                var matchs = data.match("error");
             
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
                location.reload(true);
                },5000);
                  
                };
                if (matchs!=null) {
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

            return false; 
        }); 
        };
 </script>
  <script>
    function searchAll(s)
          {
          c = s;
          $.post("all_user.php",{first:c},function(response) {
          var arr = JSON.parse(response);
          var i;
          var out = "";
          for(i = 0; i < arr.length; i++) {
          out += "<a><div class='chip animated zoomIn text-gray-600 ' style='color:#673AB7;width:100%;font-size:14px;background:rgba(0, 0, 0.2, 0.1); '><img src='"+arr[i].picture+"' alt='Person' width='96' height='96' data-target='#picModal' data-toggle='modal' onclick='pic("+arr[i].user_id+" )' style='cursor:pointer'>"+arr[i].username+" <div style='float:right'><button onclick='edit("+arr[i].user_id+" ) ' class='btn pd-setting-ed' ' data-target='#editModal' data-toggle='modal'><i class='fa fa-edit fa fa-sm' aria-hidden='true'></i></button><button onclick='add("+arr[i].user_id+" ) ' class='btn pd-setting-ed' ' data-target='#companyDetailsModal' data-toggle='modal'><i class='fa fa-plus fa fa-sm' aria-hidden='true'></i></button> <button onclick='deletes("+arr[i].user_id+")'; data-target='#deleteModal' data-toggle='modal' class='btn pd-setting-ed' style='float:right;height:50px'><i class='fa fa-trash fa fa-sm' aria-hidden='true'></i></button></div></div><br><br></a>";

            }
            $('#displaybox').html(out);
            });
            }
</script>
<script>
      function deleteUser(){
     $(document).ready(function(){
           var form = $("#deleteform");
        var formData = new FormData($("#deleteform")[0]);

          $.ajax({
              url: form.attr("action"),
              type: 'POST',
              enctype: 'multipart/form-data',
              data: formData,

              success: function(data){
                $("#main").show();
                $("#loader").hide();
                $("#error").show();
                $('#error').text('');
                $('#error').text(data);
                var b = data;
               var match = data.match("user deleted");
               var matchs = data.match("error");
               
                if (match!=null) {
                   $(this).hide();
                    Lobibox.notify('success', {
                    size: 'mini',
                    msg: data
                });
                var a =setTimeout(function(){
                 location.reload(true);
                },5000);
                  var jarvis = new Artyom();
                 jarvis.say("account deleted");
                };
                if (matchs!=null) {
                 var d= Lobibox.notify('error', {
                    size: 'mini',
                    msg: data
                });
                   var jarvis = new Artyom();
                 jarvis.say("error");
                };
               
                
                
              },
              error: function(data){
                alert("not success");
              },
              cache: false,
              contentType: false,
              processData: false
         

         }); 
        }); 
        };
       </script>
<script>
      function deletes(e) {
      alert(e);
    document.getElementById('del').value=e;
 };
</script>
<script>
    function add(e) {
    // alert(e);
    a = document.getElementById('addDet').value=e;
    c = a;
          $.post("add.php",{first:c},function(response) {
          var arr = JSON.parse(response);
          var i;
          var out = "";
          for(i = 0; i < arr.length; i++) {
            document.getElementById('website').value=arr[i].website;
            document.getElementById('whatsapp').value=arr[i].whatsapp;
            document.getElementById('facebook').value=arr[i].facebook;
            document.getElementById('instagram').value=arr[i].instagram;
            document.getElementById('contact').value=arr[i].contact;
            document.getElementById('address').value=arr[i].address;

          
            }
            
            });

 };
</script>
<script>
    function edit(e) {
    // alert(e);
    a = document.getElementById('addDets').value=e;
     c = a;
          $.post("add.php",{first:c},function(response) {
          var arr = JSON.parse(response);
          var i;
          var out = "";
          for(i = 0; i < arr.length; i++) {
            document.getElementById('cnm').value=arr[i].company_name;
            // document.getElementById('category').value=arr[i].product_category;
            // document.getElementById('locations').value=arr[i].location;
           

          
            }
            
            });
 
 };
</script>
<script>
    function pic(e) {
    // alert(e);
    a = document.getElementById('addDetss').value=e;
 
 };
</script>
<!--=======================================/AJAX=============================================-->
<!--=======================================AJAXFORM=============================================-->
 <form id="logouts" action="logout.php" method="post" hidden></form>
 <form action="delete_user.php" method="post" id="deleteform" hidde>
  <input type="text" name="id" id="del" hidde>
</form>

<!--=======================================/ajaxform=============================================-->
<script src="../md/js/sb-admin-2.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/notifications/Lobibox.js"></script>
</body>
<!--=================================/BODY================================================-->
</html>
            <?php
}
else{
  header("location:admin_log");
}
?>