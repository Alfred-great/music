<?php
include 'header.php';
?>
      <!-- start slider section -->
      <div id="top_section" class=" banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="airmic">
                     <h1>Creed Music School</h1>
                     <p>Creed Music School is an innovative and dynamic institution dedicated to fostering musical talent and nurturing a lifelong love for music. With a mission to inspire and empower aspiring musicians of all ages and skill levels, our school offers a comprehensive range of music education programs and services.
                     </p>
                     <a class="read_more" href="Javascript:void(0)">Book Now </a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="mic_img">
                     <figure><img src="images/right_side.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
      <!-- services -->
      <div class="services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Our Services</h2>
                     <p>At Creed Music School, we offer a comprehensive range of services designed to meet all your music education needs. Here's a short summary of the services we provide</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="service_img text_align_center">
                     <i><img src="images/service1.png" alt="#"/></i>
                  </div>
                  <div class="service_text text_align_center">
                     <h3>Singing</h3>
                     <p>Our singing program is designed to develop your vocal abilities, expand your range, improve your tone, and enhance your overall performance skills. </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="service_img text_align_center">
                     <i><img src="images/service2.png" alt="#"/></i>
                  </div>
                  <div class="service_text text_align_center">
                     <h3>Instruments</h3>
                     <p>We offer a wide range of instrumental lessons, catering to various interests and musical styles. From piano, guitar, and drums to violin, saxophone, and more. </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="service_img text_align_center">
                     <i><img src="images/service3.png" alt="#"/></i>
                  </div>
                  <div class="service_text text_align_center">
                     <h3>Disc Jockey</h3>
                     <p>Our DJing program is designed to equip you with the technical skills and creative abilities necessary to excel in the world of DJing. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end services -->
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
         <?php
         }
         ?>
      </div>
      <!-- end about -->
      <!-- our_mics -->
      <div class="our_mics">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage text_align_center">
                     <h2>Our Instruments</h2>
                     <p>At Creed Music School, we pride ourselves on providing our students with access to high-grade musical instruments that enhance their learning experience and inspire their musical journey.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="custom-shape">
<style>
   .custom-shape {
    clip-path: circle(50%); /* Creates a circular shape */
    
    width: 350px; /* Adjust the width as needed */
    height: 350px; /* Adjust the height as needed */
  }
</style>
                     <figure><img class="custom-shape" src="images/violin.jpg" alt="custom shape images"/></figure>
                     <div class="custom-shape">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="custom-shape">
<style>
   .custom-shape {
    clip-path: circle(50%); /* Creates a circular shape */
    image-resolution: center;
    width: 350px; /* Adjust the width as needed */
    height: 350px; /* Adjust the height as needed */
  }
</style>
                     <figure><img class="custom-shape" src="images/sax.jpg" alt="custom shape images"/></figure>
                     <div class="custom-shape">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="custom-shape">
                  <style>
   .custom-shape {
    clip-path: circle(50%); /* Creates a circular shape */
    image-resolution: center;
    width: 350px; /* Adjust the width as needed */
    height: 350px; /* Adjust the height as needed */
  }
</style>
                     <figure><img class="custom-shape" src="images/drum2.jpg" alt="custom shape images"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <style>
   .custom-shape {
    clip-path: circle(50%); /* Creates a circular shape */
    image-resolution: center;
    width: 350px; /* Adjust the width as needed */
    height: 350px; /* Adjust the height as needed */
  }
</style>
                     <figure><img class="custom-shape" src="images/acos.jpg" alt="custom shape images"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                  <style>
   .custom-shape {
    clip-path: circle(50%); /* Creates a circular shape */
    image-resolution: center;
    width: 350px; /* Adjust the width as needed */
    height: 350px; /* Adjust the height as needed */
  }
</style>
                     <figure><img class="custom-shape" src="images/trum.jpg" alt="custom shape images"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 margin_bottom40">
                  <div id="ho_show" class="mics">
                     <figure><img class="img_responsive" src="images/mics_img1.jpg" alt="#"/></figure>
                     <div class="mics_icon">
                        <a href="javascript:void(0)">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_mics -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="titlepage text_align_center">
                     <h2>Our Client Says</h2>
                     <p>Here are some recent reviews</p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class="col-md-10 offset-md-1">
                  <div id="testimo" class="carousel slide our_testimonial" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#testimo" data-slide-to="0" class="active"></li>
                        <li data-target="#testimo" data-slide-to="1"></li>
                        <li data-target="#testimo" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i class="text_align_left d-block"><img  src="images/icon.png" alt="#"/></i>
                                    <p>I recently had the pleasure of attending Creed Music School, and I must say, it has been an extraordinary musical journey. As a passionate music enthusiast, I had high expectations, and I can confidently say that Creed Music school exceeded every one of them.</p>
                                    <i class="text_align_right d-block"><img  src="images/icon_right.png" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i class="text_align_left d-block"><img  src="images/icon.png" alt="#"/></i>
                                    <p>From the moment I stepped into the school, I was greeted with warmth and enthusiasm. The staff at Creed Music School are not only knowledgeable but also incredibly friendly and supportive. They took the time to understand my musical aspirations and paired me with an instructor who perfectly matched my needs.</p>
                                    <i class="text_align_right d-block"><img  src="images/icon_right.png" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="testomoniam_text">
                                    <i class="text_align_left d-block"><img  src="images/icon.png" alt="#"/></i>
                                    <p>The facilities at Creed Music School are top-notch. The practice rooms are well-equipped and comfortable, providing an ideal environment for focused practice sessions. The school's commitment to maintaining high-quality instruments and learning resources truly enhances the learning experience.</p>
                                    <i class="text_align_right d-block"><img  src="images/icon_right.png" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!-- contact section -->
      <div class="contact left_cross_right">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>Request a call back.</h2>
                     <p>To utilize our "Request a Call Back" service, simply fill out a brief form on our website or contact us via phone or email, expressing your desire to receive a call back. We respect your time and convenience, so you can specify a preferred time or provide any additional details to help us better assist you.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="You Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="Message"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact section -->
      <?php
include 'footer.php';
?>