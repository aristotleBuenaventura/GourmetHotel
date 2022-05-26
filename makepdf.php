
<?php
//load the ar library
include 'phpqrcode/qrlib.php';
require_once __DIR__ . '/vendor/autoload.php';
//Get variables
$name = $_POST['fullname'];
$date1 = $_POST['date1'];
$date2 = $_POST['date2'];
$room =  $_POST['room'];
$noAdults = $_POST['noAdults'];
$noChild = $_POST['noChild'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Create new PDF Instance
$mpdf = new \Mpdf\Mpdf();

//Create PDF
$data =  '<img src="images/lologo.png"/>' . '<br />' .
'<h3> Your details </h3>' .

'<strong align="center"> Customer Name: </strong>' . $name . '<br />' . '<br />'.
'<strong> Number of Adults: ' . $noAdults. '<br /> '. 'Number of Children: '.  $noChild .'<br />'. '<br />'.
'<strong> Room: </strong>' . $room . '<br/>'. '<br />'.
'<strong> Check In: </strong>' . $date1 . '<br />'. '<strong> Check Out: </strong>'. $date2 . '<br />'. '<br />'.
'<strong> Email: </strong>' . $email . '<br />'. '<br />'.
'<strong> Contact Number: </strong>' . $phone . '<br />'. '<center>' . '<br />'.
'<img src="images/QRcode.png"/>'. '<center />';

//file path
$file = "images/QRcode.png";

//other parameters
$ecc = 'H';
$pixel_size = 5;
$frame_size = 5;

// Generates QR Code and Save as PNG
QRcode::png($text, $file, $ecc, $pixel_size, $frame_size);

$mpdf->WriteHTML($data);
$mpdf->Output('Confirmation.pdf', 'D');

?>
<?php
$server = "localhost";
$username ="root";
$password = "";
$dbName = "booking";

    $conn = mysqli_connect($server, $username, $password, $dbName);

    if(isset($_POST['book'])) {
      if(!empty($_POST['fullname']) && !empty($_POST['room']) && !empty($_POST['date1']) && !empty($_POST['date2']) && !empty($_POST['email'])  && !empty($_POST['phone'])){
        $name = $_POST['fullname'];
        $room = $_POST['room'];
        $check_in = $_POST['date1'];
        $check_out = $_POST['date2'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

  $tm=md5(time());
      $fnm=$_FILES["image1"]["name"];
      $dst="./userimages/".$tm.$fnm;
      $dst1="userimages/".$tm.$fnm;
      move_uploaded_file($_FILES["image1"]["tmp_name"],$dst);

  $query = "insert into customers(image1,name, room, checkin, checkout, email, phone) values('$dst1','$name', '$room','$check_in','$check_out','$email', $phone)";
  $run = mysqli_query($conn, $query) or die(mysqli_error());


    }else {
      echo "Error! something happened, please refresh the page";
  }
}
