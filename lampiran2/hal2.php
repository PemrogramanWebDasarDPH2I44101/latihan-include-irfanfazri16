

<?php 
include 'header.php';
	session_start();
	$password = $_SESSION["password"];
	if ($password == "admin") {
		echo "halaman boleh diakses";
	}
	else{
		header("Location: formulir.php");
	}
 ?>