<?php
	session_start();
	include"Connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title> PROFILE </title>
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
				body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
 
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 100px;
}

.sidenav a {
  padding: 5px 5px 5px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 20px;
  margin-left: 70px;
}

#main {
  transition: margin-left .5s;
  padding-left: 0px;
  margin-top: -10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 55px;}
  .sidenav a {font-size: 18px;}
}
.h:hover
{
	color: white;
	width: 300px;
	height: 50px;
	background-color:#B0E0E6;
}
.j:hover
{	color: white;
	background-color:#B0E0E6;

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
				.box-3
{
    height:420px;
    width: 450px;
    margin:0px auto;
    background-color: #E6E6FA;
    opacity: 0.9;
  
}
			</style>
			<style type="text/css">
			.scroll
				{
					overflow: auto;
					width: 100%;
					height: 500px;
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
								<li><a href="index.php"><span class="glyphicon glyphicon-home"><b>HOME</b></span></a></li>
								<li><a href="Books.php"><span class="glyphicon glyphicon-book"><b>BOOKS</b></span></a></li>
								<li><a href="Feedback.php"><span class="glyphicon glyphicon-pencil"><b>FEEDBACK</b></span></a></li>
			
								<li><a href="lgdout.php"><span class="glyphicon glyphicon-log-out"><b>LOGOUT</b></span></a></li>

							</ul>
						</nav>
					<?php
				}
			?>

		</header>
		<section>
						<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  										<div style="color:#273746; margin-left: 30px; font-size: 20px;">
						<?php
							if(isset($_SESSION['login_user'])) 
							{
									echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['PICTURE']."'>";
						echo "</br></br>";
						echo "WELCOME".$_SESSION['login_user'];
							}
					
						?>

					</div><br><br>
 <div class="h"><a href="add.php">ADD BOOKS</a></div>
  <div class="h"><a href="profile.php">MY PROFILE</a></div>
  <div class="h"><a href="req.php">BOOK REQUEST</a></div>
  <div class="h"><a href="info.php">ISSUE INFORMATION</a></div>
     <div class="h"><a href="fine.php">FINE INFORMATION</a></div>
</div>

<div id="main">

  <span style="font-size:25px;cursor:pointer;color: #87CEFA;" onclick="openNav()">&#9776;<b>OPEN</b></span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
   document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
   document.body.style.backgroundColor = "white";
}
</script>
</div>
				<form action="" method="post">
					<button class="btn btn-info" style="float: left;width: 210px;" name="submit1" type="submit">
						CHANGE PROFILE PICTURE
					</button>
				</form>
		<br>
			<div style=" height:410px;
    width: 450px;
    margin:0px auto;
    background-color:#E6E6FA;
    opacity: 0.9;">
				<?php
				if (isset($_POST['submit1'])) 
					{
						?>
					<script type="text/javascript">
					window.location="edit.php"
				</script>
						<?php
					}
					$q=mysqli_query($db,"SELECT * FROM Student where USERNAME='$_SESSION[login_user]';"); 
				?>
				<br>
				<h3 style="text-align: center;"><b>USER PROFILE</b></h3>
				<?php
					$row=mysqli_fetch_assoc($q);
					echo "<div style='text-align:center'>
					<img class='img-circle profile_img' height=50 width=60 src='images/".$_SESSION['PICTURE']."'>
					</div>"; 
				?>
				<div style="text-align: center;"><b>WELCOME,</b>
					<h4>
						<?php echo $_SESSION['login_user']; ?>
					</h4>
				</div>
				<?php
					echo "<b>";
					echo "<table class='table'>";
						echo "<tr>"; 
							echo "<td>";
							echo "<b>FULL NAME:</b>";
							echo "</td>";
							echo "<td>";
							echo $row['FULL NAME'];
							echo "</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<td>";
							echo "<b>USERNAME:</b>";
							echo "</td>";
							echo "<td>";
							echo $row['USERNAME'];
							echo "</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<td>";
							echo "<b>PASSWORD:</b>";
							echo "</td>";
							echo "<td>";
							echo $row['PASSWORD'];
							echo "</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<td>";
							echo "<b>ROLL NO:</b>";
							echo "</td>";
							echo "<td>";
							echo $row['ROLL NO'];
							echo "</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<td>";
							echo "<b>EMAIL:</b>";
							echo "</td>";
							echo "<td>";
							echo $row['EMAIL'];
							echo "</td>";
						echo "</tr>";


						echo "<tr>";
							echo "<td>";
							echo "<b>PHONE NO:</b>";
							echo "</td>";
							echo "<td>";
							echo $row['PHONE NO'];
							echo "</td>";
						echo "</tr>";
					echo "</table>";
					echo "</b>";
				?>
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