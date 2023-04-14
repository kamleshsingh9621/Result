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

	$eim_first = $_POST['eim_first'];
	$eim_second = $_POST['eim_second'];
	$eim_third = $_POST['eim_third'];

	$eeem_first = $_POST['eeem_first'];
	$eeem_second = $_POST['eeem_second'];
	$eeem_third = $_POST['eeem_third'];

	$de_first = $_POST['de_first'];
	$de_second = $_POST['de_second'];
	$de_third = $_POST['de_third'];

	$em_first = $_POST['em_first'];
	$em_second = $_POST['em_second'];
	$em_third = $_POST['em_third'];

	$evs_first = $_POST['evs_first'];
	$evs_second = $_POST['evs_second'];
	$evs_third = $_POST['evs_third'];


	$first_sessional =$math_first + $eim_first + $eeem_first + $de_first + $em_first + $evs_first;

	$second_sessional =$math_second + $eim_second +  $eeem_second + $de_second + $em_second + $evs_second;

	$third_sessional = $math_third +  $eim_third + $eeem_third + $de_third + $em_third + $evs_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into eethird (roll, name, math_first, math_second, math_third, eim_first, eim_second, eim_third, eeem_first, eeem_second, eeem_third, de_first, de_second, de_third, em_first, em_second, em_third, evs_first, evs_second, evs_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $math_first, $math_second, $math_third, $eim_first, $eim_second, $eim_third, $eeem_first, $eeem_second, $eeem_third, $de_first, $de_second, $de_third, $em_first, $em_second, $em_third, $evs_first, $evs_second, $evs_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>ee 3rd sem result upload</title>
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
				<td>Electrical Instrumentation and Measurement </td>
				<td><input type="number" name="eim_first" placeholder="20 Number"></td>
				<td>Electrical Instrumentation and Measurement </td>
				<td><input type="number" name="eim_second" placeholder="20 Number"></td>
				<td>Electrical Instrumentation and Measurement </td>
				<td><input type="number" name="eim_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Electrical and Electronics Engineering Materials </td>
				<td><input type="number" name="eeem_first" placeholder="20 Number"></td>
				<td>Electrical and Electronics Engineering Materials </td>
				<td><input type="number" name="eeem_second" placeholder="20 Number"></td>
				<td>Electrical and Electronics Engineering Materials </td>
				<td><input type="number" name="eeem_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Digital Electronics </td>
				<td><input type="number" name="de_first" placeholder="20 Number"></td>
				<td>Digital Electronics </td>
				<td><input type="number" name="de_second" placeholder="20 Number"></td>
				<td>Digital Electronics </td>
				<td><input type="number" name="de_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Electrical Machine - I </td>
				<td><input type="number" name="em_first" placeholder="20 Number"></td>
				<td>Electrical Machine - I </td>
				<td><input type="number" name="em_second" placeholder="20 Number"></td>
				<td>Electrical Machine - I </td>
				<td><input tyaee="number" name="em_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Environmental Studies</td>
				<td><input type="number" name="evs_first" placeholder="20 Number"></td>
				<td>Environmental Studies</td>
				<td><input type="number" name="evs_second" placeholder="20 Number"></td>
				<td>Environmental Studies</td>
				<td><input tyaee="number" name="evs_third" placeholder="50 Number"></td>
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