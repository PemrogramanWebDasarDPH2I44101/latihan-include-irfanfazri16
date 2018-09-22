
<?php 
include 'header.php';
	session_start();
	$password = $_SESSION["password"];
	if ($password == "admin") {
		header("Location: formulir.php");
	}
	else{
		echo "halaman boleh diakses";
	}
 ?>