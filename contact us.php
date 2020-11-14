<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login_form.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: index.html');
  }
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="contact us.css">
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Header-footer.css"> 
   <title>Contact Us</title>
    </head>
     <body>
     <div class="header">
        <!-- Logo -->
        <nav id="logo"><a class="navbar-brand" href="#"><img src="assets/images/logo.jpeg"> Find Fortune</a></nav>
        <!-- Logo-->
        <input type="checkbox" id="chk">
        <label for="chk" class="show-btn">
            <i class="fa fa-bars" ></i>
        </label>
        <ul class="menu">
            <!-- Links -->

           <li><a href="About.php">About Us</a></li>
           <li><a href="faq_page.php">FAQ</a></li>
           <li class = "dropdown"><a href="docharity.php">Do Charity<i class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul class="submenu">
                <li> <a href="docharity.php#individual">Individual</a></li>
                <li><a href="docharity.php#emergency">Emergency</a></li>
                <li><a href="docharity.php#organization">Organization</a></li>
            </ul>
        </li>
        <li><a href="myaccount.php">My Account</a></li>
        <li><a href="contact us.php">Contact Us</a></li>
        <li>
          <!------logout button ------>
          <a href="Home.php?logout='1'"> 
          <input type="submit" value = "Log out" name = "logout" class = "logout"></a>
        </li>
           
           
           <label for="chk" class="hide-btn">
               <i class="fa fa-times" ></i>
           </label>
        </ul>
       
    </div>
    <br><br><br><br>
   <!-- contact section -->
         <section id="contact-section">
           <div class="container">
           	 <h2 class="h2a">Contact Us</h2>
              <p>Email us and keep upto date with our latest news</p>
              <hr class="hr1">
             <div class="contact-form">

                  <!-- First grid -->
               <div>
                 <a href="google_map.html" class="icon-info"><i class="fa fa-map-marker"></i><span class="form-info">  GLA University, Mathura </span><br></a>
                 <a href="#"><i class="fa fa-phone" class="icon-info"> </i><span class="form-info">  9195678475</span><br></a>
                 <a href="#"><i class="fa fa-envelope" class="icon-info"></i><span class="form-info">  findfortune@Gmail.com</span></a>
               </div>
               
                   <!-- second grid -->
           <div>        
             <form action="connect.php" method="POST">
               <input type="text" name="yourname" placeholder="Your Name" required class="inputa"><br><br>
               <input type="text"name="lastname" placeholder="Last Name"class="inputa"><br><br>
               <input type="Email" name="email" placeholder="Email" required class="inputa"><br><br>
               <input type="text"name="phone" placeholder="Phone" required class="inputa"><br><br>
               <input type="text" name="subject"placeholder="Subject of this message" class="inputa"><br><br>
               <textarea name="message"name="message" placeholder="Message" rows="5" required class="inputa"></textarea><br>
               <button class="submit" >Send Message</button> 
             </form>   
               </div>
             </div>
           </div>
         </section>


         
         <!-- Footer -->
    <footer>
      <div class="footer">
          <div class="container">
               <!-- Grid row -->
               <div class="row">
                  <!-- Grid column1 -->
                 <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                     <h3>Find Fortune</h3>
                     <p>Hope for Children is an international charity working towards a world where every child has a happy childhood that sets them up for a positive future.</p> 
                                  
                 </div>
                  <!-- Grid column1 -->

                   <!-- Grid column2 -->
                   <div class="col-md-3 col-sm-6 col-xs-12 segment-two ">
                      <!-- Links -->
                     <h2>Useful  Link</h2>
                    <ul>
                        <li><a href="">Event</a></li>
                        <li><a href="">Event</a></li>
                        <li><a href="">Event</a></li>
                        <li><a href="">Event</a></li>
                        <li><a href="">Event</a></li>
                    </ul>
                                  
                 </div>
                  <!-- Grid column2 -->

                   <!-- Grid column3 -->
                   <div class="col-md-3 col-sm-6 col-xs-12 segment-three ">
                      <h2>Follow Us</h2>
                      <!-- Links -->
                      <p>Please Follow us on our Social Media Profile In order to keep updated.</p>
                      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </div>
                  <!-- Grid column3 -->

                   <!-- Grid column 4-->
                   <div class="col-md-3 col-sm-6 col-xs-12 segment-four ">
                      <h2>Our Newsletter</h2>
                      <p>We are helping to change this by delivering education, health, livelihoods and Child Rights projects that benefit thousands of children and families each year.</p>
                       <!-- Form -->
                       <form action="">
                          <input type="email">
                          <input type="submit" value="Subscribe">
                      </form>
                  </div>
                   <!-- Grid column 4-->

              </div>
              <!-- Grid row -->
              </div>
      </div>
       <!-- Copyright -->
       <p class="footer-bottom-text">All Right reserved by &copy;Find Fortune.2020</p>
       <!-- Copyright -->
  </footer>
  <!-- End Footer -->

         
     </body>