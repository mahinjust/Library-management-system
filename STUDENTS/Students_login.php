<?php
include "Connection.php";
include "lgin.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title> STUDENTS LOGIN</title>
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
				<h1 style="color: #273746;font-size: 22px;word-spacing: -10px; margin-top: 5px;margin-left: 620px;"><span class="glyphicon glyphicon-education"><b>CSE LIBRARY</b></span></h1>
			</div>

		</header>
		<section>
			<br><br><br><br>
			<div class="box">
					<br>
				<h1 style="text-align: center; font-size: 25px;"><b>LIBRARY MANAGEMENT SYSTEM</b></h1>
				<h1 style="text-align: center; font-size: 20px;"><b>USER LOGIN</b></h1>
				<form action="" name="User Login" method="post">
					<div class="Login" style="margin-left: 100px; ">
						<input class="Form-control" type="text" name="USERNAME" placeholder="USERNAME" required=""><br><br>
						<input class="Form-control"type="password" name="PASSWORD" placeholder="PASSWORD"required=""><br><br>
						<input class="btn btn-info" type="submit" name="submit" value="LOGIN" style="height: 30px;"><br><br>
					</div>
				</form>
				<p style="padding-left: 55px;">
					
					<a href="update.php" style="color:black; text-decoration: none;"><b>FORGOT PASSWORD!</b></a> <b>&nbsp
					NEW TO THIS SITE?</b>
					<a href="signup.php" style="color:black; text-decoration: none;"><b>SIGN UP</b></a>
				</p>
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