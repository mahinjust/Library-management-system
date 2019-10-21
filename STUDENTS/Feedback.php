<?php
session_start();
include "Connection.php";

 

?>
<!DOCTYPE html>
<html>
<head>
	<title>FEEDBACK </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
		.mahin
		{
		    height:455px;
			width: 1030px;
   			margin:0px auto;
   			background-color:#E6E6FA;
    		opacity: 0.9;
    		overflow: scroll;
		}

		.roudro
{
  height: 660px;
  width: 1523px;
  
}
header
{
    height: 140px;
    width: 1523px;
    background-color:#E6E6FA;

}
section
{
    height: 500px;
    width: 1523px;
    background-color:#E6E6FA;
}
footer
{
    height: 115px;
    width: 1523px;
    background:#E6E6FA;
    position:fixed;
    left:0px;
    bottom:0px;
    
}

		.form-control
		{
			width: 280px;
		}
		
	</style>


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="roudro">
		<header>
			<div class="logo">
				<h1 style="color: #273746;font-size: 22px;word-spacing: -10px; margin-top: 5px;"><span class="glyphicon glyphicon-education"><b>CSE LIBRARY</b></span></h1>
			</div>
			<?php
					if(isset($_SESSION['login_user'])) 
					{

						?>
							<nav>
								<ul>

									<li><a href="index.php"><span class="glyphicon glyphicon-home"><b>HOME</b></span></a></li>
									<li><a href="Books.php"><span class="glyphicon glyphicon-book"><b>BOOKS</b></span></a></li>
									<li><a href="Feedback.php"><span class="glyphicon glyphicon-pencil"><b>FEEDBACK</b></span></a></li>
										
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
								<li><a href="Students_login.php"><span class="glyphicon glyphicon-log-in"><b>LOGIN</b></span></a></li>
								<li><a href="Signup.php"><span class="glyphicon glyphicon-user"><b>REGISTRATION</b></a></span></li></li>

							</ul>
						</nav>
					<?php
				}
			?>

		</header>
		<section>
			<br>
			<div class="mahin">
				<h3 style="text-align: center;"><b>COMMENT/FEEDBACK/CHAT BOX</b></h3>
					<div style="margin-left: 340px;">
						<form class="navbar-form" method="post" name="form1">
					
							<input class="form-control" type="text" name="comment" placeholder="WRITE SOMETHING.." required="">
							<button style="background-color:#87CEFA;"type="submit" name="submit" class="btn btn-info">SEND</button>
				
						</form>
					</div>
					
			<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('','$_SESSION[login_user]','$_POST[comment]');";
				if(mysqli_query($db,$sql))
				{
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
						echo "<td>"; echo $row['USERNAME']; echo "</td>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
					echo "</table>";
				}

			}

			else
			{
				$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
					$res=mysqli_query($db,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
						echo "<td>"; echo $row['USERNAME']; echo "</td>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
					echo "</table>";
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