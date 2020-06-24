<?php
	//SignIn Validation
	session_start();
	header('location:choose_transaction.php');

	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'eticketbooking');

	$Event_name = $_POST['Event_name'];
	$Semester = $_POST['Semester'];
	$Total_Tickets = $_POST['Total_Tickets'];
	
	$q = " select * from ticketdata where Event_name = '$Event_name' && Semester = '$Semester' && Total_Tickets = '$Total_Tickets'";

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if ($num == 1) {
		echo "duplicate data";
	}else{
		$qy = "insert into ticketdata (Event_name, Semester, Total_Tickets) values ('$Event_name', '$Semester', '$Total_Tickets')";
		mysqli_query($con, $qy); 
	}
?>