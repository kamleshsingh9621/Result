<?php
 include "header.php";
 include "sidebar.php";
?>

<?php
mysql_connect("localhost","root","");
mysql_select_db(webs);	
if(isset($_POST['submit'])){
	
	$roll = $_POST['roll'];
	$name = $_POST['name'];

	$android_first = $_POST['android_first'];
	$android_second = $_POST['android_second'];
	$android_third = $_POST['android_third'];

	$cloud_first = $_POST['cloud_first'];
	$cloud_second = $_POST['cloud_second'];
	$cloud_third = $_POST['cloud_third'];

	$imd_first = $_POST['imd_first'];
	$imd_second = $_POST['imd_second'];
	$imd_third = $_POST['imd_third'];

	$major = $_POST['major'];


	$first_sessional = $android_first + $cloud_first + $imd_first;

	$second_sessional = $android_second + $cloud_second + $imd_second;

	$third_sessional = $android_third + $cloud_third + $imd_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional + $major;

	$percentage = $total_sessional * 100 / 470;



	$result = "insert into cssixth (roll, name, android_first, android_second, android_third,  cloud_first, cloud_second, cloud_third, imd_first, imd_second, imd_third, first_sessional, second_sessional, third_sessional, total_sessional, per, major)values($roll, '$name', $android_first, $android_second, $android_third,  $cloud_first, $cloud_second, $cloud_third, $imd_first, $imd_second, $imd_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage, $major)";

	if(mysql_query($result)){
		echo "";
	}
	else{
		echo "<script>alert('Data Not Stored in Your Database !')</script>";
	}

}
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>cs 6th sem result upload</title>
	<style type="text/css">
		.container{
			width: 100%;
			height: auto;
			display: flex;
			margin: 50px 0px 0px 200px;
		}
	</style>
</head>
<body>
	<div class="container">
	<form method="post">
		<table border="1">
			<tr>
				<td style="font-weight: bold;">First Sessional</td>
				<td></td>
				<td style="font-weight: bold;">Second Sessional</td>
				<td></td>
				<td style="font-weight: bold;">Third Sessional</td>
				<td></td>
			</tr>
			<tr>
				<td>Roll Number</td>
				<td><input type="number" name="roll" placeholder=" Roll Number"></td>
				<td>Student Name</td>
				<td><input type="text" name="name" placeholder="Student Name"></td>
			</tr>


			
			<tr>
				<td>Android Development</td>
				<td><input type="number" name="android_first" placeholder="20 number"></td>
				<td>Android Development</td>
				<td><input type="number" name="android_second" placeholder="20 number"></td>
				<td>Android Development</td>
				<td><input type="number" name="android_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>Cloud Computing</td>
				<td><input type="number" name="cloud_first" placeholder="20 number"></td>
				<td>Cloud Computing</td>
				<td><input type="number" name="cloud_second" placeholder="20 number"></td>
				<td>Cloud Computing</td>
				<td><input type="number" name="cloud_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>IMD</td>
				<td><input type="number" name="imd_first" placeholder="20 number"></td>
				<td>IMD</td>
				<td><input type="number" name="imd_second" placeholder="20 number"></td>
				<td>IMD</td>
				<td><input type="number" name="imd_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>Major</td>
				<td><input type="number" name="major" placeholder="200 number"></td>				
			</tr>

			<tr>
				<td>
					<input type="submit" name="submit">
				</td>
			</tr>



		</table>
		
	</form>
</div>

</body>
</html>