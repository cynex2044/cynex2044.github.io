<html>
	<body>
<form method="post">
<a href="homepage.php">Home page</a> &nbsp &nbsp &nbsp
<a href="cate.php">Match</a>&nbsp &nbsp &nbsp
<a href="allresult.php">All Result</a>&nbsp &nbsp &nbsp
<a href="allparticipants.php">All Participants info</a><br><br>
	<table border=1>
		<tr><td>SR.NO<td><td><input type="text" name="srno" required>
		<tr><td>LOTNo.<td><td><input type="text" name="ln" required>
		<tr><td>ID Card No.<td><td><input type="text" name="idc" required>
		<tr><td>Name of the Competitor<td><td><input type="text" name="nm" required>
		<tr>
		<td>Gender
		<td><td>	<input type ="radio" name="gen" value="male" required>Male
					<input type ="radio" name="gen" value="female" required>Female
		
		<tr><td>District<td><td><input type="text" name="dis" required>
		<tr><td>Date of birth<td><td><input type="date" name="dob" required>
		<tr><td>Age<td><td><input type="number" name="age" required>
		<tr><td>Body weigth<td><td><input type="text" name="bw" required>
		<tr>
			<th rowspan="3">Snatch
						<td>SN:1<td><input type="text" name="sn1" value="0" required>
					<tr><td>SN:2<td><input type="text" name="sn2" value="0">
					<tr><td>SN:3<td><input type="text" name="sn3" value="0">
					
					
			<tr>
			<th rowspan="3">Clean and Jerk
						<td>CJ:1  <td><input type="text" name="cj1" value="0" required>
					<tr><td>CJ:2  <td><input type="text" name="cj2" value="0">
					<tr><td>CJ:3  <td><input type="text" name="cj3" value="0">
					
		
		
	</form>	
	</table>
	<br>
	<input type="submit" name="youth" value="Youth">
	<input type="submit" name="jr" value="Junior">
	<input type="submit" name="sr" value="Senior">
	
	</body>
