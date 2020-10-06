<?php
require("assets/common.php");
$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$subject = $_POST['subject'];
$subject = mysqli_real_escape_string($con, $subject);
$message = $_POST['message'];
$message = mysqli_real_escape_string($con, $message);

$query = "INSERT INTO contact(name, email, subject, message)VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $message . "')";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);
if ($num == 0) 
{
  $error = $$_GET['error'];
  $error = "<p>Sorry! Unable to send message.</p>";
} 
else 
{
  $error = $$_GET['error'];
  $error = "Congratulation! Your message is sent.";
}
?>
