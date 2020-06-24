<?php
//Login Validation
session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'eticketbooking');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " select * from storedata where user = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['user'] = $name;
	header('location: admin_control.php');
}else{
	header('location:admin.php');
}
?>