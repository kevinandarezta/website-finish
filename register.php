<?php 
include "connection.php";
$fullname = $_POST['firstname'].' '.$_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$monthlyIncome = $_POST['monthlyIncome'];

mysqli_query($conn, "INSERT INTO users VALUES(NULL,'$username','$password','$fullname','$email','$monthlyIncome','Applicant')");
header("location:login.php?result=success");

?>