<?php
    include "connection.php";

    error_reporting(0);

    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location: index.html");
    }

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $role = $_POST['role'];
        $result = getUserByEmail($conn, $email, $password,$role);
        $user = mysqli_fetch_row($result);
        $user = $_POST['username'];
        if ($result->num_rows > 0) {
                    $row = mysqli_fetch_row($result);
                    $_SESSION['username'] = $row['username'];
                    header("Location: /GourmetHotel/index.html");
                } else {
                    echo "<script>alert('Woops! Email or Password or Role is Wrong.')</script>";
                }
        // $_SESSION['role'] = 'user';
    }
    
    function getUserByEmail($conn, $email, $password, $role) {
        $sql = "SELECT * FROM users WHERE email='$email' AND password= '$password' AND role= '$role'";
        return mysqli_query($conn, $sql);
    }

    include 'login.html';

  

?>