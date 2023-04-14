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

	$imree_first = $_POST['imree_first'];
	$imree_second = $_POST['imree_second'];
	$imree_third = $_POST['imree_third'];

	$edde_first = $_POST['edde_first'];
	$edde_second = $_POST['edde_second'];
	$edde_third = $_POST['edde_third'];

	$uee_first = $_POST['uee_first'];
	$uee_second = $_POST['uee_second'];
	$uee_third = $_POST['uee_third'];

	$acsee_first = $_POST['acsee_first'];
	$acsee_second = $_POST['acsee_second'];
	$acsee_third = $_POST['acsee_third'];

	$project = $_POST['project'];

	$first_sessional = $imree_first + $edde_first + $uee_first + $acsee_first;

	$second_sessional = $imree_second + $edde_second + $uee_second + $acsee_second ;

	$third_sessional = $imree_third + $edde_third + $uee_third + $acsee_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional + $project;

	$percentage = $total_sessional * 100 / 460;



	$result = "insert into eesixth (roll, name, imree_first, imree_second, imree_third,  edde_first, edde_second, edde_third, uee_first, uee_second, uee_third, acsee_first, acsee_second, acsee_third, project, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $imree_first, $imree_second, $imree_third,  $edde_first, $edde_second, $edde_third, $uee_first, $uee_second, $uee_third, $acsee_first, $acsee_second, $acsee_third, $project, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>ee 6th sem result upload</title>
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
				<td>Installation, Maintenance and Repair of Electrical Equipment-1</td>
				<td><input type="number" name="imree_first" placeholder="20 Number"></td>
				<td>Installation, Maintenance and Repair of Electrical Equipment-2</td>
				<td><input type="number" name="imree_second" placeholder="20 Number"></td>
				<td>Installation, Maintenance and Repair of Electrical Equipment-3</td>
				<td><input type="number" name="imree_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Electrical Design, Drawing and Estimating -1 </td>
				<td><input type="number" name="edde_first" placeholder="20 Number"></td>
				<td>Electrical Design, Drawing and Estimating -2 </td>
				<td><input type="number" name="edde_second" placeholder="20 Number"></td>
				<td>Electrical Design, Drawing and Estimating -3</td>
				<td><input type="number" name="edde_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Utilization of Electrical Energy -1 </td>
				<td><input type="number" name="uee_first" placeholder="20 Number"></td>
				<td>Utilization of Electrical Energy -2</td>
				<td><input type="number" name="uee_second" placeholder="20 Number"></td>
				<td>Utilization of Electrical Energy -3</td>
				<td><input type="number" name="uee_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Application of Computer Software in Electrical Engineering -1 </td>
				<td><input type="number" name="acsee_first" placeholder="20 Number"></td>
				<td>Application of Computer Software in Electrical Engineering -2 </td>
				<td><input type="number" name="acsee_second" placeholder="20 Number"></td>
				<td>Application of Computer Software in Electrical Engineering -3 </td>
				<td><input type="number" name="acsee_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Project Work</td>
				<td><input type="number" name="project" placeholder="100 Number"></td>
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