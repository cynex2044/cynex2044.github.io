<form method = "post">
<h1 style="background-color:yellow;">Result of youth</h1>
<a href="homepage.php">Home page</a>&nbsp &nbsp &nbsp
<a href="registration.php">Registration</a>&nbsp &nbsp &nbsp
<a href="cate.php">Category</a><br><br>
<input type="submit" name="male" value="Result for male">
<input type="submit" name="female" value="Result for female">
</form>
<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","");
			if($con)
			{
				echo "<br>"."Database connected successfully..."."<br>";
			}
			mysqli_select_db($con,"sports");
			if(isset($_POST["male"]))
			{
					$q="select * from youth where gender = 'male' and bw between 0 and 49 order by total desc limit 6";
					$res = mysqli_query($con,$q);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 0-49</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";								echo "</tr>";
								while($row=mysqli_fetch_row($res))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								
			
					$q1="select * from youth where gender = 'male' and bw between 49.001 and 55 order by total desc limit 6";
					$res1 = mysqli_query($con,$q1);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 49.01-55</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";								echo "</tr>";
								while($row=mysqli_fetch_row($res1))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";								
								echo "</tr>";
								}
								echo "<br>";
			
					$q2="select * from youth where gender = 'male' and bw between 55.001 and 61 order by total desc limit 6";
					$res2 = mysqli_query($con,$q2);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 55.01-61</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOBYYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res2))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
			
					$q3="select * from youth where gender = 'male' and bw between 61.001 and 67 order by total desc limit 6";
					$res3 = mysqli_query($con,$q3);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 61.01-67</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB-YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res3))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q4="select * from youth where gender = 'male' and bw between 67.001 and 73 order by total desc limit 6";
					$res4 = mysqli_query($con,$q4);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 67.01-73</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res4))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q5="select * from youth where gender = 'male' and bw between 73.001 and 81 order by total desc limit 6";
					$res5 = mysqli_query($con,$q5);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 73.01-81</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res5))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q6="select * from youth where gender = 'male' and bw between 81.001 and 89 order by total desc limit 6";
					$res6 = mysqli_query($con,$q6);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 81.01-89</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res6))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q7="select * from youth where gender = 'male' and bw between 89.001 and 96 order by total desc limit 6";
					$res7 = mysqli_query($con,$q7);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 89.01-96</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res7))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q8="select * from youth where gender = 'male' and bw between 96.001 and 102 order by total desc limit 6";
					$res8 = mysqli_query($con,$q8);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 96.01-102</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res8))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
				$q9="select * from youth where gender = 'male' and bw between 102.001 and 1000 order by total desc limit 6";
					$res9 = mysqli_query($con,$q9);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 102Kg+</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res9))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			}
			
if(isset($_POST["female"]))
			{
					$q="select * from youth where gender = 'female' and bw between 0 and 49 order by total desc limit 6";
					$res = mysqli_query($con,$q);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 0-49</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";								echo "</tr>";
								while($row=mysqli_fetch_row($res))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								
			
					$q1="select * from youth where gender = 'female' and bw between 49.001 and 55 order by total desc limit 6";
					$res1 = mysqli_query($con,$q1);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 49.01-55</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";								echo "</tr>";
								while($row=mysqli_fetch_row($res1))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";								
								echo "</tr>";
								}
								echo "<br>";
			
					$q2="select * from youth where gender = 'female' and bw between 55.001 and 61 order by total desc limit 6";
					$res2 = mysqli_query($con,$q2);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 55.01-61</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res2))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
			
					$q3="select * from youth where gender = 'female' and bw between 61.001 and 67 order by total desc limit 6";
					$res3 = mysqli_query($con,$q3);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 61.01-67</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res3))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q4="select * from youth where gender = 'female' and bw between 67.001 and 73 order by total desc limit 6";
					$res4 = mysqli_query($con,$q4);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 67.01-73</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res4))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q5="select * from youth where gender = 'female' and bw between 73.001 and 81 order by total desc limit 6";
					$res5 = mysqli_query($con,$q5);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 73.01-81</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res5))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q6="select * from youth where gender = 'female' and bw between 81.001 and 89 order by total desc limit 6";
					$res6 = mysqli_query($con,$q6);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 81.01-89</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res6))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q7="select * from youth where gender = 'female' and bw between 89.001 and 96 order by total desc limit 6";
					$res7 = mysqli_query($con,$q7);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 89.01-96</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res7))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			
					$q8="select * from youth where gender = 'female' and bw between 96.001 and 102 order by total desc limit 6";
					$res8 = mysqli_query($con,$q8);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 96.01-102</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res8))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
				$q9="select * from youth where gender = 'female' and bw between 102.001 and 1000 order by total desc limit 6";
					$res9 = mysqli_query($con,$q9);
								echo "<table border='3'>";
								echo "<tr>";
								echo "<th colspan=19 >Student those weight 102Kg+</th>";
								echo "</tr>";
								echo "<tr>";
								echo "<td>No.<td>Lot No.<td>ID Card No.<td>Name Of the Competitor<td>Gender<td>Distric<td>DOB YYYY-MM-DD<td>Age<td>Body Weight<td>sn1<td>sn2<td>sn3<td>MAX<td>cj1<td>cj2<td>cj3<td>MAX<td>Total";
								echo "</tr>";
								while($row=mysqli_fetch_row($res9))
								{
								echo "<tr>";
								echo "<td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td>$row[4]<td>$row[5]<td>$row[6]<td>$row[7]<td>$row[8]<td>$row[9]<td>$row[10]<td>$row[11]<td>$row[12]<td>$row[13]<td>$row[14]<td>$row[15]<td>$row[16]<td>$row[17]";
								echo "</tr>";
								}
								echo "<br>";
								
			}
				







?>
