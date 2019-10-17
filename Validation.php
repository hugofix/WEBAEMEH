<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'doctores');

$name = $_POST['usuario'];
$pass = $_POST['pasword'];

$s = "SELECT * FROM usuarios WHERE usuario = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  $_SESSION['usuario'] = $name;
  header('location:home.php');
}else {
  header('location:Login.php');
}

 ?>
