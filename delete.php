<?php

	$con = mysqli_connect('localhost','root');

	mysqli_select_db($conn,'eticketbooking');

	$id = $_POST['id'];

	$q = "DELETE FROM `eticketbooking` WHERE id = $id";

	mysqli_query($con,$q);

	header('location: admin_control.php');

?>