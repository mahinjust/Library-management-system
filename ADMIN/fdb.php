			<?php
				if(isset($_POST['submit'])) 
				{
					$sql="INSERT INTO `Comments` VALUES('$_POST[comment]');";
					mysqli_query($db,$sql);

				}
				
						
				
			?>