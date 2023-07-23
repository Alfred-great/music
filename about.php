<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>microo</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="index.php">Home</a>
         <a class="active" href="about.php">About</a>
         <a href="services.php">Searvices</a>
         <a href="shop.php">Courses</a>
         <a href="contact.php">Contact</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="head-top">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class="col-sm-3">
                     <div class="logo">
                        <a href="index.html"><img src="images/creed.png" /></a>
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <ul class="email text_align_right">
                        <li class="d_none"> <a href="javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i>
                           Login</a>
                        </li>
                        <li> <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- about -->
      <div id="about" class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                  <?php
                  $sql="SELECT * FROM `page` Where Page_type='About'";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result))  {
                     ?>
                     <h2><?php echo $row ['Page_Title'];?></h2>
                     <p><?php echo $row ['Page_Description'];?></p>
                     <a class="read_more" href="about.html">Read More</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img">
                     <figure><img class="img_responsive" src="images/about_img.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <a class="logo_footer"><img src="images/logo.png" alt="#"/></a>
                  </div>
                  <div class="col-md-5">
                     <div class="Informa conta">
                        <h3>Adderess</h3>
                        
                     </div>
                     <?php
                  $sql="SELECT * FROM `page` Where Page_type='Contact'";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result))  {
                     ?>
                     <h2><?php echo $row ['Page_Description'];?></h2>
                     <div class="Informa helpful">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li><a href="about.php">About</a></li>
                           <li><a href="services.php">Services</a></li>
                           <li><a href="shop.php">Courses</a></li>
                           <li><a href="contact.php">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="Informa conta">
                        <h3>Contact Us</h3>
                        <ul>
                           <li> <a href="Javascript:void(0)"> 
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"> 
                              </a>
                           </li>
                        </ul>
                     </div>
                     <?php
                  $sql="SELECT * FROM `page` Where Page_type='Contact'";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_array($result))  {
                     ?>
                     <h2><?php echo $row ['Mobile'];?></h2>
                     <p><?php echo $row ['Email'];?></p>
                     <ul class="social_icon text_align_center">
                        <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-md-3">
                     <div class="Informa">
                        <h3>Newsletter</h3>
                        <form class="newslatter_form">
                           <input class="ente" placeholder="Enter your email" type="text" name="Enter your email">
                           <button class="subs_btn">Subscribe</button>
                        </form>
                        <?php
                  }
                  ?>
                  <?php
                  }
                  ?>
                  <?php
                  }
                  ?>
               
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_center">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2020 All Rights Reserved. Design by  <a href="https://html.design/"> Free Html Template</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>