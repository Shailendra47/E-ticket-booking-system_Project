<?php
	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'eticketbooking');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Admin Rights </title>
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
					<a class="navbar-brand" href="index.php"><i class="fas fa-ticket-alt"></i> Ticket generation system(For lucky draw)</a>
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						&nbsp;&nbsp;&nbsp;
						<li class="nav-item active">
							<a class="nav-link" href="ticket.php">User Ticket detail <i class="fas fa-clipboard-list"></i></a>
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
					&nbsp;&nbsp;&nbsp;
					<form class="form-inline my-2 my-lg-0">
					    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
				    </form>
				</div>	
			</nav>
		</header>
		<!-- Main Content Of This WebPage -->
		<div class="container-fluid pb-5" style="height: 577px !important;width: 100%;">
			<div class="col-lg-12 mb-5">
				<br/>
				<h2 class="text-dark text-center mt-2"> Registered Users Details <i class="fas fa-users"></i></h2>
				<hr class="w-25 mx-auto">
				<br/>
				<table class="table table-striped table-hover table-bordered text-center" id="myTable">
					<tr class="bg-dark text-white">
						<td> Id </td>
						<td> Username </td>
						<td> email </td>
						<td> Password </td>
						<td> course </td>
						<td> contact </td>
						<!--<td> Update</td>
						<td> Delete </td>-->
					</tr>
					<?php
						$q = "select * from storedata";
						$query = mysqli_query($con,$q);
							
						while ($res = mysqli_fetch_array($query)) {	
					?>
					<tr class="text-center">
						<td> <?php echo $res['id']; ?> </td>
						<td> <?php echo $res['user']; ?> </td>
						<td> <?php echo $res['email']; ?> </td>
						<td> <?php echo $res['password']; ?> </td>
						<td> <?php echo $res['course']; ?> </td>
						<td> <?php echo $res['contact']; ?> </td>
						<!--<script>
							function myFunction() {
							  var input, filter, table, tr, td, i, txtValue;
							  input = document.getElementById("myInput");
							  filter = input.value.toUpperCase();
							  table = document.getElementById("myTable");
							  tr = table.getElementsByTagName("tr");
							  for (i = 0; i < tr.length; i++) {
							    td = tr[i].getElementsByTagName("td")[0];
							    if (td) {
							      txtValue = td.textContent || td.innerText;
							      if (txtValue.toUpperCase().indexOf(filter) > -1) {
							        tr[i].style.display = "";
							      } else {
							        tr[i].style.display = "none";
							      }
							    }       
							  }
							}
						</script>-->
					</tr>
					<?php
						}
					?>	
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>