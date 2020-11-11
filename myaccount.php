

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation_dashboard</title>

    <!-- ----------link to css file------------- -->
    <link rel="stylesheet" href="myaccount.css">
    <link rel="stylesheet" href="modal.css">

    <!-- -----------fontawsm cdn------------- -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">

        <!-- -----------Top Navbar----------- -->
        <nav class="navbar">
            <div class="nav_icon" onclick='toggleSlider()'>
                <i class="fa fa-bars"></i>
            </div>
            <div class="navbar_left">
                <a href="#status">Current Status</a>
                <a href="#report">Reports</a>
            </div>
        </nav>




        <!-- ------------Main Container---------------- -->
        <main>


            <a name ="status"></a>
            <!-- -----------hello Admin Text--------------- -->
            <div class="main_container">
                <div class="main_title">
                    <img src="assets/images/my_account_hello_img.svg" alt="">
                    <div class="main_greeting">
                        <h1>Hello !</h1>
                        <p>Welcome to Dashboard</p>
                    </div>
                </div>



                <h1 class="top_headings">Current Status:</h1>
                <!-- ---------------Status----------------- -->
                <div class="main_cards">

                    <!-- ------------Emergency card------------ -->
                    <div class="card">
                        <i class="fa fa-medkit fa-2x text-red"></i>
                        <div class="card_inner">
                            <p class="text-primary-p">Emergency</p>
                            <span class="font-bold text-title">246</span>
                        </div>
                    </div>

                    <!-- ------------Individual card------------ -->
                    <div class="card">
                        <i class="fa fa-user-o fa-2x text-yellow"></i>
                        <div class="card_inner">
                            <p class="text-primary-p">Individual</p>
                            <span class="font-bold text-title">340</span>
                        </div>
                    </div>

                    <!-- ------------Organization card------------ -->
                    <div class="card">
                        <i class="fa fa-sitemap fa-2x text-green"></i>
                        <div class="card_inner">
                            <p class="text-primary-p">Organization</p>
                            <span class="font-bold text-title">64</span>
                        </div>
                    </div>
                </div>
                <br><br>



                <a name ="report"></a>
                <h1 class="top_headings">Reports:</h1>
                <!-- -----------------Reports-------------------- -->
                
                <div class="main-div">
                <div class="table-responsive">
                        
                    <div class="center-div">
                   
                    <form action="" method="POST">
                        <input type="text" name="name" placeholder="Enter your Name">
                        <input type="submit" name="search" value="search">
                         </form>
                            <table>
                                <thead>
                                    <tr>
                                       
                                        <th>Name</th>
                                        <th>Email</th>
                                        
                                        <th>City</th>
                                        
                                        <th>Donated Items</th>
                                        <th>Item-1</th>
                                        <th>Item-2</th>
                                        <th>Amount</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    <?php

                                    include "connection.php"; // Using database connection file here
                                    if(isset($_POST['search'])){
                                        $name=$_POST['name'];
                                    
                                    $records = mysqli_query($con,"select * from ind where name = '$name'"); // fetch data from database
                                    
                                    while($data = mysqli_fetch_array($records) and $data!=null)
                                    {
                                    ?>
                                      <tr>
                                       
                                        <td><?php echo $data['name']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['city']; ?></td>
                                        <td><?php echo $data['Donatething']; ?></td>
                                        <td><?php echo $data['thing1']; ?></td>
                                        <td><?php echo $data['thing2']; ?></td>
                                        <td><?php echo $data['amount']; ?></td>
                                      </tr>	
                                    <?php
                                    }
                                   
                                     mysqli_close($con); // Close connection 
                                }
                               
                                    ?>
                                  
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>   

            </div>
        </main>
        




        <!-- ------------Side navbar----------------- -->
        <div id="sidebar">
            <div class="sidebar_title">
                <i class="fa fa-times" id="sidebarIcon" onclick="closeSidebar"></i>
            </div>


            <div class="sidebar_menu">
                <div class="sidebar_link active_menu_link">
                    <i class="fa fa-home"></i>
                    <a href="#">Dashboard</a>
                </div>
                <div class="sidebar_link">
                    <i class="fa fa-user-secret"></i>
                    <a href="About.html">About Us</a>
                </div>
                <div class="sidebar_link">
                    <i class="fa fa-calendar-check-o"></i>
                    <a href="docharity.html">Forms</a>
                </div>
                <div class="sidebar_link">
                    <i class="fa fa-files-o"></i>
                    <a href="contact us.html">Feedback</a>
                </div>

                <h2>Situations</h2>
                <div class="sidebar_link" id="org">
                    <i class="fa fa-building-o"></i>
                    <a href="#">Organization</a>
                </div>

                <!-- --------------------------------------------------------------
                # Organisation Modal Class
                -------------------------------------------------------------- -->
                <!-- The Modal -->
                <div id="Org-Modal" class="modal_2">

                <!-- Modal content -->
                <div class="modal-content_2">
                <span class="close3">&times;</span>
                <div id="text_2">
                    <h1> Cause Title<img src="./assets/images/orgmodal.jpeg"></h1>
                    <h2>Why Should We DONATE ?</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorem hic suscipit in architecto nihil natus laudantium, fugiat molestias dfghdffd rdgrdfg rfgrsfg rsfgsdfg fdgsdg sdgsdgds gdhdgc quas dolorum ab tenetur at? Quasi ab, tenetur rerum nobis delectus commodi eos recusandae veniam, quidem, cupiditate ipsa. Indsvtsh fdgddf fdhggfd ergdfgvd fgdfgdf dfgdfgdsf dfgsdfgdf fdgdfgdf dfgdfgdf sdfgdfgdf dfgdf culpa quis voluptatem nisi quisquam. Illo placeat possimus, doloribus obcaecati a deserunt </p>
                </div>
                
                    <div id="box_2">

                    <h2>I Would Like To Donate</h2>
                   
                        <button >DONATE NOW</button>
                   
                    </div>
                </div>

                </div>



                <div class="sidebar_link" id="emg">
                    <i class="fa fa-archive"></i>
                    <a href="#">Emergency</a>
                </div>

                <!-- --------------------------------------------------------------
                # Emergency Modal Class
                -------------------------------------------------------------- -->
                <!-- The Modal -->
                <div id="Emg-Modal" class="modal">
                        <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close1">&times;</span>
                        
                        <div id="text">
                            <h1> Cause Title<img src="./assets/images/emgmodal.jpeg"></h1>
                            <h2>Why Should We DONATE ?</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorem hic suscipit in architecto nihil natus laudantium, fugiat molestias dfghdffd rdgrdfg rfgrsfg rsfgsdfg fdgsdg sdgsdgds gdhdgc quas dolorum ab tenetur at? Quasi ab, tenetur rerum nobis delectus commodi eos recusandae veniam, quidem, cupiditate ipsa. Indsvtsh fdgddf fdhggfd ergdfgvd fgdfgdf dfgdfgdsf dfgsdfgdf fdgdfgdf dfgdfgdf sdfgdfgdf dfgdf culpa quis voluptatem nisi quisquam. Illo placeat possimus, doloribus obcaecati a deserunt </p>
                        </div>
                        
                        <div id="box">
                
                            <h2>I Would Like To Donate</h2>
                           
                                <button >DONATE NOW</button>
                            
                            </div>
                    </div>
                    
                </div>


                <div class="sidebar_link" id="ind">
                    <i class="fa fa-sign-out"></i>
                    <a href="#">Individual</a>
                </div>

                <!-- --------------------------------------------------------------
                # Individual Modal Class
                -------------------------------------------------------------- -->
                <!-- The Modal -->
                <div id="Ind-Modal" class="modal_1">

                <!-- Modal content -->
                <div class="modal-content_1">
                <span class="close2">&times;</span>

                <div id="text_1">
                    <h1> Cause Title<img src="./assets/images/indiviual.jpeg"></h1>
                    <h2>Why Should We DONATE ?</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, dolorem hic suscipit in architecto nihil natus laudantium, fugiat molestias dfghdffd rdgrdfg rfgrsfg rsfgsdfg fdgsdg sdgsdgds gdhdgc quas dolorum ab tenetur at? Quasi ab, tenetur rerum nobis delectus commodi eos recusandae veniam, quidem, cupiditate ipsa. Indsvtsh fdgddf fdhggfd ergdfgvd fgdfgdf dfgdfgdsf dfgsdfgdf fdgdfgdf dfgdfgdf sdfgdfgdf dfgdf culpa quis voluptatem nisi quisquam. Illo placeat possimus, doloribus obcaecati a deserunt </p>
                </div>
                
                    <div id="box_1">

                    <h2>I Would Like To Donate</h2>
                    
                        <button id="button">DONATE NOW</button>
                  
                    </div>

                </div>

                </div>

                <h2>Payroll</h2>
                <div class="sidebar_link">
                    <i class="fa fa-briefcase"></i>
                    <a href="#">Transections</a>
                </div>

                <div class="sidebar_back">
                    <i class="fa fa-backward"></i>
                    <a href="Home page.html">Go Back</a>
                </div>
            </div>

        </div>
    </div>



    <!-- -------------------Add js for toggle---------------- -->
    <script>
        var sidebarOpen = false;
        var sidebar =document.getElementById("sidebar");
        var sidebarCloseIcon = document.getElementById("sidebarIcon");

        function togggleSidebar(){
            if(!sidebarOpen){
                sidebar.classList.add('sidebar_responsive');
                sidebarOpen = true;
            }
        }

        function closeSidebar(){
            if(!sidebarOpen){
                sidebar.classList.add('sidebar_responsive');
                sidebarOpen = false;
            }
        }
    </script>
     <script src="modal.js"></script>

</body>
</html>


