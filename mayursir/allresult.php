<form method = "post">
<a href="homepage.php">Home page</a>&nbsp &nbsp &nbsp
<a href="registration.php">Registration</a><br><br><br>

<input type="submit" name="yt" value="Result of youth">
<input type="submit" name="jr" value="Result of Junior">
<input type="submit" name="sr" value="Result of Senior">
</form>
<?php

			
			if(isset($_POST["jr"]))
			{
				header("Location:jrresult.php");	
			}

			if(isset($_POST["sr"]))
			{
					header("Location:srresult.php");
			}

			if(isset($_POST["yt"]))
			{
				header("Location:youthresult.php");	
			}

?>