<?php
	//SignIn Validation
	session_start();
	header('location:ticket_choose.php');

	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'eticketbooking');

	$name = $_POST['user'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$course = $_POST['course'];
	$contact = $_POST['contact'];

	$q = " select * from storedata where user = '$name' && password = '$pass' && email = '$email' && course = '$course' && contact = '$contact'";

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if ($num == 1) {
		echo "duplicate data";
	}else{
		$qy = "insert into storedata (user, password, email, course, contact) values ('$name', '$pass', '$email', '$course', '$contact')";
		mysqli_query($con, $qy); 
	}
?>