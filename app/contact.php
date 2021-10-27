<?php
session_start();
  require 'dc.php';
  $id=$_GET['user'];
  $_SESSION['u_id']=$id;
  $category=$_GET['category'];
  $cmpn= $_GET['cmpn'];
  $_SESSION['cmpn'] = $cmpn;
  $quest = mysqli_query($con,"select * from product_tb where seller_id ='$id' and product_category='$category' ");
  while ($r=mysqli_fetch_array($quest)) {
    $website =    $r['website']; 
    $whatsapp =   $r['whatsapp']; 
    $facebook =   $r['facebook']; 
    $instagram =  $r['instagram'];
    $contact =    $r['contact'];
    $address =    $r['address'];
    $company_name=$r['company_name'];
    // $_SESSION['cmpn']= $company_name;
    $_SESSION['display_pics'] = $r['display_pic'];
  }
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>FuoyeMarket || Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale="1">
     <!--============================STYLES=====================================================-->
  
  <link rel="stylesheet" type="text/css" href="../css/sb-admin-2.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">
  <link rel="stylesheet" type="text/css" href="../css/sliders.css">
  <link rel="stylesheet" type="text/css" href="../css/preloader.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
   <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
  <link href="../md/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script src="../js/jquery.3.2.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  

<style type="text/css">
    body{
   
      background-size: cover;
      -moz-background-size: cover;
     -webkit-background-size: cover;
     -o-background-size: cover;
     width: 100%;
     font-family:  'Poppins';
    font-size: 12px;
    min-height:100vh;
     max-height:1000vh;
     

    
    }
 .card__picture--2 {
 background-image: url(<?php echo $_SESSION['display_pics']; ?>),linear-gradient(to right top,#673AB7, rgba(0,0,0,0.2));
    height: 40vh;
  }
 </style>
</head>
<body onload="searchAll('');">
  
    <div id="myDiv">
 <nav class="navbar navbar-expand navbar-light  topbar mb-4 fixed-top " style=" color:#673AB7;background-color:#673AB7;height:70px">
<div>
   <a href="home"><i class="container-fluid fas fa-arrow-left fa-fw" style="color:white"></i></a>
</div>
         <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
           

            <!-- Nav Item - Video Call -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" >
            <div>
             <p style="text-align:center;color:white;margin-top:8px;font-size:14px;"><?php echo "$company_name"; ?></p>
             
              </div>
              </a>
              <!-- Dropdown - MVideo Call-->
             
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
          

          </ul>

        </nav></div>
      
 <section class="section-tours" style="margin-top:0px;">
 <div class="card__side card__side--front"  style="background:linear-gradient(to left top, #673AB7>, rgba(0,0,0,0.2));min-height:100vh;
     max-height:1000vh;">
 <div class="card__picture card__picture--2 "  >

  </div>
  <h4 class="card__heading" style="margin-top:40px">
  <span class="card__heading-span card__heading-span--2" style="background:#673AB7;font-family: inherit;font-size:20px"> Profile</span>
  </h4>
  <div class="card__details" style="color:gray">
      
    <div class="container-fluid" style="margin-top:-40px">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active text-gray-500" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>
                      <a class="nav-item nav-link text-gray-500" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Products</a>
                     
         
                    </div>
                  </nav>
                   
<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><br>
     
   <div class="payment-cart-pro mg-t-15 mg-b-30">
            
                    <div class="">
                        <div class="card payment-card responsive-mg-b-30 card border-left-primary shadow h-100 py-2'><div class='payment-inner-pro ">
                            <div class="payment-inner-pro ">
                           
                                <div class="text-gray-600">
                                    <div class="">
                                        <strong class="m-r-5">Website : </strong>
                                        <a class="" href="<?php echo $website ?>" rel="tooltip" title="Website page" style=";float:right"><?php echo $website; ?></a>
                                    </div><br><br>
                                    <div class="">
                                        <strong class="m-r-5">Whatsapp : </strong>
                                        <a class="" href="<?php echo $whatsapp ?>" rel="tooltip" title="Whatsapp page" style=";float:right"><?php echo $whatsapp ?></a>
                                    </div><br><br>
                                     <div class="">
                                        <strong class="m-r-5">Facebook : </strong>
                                        <a class="" href="<?php echo $facebook ?>" rel="tooltip" title="Facebook page" style=";float:right"><?php echo $facebook ?></a>
                                    </div><br><br>
                                    <div class="">
                                        <strong class="m-r-5">Instagram: </strong>
                                        <a class="" href="<?php echo $instagram ?>" rel="tooltip" title="Instagram page" style=";float:right"><?php echo $instagram ?></a>
                                    </div><br><br>
                                    <div class="">
                                        <strong class="m-r-5">Contact: </strong>
                                        <a class="" href="#" rel="tooltip" title="Contact Number" style=";float:right"><?php echo $contact ?></a>
                                    </div><br><br>
                                    <div class="">
                                        <strong class="m-r-5">Address: </strong>
                                        <a class="" href="#" rel="tooltip" title="Address" style=";float:right"><?php echo $address ?></a>
                                    </div><br><br>
                                    
                                </div>
                            </div>
                        </div>
                    </div></div>
</div>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><br>
  <input type="" name="" value="<?php echo $_SESSION[cmpn] ?>" id="next" hidden>
          <div class="payment-cart-pro  ">
            <div class="container-fluid text-gray-600">
            <div class="row" id="displaybox">

</div></div></div> 
</div>
             
                
            
                 
</div>
</div>
         

</div>
  </section>

              
                 
        
 


 
 

         
         
      
            
      
<!--===============================================================================================-->
         
  <!--===============================================================================================-->
      
    
  <footer class=" fixed-bottom" style="height:30px;font-size:15px;color:#673AB7;background:<?php echo $_SESSION['bodybgcolor']; ?>">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Vchat &copy;  2021</span>
          </div>
        </div>
      </footer>
    
     <script>
       function searchAll()
          {
          a=document.getElementById('next').value;
          c = a;
          $.post("search.php",{first:c},function(response) {
          var arr = JSON.parse(response);
          var i;
          var out = "";
          for(i = 0; i < arr.length; i++) {
          out += " <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12'><div class='card payment-card responsive-mg-b-30 card border-left-primary shadow h-100 py-2'><div class='container'><img src='"+arr[i].product_image+"' alt='Image error' width='120' height='120' style='width:100%;height:250px;border-radius:5%'></div><div class='payment-inner-pro'><i class='fa fa-cc-paypa' aria-hidden='true'></i><h5></h5><div class='row m-t-10 container-fluid'><div class='col-sm-6'><strong class='m-r-5'>Product Name : </strong>"+arr[i].product_name+"<br><strong class='m-r-5'>Price : </strong>#"+arr[i].product_price+"<br> <strong class='m-r-5'></div><div class='col-sm-6 text-right'> </div></div></div></div><br></div>";

            }
            $('#displaybox').html(out);
            });
            };
          
</script>
   <script src="../md/vendor/jquery/jquery.min.js"></script>
  <script src="../md/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../md/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
    <script src="../md/js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="../css/wowjs/dist/wow.min.js"></script>
    <script src="../vendor/animsition/js/animsition.min.js"></script>
    <script type="text/javascript" src="../css/bootstrap4/js/bootstrap.min.js"></script>
    <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script>  
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="../vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/front.js"></script>
    <script src="../js/notifications/Lobibox.js"></script>
    <script src="../js/notifications/notification-active.js"></script>
    <script src="../artyom.js-master/public/artyom.window.js"></script>
    <script type="../artyom.js-master/public/artyom.js"></script> 
</body>

  
    </html>




