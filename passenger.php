<?php
require ("connectdatabase.php");

$fname = $_POST['fname'];
$phone = $_POST['phone'];
$car = $_POST['car'];
$ticket = $_POST['ticket'];
$linee = $_POST['linee'];
$timee = $_POST['timee'];
// echo "succesful!!";

$sql5 = "INSERT INTO booking(fullname,phonenumber,carplate,ticket,destination_line,travelling_time)
 values('$fname','$phone','$car','$ticket','$linee','$timee')";
$resultd = mysqli_query($connect,$sql5);
header("location:service.php");

?>