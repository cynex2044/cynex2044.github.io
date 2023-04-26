<html>
	<body>
<form method="post">
<h1 style="background-color:yellow;">Update Paritcipants</h1>
<a href="homepage.php">Home page</a> &nbsp &nbsp &nbsp
<a href="cate.php">Result</a>&nbsp &nbsp &nbsp
<a href="cate.php">Match</a>&nbsp &nbsp &nbsp
<a href="allparticipants.php">All Participants info</a><br><br>
	<table border=1>
		<tr><td>SR.NO<td><input type="text" name="srno" required>
		<tr><td>LOTNo.<td><input type="text" name="ln" required>
		<tr><td>ID Card No.<td><input type="text" name="idc" required>
		<tr><td>Name of the Competitor<td><input type="text" name="nm" required>
		<tr>
		<td>Gender
		<td>	<input type ="radio" name="gen" value="male" required>Male
					<input type ="radio" name="gen" value="female" required>Female
		
		<tr><td>District<td><input type="text" name="dis" required>
		<tr><td>Date of birth<td><input type="date" name="dob" required>
		<tr><td>Age<td><input type="number" name="age" required>
		<tr><td>Body weigth<td><input type="text" name="bw" required>
		
		
	</form>	
	</table>
	<br>
	<input type="submit" name="youth" value="Youth">
	<input type="submit" name="jr" value="Junior">
	<input type="submit" name="sr" value="Senior">
	&nbsp &nbsp &nbsp
	<a href="deletepart.php">delete participant</a>
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
									

								$q="update members set no=$srno,lotno=$lt,idc=$ldc,name='$nm',gender='$gen',dist='$dis',dob='$dob',age=$age,bw=$bw where lotno=$lt";
												if(mysqli_query($con,$q))
												{
													echo " update";
												}
												else
												{
													echo "error";
												}
												
									$q1="update youth set no=$srno,lotno=$lt,idc=$ldc,name='$nm',gender='$gen',dist='$dis',dob='$dob',age=$age,bw=$bw,sn1=$sn1,sn2=$sn2,sn3=$sn3,snmax=$snmax,cj1=$cj1,cj2=$cj2,cj3=$cj3,cjmax=$cjmax,total=$total where lotno=$lt";
												if(mysqli_query($con,$q1))
												{
													echo " update in youth";
												}
												else
												{
													echo "error";
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
									

								$q="update members set no=$srno,lotno=$lt,idc=$ldc,name='$nm',gender='$gen',dist='$dis',dob='$dob',age=$age,bw=$bw where lotno=$lt";
												if(mysqli_query($con,$q))
												{
													echo " update";
												}
												else
												{
													echo "error";
												}
												
									$q1="update senior set no=$srno,lotno=$lt,idc=$ldc,name='$nm',gender='$gen',dist='$dis',dob='$dob',age=$age,bw=$bw, where lotno=$lt";
												if(mysqli_query($con,$q1))
												{
													echo " update in senior";
												}
												else
												{
													echo "error";
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
									

								$q="update members set no=$srno,lotno=$lt,idc=$ldc,name='$nm',gender='$gen',dist='$dis',dob='$dob',age=$age,bw=$bw where lotno=$lt";
												if(mysqli_query($con,$q))
												{
													echo " update";
												}
												else
												{
													echo "error";
												}
												
									$q1="update junior set no=$srno,lotno=$lt,idc=$ldc,name='$nm',gender='$gen',dist='$dis',dob='$dob',age=$age,bw=$bw where lotno=$lt";
												if(mysqli_query($con,$q1))
												{
													echo " update in junior";
												}
												else
												{
													echo "error";
												}		
					}
					


?>