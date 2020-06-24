<?php
	session_start();
	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'eticketbooking');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Choose transaction </title>
	<style>
		*{	
			font-family: 'Josefin Sans', sans-serif;
			margin-right: 0!important;
		}
		html{
				scroll-behavior: smooth;
		}
		label{
			size: 18px;
		}
	</style>
</head>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<script src="https://kit.fontawesome.com/5da368dd82.js"></script>

<meta charset="utf-8">

<!--<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist\css\bootstrap.min.css">-->

<link rel="stylesheet" type="text/css" href="fontawesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<body>
	<div class="container-fluid" style="
			padding-left: 0!important;
			padding-right: 0!important;
			">
		<!--Navbar-->
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="index.php"><i class="fas fa-ticket-alt"></i> Ticket generation system(For lucky draw)</a>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<p id="timer" class="navbar-nav mr-auto mt-lg-0 text-white"></p>
							<script>
								var timer = 2; // minutes
								var sec = 0; // seconds
								
								timedout();
								function timedout(){
									if(timer > 0){
										document.getElementById("timer").innerHTML = timer + 'm ' +	sec + 's';
											
										if(sec > 0){
											sec = sec - 1;
											t = setTimeout("timedout()", 1000);
										}else{
											sec = 60;
											timer = timer - 1;
											t = setTimeout("timedout()", 1000);
										}
									}else{
										document.getElementById("timer").innerHTML = "00:00";
										window.location = "http://localhost/web_projects/ProjectMCA_3sem/E-ticket_booking_portal/index.php";
									}
								}
							</script>
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <i class="fas fa-home"></i></a>
						</li>
						&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="nav-link" href="about.php">About Us</a>
						</li>
						&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="btn btn-danger" href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
						</li>
					</ul>
				</div>	
			</nav>
		</header>
		<!-- Main Content Of This WebPage -->
		<div class="container-fluid py-5" style="background-image: url(images/save.jpg); height: 577px !important;width: 100%;">
			<div class="row mt-5">
				<div class="col-lg-4 mt-2">
					<div class="card" style="height: 330px !important;">
						<img class="card-img-top" src="pics\ppay.jpg" alt="Card image" style="height: 200px !important;">
						<div class="card-body">
			   				<h4 class="card-title">UPI <i class="fab fa-google-pay"></i></h4>
			   				<a href="https://pay.google.com/intl/en_in/about/?gclid=Cj0KCQjwirz3BRD_ARIsAImf7LNWLj6gfdDmfqStKl72QQgvEfOvpbJTG9nHNIgjsdZ4YfDITvqR9DEaAvrsEALw_wcB" class="btn btn-success">Pay <i class="fas fa-rupee-sign"></i></a>
			   			</div>
					</div>
				</div>
				<div class="col-lg-4 mt-2">
					<div class="card" style="height: 330px !important;">
						<img class="card-img-top" src="pics/paytm.jpg" alt="Card image" style="height: 200px !important;">
						<div class="card-body">
			   				<h4 class="card-title">Paytm <i class="far fa-money-bill-alt"></i></h4>
			   				<a href="https://paytm.com/" class="btn btn-success">Pay <i class="fas fa-rupee-sign"></i></a>
			   			</div>
					</div>
				</div>
				<div class="col-lg-4 mt-2">
					<div class="card" style="height: 330px !important;">
						<img class="card-img-top" src="pics\SBI.jpg" alt="Card image" style="height: 200px !important;">
						<div class="card-body">
			   				<h4 class="card-title">Netbanking <i class="fas fa-university"></i></h4>
			   				<a href="https://www.onlinesbi.com/" class="btn btn-success">Pay <i class="fas fa-rupee-sign"></i></a>
			   			</div>
					</div>
				</div>
			</div>				
		</div>
		<footer class="">
			<p class="bg-dark text-light text-center">&copy; Amrapali group of institute</p>
		</footer>
	</div>
</body>
</html>