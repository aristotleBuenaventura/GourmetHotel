<?php
include "connection.php";
include "connectionInquiries.php";
include "connectionBooking.php";
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
    <header class="header container-fluid "id="admin-tab">
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
            <!-- <form action="" name="form1" method="post">
                <div class="form-group first-input">
                    <label for="email">Username:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter Username"
                    name="username" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email"
                    name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password"
                    name="password" required>
                </div>

                <button type="submit" name="insert" class="btn btn-default">Insert</button>
                <button type="submit" name="update" class="btn btn-default">Update</button>
                <button type="submit" name="delete" class="btn btn-default">Delete</button>
                </form> -->
            </div>
        </div>
        <div class="atitle px-4 py-4">
                <h2>List of Users and Admins</h2>
            </div>
        <div class="col-lg-12">
            <div class="spacer"></div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>User Image</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res=mysqli_query($conn,"select * from users");
                        while($row=mysqli_fetch_array($res))
                        {
                        echo "<tr>";
                        echo "<td>"; echo $row["id"]; echo "</td>";
                        echo "<td>"; ?> <img src="<?php echo $row["image1"];?>" height="100" width="100"> <?php echo "</td>";
                        echo "<td>"; echo $row["username"]; echo "</td>";
                        echo "<td>"; echo $row["email"]; echo "</td>";
                        echo "<td>"; echo $row["password"]; echo "</td>";
                        echo "<td>"; echo $row["role"]; echo "</td>";
                        echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"<button type="button"
                        class="greenbtn px-3 py-3">Edit</button></a> <?php echo "</td>";
                        echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"<button type="button"
                        class="redbtn px-3 py-3">Delete</button></a> <?php echo "</td>";
                        echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <div class="spacer"></div>
        </div>
        <div class="atitle px-4 py-4">
                <h2>Message Inquiries</h2>
            </div>
        <div class="col-lg-12">
            <div class="spacer"></div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res=mysqli_query($conn1,"select * from userinput");
                        while($row=mysqli_fetch_array($res))
                        {
                        echo "<tr>";

                        echo "<td>"; echo $row["id"]; echo "</td>";
                        echo "<td>"; echo $row["name"]; echo "</td>";
                        echo "<td>"; echo $row["email"]; echo "</td>";
                        echo "<td>"; echo $row["message"]; echo "</td>";
                        echo "<td>"; ?> <a href="deleteInquiry.php?id=<?php echo $row["id"]; ?>"<button type="button"
                        class="redbtn px-3 py-3">Delete</button></a> <?php echo "</td>";
                        echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <div class="spacer"></div>
        </div>
        <div class="atitle px-4 py-4">
                <h2>Customer Book in</h2>
            </div>
        <div class="col-lg-12">
            <div class="spacer"></div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Room</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res=mysqli_query($conn2,"select * from customers");
                        while($row=mysqli_fetch_array($res))
                        {
                        echo "<tr>";
                        echo "<td>"; echo $row["id"]; echo "</td>";
                        echo "<td>"; echo $row["name"]; echo "</td>";
                        echo "<td>"; echo $row["room"]; echo "</td>";
                        echo "<td>"; echo $row["checkin"]; echo "</td>";
                        echo "<td>"; echo $row["checkout"]; echo "</td>";
                        echo "<td>"; echo $row["email"]; echo "</td>";
                        echo "<td>"; echo $row["phone"]; echo "</td>";
                        echo "<td>"; ?> <a href="deleteInquiry.php?id=<?php echo $row["id"]; ?>"<button type="button"
                        class="redbtn px-3 py-3">Delete</button></a> <?php echo "</td>";
                        echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <div class="spacer"></div>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <script src="javasc.js"></script>
</body>
<?php
if(isset($_POST["insert"]))
{
  $password = md5($_POST['password']);

mysqli_query($conn,"insert into users

values(NULL,'$_POST[username]','$_POST[email]','$password')");
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php
}

if(isset($_POST["delete"]))
{
mysqli_query($conn, "delete from users where username='$_POST[username]'") or
die(mysqli_error($conn));
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php
}

if(isset($_POST["update"]))
{
mysqli_query($conn, "update users set username='$_POST[email]' where
username='$_POST[username]'") or die(mysqlii_error($conn));
?>
<script type="text/javascript">
window.location.href=window.location.href;
</script>
<?php
}
?>

</html>
