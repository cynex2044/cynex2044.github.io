
<form action="#" method="POST">
<a href="homepage.php">Home page</a> &nbsp &nbsp &nbsp
<a href="updel.php">update page</a> &nbsp &nbsp &nbsp <br><br>
Are you Sure you want to delete whole database than click button&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type="submit" name="delall" value="Delete whole database">
</form>

<?php

		$con=mysqli_connect("localhost","root","");
		if($con)
		{
			echo "Connected <br><br>";
		}
	
			mysqli_select_db($con,"sports");
							
							
							if(isset($_POST["delall"]))
							{
								$q="delete from senior";
									if(mysqli_query($con,$q))
										{
											echo "Deleted senior";										
										}	
								$q1="delete from junior";
									if(mysqli_query($con,$q1))
										{
											echo "Deleted junior";										
										}	
										
										$q2="delete from youth";
									if(mysqli_query($con,$q2))
										{
											echo "Deleted youth";										
										}	
									$q3="delete from members";
									if(mysqli_query($con,$q3))
										{
											echo "Deleted members";										
										}	
							}

?>