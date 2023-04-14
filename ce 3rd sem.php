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

	$hhm_first = $_POST['hhm_first'];
	$hhm_second = $_POST['hhm_second'];
	$hhm_third = $_POST['hhm_third'];

	$ct_first = $_POST['ct_first'];
	$ct_second = $_POST['ct_second'];
	$ct_third = $_POST['ct_third'];

	$evs_first = $_POST['evs_first'];
	$evs_second = $_POST['evs_second'];
	$evs_third = $_POST['evs_third'];

	$sm_first = $_POST['sm_first'];
	$sm_second = $_POST['sm_second'];
	$sm_third = $_POST['sm_third'];

	$bc_first = $_POST['bc_first'];
	$bc_second = $_POST['bc_second'];
	$bc_third = $_POST['bc_third'];

	$bd_first = $_POST['bd_first'];
	$bd_second = $_POST['bd_second'];
	$bd_third = $_POST['bd_third'];

	$first_sessional = $hhm_first + $ct_first + $evs_first + $sm_first + $bc_first + $bd_first;

	$second_sessional = $hhm_second + $ct_second + $evs_second + $sm_second + $bc_second + $bd_second;

	$third_sessional = $hhm_third + $ct_third + $evs_third + $sm_third + $bc_third + $bd_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into cethird (roll, name, hhm_first, hhm_second, hhm_third,  ct_first, ct_second, ct_third, evs_first, evs_second, evs_third, sm_first, sm_second, sm_third, bc_first, bc_second, bc_third, bd_first, bd_second, bd_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $hhm_first, $hhm_second, $hhm_third,  $ct_first, $ct_second, $ct_third, $evs_first, $evs_second, $evs_third, $sm_first, $sm_second, $sm_third, $bc_first, $bc_second, $bc_third, $bd_first, $bd_second, $bd_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>ce 3rd sem result upload</title>
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
				<td>Hydraulics and Hydraulic Machines-1</td>
				<td><input type="number" name="hhm_first" placeholder="20 Number"></td>
				<td>Hydraulics and Hydraulic Machines-2</td>
				<td><input type="number" name="hhm_second" placeholder="20 Number"></td>
				<td>Hydraulics and Hydraulic Machines-3</td>
				<td><input type="number" name="hhm_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Concrete Technology -1</td>
				<td><input type="number" name="ct_first" placeholder="20 Number"></td>
				<td>Concrete Technology -2</td>
				<td><input type="number" name="ct_second" placeholder="20 Number"></td>
				<td>Concrete Technology -3</td>
				<td><input type="number" name="ct_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Environmental Studies -1</td>
				<td><input type="number" name="evs_first" placeholder="20 Number"></td>
				<td>Environmental Studies -2</td>
				<td><input type="number" name="evs_second" placeholder="20 Number"></td>
				<td>Environmental Studies -3</td>
				<td><input type="number" name="evs_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Structural Mechanics -1</td>
				<td><input type="number" name="sm_first" placeholder="20 Number"></td>
				<td>Structural Mechanics -2</td>
				<td><input type="number" name="sm_second" placeholder="20 Number"></td>
				<td>Structural Mechanics -3</td>
				<td><input type="number" name="sm_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Building Construction  -1</td>
				<td><input type="number" name="bc_first" placeholder="20 Number"></td>
				<td>Building Construction  -2</td>
				<td><input type="number" name="bc_second" placeholder="20 Number"></td>
				<td>Building Construction  -3</td>
				<td><input type="number" name="bc_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Building Drawings -1</td>
				<td><input type="number" name="bd_first" placeholder="20 Number"></td>
				<td>Building Drawings -2</td>
				<td><input type="number" name="bd_second" placeholder="20 Number"></td>
				<td>Building Drawings -3</td>
				<td><input type="number" name="bd_third" placeholder="50 Number"></td>
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