</html>
<?php
			$con = mysqli_connect("localhost","root","");
			if($con)
			{
				echo "<br>"."Database connected successfully..."."<br>";
			}
			mysqli_select_db($con,"sports");
			
			if(isset($_POST["youth"]))
					{
					
									$srno = $_POST["srno"];
									$lt = $_POST["ln"];
									$ldc = $_POST["idc"];
									$nm = $_POST["nm"];
									$gen=$_POST["gen"];
									$dis = $_POST["dis"];
									$dob = $_POST["dob"];
									$age = $_POST["age"];
									$bw = $_POST["bw"];
									$sn1 = $_POST["sn1"];
									$sn2 = $_POST["sn2"];
									$sn3 = $_POST["sn3"];
									$snmax = 0;
									$cj1 = $_POST["cj1"];
									$cj2 = $_POST["cj2"];
									$cj3 = $_POST["cj3"];
									$cjmax = 0;
									$total = 0;
									$query="select * from members  where lotno=$lt";
								$query_run= mysqli_query($con,$query);
								if(mysqli_num_rows($query_run)>0)
								{
									echo "lot number exist";
								}
								else{
										if($dob > '2004-01-01' && $dob < '2008-12-31'  )//yyyy-mm-dd
											{
												$q="insert into members values ($srno,$lt,$ldc,'$nm','$gen','$dis','$dob',$age,$bw,$sn1,$sn2,$sn3,$snmax,$cj1,$cj2,$cj3,$cjmax,$total)";
												if(mysqli_query($con,$q))
												{
													echo " Data inserted in members";
												}
												else
												{
													echo "Error in member db from youth";
												}
												$q1="insert into youth values ($srno,$lt,$ldc,'$nm','$gen','$dis','$dob',$age,$bw,$sn1,$sn2,$sn3,$snmax,$cj1,$cj2,$cj3,$cjmax,$total)";
												if(mysqli_query($con,$q1))
												{
													echo " Data inserted in youth"."<br>";
												}
												else
												{
													echo "Error in youth db";
												}
											}
										else
												{
													echo "Error in date youth";
												}	
								}
					}			
			if(isset($_POST["jr"]))
					{
						
							$srno = $_POST["srno"];
							$lt = $_POST["ln"];
							$ldc = $_POST["idc"];
							$nm = $_POST["nm"];
							$gen=$_POST["gen"];
							$dis = $_POST["dis"];
							$dob = $_POST["dob"];
							$age = $_POST["age"];
							$bw = $_POST["bw"];
							$sn1 = $_POST["sn1"];
							$sn2 = $_POST["sn2"];
							$sn3 = $_POST["sn3"];
							$snmax = 0;
							$cj1 = $_POST["cj1"];
							$cj2 = $_POST["cj2"];
							$cj3 = $_POST["cj3"];
							$cjmax = 0;
							$total = 0;
							
						$query="select * from members  where lotno=$lt";
								$query_run= mysqli_query($con,$query);
								if(mysqli_num_rows($query_run)>0)
								{
									echo "lot number exist";
								}
								else{
													if($dob > '2001-01-01' && $dob < '2006-12-31'  )//yyyy-mm-dd
														{
															$q="insert into members values ($srno,$lt,$ldc,'$nm','$gen','$dis','$dob',$age,$bw,$sn1,$sn2,$sn3,$snmax,$cj1,$cj2,$cj3,$cjmax,$total)";
															if(mysqli_query($con,$q))
															{
																echo " Data inserted in members";
															}
															else
															{
																echo "Error in member db from jr";
															}
															$q1="insert into junior values ($srno,$lt,$ldc,'$nm','$gen','$dis','$dob',$age,$bw,$sn1,$sn2,$sn3,$snmax,$cj1,$cj2,$cj3,$cjmax,$total)";
															if(mysqli_query($con,$q1))
															{
																echo " Data inserted in junior"."<br>";
															}
															else
															{
																echo "Error in junior db";
															}
														}
													else
															{
																echo "error in date. junior must be dob > '2001-01-01' and dob < '2006-12-31'";
															}	
								}
					}
					
			if(isset($_POST["sr"]))
					{
						$srno = $_POST["srno"];
						$lt = $_POST["ln"];
						$ldc = $_POST["idc"];
						$nm = $_POST["nm"];
						$gen=$_POST["gen"];
						$dis = $_POST["dis"];
						$dob = $_POST["dob"];
						$age = $_POST["age"];
						$bw = $_POST["bw"];
						$sn1 = $_POST["sn1"];
						$sn2 = $_POST["sn2"];
						$sn3 = $_POST["sn3"];
						$snmax = 0;
						$cj1 = $_POST["cj1"];
						$cj2 = $_POST["cj2"];
						$cj3 = $_POST["cj3"];
						$cjmax = 0;
						$total = 0;
						$query="select * from members  where lotno=$lt";
								$query_run= mysqli_query($con,$query);
								if(mysqli_num_rows($query_run)>0)
								{
									echo "lot number exist";
								}
								else{
											if($dob <= '2006-12-31'  )//yyyy-mm-dd
												{
													$q="insert into members values ($srno,$lt,$ldc,'$nm','$gen','$dis','$dob',$age,$bw,$sn1,$sn2,$sn3,$snmax,$cj1,$cj2,$cj3,$cjmax,$total)";
													if(mysqli_query($con,$q))
													{
														echo " Data inserted in members";
													}
													else
													{
														echo "Error in member db from sr";
													}
													$q1="insert into senior values ($srno,$lt,$ldc,'$nm','$gen','$dis','$dob',$age,$bw,$sn1,$sn2,$sn3,$snmax,$cj1,$cj2,$cj3,$cjmax,$total)";
													if(mysqli_query($con,$q1))
													{
														echo " Data inserted in senior"."<br>";
													}
													else
													{
														echo "Error in senior db";
													}
												}
											else
													{
														echo "Error in date. senior must be dob <= '2006-12-31";
													}	
								}
					}
						
?>
