<?php
	include "Connection.php";
	include "forgot.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PASSWORD </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.fa
		{
			font-size: 25px;
			width:25px;
			height: 35px;
			text-align: center;
			text-decoration: none;
			border-radius: 60%;
			padding: 5px;
		}
	</style>


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<h1 style="color: #273746;font-size: 22px;word-spacing: -10px; margin-top: 5px; margin-left: 620px;"><span class="glyphicon glyphicon-education"><b>CSE LIBRARY</b></span></h1>
			</div>


		</header>
		<section>
						<br><br><br><br>
			<div class="box">
				<br>
				<div style="text-align: center;">
					
					<h1 style="text-align: center; font-size:25px;"><b>CHANGE YOUR PASSWORD</b></h1>
				</div>
				<form action="" method="post">
					<br>
					<div class="registration" style="padding-left: 100px;">
					<input class="Form-control" type="text" name="USERNAME" placeholder="USERNAME" required=""><br><br>
					<input class="Form-control" type="email" name="EMAIL" placeholder="EMAIL" required=""><br><br>
					<input class="Form-control" type="password" name="PASSWORD" placeholder=" NEW PASSWORD"required=""><br><br>
					<input class="btn btn-info" type="submit" name="submit" value="UPDATE" style="height: 30px;"><br><br>
				</div>
				</form>


			</div>
	
		</section>
		<footer class="page-footer font-small blue">
					<br>

				  <div class="footer-copyright text-center py-3"><b>© ALL RIGHTS RESERVED BY-</b>
				    <a href="https://just.edu.bd/"><b>JASHORE UNIVARSITY OF SCIENCE & TECHNOLOGY</b></a>
				    <h5><b>CONTACT US THROUGH SOCIAL MEDIA</b> </h5>
				    <a href="#" class="fa fa-facebook"></a>
				    <a href="#" class="fa fa-twitter"></a>
				    <a href="#" class="fa fa-google"></a>
				    <a href="#" class="fa fa-instagram"></a>
				    <a href="#" class="fa fa-yahoo"></a>
				    
				  </div>
				  

				</footer>
	</div>
</body>
</html>