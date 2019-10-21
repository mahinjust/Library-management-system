<?php
include "Connection.php";
include "fdb.php";
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> FEEDBACK</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
	</head>
	</head>
	<body>
		<div class="wrapper">
			<header>
										<div class="logo">
				<h1 style="color: #273746;font-size: 22px;word-spacing: -10px; margin-top: 5px;"><span class="glyphicon glyphicon-education"><b>CSE LIBRARY</b></span></h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php"><span class="glyphicon glyphicon-home"><b>HOME</b></span></a></li>
					<li><a href="Books.php"><span class="glyphicon glyphicon-book"><b>BOOKS</b></span></a></li>
					<li><a href="Feedback.php"><span class="glyphicon glyphicon-pencil"><b>FEEDBACK</b></span></a></li>
					<li><a href="student_info.php"><span class="glyphicon glyphicon-list-alt"><b>STUDENTS-INFO</b></span></a></li>
				<?php 
				if(isset($_SESSION['login_user'])) 
				{
					?>
					
					
					<nav>
						<ul>
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
					<nav>
						<ul>
					<li><a href="lgdout.php"><span class="glyphicon glyphicon-log-out"><b>LOGOUT</b></span></a></li>
						</ul>
					</nav>
					<?php
				}
			?>

				</ul>
			</nav>
		</header>
		<section>
			<br><br><br><br><br>
			<div class="box">
					<br><br>
					<h4 style="color: #273746;font-size: 19px;word-spacing: 0px; line-height: 20px;margin-top: 0px; margin-left: 50px;"><b>IF YOU HAVE ANY SUGGESTIONS OR QUESTIONS,YOU CAN ASK HERE.....</b></h4>
				<form action="" style="" method="post">
				<div class="Login" style="padding-left: 100px; margin-right: 100px; margin-top: 30px; margin-bottom: 30px;">
					<input type="text" class="form-control" name="comment" placeholder="WRITE SOMETHING......" style="height: 60px;"><br>
					<input type="submit" class="btn btn-info" name="submit" value="POST" style="height: 30px;">
				</div>
				</form>
			</div>
		<div>

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