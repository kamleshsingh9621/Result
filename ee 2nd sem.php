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

	$math_first = $_POST['math_first'];
	$math_second = $_POST['math_second'];
	$math_third = $_POST['math_third'];

	$Physics_first = $_POST['Physics_first'];
	$Physics_second = $_POST['Physics_second'];
	$Physics_third = $_POST['Physics_third'];

	$ee_first = $_POST['ee_first'];
	$ee_second = $_POST['ee_second'];
	$ee_third = $_POST['ee_third'];

	$mce_first = $_POST['mce_first'];
	$mce_second = $_POST['mce_second'];
	$mce_third = $_POST['mce_third'];

	$ae_first = $_POST['ae_first'];
	$ae_second = $_POST['ae_second'];
	$ae_third = $_POST['ae_third'];


	$first_sessional = $ee_first + $math_first + $Physics_first + $mce_first + $ae_first;

	$second_sessional = $ee_second + $math_second + $Physics_second + $mce_second + $ae_second;

	$third_sessional = $ee_third + $math_third + $Physics_third + $mce_third + $ae_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 450;



	$result = "insert into eesecond (roll, name, math_first, math_second, math_third, Physics_first, Physics_second, Physics_third, ee_first, ee_second, ee_third, mce_first, mce_second, mce_third, ae_first, ae_second, ae_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $math_first, $math_second, $math_third, $Physics_first, $Physics_second, $Physics_third, $ee_first, $ee_second, $ee_third, $mce_first, $mce_second, $mce_third, $ae_first, $ae_second, $ae_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

	if(mysql_query($result)){
		echo " ";
	}
	else{
		echo "<script>alert('Data Not Stored in Your Database !')</script>";
	}

}
 

?>

<!DOCTYPE html>
<html>
<head>
	<title>ee 2nd sem result upload</title>
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
				<td><input type="number" name="roll" placeholder="Roll Number"></td>
				<td>Student Name</td>
				<td><input type="text" name="name" placeholder="Student Name"></td>
			</tr>


			
			

			<tr>
				<td>Applied Mathematics-1</td>
				<td><input type="number" name="math_first" placeholder="20 Number"></td>
				<td>Applied Mathematics-2</td>
				<td><input type="number" name="math_second" placeholder="20 Number"></td>
				<td>Applied Mathematics-3</td>
				<td><input type="number" name="math_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Applied Physics-1</td>
				<td><input type="number" name="Physics_first" placeholder="20 Number"></td>
				<td>Applied Physics-2</td>
				<td><input type="number" name="Physics_second" placeholder="20 Number"></td>
				<td>Applied Physics-3</td>
				<td><input type="number" name="Physics_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Basic Electrical Engineering</td>
				<td><input type="number" name="ee_first" placeholder="20 Number"></td>
				<td>Basic Electrical Engineering</td>
				<td><input type="number" name="ee_second" placeholder="20 Number"></td>
				<td>Basic Electrical Engineering</td>
				<td><input type="number" name="ee_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Basic of Mechanical & Civil Engineering</td>
				<td><input type="number" name="mce_first" placeholder="20 Number"></td>
				<td>Basic of Mechanical & Civil Engineering</td>
				<td><input type="number" name="mce_second" placeholder="20 Number"></td>
				<td>Basic of Mechanical & Civil Engineering</td>
				<td><input type="number" name="mce_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Analog Electronics</td>
				<td><input type="number" name="ae_first" placeholder="20 Number"></td>
				<td>Analog Electronics</td>
				<td><input type="number" name="ae_second" placeholder="20 Number"></td>
				<td>Analog Electronics</td>
				<td><input tyaee="number" name="ae_third" placeholder="50 Number"></td>
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