<?php
include "connectionInquiries.php";
$id=$_GET["id"];
mysqli_query($conn1, "delete from userinput where id=$id");
?>
<script type="text/javascript">
window.location="admin.php";
</script>
