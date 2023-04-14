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

	$he_first = $_POST['he_first'];
	$he_second = $_POST['he_second'];
	$he_third = $_POST['he_third'];

	$ie_first = $_POST['ie_first'];
	$ie_second = $_POST['ie_second'];
	$ie_third = $_POST['ie_third'];

	$s_first = $_POST['s_first'];
	$s_second = $_POST['s_second'];
	$s_third = $_POST['s_third'];

	$rcc_first = $_POST['rcc_first'];
	$rcc_second = $_POST['rcc_second'];
	$rcc_third = $_POST['rcc_third'];

	$ec_first = $_POST['ec_first'];
	$ec_second = $_POST['ec_second'];
	$ec_third = $_POST['ec_third'];


	$first_sessional = $comm_first + $he_first + $ie_first + $s_first + $rcc_first +$ec_first;

	$second_sessional = $comm_second + $he_second + $ie_second + $s_second + $rcc_second +$ec_second;

	$third_sessional = $comm_third + $he_third + $ie_third + $s_third + $rcc_third +$ec_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into cefourth (roll, name, comm_first, comm_second, comm_third,  he_first, he_second, he_third, ie_first, ie_second, ie_third, s_first, s_second, s_third, rcc_first, rcc_second, rcc_third, ec_first, ec_second, ec_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $comm_first, $comm_second, $comm_third,  $he_first, $he_second, $he_third, $ie_first, $ie_second, $ie_third, $s_first, $s_second, $s_third, $rcc_first, $rcc_second, $rcc_third, $ec_first, $ec_second, $ec_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>ce 4th sem result upload</title>
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
				<td>Highway Engineering -1</td>
				<td><input type="number" name="he_first" placeholder="20 Number"></td>
				<td>Highway Engineering -2</td>
				<td><input type="number" name="he_second" placeholder="20 Number"></td>
				<td>Highway Engineering -3</td>
				<td><input type="number" name="he_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Irrigation Engineering -1</td>
				<td><input type="number" name="ie_first" placeholder="20 Number"></td>
				<td>Irrigation Engineering -2</td>
				<td><input type="number" name="ie_second" placeholder="20 Number"></td>
				<td>Irrigation Engineering -3</td>
				<td><input type="number" name="ie_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Surveying -1</td>
				<td><input type="number" name="s_first" placeholder="20 Number"></td>
				<td>Surveying -2</td>
				<td><input type="number" name="s_second" placeholder="20 Number"></td>
				<td>Surveying -3</td>
				<td><input type="number" name="s_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Reinforced Cement Concrete Structures-1</td>
				<td><input type="number" name="rcc_first" placeholder="20 Number"></td>
				<td>Reinforced Cement Concrete Structures -2</td>
				<td><input type="number" name="rcc_second" placeholder="20 Number"></td>
				<td>Reinforced Cement Concrete Structures-3</td>
				<td><input type="number" name="rcc_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Energy Conservation-1</td>
				<td><input type="number" name="ec_first" placeholder="20 Number"></td>
				<td>Energy Conservation -2</td>
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