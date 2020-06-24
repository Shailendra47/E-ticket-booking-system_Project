<?php
	session_start();
	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'eticketbooking');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Buy Ticket </title>
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
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <i class="fas fa-home"></i></a>
						</li>
						&nbsp;&nbsp;&nbsp;
							<li class="nav-item active">
							<a class="nav-link" href="about.php">About Us</a>
						</li>
					</ul>
				</div>	
			</nav>
		</header>
		<!-- Main Content Of This WebPage -->
		<div class="container-fluid" style="background-image: url(images/save.jpg); height: 577px !important;width: 100%;">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-4 mt-5">
					<div class="card mt-5" style="height: 375px !important;">
						<img class="card-img-top" src="images/car.jpg" alt="Card image" style="height: 270px !important;">
						<div class="card-body">
			   				<h4 class=""></h4>
			   				<!-- <i class="fas fa-mask"></i> -->
			   				<form class="" name="frmModal" action=".php" method="POST">
			   					<h3 class="card-title text-dark">Welcome: Student <i class="fas fa-user-tie"></i></h3>
							</form>
			   			</div>
					</div>
			   	</div>
			   	<div class="col-lg-1"></div>
			   	<div class="col-lg-5 card mt-5">
					<h2 class="text-center card-header text-dark">Ticket details <i class="fas fa-user-tie"></i></h2>
					<form class="card-body" name="frmModal" action="Regticket.php" method="POST">
				  		<div class="form-group mb-5 pt-2">
				    		<label for="pwd" class="btn btn-success mx-auto d-block">* Ticket price = 25 <i class="fas fa-rupee-sign"></i>/ticket</label>
				  		</div>				  		
				  		<div class="form-group">
				    		<label for="pwd">Event name:</label>
				    		<input type="text" class="form-control" name="Event_name">
				  		</div>
				  		<div class="form-group">
				    		<label for="pwd">Semester:</label>
				    		<input type="number" class="form-control" name="Semester">
				  		</div>				  		
				  		<div class="form-group">
				    		<label for="pwd">Total number of tickets you want:</label>
				    		<input type="number" class="form-control" name="Total_Tickets">
				  		</div>
				  		<!--Register yourself then pay-->	
				  		<button type="submit" class="btn btn-success">Proceed to checkout <i class="far fa-arrow-alt-circle-right"></i></button>
					</form>
			   	</div>
			</div>	
		</div>
		<footer class="">
			<p class="bg-dark text-light text-center">&copy; Amrapali group of institute</p>
		</footer>
	</div>
</body>
</html>