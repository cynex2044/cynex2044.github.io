
<form action="#" method="POST">
<a href="homepage.php">Home page</a> &nbsp &nbsp &nbsp
<a href="updel.php">update page</a> &nbsp &nbsp &nbsp <br><br>
LotNO:<td><input type="text" name="ln" ><br><br><br>

<input type="submit" name="youth" value="youth">
<input type="submit" name="jr" value="junior">
<input type="submit" name="sr" value="senior">
<input type="submit" name="delall" value="Delete whole database">
</form>

<?php
error_reporting(0);
		$con=mysqli_connect("localhost","root","");
		if($con)
		{
			echo "Connected <br><br>";
		}
	
			mysqli_select_db($con,"sports");
							
							$lt = $_POST["ln"];	
							if(isset($_POST["youth"]))
								{
								$q="delete from members where lotno=$lt";
								if(mysqli_query($con,$q))
									{
										echo "Deleted members";										
									}
								$q1="delete from youth where lotno=$lt";
								if(mysqli_query($con,$q1))
									{
										echo "Deleted youth";										
									}	
								}
								if(isset($_POST["sr"]))
								{
								$q="delete from members where lotno=$lt";
								if(mysqli_query($con,$q))
									{
										echo "Deleted in member";										
									}
								$q1="delete from senior where lotno=$lt";
								if(mysqli_query($con,$q1))
									{
										echo "Deleted in senior";										
									}
								}
								if(isset($_POST["jr"]))
								{
								$q="delete from members where lotno=$lt";
								if(mysqli_query($con,$q))
									{
										echo "Deleted in member";										
									}
								$q="delete from junior where lotno=$lt";
								if(mysqli_query($con,$q))
									{
										echo "Deleted in junior";										
									}
								}

							if(isset($_POST["delall"]))
							{
								header("Location:deletealldata.php");
							}

?>