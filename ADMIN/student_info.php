<?php
session_start();
include "Connection.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<title> STUDENT INFORMATIONS</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
				

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
			<style type="text/css">
				.dj
				{
					
					
					height: 150px;
				}
				.srch
				{
					padding-left: 630px;
					margin-top: -20px;
				}
			</style>
			<style type="text/css">
			.scroll
				{
									
					overflow: auto;
					width: 100%;
					height: 380px;

    width: 1100px;
    margin:0px auto;
    background-color:#E6E6FA;
    opacity: 0.9;
				
				}
			</style>

	</head>
	<body>
		<div class="wrapper">
			<header class="dj">
				<div class="logo">
				<h1 style="color: #273746;font-size: 22px;word-spacing: -10px; margin-top: 5px;"><span class="glyphicon glyphicon-education"><b>CSE LIBRARY</b></span></h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.php"><span class="glyphicon glyphicon-home"><b>HOME</b></span></a></li>
					<li><a href="Books.php"><span class="glyphicon glyphicon-book"><b>BOOKS</b></span></a></li>
					
					<li><a href="student_info.php"><span class="glyphicon glyphicon-list-alt"><b>STUDENTS-INFO</b></span></a></li>
			
				</ul>
			</nav>
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
						?></div></a></li>
						<li><span class="glyphicon glyphicon-log-out"><a href="logout.php"><b>LOGOUT</b></span></a></li>
						</ul>
					</nav>
					<?php
				}
				else
				{
					?>
					<nav>
						<ul>
			
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"><b>LOGOUT</b></span></a></li>
						</ul>
					</nav>
					<?php
				}
			?>
		</header>
		<section>
		<div class="srch">
			<form class="navbar-form" method="post" name="form1">
				<div>
					<input class="form-control" type="text" name="search" placeholder="STUDENT USERNAME.." required="">
					<button style="background-color:#87CEFA;"type="submit" name="submit" class="btn btn-info">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</div>
			</form>
		</div>
		<div class="scroll">
			<?php

			if(isset($_POST['submit']))
			{
				$q=mysqli_query($db,"SELECT * FROM `Student`
 where USERNAME like '%$_POST[search]%'" );
				if (mysqli_num_rows($q)==0)
				{
					?>
			<script type="text/javascript">
				(function (){
					alert("NO STUDENT FOUND WITH THAT USERNAME. TRY SEARCHING AGAIN. ");
					window.location="student_info.php";
				})();
			</script>
			<?php
				}
				else
				{
					echo "<table class='table table-bordered table-hover'>";
				echo "<tr style='background-color:#B0E0E6;'>";
					echo"<th>"; echo "FULLNAME"; echo "</th>";
					echo"<th>"; echo "USERNAME"; echo "</th>";
					echo"<th>"; echo "ROLL"; echo "</th>";
					echo"<th>"; echo "EMAIL"; echo "</th>";
					echo"<th>"; echo "PHONE"; echo "</th>";

				echo "</tr>";

				while($row=mysqli_fetch_assoc($q))
				{
					echo "<tr  style='background-color:#F5FFFA;'>";
					echo "<td style='color:	#000000;' >"; echo $row['FULL NAME']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['USERNAME']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['ROLL NO']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['EMAIL']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['PHONE NO']; echo "</td>";
					echo "</tr>";
				}
			echo "</table >";

				}
			}
			else
			{
				$res=mysqli_query($db,"SELECT * FROM `Student`;");   
			echo "<table class='table table-bordered table-hover'>";
				echo "<tr style='background-color:#B0E0E6;'>";
					echo"<th>"; echo "FULLNAME"; echo "</th>";
					echo"<th>"; echo "USERNAME"; echo "</th>";
					echo"<th>"; echo "ROLL"; echo "</th>";
					echo"<th>"; echo "EMAIL"; echo "</th>";
					echo"<th>"; echo "PHONE"; echo "</th>";

				echo "</tr>";

				while($row=mysqli_fetch_assoc($res))
				{
					echo "<tr  style='background-color:#F5FFFA;'>";
					echo "<td style='color:	#000000;' >"; echo $row['FULL NAME']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['USERNAME']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['ROLL NO']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['EMAIL']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['PHONE NO']; echo "</td>";
					echo "</tr>";
				}
			echo "</table >";
			}



			?>
		</div>
		</section>
		<footer class="page-footer font-small blue">
					<br><br>

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