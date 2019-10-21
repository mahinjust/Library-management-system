<?php
include "Connection.php";
include "lgin.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title> ADMIN LOGIN</title>
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

		
			<nav>
				<ul>
					<li><a href="index.php"><span class="glyphicon glyphicon-home"><b>HOME</b></span></a></li>
					<li><a href="Books.php"><span class="glyphicon glyphicon-book"><b>BOOKS</b></span></a></li>
					<li><a href="Feedback.php"><span class="glyphicon glyphicon-pencil"><b>FEEDBACK</b></span></a></li>
					<li><a href="student_info.php"><span class="glyphicon glyphicon-list-alt"><b>STUDENTS-INFO</b></span></a></li>
					<li><a href="admin_login.php"><b>LOGIN</b></a></li>
					<li><a href="logout.php"><b>LOGOUT</b></a></li>
					<li><a href="Signup.php"><span class="glyphicon glyphicon-user"><b>REGISTRATION</b></a></span></li></li>


				</ul>
			</nav>
		</header>
		<section>
			<br><br><br><br>
			<div class="box-2">
					<br>
				<h1 style="text-align: center; font-size: 25px;"><b>LIBRARY MANAGEMENT SYSTEM</b></h1>
				<h1 style="text-align: center; font-size: 20px;"><b>ADMIN LOGIN FORM</b></h1>
				<form action="" name="User Login" method="post">
					<div class="Login" style="margin-left: 100px; ">
						<input class="Form-control" type="text" name="USERNAME" placeholder="USERNAME" required=""><br><br>
						<input class="Form-control"type="password" name="PASSWORD" placeholder="PASSWORD"required=""><br><br>
						<input class="btn btn-info" type="submit" name="submit" value="LOGIN" style="height: 30px;"><br><br>
					</div>
				</form>
				<p style="padding-left: 55px;">
					
					<a href="update.php" style="color:black; margin-left: 100px;"><b>FORGOT PASSWORD!</b></a> 
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