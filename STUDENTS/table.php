<?php
			$res=mysqli_query($db,"SELECT * FROM `books`ORDER BY `books`.`name` ASC;");   
			echo "<table class='table table-bordered table-hover '>";
				echo "<tr style='background-color:	#87CEFA;'>";
					echo"<th>"; echo "ID"; echo "</th>";
					echo"<th>"; echo "BOOK NAME"; echo "</th>";
					echo"<th>"; echo "AUTHORS NAME"; echo "</th>";
					echo"<th>"; echo "EDITION"; echo "</th>";
					echo"<th>"; echo "STATUS"; echo "</th>";
					echo"<th>"; echo "QUANTITY"; echo "</th>";
					echo"<th>"; echo "DEPARTMENT"; echo "</th>";
				echo "</tr>";

				while($row=mysqli_fetch_assoc($res))
				{
					echo "<tr  style='background-color:#F5FFFA;'>";
					echo "<td style='color:#808080;' >"; echo $row['Bid']; echo "</td>";
					echo "<td style='color:#808080;'>"; echo $row['Name']; echo "</td>";
					echo "<td style='color:#808080;'>"; echo $row['Author']; echo "</td>";
					echo "<td style='color:#808080;'>"; echo $row['Edition']; echo "</td>";
					echo "<td style='color:#808080;'>"; echo $row['Status']; echo "</td>";
					echo "<td style='color:#808080;'>"; echo $row['Quantity']; echo "</td>";
					echo "<td style='color:#808080;'>"; echo $row['Department']; echo "</td>";
					echo "</tr>";
				}
			echo "</table >";

			?>