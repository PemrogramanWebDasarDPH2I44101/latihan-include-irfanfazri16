

<?php
include 'header.php';

session_start();



$_SESSION['nama']=isset($_POST["nama"])?$_POST["nama"]:$_SESSION["nama"];


$_SESSION['password']=isset($_POST["password"])?$_POST["password"]:$_SESSION["password"];





echo $_SESSION['nama'];
echo "masuk menu";


 ?>

