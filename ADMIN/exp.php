<?php
session_start();
include "Connection.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<title> EXPIRED BOOKS</title>
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
					padding-left: 365px;
					margin-top: 5px;
				}
								.container
				{
										overflow: scroll;
					width: 100%;
					    height:460px;
    width: 1050px;
    margin:0px auto;
    background-color:#E6E6FA;
    opacity: 0.9;
				}

				.form-control
				{
					width: 280px;
				}
			</style>
			<style type="text/css">
			.aa
				{
					overflow: auto;
					width: 100%;
					height: 500px;
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
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"><b>LOGOUT</b></span></a></li>
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
  <div class="h"><a href="issue.php">ISSUE INFORMATION</a></div>
   <div class="h"><a href="exp.php">EXPIRED BOOKS</a></div>
     <div class="h"><a href="fine.php">FINES INFORMATION</a></div>
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
			
				
			
<div class="container">
	<h3 style="text-align: center;"><b>INFORMATION OF GIVEN BOOKS</b></h3>
	<?php
		if (isset($_SESSION['login_user']))
		{
			?>
			
		<div style="margin-left: 410px;">
		<form action="" method="post">		
		<button name="submit2" type="submit" class="btn btn-info" style=" background-color: green; color: yellow;" >RETURNED</button>
		<button name="submit3" type="submit" class="btn btn-info" style=" background-color: red; color: yellow;" >EXPIRED</button>
		</form>
		</div>	
			<br>	
	<div class="srch">
		<form action="" method="post" name="form2">
			<input type="text" name="USERNAME" class="form-control" placeholder="USERNAME" required="">
			<input type="text" name="Bid" class="form-control" placeholder="BID" required=""><br>
			<button class="btn btn-info" name="submit" type="submit" style="height: 30px; margin-left: 100px;">SUBMIT</button>
		</form>

	</div>
	<br>

			<?php
			if (isset($_POST['submit']))
			{
				$res=mysqli_query($db,"SELECT * FROM `issue_book` WHERE USERNAME='$_POST[USERNAME]' and Bid='$_POST[Bid]';");
				while ($row=mysqli_fetch_assoc($res))
				{
					$d= strtotime($row['Return']);
        $c= strtotime(date("Y-m-d"));
        $diff= $c-$d;

        if($diff>=0)
        {
          $day=floor($diff/(60*60*24)); 
          $fine=$day*20;
        } 
        
				}

				$x=date("Y-m-d");
				mysqli_query($db,"INSERT INTO `fine` VALUES('$_POST[USERNAME]','$_POST[Bid]','$x','$day','$fine','PAID');");
				$var1='<p style="color:yellow; background-color:green;">RETURNED</p>';
				mysqli_query($db,"UPDATE issue_book SET Approve='$var1' WHERE USERNAME='$_POST[USERNAME]' and Bid='$_POST[Bid]'");
				mysqli_query($db,"UPDATE books SET Quantity = Quantity+1 where Bid='$_POST[Bid]' ");
			}
		}
	
	
	
		 
		$c=0;
		
		
			$ret='<p style="color:yellow; background-color:green;">RETURNED</p>';
			$exp='<p style="color:yellow; background-color:red;">EXPIRED</p>';
			
			if(isset($_POST['submit2']))
			{
				$sql="SELECT student.USERNAME,books.Bid,Name,Author,Edition,Approve,Issue,issue_book.Return FROM student INNER JOIN issue_book ON student.USERNAME=issue_book.Username INNER JOIN books ON issue_book.Bid=books.Bid WHERE issue_book.Approve ='$ret' ORDER BY `issue_book`.`Return` DESC";
				$res=mysqli_query($db,$sql);
			}
			else if(isset($_POST['submit3']))
			{
				$sql="SELECT student.USERNAME,books.Bid,Name,Author,Edition,Approve,Issue,issue_book.Return FROM student INNER JOIN issue_book ON student.USERNAME=issue_book.Username INNER JOIN books ON issue_book.Bid=books.Bid WHERE issue_book.Approve ='$exp' ORDER BY `issue_book`.`Return` DESC";
				$res=mysqli_query($db,$sql);
			}
			else
			{
				$sql="SELECT student.USERNAME,books.Bid,Name,Author,Edition,Approve,Issue,issue_book.Return FROM student INNER JOIN issue_book ON student.USERNAME=issue_book.Username INNER JOIN books ON issue_book.Bid=books.Bid WHERE issue_book.Approve !='' and issue_book.Approve !='YES' ORDER BY `issue_book`.`Return` DESC";
				$res=mysqli_query($db,$sql);
			}

			echo "<table class='table table-bordered table-hover'>";
			
					echo "<tr class='h'style='background-color:#B0E0E6;'>";
					echo"<th>"; echo "USERNAME"; echo "</th>";
					echo"<th>"; echo "BID"; echo "</th>";
					echo"<th>"; echo "BOOK NAME"; echo "</th>";
					echo"<th>"; echo "AUTHOR'S NAME"; echo "</th>";
					echo"<th>"; echo "EDITION"; echo "</th>";
					echo"<th>"; echo "APPROVAL"; echo "</th>";
					echo"<th>"; echo "ISSUE DATE"; echo "</th>";
					echo"<th>"; echo "RETURN DATE"; echo "</th>";
				echo "</tr>";

				while($row=mysqli_fetch_assoc($res))
				{  
					echo "<tr class='h' style='background-color:#F5FFFA;'>";
					echo "<td style='color:	#000000;'>"; echo $row['USERNAME']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['Bid']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['Name']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['Author']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['Edition']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['Approve']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['Issue']; echo "</td>";
					echo "<td style='color:	#000000;'>"; echo $row['Return']; echo "</td>";

					echo "</tr>";
				}

			echo "</table >";


	?>

	
</div>
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