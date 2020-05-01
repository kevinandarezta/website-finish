<?php 
include 'connection.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);
if($cek >= 1){
	while($row = mysqli_fetch_assoc($query)){
		if($row['function'] == 'Applicant'){
			$_SESSION['id_user'] = $row['id_user'];
			header("Location: index1.html");
		}else{
			header("Location: admin/index.php");
		}
	}
}else{
	header("Location: login.php");
}

die();
?>