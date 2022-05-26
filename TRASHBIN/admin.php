<?php
include "connection.php";
?>

<html lang="en">
<head>
<title>Admin Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>

.atitle {
  border-bottom-style: solid;
  border-width: thin;
}
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
<div class="container">
<div class="col-lg-4">
<div class="atitle">
<h2>Admin Database Management System</h2>
</div>
<form action="" name="form1" method="post">
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
</form>
</div>
</div>

<div class="col-lg-12">
<div class="spacer"></div>
  <table class="table table-bordered">
  <thead>
  <tr>
  <th>Id</th>
  <th>Username</th>
  <th>Email</th>
  <th>Password</th>
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
  echo "<td>"; echo $row["username"]; echo "</td>";
  echo "<td>"; echo $row["email"]; echo "</td>";
  echo "<td>"; echo $row["password"]; echo "</td>";
  echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"<button type="button"
class="btn-success">Edit</button></a> <?php echo "</td>";
echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"<button type="button"
class="btn-danger">Delete</button></a> <?php echo "</td>";
  echo "</tr>";
  }
  ?>
  </tbody>
  </table>

<div class="spacer"></div>
</div>

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
