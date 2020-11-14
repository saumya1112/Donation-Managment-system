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
    <title>FAQ Page</title>

    <!-- ----------css file link---------- -->
    <link rel="stylesheet" href="faq_page.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Icon css link -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  css file --> 
    <link rel="stylesheet" href="Header-footer.css">  

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

    <br><br><br><br><br><br><br>
    
    <section>

        <!-- ---------------main heading--------------- -->
        <div>
            <h1>Frequently Asked Questions?</h1>
        </div>

        <div class="container">

            <!-- -------------adding image-------------- -->
            <img src="assets/images/faq_image.jpg" alt="" class="faqimage">
      
            <div class="faq-menu">

                <!-- --------------question-1------------ -->
                <div class="item" id="item1">
                  <a href="#item1" class="title">
                    <span>What is the “website-name” and how does it works?</span>
                    <i class="icon"></i>
                  </a>
                  <p class="text">
                    “Find-Fortune” is a non-profit organization which directly connect donor with the one for whom he donates. 
                  </p>
                </div>
          
                <!-- --------------question-2------------ -->
                <div class="item" id="item2">
                    <a href="#item2" class="title">
                      <span>What kinds of charities does “Find-Fortune” recommend?</span>
                      <i class="icon"></i>
                    </a>
                    <p class="text">
                      “Find-Fortune” recommends three types of charities which is for Individual, Emergency and Organizations.
                    </p>
                </div>
                
                <!-- --------------question-3------------ -->
                <div class="item" id="item3">
                    <a href="#item3" class="title">
                      <span>How does charity for individual works? </span>
                      <i class="icon"></i>
                    </a>
                    <p class="text">
                      In individual charity, you can donate for any cause like for child education, meals for hungry, for any individual’s health issue, etc.
                    </p>
                </div>
            
                <!-- --------------question-4------------ -->
                <div class="item" id="item4">
                    <a href="#item4" class="title">
                      <span>How does charity for emergency works?</span>
                      <i class="icon"></i>
                    </a>
                    <p class="text">
                      In emergency charity, you can donate for any emergency situations like flood, tsunami, any other natural calamities, any medical emergencies like covid-19, ebola, etc.
                    </p>
                </div>
            
                <!-- --------------question-5------------ -->
                <div class="item" id="item5">
                    <a href="#item5" class="title">
                      <span>How does charity for organization works?</span>
                      <i class="icon"></i>
                    </a>
                    <p class="text">
                      In organization charity, you can donate for any organization like anaath ashrams, old age homes, homes for special abled people, etc.
                    </p>
                </div>
            
                <!-- --------------question-6------------ -->
                <div class="item" id="item6">
                    <a href="#item6" class="title">
                      <span>How can we pay?</span>
                      <i class="icon"></i>
                    </a>
                    <p class="text">
                      You can pay using any online mode of payment like Paytm, BHIM app, Mobile Banking and rest you can find after selecting donate option.
                    </p>
                </div>
          
            </div>
        </div>
    </section>


    <br><br><br><br>

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
</html>