<html>
<form method = "post">
<h1 style="background-color:yellow; color:red;">Select category of paritcipants</h1>
<a href="homepage.php">Home page</a>&nbsp &nbsp &nbsp
<a href="registration.php">Registration</a>&nbsp &nbsp &nbsp
<a href="allresult.php">All Result</a><br><br><br>
<input type="submit" name="youth" value="Youth">&nbsp &nbsp
<input type="submit" name="jr" value="Junior">&nbsp &nbsp
<input type="submit" name="sr" value="Senior">

</form>
</html>
<?php
error_reporting(0);
					if(isset($_POST["youth"]))
					{
						header("Location:upyouth.php");
					}
					if(isset($_POST["jr"]))
					{
						header("Location:upjunior.php");
					}
					if(isset($_POST["sr"]))
					{
						header("Location:upsenior.php");
					}
					
?>