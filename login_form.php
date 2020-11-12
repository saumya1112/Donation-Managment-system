<?php include 'server.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>

    <!-- Link of Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Link of Fontawsm CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- ---------Apply Internal CSS---------- -->
    <style>

        body
        {
            height: 100vh;
            background-image: url(https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(15px);
        }
        .card
        {
            overflow: hidden;
            border: 0 !important;
            border-radius: 20px !important;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.836);
        }

        .error {
            width: 92%; 
            margin: 0px auto; 
            margin-bottom: 20px;
            padding: 8px; 
            border: 1px solid #cc3300; 
            color: white;
            font-size: 18px;
            font-weight:bold; 
            background: #ff9966; 
            border-radius: 5px; 
            text-align: center;
        }

        /* -----------image--------------- */
        .img-left
        {
            width: 45%;
            background: url(assets/images/login_signup_img.jpeg) center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card-body
        {
            padding: 2rem;
        }

        /* ---------Title Heading h4--------- */
        .title
        {
            margin-bottom: 3rem;
            font-weight: bolder;
            font-size: 35px;
        }

        /* ---------------form--------------- */
        .form-input
        {
            position: relative;
        }
        .form-input input
        {
            width: 100%;
            height: 45px;
            padding-left: 40px;
            margin-bottom: 20px;
            box-sizing: border-box;
            box-shadow: none;
            border: 1px solid black;
            border-radius: 50px;
            outline: none;
            background: transparent;
        }

        /*----------- icons in the form--------- */
        .form-input span
        {
            position: absolute;
            top: 10px;
            padding-left: 15px;
            color: black;
        }

        .form-input .far {
            float: right;
            margin-left: -30px;
            line-height: 45px;
            position: absolute;
            cursor: pointer;
        }

        /* ---------focusing the border of form-input--------- */
        .form-input input:focus, .form-input input:valid
        {
            border: 2px solid black;
        }

        /* --------submit button---------- */
        .form-box button[type="submit"]
        {
            margin-top: 10px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            background: #3c8ce2e8;
            color: white;
            font-size: 90%;
            transition: 0.5s;
            padding: 12px;
            font-weight: bold;
        }

    </style>

</head>
<body>
    
    <div class="container">

        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">

                <!------------ Image -------------->
                <div class="img-left d-none d-md-flex"></div>

                <div class="card-body">

                    <!------- Login heading ------->
                    <h4 class="title text-center mt-4">
                        <i class="fa fa-user-circle-o"></i> Login
                    </h4>

                    <form class="form-box px-3" action="login_form.php" method="POST">
                    <?php include('errors.php'); ?>

                        <!---------username--------->
                        <div class="form-input">
                            <!-- fontawsm icon for email -->
                            <span><i class="fa fa-user"></i></span>
                            <input type="text" name="username" id="username" placeholder="Username" tabindex="10" required>
                        </div>

                        <!-------- password ------->
                        <div class="form-input">
                            <!-- fontawsm icon for password -->
                            <span><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" placeholder="Password" required>
                            <i class="far fa-eye" id="togglePassword"></i>
                        </div>

                        <div class="mb-3">
                            <!------- checkbox ------>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" onchange="IsRememberMe(this)" id="rememberMe" name="">
                                <label class="custom-control-label" for="rememberMe">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <!--------submit button -------->
                            <button type="submit" class="btn btn-block text-uppercase" name="login_user">
                                Log in
                            </button>
                        </div>

                        <!---- horizontal line ---->
                        <hr class="my-4">

                        <!-- create account -->
                        <div class="text-center mb-2">
                            Don't have an account?
                            <a href="signup_form.php" class="register-link">
                                Create here
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src = "login.js"></script>
</body>
</html>