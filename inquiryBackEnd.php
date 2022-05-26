<?php
include "connectionInquiries.php";

if(isset($_POST["submit"]))
{
    $password = md5($_POST['password']);
    mysqli_query($conn1,"insert into userinput values(NULL,'$_POST[name]','$_POST[email]','$_POST[message]')");
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}


include 'inquiry.html';

?>