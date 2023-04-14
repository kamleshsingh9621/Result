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

	$wwwe_first = $_POST['wwwe_first'];
	$wwwe_second = $_POST['wwwe_second'];
	$wwwe_third = $_POST['wwwe_third'];

	$rbt_first = $_POST['rbt_first'];
	$rbt_second = $_POST['rbt_second'];
	$rbt_third = $_POST['rbt_third'];

	$ee_first = $_POST['ee_first'];
	$ee_second = $_POST['ee_second'];
	$ee_third = $_POST['ee_third'];

	$smfe_first = $_POST['smfe_first'];
	$smfe_second = $_POST['smfe_second'];
	$smfe_third = $_POST['smfe_third'];

	$s_first = $_POST['s_first'];
	$s_second = $_POST['s_second'];
	$s_third = $_POST['s_third'];

	$wwied_first = $_POST['wwied_first'];
	$wwied_second = $_POST['wwied_second'];
	$wwied_third = $_POST['wwied_third'];


	$first_sessional = $wwwe_first + $rbt_first + $ee_first + $smfe_first + $s_first + $wwied_first;

	$second_sessional = $wwwe_second + $rbt_second + $ee_second + $smfe_second + $s_second + $wwied_second;

	$third_sessional = $wwwe_third + $rbt_third + $ee_third + $smfe_third  + $s_third + $wwied_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into cefifth (roll, name, wwwe_first, wwwe_second, wwwe_third,  rbt_first, rbt_second, rbt_third, ee_first, ee_second, ee_third, smfe_first, smfe_second, smfe_third, s_first, s_second, s_third, wwied_first, wwied_second, wwied_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $wwwe_first, $wwwe_second, $wwwe_third,  $rbt_first, $rbt_second, $rbt_third, $ee_first, $ee_second, $ee_third, $smfe_first, $smfe_second, $smfe_third, $s_first, $s_second, $s_third, $wwied_first, $wwied_second, $wwied_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>ce 5th sem result upload</title>
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
				<td>Water and Waste Water Engineering -1</td>
				<td><input type="number" name="wwwe_first" placeholder="20 Number"></td>
				<td>Water and Waste Water Engineering -2</td>
				<td><input type="number" name="wwwe_second" placeholder="20 Number"></td>
				<td>Water and Waste Water Engineering -3</td>
				<td><input type="number" name="wwwe_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Railways, Bridges and Tunnels -1</td>
				<td><input type="number" name="rbt_first" placeholder="20 Number"></td>
				<td>Railways, Bridges and Tunnels -2</td>
				<td><input type="number" name="rbt_second" placeholder="20 Number"></td>
				<td>Railways, Bridges and Tunnels -3</td>
				<td><input type="number" name="rbt_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Earthquake Engineering -1</td>
				<td><input type="number" name="ee_first" placeholder="20 Number"></td>
				<td>Earthquake Engineering -2</td>
				<td><input type="number" name="ee_second" placeholder="20 Number"></td>
				<td>Earthquake Engineering -3</td>
				<td><input type="number" name="ee_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Soil Mechanics and Foundation Engineering  -1</td>
				<td><input type="number" name="smfe_first" placeholder="20 Number"></td>
				<td>Soil Mechanics and Foundation Engineering  -2</td>
				<td><input type="number" name="smfe_second" placeholder="20 Number"></td>
				<td>Soil Mechanics and Foundation Engineering  -3</td>
				<td><input type="number" name="smfe_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Surveying-1</td>
				<td><input type="number" name="s_first" placeholder="20 Number"></td>
				<td>Surveying -2</td>
				<td><input type="number" name="s_second" placeholder="20 Number"></td>
				<td>Surveying-3</td>
				<td><input type="number" name="s_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Waste Water and Irrigation Engineering Drawing-1</td>
				<td><input type="number" name="wwied_first" placeholder="20 Number"></td>
				<td>Waste Water and Irrigation Engineering Drawing -2</td>
				<td><input type="number" name="wwied_second" placeholder="20 Number"></td>
				<td>Waste Water and Irrigation Engineering Drawing-3</td>
				<td><input type="number" name="wwied_third" placeholder="50 Number"></td>
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