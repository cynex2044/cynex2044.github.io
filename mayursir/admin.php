<html>
<head>
<title>Admin login</title>
</head>

<body>
<a href="homepage.php">Home page</a> &nbsp &nbsp &nbsp
<form action="#" method="post">
<br>
Admin: <input type="text" name="unm" required><br>
Password: <input type="password" name="pwd" required><br><br>

<input type="submit" name="login" value="login" required>
<input type="submit" name="hm" value="Back" required>
</body>
</html>
<?php
error_reporting(0);
			$con = mysqli_connect("localhost","root","");
			if($con)
			{
				echo "<br>"."Database connected successfully..."."<br>";
			}
			mysqli_select_db($con,"sports");
					if(isset($_POST["login"]))
				{
					$unm=$_POST["unm"];
					$pwd=$_POST["pwd"];
					$q="select * from admin where name = '$unm' and password = '$pwd'";
					$qr=mysqli_query($con,$q);
					if(mysqli_num_rows($qr)>0)
					{
						
						header("Location:updel.php");
					}
					else 
					{
						echo " Enter valid username or password";
					}
				}
				
				
					
				if(isset($_POST["hm"]))
					{
						header("Location:homepage.php");
					}
?>