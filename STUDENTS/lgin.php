<?php
session_start();
	
	


	if (isset($_POST['submit']))
	{	$count=0;
		$res=mysqli_query($db,"SELECT * FROM `Student` WHERE USERNAME='$_POST[USERNAME]' AND PASSWORD='$_POST[PASSWORD]';");
		$row=mysqli_fetch_assoc($res);
		$count=mysqli_num_rows($res);

		if ($count==0)
		{	
			?>
			<script type="text/javascript">
				(function (){
					alert("The USERNAME and PASSWORD doesn't match.");
					window.location="Students_login.php";
				})();
			</script>
			<?php
		}
		else
		{	 
			$_SESSION['login_user']=$_POST['USERNAME'];
			$_SESSION['PICTURE']=$row['PICTURE'];
			?>
				<script type="text/javascript">
					window.location="index.php"
				</script>
			<?php
		}
	}

?>