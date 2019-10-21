			<?php
				if(isset($_POST['submit']))
				{
					if(mysqli_query($db,"UPDATE student SET PASSWORD='$_POST[PASSWORD]' WHERE USERNAME='$_POST[USERNAME]' AND EMAIL='$_POST[EMAIL]';"))
					{
						?>
										<script type="text/javascript">
				(function (){
					alert("The PASSWORD updated successfully.");
					window.location="Students_login.php";
				})();
			</script>
						<?php
					}
					
				
				}
			?>