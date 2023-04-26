<form method = "post">
<h1 style="background-color:yellow;">Paritcipants of youth</h1>
<a href="homepage.php">Home page</a>&nbsp &nbsp &nbsp
<a href="registration.php">Registration</a>&nbsp &nbsp &nbsp
<a href="cate.php">Category</a>&nbsp &nbsp &nbsp
<a href="youthresult.php">youth Result</a>&nbsp &nbsp &nbsp
<a href="allparticipants.php">All Participants info</a><br><br>
<table border =1>
<tr><td>lotno<td><td><input type="text" name="ln" required><br>

			<tr>
			<th rowspan="4">Snatch
						<td>1<td><input type="text" name="sn1" >
					<tr><td>2<td><input type="text" name="sn2" >
					<tr><td>3<td><input type="text" name="sn3" >
					<tr><td>Max<td><input type="text" name="snmax" >
					
			<tr>
			<th rowspan="4">Clean and Jerk
						<td>1  <td><input type="text" name="cj1" >
					<tr><td>2  <td><input type="text" name="cj2" >
					<tr><td>3  <td><input type="text" name="cj3" >
					<tr><td>Max<td><input type="text" name="cjmax" >
			
	</table><br>
	<input type="submit" name="submit" value="Update">
	<input type="submit" name="participant" value="Participant info">
	
</form>
<?php
error_reporting(0);
			$con = mysqli_connect("localhost","root","");
			if($con)
			{
				echo "<br>"."Database connected successfully..."."<br>";
			}
			mysqli_select_db($con,"sports");
						
					if(isset($_POST["submit"]))
					{
						$lt = $_POST["ln"];
						$sn1 = $_POST["sn1"];
						$sn2 = $_POST["sn2"];
						$sn3 = $_POST["sn3"];
						$snmax = $_POST["snmax"];
						$cj1 = $_POST["cj1"];
						$cj2 = $_POST["cj2"];
						$cj3 = $_POST["cj3"];
						$cjmax = $_POST["cjmax"];
						$total = $snmax + $cjmax;
						$q1="update youth set sn1=$sn1,sn2=$sn2,sn3=$sn3,snmax=$snmax,cj1=$cj1,cj2=$cj2,cj3=$cj3,cjmax=$cjmax,total=$total where lotno=$lt";
							if(mysqli_query($con,$q1))
							{
								echo "updated in youth";
							}
							else
							{
								echo "error in youth enter all DATA";
							}
						$q2="update members set sn1=$sn1,sn2=$sn2,sn3=$sn3,snmax=$snmax,cj1=$cj1,cj2=$cj2,cj3=$cj3,cjmax=$cjmax,total=$total where lotno=$lt";
							if(mysqli_query($con,$q2))
							{
								echo "Updated in members";
							}
						else
						{
							echo "Error in member";
						}
					}
					elseif(isset($_POST["participant"]))
					{
						$lt = $_POST["ln"];
						$q= "select * from youth where lotno=$lt";
						$res = mysqli_query($con,$q);
								
								echo "<table border='3'>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";								echo "</tr>";
								while($row=mysqli_fetch_row($res))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								

					}
					


?>