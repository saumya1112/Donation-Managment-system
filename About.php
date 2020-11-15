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
    <title>About</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Icon css link -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  css file --> 
    <link rel="stylesheet" href="Header-footer.css">    
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
    
    <br><br><br><br><br>

    <div class="header-img"></div>
    <div class="header-txt">
        <h1>Donate</h1>
        <h3>for a better world</h3>
        <p>Find Fortune is a Social, Cultural, Economic, Health, Educational, relief and rural/urban community development organisation. We are committed to the Millennium development goals. Our vision is for a just and compassionate Indian society in which all people will have the opportunity to achieve their optimum potential. </p>
        <a href="docharity.php">Donate Now</a>
        <a href="contact us.php">Contact Us</a>
    </div>

    <div class="about-us">
        <hr>
        <h1>ABOUT US</h1>
        <p>Find Fortune priorities and objectives are to carry out charitable, holistic and sustainable development work among the poor, marginalized, downtrodden, illiterate, vulnerable and the exploited ones, irrespective of their caste, creed, colour or religion. In achieving the same we work in partnership with other national and international NGOs.The vision of Find Fortune is to create a just, equal and peaceful society where everybody shares and cares for the poor,  unprivileged and exploited people and make the world a better place to live in.This is best done by establishing a redeemed, regenerated and progressive society, which will be free from exploitation, injustice and disparities – where the overall development and dignity of every person will be secured, where people can live in peace, solidarity, co-operation and brotherhood and where the rights of each one will be protected. </p>
        <hr>
    </div>

    <div class="service-img"></div>
    <div class="service-txt">
        <h1>Services We Provided ...</h1>
        <div class="box">
            <img src="../Donation-Managment-system/assets/images/about-ind.jpg" alt="">
            <h2>Individual</h2>
            <p>While Save the Children appreciates monthly donations where you choose to donate a small fixed amount monthly for us to be able to plan our programmes for a longer term, a single donation can also help save a child.</p>
           
        </div>
        <div class="box">
            <img src="../Donation-Managment-system/assets/images/about-org.jpg" alt="">
            <h2>Organization</h2>
            <p>If there's one organisation through which Indians can choose to commit to give their country a better future through children , their right to a childhood they can cherish and an adulthood that Indians deserve, it is Save the Children.</p>
            
        </div>
        <div class="box">
            <img src="../Donation-Managment-system/assets/images/about-emr.jpg" alt="">
            <h2>Emergency</h2>
            <p>Our core is our programmes, whether it is the remotest corners of the country or the most disaster-torn or dangerous areas or slums in metros, we do whatever it takes to help children shine in life.</p>
          
        </div>
    </div>
    <br>
    <div class="team">
        <h1>Our Team</h1>
        <!-- <div class="circles"> -->
            <div class="circle"><img src="../Donation-Managment-system/assets/images/Saumya.jpeg" alt=""></div>
            <div class="circle unnati"><img src="../Donation-Managment-system/assets/images/Unnati.jpeg" alt=""></div>
            <div class="circle nandinee"><img src="../Donation-Managment-system/assets/images/Nandinee.jpeg" alt=""></div>
            <div class="circle roshni"><img src="../Donation-Managment-system/assets/images/Roshni.jpeg" alt=""></div>
            <div class="circle neeti"><img src="../Donation-Managment-system/assets/images/Neeti.jpeg" alt=""></div>
        <!-- </div> -->
        <div class="boxes">
            <div class="box-1"><h3>Saumya Gupta</h3><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sequi inventore eius dolore blanditiis facere unde! Doloribus aut aliquam dolorum.</p></div>
            <div class="box-1 phn-b"><h3>Unnati Goyal</h3><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sequi inventore eius dolore blanditiis facere unde! Doloribus aut aliquam dolorum.</p></div>
            <div class="box-1 phn-b"><h3>Nandinee Gupta</h3><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sequi inventore eius dolore blanditiis facere unde dolorum.</p></div>
            <div class="box-1 roshni-b phn-b"><h3>Roshni Rawat</h3><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sequi inventore eius dolore blanditiis facere unde! Doloribus aut aliquam dolorum.</p></div>
            <div class="box-1 neeti-b phn-b"><h3>Neeti Jain</h3><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur sequi inventore eius dolore blanditiis facere unde! Doloribus aut aliquam dolorum.</p></div>
        </div>
    </div>
    
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
                          <li><a href="About.php">About Us</a></li>
                          <li><a href="faq_page.php">FAQ</a></li>
                          <li><a href="docharity.php">Do Charity</a></li>
                          <li><a href="myaccount.php">My Account</a></li>
                          <li><a href="contact us.php">Contact Us</a></li>
                      </ul>
                                    
                   </div>
                    <!-- Grid column2 -->

                     <!-- Grid column3 -->
                     <div class="col-md-3 col-sm-6 col-xs-12 segment-three ">
                        <h2>Follow Us</h2>
                        <!-- Links -->
                        <p>Please Follow us on our Social Media Profile In order to keep updated.</p>
                        <a href="www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="www.pinterest.ca"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
</html>