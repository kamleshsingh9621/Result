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

	$comm_first = $_POST['comm_first'];
	$comm_second = $_POST['comm_second'];
	$comm_third = $_POST['comm_third'];

	$iec_first = $_POST['iec_first'];
	$iec_second = $_POST['iec_second'];
	$iec_third = $_POST['iec_third'];

	$edde_first = $_POST['edde_first'];
	$edde_second = $_POST['edde_second'];
	$edde_third = $_POST['edde_third'];

	$ppe_first = $_POST['ppe_first'];
	$ppe_second = $_POST['ppe_second'];
	$ppe_third = $_POST['ppe_third'];

	$tdep_first = $_POST['tdep_first'];
	$tdep_second = $_POST['tdep_second'];
	$tdep_third = $_POST['tdep_third'];

	$ec_first = $_POST['ec_first'];
	$ec_second = $_POST['ec_second'];
	$ec_third = $_POST['ec_third'];

	$first_sessional = $comm_first + $iec_first + $edde_first + $ppe_first + $tdep_first + $ec_first;

	$second_sessional = $comm_second + $iec_second + $edde_second + $ppe_second + $tdep_second + $ec_second;

	$third_sessional = $comm_third + $iec_third + $edde_third + $ppe_third + $tdep_third + $ec_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into eefourth (roll, name, comm_first, comm_second, comm_third,  iec_first, iec_second, iec_third, edde_first, edde_second, edde_third, ppe_first, ppe_second, ppe_third, tdep_first, tdep_second, tdep_third, ec_first, ec_second, ec_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $comm_first, $comm_second, $comm_third,  $iec_first, $iec_second, $iec_third, $edde_first, $edde_second, $edde_third, $ppe_first, $ppe_second, $ppe_third, $tdep_first, $tdep_second, $tdep_third, $ec_first, $ec_second, $ec_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>ee 4th sem result upload</title>
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
				<td>Communication Skill-1</td>
				<td><input type="number" name="comm_first" placeholder="20 Number"></td>
				<td>Communication Skill-2</td>
				<td><input type="number" name="comm_second" placeholder="20 Number"></td>
				<td>Communication Skill-3</td>
				<td><input type="number" name="comm_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Industrial Electronics and Control </td>
				<td><input type="number" name="iec_first" placeholder="20 Number"></td>
				<td>Industrial Electronics and Control </td>
				<td><input type="number" name="iec_second" placeholder="20 Number"></td>
				<td>Industrial Electronics and Control </td>
				<td><input type="number" name="iec_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Electrical Design, Drawing and Estimating-1 </td>
				<td><input type="number" name="edde_first" placeholder="20 Number"></td>
				<td>Electrical Design, Drawing and Estimating-2</td>
				<td><input type="number" name="edde_second" placeholder="20 Number"></td>
				<td>Electrical Design, Drawing and Estimating-3</td>
				<td><input type="number" name="edde_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Power Plant Engineering -1 </td>
				<td><input type="number" name="ppe_first" placeholder="20 Number"></td>
				<td>Power Plant Engineering -2 </td>
				<td><input type="number" name="ppe_second" placeholder="20 Number"></td>
				<td>Power Plant Engineering -3 </td>
				<td><input type="number" name="ppe_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Transmission and Distribution of Electrical Power-1</td>
				<td><input type="number" name="tdep_first" placeholder="20 Number"></td>
				<td>Transmission and Distribution of Electrical Power-2</td>
				<td><input type="number" name="tdep_second" placeholder="20 Number"></td>
				<td>Transmission and Distribution of Electrical Power-3</td>
				<td><input type="number" name="tdep_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Energy Conservation-1</td>
				<td><input type="number" name="ec_first" placeholder="20 Number"></td>
				<td>Energy Conservation-2</td>
				<td><input type="number" name="ec_second" placeholder="20 Number"></td>
				<td>Energy Conservation-3</td>
				<td><input type="number" name="ec_third" placeholder="50 Number"></td>
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