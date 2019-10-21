	
		<?php
			if(isset($_POST['submit']))
			{
				$sql="INSERT INTO `comments` VALUES('$_POST[comment]');";
				mysqli_query($db,$sql);
				/*{
					$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC";
					$res=mysqli_query($db,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
				}*/

			}

			/*else
			{
				$q="SELECT * FROM `comments` ORDER BY `comments`.`id` DESC"; 
					$res=mysqli_query($db,$q);

					echo "<table class='table table-bordered'>";
					while ($row=mysqli_fetch_assoc($res)) 
					{
						echo "<tr>";
							echo "<td>"; echo $row['comment']; echo "</td>";
						echo "</tr>";
					}
			}*/
		?>
