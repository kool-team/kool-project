<?php
  session_start();
?>
<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style-login.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <script src="../../js/header.js"></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Login & Registration Form</title>
</head>

<body>
    <header class="desk">
        <a href="../../../../front_office/index.php" class="logo"><i class="fas fa-hamburger"></i> K O O L</a>

        <nav class="navbar">
            <a class="" href="../../../../front_office/index.php">home</a>
            <a href="../../../../front_office/index.php">dishes</a>
            <a href="../../../../front_office/index.php">about</a>
            
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <!-- <i class="fas fa-search" id="search-icon"></i> -->

            
            <a href="../shooping_card/index.php" class="fas fa-shopping-cart" title="panier"></a>
            <a href="#"><i class="fas fa-user" title="utilisateur" style="color: #fff; 
                  background-color: #ffd310;"></i></a>
        </div>
    </header>

    <header class="mobile">
      <!-- Simulate a smartphone / tablet -->
      <div class="mobile-container">
        <!-- Top Navigation Menu -->
        <div class="topnav">
          <a href="#" class="logo"><i class="fas fa-hamburger"></i> K O O L</a>
          <div id="myLinks">
            <a class="" href="../../../../front_office/index.php">home</a>
            <a href="../../../../front_office/index.php">dishes</a>
            <a href="../../../../front_office/index.php">about</a>
            <a href="../shooping_card/index.php" class="fas fa-shopping-cart" title="panier">cart</a>
          </div>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>

        <!-- End smartphone / tablet look -->
      </div>
    </header>

    <!-- header section ends-->

    <div class="container my-5">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="../../../../dashboard/admin/code.php" method="POST">
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Enter your email" style="text-transform: none;"
                            required />
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Enter your password"
                            style="text-transform: none;" required />
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <?php
                                            if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                                                echo '<h2 class="bg-danger">' . $_SESSION['status'] .'</h2>';
                                                unset($_SESSION['status']);     
                                            }
                                        ?>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck" />
                            <label for="logCheck" class="text">Remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" name="login" value="Login Now" />
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>

            
            <!-- Registration Form -->
            <div class="form signup" >
                <span class="title">Registration</span>

                <form action="../../../../dashboard/admin/code.php" method="POST">
                    <div class="input-field">
                        <input name="name" type="text" placeholder="Enter your name" style="text-transform: none;" required />
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input name="email" type="text" placeholder="Enter your email" style="text-transform: none;" required />
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="password" type="password" class="password" placeholder="Create a password" style="text-transform: none;" required />
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="confirmPassword" type="password" class="password" placeholder="Confirm a password" style="text-transform: none;" required />
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <h2 class="confirmPassword"></h2>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck" />
                            <label for="sigCheck" class="text">Remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input name="signUpBtn" type="submit" value="Sign up Now" />
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">
                        <a href="#"  class="text login-link">Login now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>