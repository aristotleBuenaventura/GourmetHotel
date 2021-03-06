<?php
include "connection.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link for bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
     crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
    <title>Gourmet Hotel</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header class="header container-fluid">
 
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand px-4 py-4" href="index.html"><img src="images/logo.png" width="60px" height="45px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarH">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarH">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <div class="nav-item dropdown megaMenu">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown">
                     Rooms
                    </button>
                    <div class="dropdown-menu">
                        <div class="container" id="contOne">
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-3">
                                    <a class="dropdown-item px-2 py-2" href="Alpha.html">
                                        <img src="images/alpha.jpg" width="170px" height="110px">
                                        <br>Alpha Room
                                </a>
                                </div>
                                <div class="col-md-3">
                                    <a class="dropdown-item px-2 py-2" href="Bravo.html">
                                        <img src="images/img2.jpg" width="170px" height="110px">
                                        <br>Bravo Room
                                </a>
                                </div>
                                <div class="col-md-3">
                                    <a class="dropdown-item px-2 py-2" href="Charlie.html">
                                        <img src="images/charlie.jpg" width="170px" height="110px">
                                        <br>Charlie Room
                                </a>
                                </div>
                                <div class="col-md-3">
                                    <a class="dropdown-item px-2 py-2" href="Delta.html">
                                        <img src="images/delta.jpg" width="170px" height="110px">
                                        <br>Delta Room
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav-item dropdown megaMenu">
                    <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown">
                     Events
                    </button>
                    <div class="dropdown-menu">
                        <div class="container" id="contTwo">
                            <div class="row mx-auto justify-content-center">
                                <div class="col-md-3">
                                    <a class="dropdown-item px-2 py-2" href="wedding.html">
                                        <img src="images/wedding.jpg" width="170px" height="110px">
                                        <br>Wedding
                                </a>
                                </div>
                                <div class="col-md-3">
                                    <a class="dropdown-item px-2 py-2" href="corporate.html">
                                        <img src="images/yellow.jpg" width="170px" height="110px">
                                        <br>Corporate
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <li class="nav-item">
                    <a class="nav-link" href="inquiryBackEnd.php">Inquiries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="loginBackEnd.php">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registerBackEnd.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUs.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="overlay"></div>

    <div class="card-container">
		<div class="upper-container">
            <div class="image-container">
                <img src="images/userimgtemp.png"/>

            </div>
        </div>
        <div class="lower-container">
            <div>
                <h3>  <?php if (isset($_POST["submit"])) { ?>
                Welcome <?php echo $_POST['email']; ?><br>
                <?php }
                 else{ ?>
                 <script> location.replace("loginBackEnd.php") </script>
                 <?php     } ?></h3>
            </div>
            <div>
                <a href="logout.php" class="btn">Logout</a>
            </div>

        </div>
	</div>


    </header>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        </section>
        <section class="">
        <div class="container text-center text-md-start mt-5">

            <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Gourmet Hotel
                </h6>
                <p>
                  Book your stay with us, and you???ll be happy to come back
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                Rooms
                </h6>
                <p>
                <a href="Alpha.html" class="text-reset">Alpha</a>
                </p>
                <p>
                <a href="Bravo.html" class="text-reset">Bravo</a>
                </p>
                <p>
                <a href="Charlie.html" class="text-reset">Charlie</a>
                </p>
                <p>
                <a href="Delta.html" class="text-reset">Delta</a>
                </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                Events
                </h6>
                <p>
                <a href="wedding.html" class="text-reset">Wedding</a>
                </p>
                <p>
                <a href="corporate.html" class="text-reset">Corporate</a>
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                Contact
                </h6>
                <p> Quezon, NCR 1113, PH</p>
                <p>
                gourmethotel@tours.com.ph
                </p>
                <p> +639 972 262 437</p>
                <p> +02 847 738 48</p>
            </div>
            </div>
        </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        ?? 2021 Copyright:
        <a class="text-reset fw-bold" href="about.html">Cookie Eaters Inc.</a>
        </div>
    </footer>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
    crossorigin="anonymous"></script>
    <script src="javasc.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
        
                $('.header').height($(window).height());
        
              })
        </script>
        

</body>
</html>
