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
<<<<<<< HEAD
    <title>About</title>
    <!--<link rel="stylesheet" href="about.css">-->
=======
    <title>Home</title>
    <link rel="stylesheet" href="Homepage.css">
>>>>>>> f4ec4eec6a236091ce8e6061cdcb625ed1da6514
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Icon css link -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  css file --> 
    <link rel="stylesheet" href="Header-footer.css">    
    <link rel="stylesheet" href="Homepage.css"> 
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

    <!--Home-section-->
<main>
      <!------------------------------------------section-one------------------------------------------------->
            <section id="section-one">
                <div class="text">
                        <button class="start"><a href="#"><b>HOW COULD YOU HELP</b></a></button>
                </div>
                <div class="caption-holder">
                    <div class="caption-main">
                        <div class="leftArrow" onclick="plus(-1)"><span class="arrow arrowLeft"></span></div>
                        <div class="rightArrow" onclick="plus(1)"><span class="arrow arrowRight"></span></div>
                        <div class="real-caption"><p class="real-text">Captions</p></div>
                        <div class="caption"><p class="text-text">
                            DONATE & SUPPORT OUR WORK TODA
                            
                        </p></div>
                        <div class="caption"><p class="text-text">
                            <b>TELL THE WORK YOU STAND #WITHREFUGES</b>
                        </p></div>
                        <div class="caption"><p class="text-text">
                           <b>629,000 PEOPLE HAVE PLEDGED THEIR SUPPORT</b>
                        </p></div>
                        <div class="caption"><p class="text-text">
                                <b>TELL THE WORK YOU STAND #WITHREFUGES</b>
                        </p></div>
                        <div class="caption"><p class="text-text">
                                <b>TELL THE WORK YOU STAND #WITHREFUGES</b>
                        </p></div>
                        <div class="caption"><p class="text-text">
                                <b>TELL THE WORK YOU STAND #WITHREFUGES</b>
                        </p></div>
                    </div>
                </div>
            </section>
            <!-----------------------------------------------------section-two--------------------------------->
            <section id="section-two">
                    <div class="box-1">
                            <h1><b>DONATE NOW</b></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae adipisci in totam, tenetur expedita tempore corrupti vero optio ad. Nisi!</p>
                            <a href="">Read More</a>
                        </div>
                        <div class="box-2">
                            <h1><b>JOIN US NOW</b></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus minima fugit porro. Reprehenderit repellat facere, officia ex iusto quos. Molestias.</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="box-3">
                            <h1><b>GET INVOLVED</b></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias officia beatae veniam incidunt, dolor nihil reiciendis adipisci molestiae cumque quam.</p>
                            <a href="#">Read More</a>
                        </div>
            </section>
            <!---------------------------------------------------------section-three----------------------------->
            <section id="section-three">
                <div class="about">
                    <b>STORY ABOUT US</b>
                </div>
                <div class="every">
                        <h2>EVERYONE.EVERYWHERE<br>EQUAL VALUE</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nostrum voluptates ipsa quisquam deserunt reprehenderit ipsam? Voluptatum, quidem repudiandae. Dolore optio aperiam laboriosam modi distinctio magni autem molestias perferendis minus!</p>
                        <a href="#"><b>LEARN MORE...</b></a>
                    </div>
            </section>
            <!---=========================================================section-four======================-->
            <section id="section-four">
                    <div class="box">
                            <h1><b>468</b></h1>
                            <h3><b>Succesful Project</b></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae adipisci in totam, tenetur expedita tempore corrupti vero optio ad. Nisi!</p>
                            
                        </div>
                        <div class="box">
                            <h1><b>1534</b></h1>
                            <h3><b>People Impacted</b></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus minima fugit porro. Reprehenderit repellat facere, officia ex iusto quos. Molestias.</p>
                            
                        </div>
                        <div class="box">
                            <h1><b>$144</b></h1>
                            <h3><b>Money Donated</b></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias officia beatae veniam incidunt, dolor nihil reiciendis adipisci molestiae cumque quam.</p>
                            
                        </div>
                        
                
            </section>
            <!---------------------------------------section-five------------------------------>
            <section id="section-five">
                <div class="section-five1"><b>BECOME DONOR</b></div>
                <h1><b>NO ONE HAS EVER BECOME POOR BY GIVING</b></h1>
                <p>The message of The Faithland is that Christ saves sinners. In light of<br>
                        that, we steward a message that radically changes lives.</p>
                <a href="#"><b>GET DONATE NOW!</b></a>
               
            </section>
            <!-- ==================================news carousel ====================================== -->
<section id="news-section">
    <div class="news-title">
      <h3>BE FIRST TO READ</h3>
      <h1>LATEST NEWS</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>Emergency</h1>
                <p>Lorem ipsum dolor sit, </p>
                <p>Help the Need!!</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Lorem ipsum dolor sit</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Modi quidem vel adipisci ea delectus laudantium obcaecati similique quae perferendis,
               animi minus est maxime. Dolorem ipsa pariatur illo et dicta culpa!</p>
            <div class="flip-content-a">
              <a href="">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Lorem ipsum dolor sit</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Modi quidem vel adipisci ea delectus laudantium obcaecati similique quae perferendis,
               animi minus est maxime. Dolorem ipsa pariatur illo et dicta culpa!</p>
            <div class="flip-content-a">
              <a href="">Read More</a>
            </div>
          </div>      
        </div>
  
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Lorem ipsum dolor sit</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Modi quidem vel adipisci ea delectus laudantium obcaecati similique quae perferendis,
               animi minus est maxime. Dolorem ipsa pariatur illo et dicta culpa!</p>
            <div class="flip-content-a">
              <a href="">Read More</a>
            </div>
          </div> 
        </div>
  
      </div>
    </div>
  
  
  
  
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:100%;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Lorem ipsum dolor sit</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Modi quidem vel adipisci ea delectus laudantium obcaecati similique quae perferendis,
               animi minus est maxime. Dolorem ipsa pariatur illo et dicta culpa!</p>
            <div class="flip-content-a">
              <a href="">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Lorem ipsum dolor sit</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Modi quidem vel adipisci ea delectus laudantium obcaecati similique quae perferendis,
               animi minus est maxime. Dolorem ipsa pariatur illo et dicta culpa!</p>
            <div class="flip-content-a">
              <a href="">Read More</a>
            </div>
          </div>      
        </div>
  
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Lorem ipsum dolor sit</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Modi quidem vel adipisci ea delectus laudantium obcaecati similique quae perferendis,
               animi minus est maxime. Dolorem ipsa pariatur illo et dicta culpa!</p>
            <div class="flip-content-a">
              <a href="">Read More</a>
            </div>
          </div> 
        </div>
  
      </div>
    </div>
  
  
    
  </section>
            </main>

<!--==============================javascript-file================================================S-->
<script src="home.js"></script>

  


   <!-- Footer -->
   <footer>
        <div class="footer">
            <div class="container">
                 <!-- Grid row -->
                 <div class="row">
                    <!-- Grid column1 -->
                   <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                       <h3>Find Fortune</h3>
                       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error incidunt voluptates possimus vero aut est!</p> 
                                    
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
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt quam id adipisci assumenda quasi ad.</p>
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

    <?php if (isset($_SESSION['success']) and (isset($_SESSION['username']))) :   ?>
    <script>
           
        alert("<?php
            echo "\\n";
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
            echo "\\n \\nWelcome ";
            echo $_SESSION['username'];
        ?>");
       
    </script>
   <?php endif ?>
</body>
</html>