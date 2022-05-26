<?php
include "connection.php";
$id = $_GET["id"];
$username = "";
$email = "";
$password = "";
$image1 = "";
$res = mysqli_query($conn, "select * from users where id=$id");
while ($row = mysqli_fetch_array($res)) {
    $username = $row["username"];
    $email = $row["email"];
    $password = $row["password"];
    $image1 = $row["image1"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link for bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Admin - Gourmet Hotel</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
            padding-bottom: 10px;

        }

        .first-input {
            padding-top: 10px;
        }

        .spacer {
            border-top-style: solid;
            padding-top: 15px;
            border-width: thin;
        }
    </style>
</head>

<body>
    <header class="header container-fluid " id="admin-tab">
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

        <div class="description">
            <h1>Admin Database Management System</h1>
        </div>
        <div class="overlay"></div>
    </header>

    <div class="container">
        <div class="col-lg-4">
            <div class="atitle">
                <!-- <h2>Admin Database Management System</h2> -->
            </div>
            <form action="" name="form1" method="post" enctype="multipart/form-data">

            <img src="<?php echo $image1;?>" height="100" width="100">
                
                <div class="form-group">
                    <label for="email">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo $username; ?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php echo $password; ?>" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image1">
                </div>


                <button type="submit" name="update" class="btn btn-default">Update</button>
                <button type="submit" name="cancel" class="btn btn-default">Cancel</button>

            </form>
        </div>
    </div>


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
                            Book your stay with us, and you’ll be happy to come back
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
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="about.html">Cookie Eaters Inc.</a>
        </div>
    </footer>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="javasc.js"></script>
</body>
<?php
if (isset($_POST["update"])) {

    $tm=md5(time());
    $fnm=$_FILES["image1"]["name"];

    if($fnm=="")
    {
        mysqli_query($conn, "update users set username='$_POST[username]',email='$_POST[email]',password='$password' where id=$id");
    }
    else
    {
        $dst="./userimages/".$tm.$fnm;
        $dst1="userimages/".$tm.$fnm;
        move_uploaded_file($_FILES["image1"]["tmp_name"],$dst);
    
        $password = md5($_POST['password']);
        mysqli_query($conn, "update users set username='$_POST[username]',email='$_POST[email]',password='$password', image1='$dst' where id=$id");
    }

?>
    <script type="text/javascript">
        window.location = "admin.php";
    </script>
<?php
}

if (isset($_POST["cancel"])) {
?>
    <script type="text/javascript">
        window.location = "admin.php";
    </script>
<?php
}
?>

</html>