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

	$dbms_first = $_POST['dbms_first'];
	$dbms_second = $_POST['dbms_second'];
	$dbms_third = $_POST['dbms_third'];

	$oops_first = $_POST['oops_first'];
	$oops_second = $_POST['oops_second'];
	$oops_third = $_POST['oops_third'];

	$os_first = $_POST['os_first'];
	$os_second = $_POST['os_second'];
	$os_third = $_POST['os_third'];

	$ecomm_first = $_POST['ecomm_first'];
	$ecomm_second = $_POST['ecomm_second'];
	$ecomm_third = $_POST['ecomm_third'];

	$ec_first = $_POST['ec_first'];
	$ec_second = $_POST['ec_second'];
	$ec_third = $_POST['ec_third'];


	$first_sessional = $comm_first + $dbms_first + $oops_first + $os_first + $ecomm_first + $ec_first;

	$second_sessional = $comm_second + $dbms_second + $oops_second + $os_second + $ecomm_second + $ec_second;

	$third_sessional = $comm_third + $dbms_third + $oops_third + $os_third + $ecomm_third + $ec_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into csfourth (roll, name, comm_first, comm_second, comm_third,  dbms_first, dbms_second, dbms_third, oops_first, oops_second, oops_third, os_first, os_second, os_third, ecomm_first, ecomm_second, ecomm_third, ec_first, ec_second, ec_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $comm_first, $comm_second, $comm_third,  $dbms_first, $dbms_second, $dbms_third, $oops_first, $oops_second, $oops_third, $os_first, $os_second, $os_third, $ecomm_first, $ecomm_second, $ecomm_third, $ec_first, $ec_second, $ec_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>cs 4th sem result upload</title>
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
				<td>Communicatin -2</td>
				<td><input type="number" name="comm_first" placeholder="20 number"></td>
				<td>Communicatin -2</td>
				<td><input type="number" name="comm_second" placeholder="20 number"></td>
				<td>Communicatin -2</td>
				<td><input type="number" name="comm_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>DBMS</td>
				<td><input type="number" name="dbms_first" placeholder="20 number"></td>
				<td>DBMS</td>
				<td><input type="number" name="dbms_second" placeholder="20 number"></td>
				<td>DBMS</td>
				<td><input type="number" name="dbms_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>OOPS</td>
				<td><input type="number" name="oops_first" placeholder="20 number"></td>
				<td>OOPS</td>
				<td><input type="number" name="oops_second" placeholder="20 number"></td>
				<td>OOPS</td>
				<td><input type="number" name="oops_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>OS</td>
				<td><input type="number" name="os_first" placeholder="20 number"></td>
				<td>OS</td>
				<td><input type="number" name="os_second" placeholder="20 number"></td>
				<td>OS</td>
				<td><input type="number" name="os_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>E-Commerce & Digital Marketing</td>
				<td><input type="number" name="ecomm_first" placeholder="20 number"></td>
				<td>E-Commerce & Digital Marketing</td>
				<td><input type="number" name="ecomm_second" placeholder="20 number"></td>
				<td>E-Commerce & Digital Marketing</td>
				<td><input type="number" name="ecomm_third" placeholder="50 number"></td>
			</tr>
			<tr>
				<td>Energy Conversion</td>
				<td><input type="number" name="ec_first" placeholder="20 number"></td>
				<td>Energy Conversion</td>
				<td><input type="number" name="ec_second" placeholder="20 number"></td>
				<td>Energy Conversion</td>
				<td><input type="number" name="ec_third" placeholder="50 number"></td>
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