<?php

	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'eticketbooking');

	if (isset($_POST["done"])) {

		$id = $_POST['id'];
		$name = $_POST["user"];
		$password = $_POST["password"];
		$email = $_POST["email"];
		$course = $_POST["course"];
		$contact = $_POST["contact"];
		$q = "UPDATE `storedata` SET id = $id, name ='$name', password = '$password', email = '$email', course = '$course', contact = '$contact' WHERE id = $id";
		$query = mysqli_query($con,$q);
		header('location: admin_control.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Update user detail </title>
	<style>
		*{	
			font-family: 'Josefin Sans', sans-serif;
			
		}
		html{
			scroll-behavior: smooth;
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
					<a class="navbar-brand" href="#"><i class="fas fa-ticket-alt"></i> Ticket generation system(For lucky draw)</a>
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
		<div class="container-fluid" style="background-image: url(images/save.jpg); height: 600px !important;width: 100%;">
			<div class="row py-2">
				<div class="col-lg-4"></div>
					<div class="col-lg-4 card ">
						<h2 class="text-center card-header text-dark">Update panel <i class="fas fa-user-tie"></i></h2>
						<form class="card-body" action="admin_control.php" method="POST">
							<div class="form-group">
								<label for="text">Username</label>
								<input type="text" class="form-control" name="user">
							</div>
					  		<div class="form-group">
					    		<label for="pwd">E-mail</label>
					    		<input type="email" class="form-control" name="email">
					  		</div>
					  		<div class="form-group">
					    		<label for="pwd">Password</label>
					    		<input type="password" class="form-control" name="password">
					  		</div>
					  		<div class="form-group">
					    		<label for="pwd">Course/Semester</label>
					    		<input type="text" class="form-control" name="course">
					  		</div>
					  		<div class="form-group">
					    		<label for="pwd">Mobile number</label>
					    		<input type="number" class="form-control" name="contact">
					  		</div>
					  		<button type="submit" class="btn btn-success">Update detail <i class="fas fa-key"></i></button>
						</form>
					</div>	
					<div class="col-lg-4"></div>
				</div>
				<style>
					label{
						font-size: 18px;
					}
				</style>
			</div>	
		</div>
		<p class="bg-dark text-light text-center">&copy; Amrapali group of institute</p>
	</div>
</body>
</html>
