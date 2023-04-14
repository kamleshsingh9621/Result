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

	$imd_first = $_POST['imd_first'];
	$imd_second = $_POST['imd_second'];
	$imd_third = $_POST['imd_third'];

	$sp_first = $_POST['sp_first'];
	$sp_second = $_POST['sp_second'];
	$sp_third = $_POST['sp_third'];

	$plc_first = $_POST['plc_first'];
	$plc_second = $_POST['plc_second'];
	$plc_third = $_POST['plc_third'];

	$em_first = $_POST['em_first'];
	$em_second = $_POST['em_second'];
	$em_third = $_POST['em_third'];

	$first_sessional = $imd_first + $sp_first + $plc_first + $em_first;

	$second_sessional = $imd_second + $sp_second + $plc_second + $em_second ;

	$third_sessional = $imd_third + $sp_third + $plc_third + $em_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 360;



	$result = "insert into eefifth (roll, name, imd_first, imd_second, imd_third,  sp_first, sp_second, sp_third, plc_first, plc_second, plc_third, em_first, em_second, em_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $imd_first, $imd_second, $imd_third,  $sp_first, $sp_second, $sp_third, $plc_first, $plc_second, $plc_third, $em_first, $em_second, $em_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
				<td>Industrial Management and Entrepreneurship Development -1</td>
				<td><input type="number" name="imd_first" placeholder="20 Number"></td>
				<td>Industrial Management and Entrepreneurship Development-2</td>
				<td><input type="number" name="imd_second" placeholder="20 Number"></td>
				<td>Industrial Management and Entrepreneurship Development-3</td>
				<td><input type="number" name="imd_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Switchgear and Protection -1 </td>
				<td><input type="number" name="sp_first" placeholder="20 Number"></td>
				<td>Switchgear and Protection -2 </td>
				<td><input type="number" name="sp_second" placeholder="20 Number"></td>
				<td>Switchgear and Protection -3</td>
				<td><input type="number" name="sp_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>PLC, Microcontroller and SCADA-1 </td>
				<td><input type="number" name="plc_first" placeholder="20 Number"></td>
				<td>PLC, Microcontroller and SCADA-2</td>
				<td><input type="number" name="plc_second" placeholder="20 Number"></td>
				<td>PLC, Microcontroller and SCADA-3</td>
				<td><input type="number" name="plc_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Electrical Machine -1 </td>
				<td><input type="number" name="em_first" placeholder="20 Number"></td>
				<td>Electrical Machine -2 </td>
				<td><input type="number" name="em_second" placeholder="20 Number"></td>
				<td>Electrical Machine -3 </td>
				<td><input type="number" name="em_third" placeholder="50 Number"></td>
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