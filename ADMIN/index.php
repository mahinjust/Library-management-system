<?php
session_start();
include "Connection.php";

 

?>
<!DOCTYPE html>
<html>
<head>
	<title> HOME PAGE </title>
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
		.box
{
    height: 300px;
    width: 450px;
    margin:10px auto;
    background-color: #E6E6FA;
    opacity: 0.9;

}
			
			.wrapper
{
  height: 660px;
  width: 1523px;
  
}
header
{
    height: 140px;
    width: 1523px;
    background-color: #E6E6FA;

}
section  
{
    height: 500px;
    width: 1523px;
    background-color: #E6E6FA;
}
footer
{
    height: 130px;
    width: 1523px;
    background-color: #E6E6FA;
    
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

			<?php
					if(isset($_SESSION['login_user'])) 
					{

						?>
				<div class="logo">
					<h1 style="color: #273746;font-size: 22px;word-spacing: -10px; margin-top: 5px;"><span class="glyphicon glyphicon-education"><b>CSE LIBRARY</b></span></h1>
				</div>
							<nav>
								<ul>
					<li><a href="index.php"><span class="glyphicon glyphicon-home"><b>HOME</b></span></a></li>
					<li><a href="Books.php"><span class="glyphicon glyphicon-book"><b>BOOKS</b></span></a></li>
					
					<li><a href="student_info.php"><span class="glyphicon glyphicon-list-alt"><b>STUDENTS-INFO</b></span></a></li>
									<li><a href="profile.php"><div style="color:#273746;">
										

						<?php
						echo "<img class='img-circle profile_img' height=30 width=30 src='images/".$_SESSION['PICTURE']."'>";
						echo "".$_SESSION['login_user'];
						?>

					</div></a></li>
								<li><a href="lgdout.php"><span class="glyphicon glyphicon-log-out"><b>LOGOUT</b></span></a></li>

									

								</ul>
							</nav>
						<?php
					}
				else
				{
					?>
			<div class="logo">
				<h1 style="color: #273746;font-size: 22px;word-spacing: -10px; margin-top: 5px; margin-left: 620px;"><span class="glyphicon glyphicon-education"><b>CSE LIBRARY</b></span></h1>
			</div>
						<nav>
							<ul>
					<li><a href="Students_login.php"><span class="glyphicon glyphicon-log-in"><b>LOGIN</b></span></a></li>
					<li><a href="Signup.php"><span class="glyphicon glyphicon-user"><b>REGISTRATION</b></a></span></li></li>

							</ul>
						</nav>
					<?php
				}
			?>

		</header>
		<section>
			<br><br><br><br><br>
			<div class="box">
					<br>
				<h1 style="text-align: center; font-size: 35px;"><b>WELCOME TO CSE LIBRARY</b></h1><br>
				<h1 style="text-align: center; font-size: 20px;"><b>OPENS:09.00 AM</b></h1>
				<h1 style="text-align: center; font-size: 20px;"><b>CLOSES:14.00 PM</b></h1>
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