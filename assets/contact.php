<?php
//require("common.php");
$con = mysqli_connect("localhost", "root", "", "priyanshu","3308");
$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$subject = $_POST['subject'];
$subject = mysqli_real_escape_string($con, $subject);
$message = $_POST['message'];
$message = mysqli_real_escape_string($con, $message);

$query = "INSERT INTO contact (VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $message . "')";
mysqli_query($con, $query);

?>
