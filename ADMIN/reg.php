	<?php
     	

			



    	if(isset($_POST['submit'])) 
    	{
    		$count=0;
    		$sql="SELECT USERNAME FROM `Admins`";
    		$res=mysqli_query($db,$sql);

    		while ($row=mysqli_fetch_assoc($res))
    		{
    			if ($row['USERNAME']==$_POST['USERNAME'])
    			{
    				$count=$count+1;
    			}
    		}

    		if($count==0)

			{ mysqli_query($db,"INSERT INTO `Admins` VALUES('','$_POST[FIRSTNAME]','$_POST[LASTNAME]','$_POST[USERNAME]','$_POST[PASSWORD]','$_POST[EMAIL]','$_POST[PHONENO]','99.jpg');");
				?>
				<script type="text/javascript">
					(function (){
					alert("Registration Successful.");
					window.location="Students_login.php";
				})();
				</script>
				<?php
			 }

			 else
			 {
			 					?>
				<script type="text/javascript">
					(function (){
					alert("The USERNAME already exists.");
					window.location="Signup.php";
				})();
				</script>
				<?php
			 }


		}
	?>
