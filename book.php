<?php 

include "connectionBooking.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale =1.0">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
  <title>Gourmet Hotel</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />

  <style>
  <?php include 'appt.css'; ?>
  </style>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity=
  "sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
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
                  <a class="nav-link" href="inquiry.html">Inquiries</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="Login.html">Log In</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="SignUp.html">Sign Up</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="AboutUs.html">About</a>
              </li>
          </ul>
      </div>
  </nav>

  <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Make your reservation</h1>
                        </div>
                        <form  name ="form1"action="makepdf.php" method= "POST" >
                            <div class="form-group">
                                <input class="form-control" name="fullname" type="text" placeholder="Full Name" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control"name ="date1" type="date" required>
                                        <span class="form-label">Check In</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name ="date2" type="date" required>
                                        <span class="form-label">Check out</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" name="room" required>
                                            <option value="" selected hidden>Room</option>
                                            <option>Alpha</option>
                                            <option>Bravo</option>
                                            <option>Charlie</option>
                                            <option>Delta</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Rooms</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" name="noAdults" required>
                                            <option value="" selected hidden>Adults</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Adults</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control" name="noChild" required>
                                            <option value="" selected hidden>Children</option>
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Children</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name ="email" placeholder="Email Address" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="tel" name="phone" placeholder="Contact No." required>
                                        <span class="form-label">Phone</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button name ="book" class="submit-btn">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><br> <br> <br>
  </body>



  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"></script>
      <script type="text/javascript">
      $(document).ready(function(){

        $('.header').height($(window).height());

      })

      $(window).scroll(function() {
        if($(window).scrollTop()) {
            $("nav").addClass("black");
        }
        else {
            $("nav").removeClass("black");
        }
      });
      </script>
</html>
