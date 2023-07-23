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