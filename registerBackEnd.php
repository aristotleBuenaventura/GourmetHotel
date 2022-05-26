<?php
    //user or admin
    include "connection.php";

    error_reporting(0);

    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: index.html");
    }

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']); //md5()

        $tm=md5(time());
        $fnm=$_FILES["image1"]["name"];
        $dst="./userimages/".$tm.$fnm;
        $dst1="userimages/".$tm.$fnm;
        move_uploaded_file($_FILES["image1"]["tmp_name"],$dst);

        $role = $_POST['role'];

        if ($password === $cpassword) {
            $users = getUserByEmail($conn, $email);
            if ($users->num_rows === 0) {
                $sql = "INSERT INTO users (username, email, password, image1, role)
                        VALUES ('$username', '$email', '$password', '$dst1', '$role')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    header('Location: /GourmetHotel/loginBackEnd.php?success=true');
                } else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }
            } else {
                echo "<script>alert('Woops! Email Already Exists.')</script>";

            }

        } else {
            echo "<script>alert('Password Not Matched.')</script>";
        }
    }

    function getUserByEmail($conn, $email) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        return mysqli_query($conn, $sql);
    }

    include ('register.html');

    ?>
