<?php 
include "connection.php";
$id_user = $_POST['id'];
$id_residence = $_POST['id_residence'];
$application_date = date('Y-m-d');
$status = 0	;
$fromDate = $_POST['fromDate'];
$duration = $_POST['duration'];
$endDate = date('Y-m-d', strtotime($fromDate. ' + '.$duration.' days'));
$note = $_POST['note'];

$result = mysqli_query($conn, "INSERT INTO applications VALUES(NULL,'$application_date','$status','$fromDate','$duration','$endDate','$note','$id_user','$id_residence')");
header('location: detail_residence.php?id_residence='.$id_residence.'&&result=success');
?>