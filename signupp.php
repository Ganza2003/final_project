<?php
require ("connectdatabase.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$passwor = $_POST['passwor'];
$repass = $_POST['repass'];

// echo "succesful!!";

$sql5 = "INSERT INTO signup(first_name,second_name,phone_number,Password,re_password)
 values('$fname','$lname','$phone','$passwor','$repass')";
$resultd = mysqli_query($connect,$sql5);
header("location:service.php");

?>