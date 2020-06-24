<!DOCTYPE html>
<html lang="en">
<head>
	<title> Event tickets </title>
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
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						&nbsp;&nbsp;&nbsp;
						<li class="nav-item dropdown mr-auto">
	        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          				Event Register
	        				</a>
	        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          					<a class="dropdown-item" href="#spandan">Spandan</a>
	          					<a class="dropdown-item" href="#spardha">Spardha</a>
	          					<a class="dropdown-item" href="#sandhan">Sandhan</a>
	        				</div>
	      				</li>
					</ul>	
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
		<!--Spardha-->
		<div class="container-fluid" style="background-image: url(images/track.jpg); height: 570px !important;width: 100%;" id="spardha">
			<div class="row">
				<div class="col-lg-1"></div>
			   	<div class="col-lg-4 mt-5" style="size: 400px !important;">
			   		<div class="card mt-5">
						<img class="card-img-top" src="images/bolt.jpg" alt="Card image">
						<div class="card-body">
			   				<h4 class="card-title">Spardha <i class="fas fa-running"></i></h4>
			   			</div>
					</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-5 card mt-5">
					<h2 class="text-center card-header text-dark" id="register">Registration <i class="fas fa-user-tie"></i></h2>
					<form class="card-body" name="frmModal" action="registration.php" method="POST">
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
				  		<!--Register yourself then pay-->	
				  		<button type="submit" class="btn btn-success">Submit <i class="far fa-check-circle"></i></button>
					</form>
			   	</div>
			</div>	
		</div>
        <!--Spardha about-->
		<section class="pt-5 mt-5 pb-5 mb-5">
			<div class="row pt-5">
				<div class="col-lg-1"></div>
				<div class="col-lg-5 col-md-6 col-12">
					<img src="pics\spardha.jpg" class="img-fluid mb-5">
				</div>
				<div class="col-lg-5 col-md-6 col-12">
					<h1>Spardha details<i class="fas fa-align-justify"></i></h1>
					<hr>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	
					</p>
					<a href="about.php"><button class="btn bg-primary text-white">Read more</button></a>
				</div>
				<div class="col-lg-1"></div>
			</div>
		</section>
		<!-- Spandan -->
		<div class="container-fluid bg-dark" style="background-image: url(images/fest1.jpg); height: 570px !important;width: 100%;" id="spandan">
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-5 card mt-5">
					<h2 class="text-center card-header text-dark">Registration <i class="fas fa-user-tie"></i></h2>
					<form class="card-body" name="frmModal" action="registration.php" method="POST">
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
				  		<!--Register yourself then pay-->	
				  		<button type="submit" class="btn btn-success">Submit <i class="far fa-check-circle"></i></button>
					</form>
			   	</div>
			   	<div class="col-lg-1"></div>
			   	<div class="col-lg-4 mt-5" style="size: 400px !important;">
			   		<div class="card mt-5">
						<img class="card-img-top" src="pics\spandan.jpg" alt="Card image">
						<div class="card-body">
			   				<h4 class="card-title">Spandan <i class="fas fa-child"></i></h4>
			   			</div>
					</div>
			   	</div>			   	
			</div>	
		</div>
        <!--Spandan about-->
		<section class="pt-5 mt-5 pb-5 mb-5">
			<div class="row pt-5">
				<div class="col-lg-1"></div>
				<div class="col-lg-5 col-md-6 col-12">
					<img src="images\collage.jpg" class="img-fluid mb-5">
				</div>
				<div class="col-lg-5 col-md-6 col-12">
					<h1>Spandan details<i class="fas fa-align-justify"></i></h1>
					<hr>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	
					</p>
					<a href="about.php"><button class="btn bg-primary text-white">Read more</button></a>
				</div>
				<div class="col-lg-1"></div>
			</div>
		</section>
		<!--Sandhan-->
		<div class="container-fluid" style="background-image: url(images/keyboard.jpg); height: 570px !important;width: 100%;" id="sandhan">
			<div class="row">
				<div class="col-lg-1"></div>
			   	<div class="col-lg-4 mt-5" style="size: 400px !important;">
			   		<div class="card mt-5">
						<img class="card-img-top" src="images\cplus.jpg" alt="Card image">
						<div class="card-body">
			   				<h4 class="card-title">Sandhan <i class="fas fa-laptop-code"></i></h4>
			   			</div>
					</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-5 card mt-5">
					<h2 class="text-center card-header text-dark" id="register">Registration <i class="fas fa-user-tie"></i></h2>
					<form class="card-body" name="frmModal" action="registration.php" method="POST">
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
				  		<!--Register yourself then pay-->	
				  		<button type="submit" class="btn btn-success">Submit <i class="far fa-check-circle"></i></button>
					</form>
			   	</div>
			</div>	
		</div>
        <!--Spandhan about-->
		<section class="pt-5 mt-5 pb-5 mb-5">
			<div class="row pt-5">
				<div class="col-lg-1"></div>
				<div class="col-lg-5 col-md-6 col-12">
					<img src="images\dev.jpg" class="img-fluid mb-5">
				</div>
				<div class="col-lg-5 col-md-6 col-12">
					<h1>Sandhan details<i class="fas fa-align-justify"></i></h1>
					<hr>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	
					</p>
					<a href="about.php"><button class="btn bg-primary text-white">Read more</button></a>
				</div>
				<div class="col-lg-1"></div>
			</div>
		</section>
		<!--Footer-->
		<section>
			<div class="jumbotron jumbotron-fluid bg-dark" style="height: 380px !important;">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-3">
						<article class="text-white">
							<h2>Ticket booking system</h2>
							<hr>
							<p class="" align="justify">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.	
							</p>
						</article>
					</div>
					<div class="col-lg-3">						
						<article class="py-5">
							<div class="text-right text-white">	
								<h1 class="">Want to join</h1>
								<p>Be a part of Amrapali family</p>
								<button class="btn btn-success"><a class="text-white" href="https://www.amrapali.ac.in/">Join now</a></button>
							</div>
						</article>				
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-3 text-white">
						<h2>You can follow our family <i class="fas fa-laugh-beam"></i></h2>
						<hr>	
						<button class="btn btn-primary"><a href="https://www.facebook.com/AGI.HLD/?ref=br_rs" class="text-white"><i class="fab fa-facebook-f"></i></a></button>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<button class="btn btn-primary"><a href="" class="text-white"><i class="fab fa-twitter"></i></a></button>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<button class="btn btn-primary"><a href="https://www.linkedin.com/groups/3884617/" class="text-white"><i class="fab fa-linkedin-in"></i></a></button>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<button class="btn btn-primary"><a href="https://github.com/Shailendra47/" class="text-white"><i class="fab fa-github"></i></a></button>
						<br><br>
						<button class="btn btn-primary"><a href="https://www.amrapali.ac.in/" class="text-white"><i class="fab fa-google"></i></a></button>		
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button class="btn btn-primary"><a href="https://www.instagram.com/agihld/?igshid=1guqrluduiurl" class="text-white"><i class="fab  fa-instagram"></i></a></button>
						
					</div>
					<div class="col-lg-1">
						<buttons onclick="topFunction()" id="myBtn" class="btn-danger" style="border-radius: 25px !important;height: 35px !important;width: 35px !important;">&nbsp; <i class="fas fa-arrow-up mt-2"></i></button>
						<script>
							//Get the button:
							mybutton = document.getElementById("myBtn");

							// When the user scrolls down 20px from the top of the document, show the button
							window.onscroll = function() {scrollFunction()};

							function scrollFunction() {
							  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
							    mybutton.style.display = "block";
							  } else {
							    mybutton.style.display = "none";
							  }
							}

							// When the user clicks on the button, scroll to the top of the document
							function topFunction() {
							  document.body.scrollTop = 0; // For Safari
							  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
							}
						</script>
					</div>
				</div>
				<p class="bg-dark text-light text-center">&copy; Amrapali group of institute</p>	
			</div>
		</section>
	</div>
</body>
</html>