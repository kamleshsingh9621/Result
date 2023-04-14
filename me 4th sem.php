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

	$ms_first = $_POST['ms_first'];
	$ms_second = $_POST['ms_second'];
	$ms_third = $_POST['ms_third'];

	$hhm_first = $_POST['hhm_first'];
	$hhm_second = $_POST['hhm_second'];
	$hhm_third = $_POST['hhm_third'];

	$te_first = $_POST['te_first'];
	$te_second = $_POST['te_second'];
	$te_third = $_POST['te_third'];

	$dp_first = $_POST['dp_first'];
	$dp_second = $_POST['dp_second'];
	$dp_third = $_POST['dp_third'];


	$first_sessional = $ms_first + $hhm_first + $te_first + $dp_first;

	$second_sessional = $ms_second + $hhm_second + $te_second + $dp_second;

	$third_sessional = $ms_third + $hhm_third + $te_third + $dp_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 360;



	$result = "insert into mefourth (roll, name, ms_first, ms_second, ms_third,  hhm_first, hhm_second, hhm_third, te_first, te_second, te_third, dp_first, dp_second, dp_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $ms_first, $ms_second, $ms_third,  $hhm_first, $hhm_second, $hhm_third, $te_first, $te_second, $te_third, $dp_first, $dp_second, $dp_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>me 4th sem result upload</title>
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
				<td>Mechanics of Solids -1</td>
				<td><input type="number" name="ms_first" placeholder="20 Number"></td>
				<td>Mechanics of Solids -2</td>
				<td><input type="number" name="ms_second" placeholder="20 Number"></td>
				<td>Mechanics of Solids -3</td>
				<td><input type="number" name="ms_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td> Hydraulics & Hydraulic Machines-1</td>
				<td><input type="number" name="hhm_first" placeholder="20 Number"></td>
				<td> Hydraulics & Hydraulic Machines-2</td>
				<td><input type="number" name="hhm_second" placeholder="20 Number"></td>
				<td> Hydraulics & Hydraulic Machines-3</td>
				<td><input type="number" name="hhm_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td> Electrical Technology & Electronics -1</td>
				<td><input type="number" name="te_first" placeholder="20 Number"></td>
				<td> Electrical Technology & Electronics -2</td>
				<td><input type="number" name="te_second" placeholder="20 Number"></td>
				<td> Electrical Technology & Electronics -3</td>
				<td><input type="number" name="te_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td> Mechanical Engg. Drawing Practicals -1</td>
				<td><input type="number" name="dp_first" placeholder="20 Number"></td>
				<td> Mechanical Engg. Drawing Practicals -2</td>
				<td><input type="number" name="dp_second" placeholder="20 Number"></td>
				<td> Mechanical Engg. Drawing Practicals -3</td>
				<td><input type="number" name="dp_third" placeholder="50 Number"></td>
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