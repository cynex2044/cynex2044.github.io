<form method = "post">
<a href="homepage.php">Home page</a>&nbsp &nbsp &nbsp
<a href="registration.php">Registration</a><br><br><br>
<input type="submit" name="allp" value="All Participants">
<input type="submit" name="yt" value="All Participants of youth">
<input type="submit" name="jr" value="All Participants of Junior">
<input type="submit" name="sr" value="All Participants of Senior">
</form>
<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","");
			if($con)
			{
				echo "<br>"."Database connected successfully..."."<br>";
			}
			mysqli_select_db($con,"sports");
			
				if(isset($_POST["allp"]))
			{
					$q="select * from members order by sn1 desc";
					$res = mysqli_query($con,$q);
								echo "<h1>All paritcipants </h1>";
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >All Participants</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
			}
			
			if(isset($_POST["yt"]))
			{
					$q="select * from youth order by sn1 desc";
					$res = mysqli_query($con,$q);
					echo "<h1>All paritcipants of youth</h1>";
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >All Participants</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
			}

			if(isset($_POST["sr"]))
			{
					$q="select * from senior order by sn1 desc";
					$res = mysqli_query($con,$q);
								echo "<h1>All paritcipants of senior</h1>";
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >All Participants</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
			}

			if(isset($_POST["jr"]))
			{
				
					$q="select * from junior order by sn1 desc";
					$res = mysqli_query($con,$q);
								echo "<h1>All paritcipants of junior</h1>";
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >All Participants</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
			}

?>