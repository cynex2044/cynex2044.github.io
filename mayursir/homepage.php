<html>
<title>Homepage</title> 

<body>
<form method = "post">
<br>
<input type="submit" name="admin" value="Admin login"><br><br>
<input type="submit" name="reg" value="Go for registration">
</form>
</body>
</html>
<?php
error_reporting(0);

					if(isset($_POST["admin"]))
					{
						header("Location:admin.php");
					}
					if(isset($_POST["reg"]))
					{
						header("Location:registration.php");
					}




?>