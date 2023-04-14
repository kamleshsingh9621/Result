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

	$qsv_first = $_POST['qsv_first'];
	$qsv_second = $_POST['qsv_second'];
	$qsv_third = $_POST['qsv_third'];

	$cmaed_first = $_POST['cmaed_first'];
	$cmaed_second = $_POST['cmaed_second'];
	$cmaed_third = $_POST['cmaed_third'];

	$dss_first = $_POST['dss_first'];
	$dss_second = $_POST['dss_second'];
	$dss_third = $_POST['dss_third'];

	$ssd_first = $_POST['ssd_first'];
	$ssd_second = $_POST['ssd_second'];
	$ssd_third = $_POST['ssd_third'];

	$sace_first = $_POST['sace_first'];
	$sace_second = $_POST['sace_second'];
	$sace_third = $_POST['sace_third'];

	$project = $_POST['project'];
	


	$first_sessional = $qsv_first + $cmaed_first + $dss_first + $ssd_first + $sace_first;

	$second_sessional = $qsv_second + $cmaed_second + $dss_second + $ssd_second + $sace_second;

	$third_sessional = $qsv_third + $cmaed_third + $dss_third + $ssd_third  + $sace_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional + $project;

	$percentage = $total_sessional * 100 / 550;



	$result = "insert into cesixth (roll, name, qsv_first, qsv_second, qsv_third,  cmaed_first, cmaed_second, cmaed_third, dss_first, dss_second, dss_third, ssd_first, ssd_second, ssd_third, sace_first, sace_second, sace_third, project, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $qsv_first, $qsv_second, $qsv_third,  $cmaed_first, $cmaed_second, $cmaed_third, $dss_first, $dss_second, $dss_third, $ssd_first, $ssd_second, $ssd_third, $sace_first, $sace_second, $sace_third, $project, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>ce 6th sem result upload</title>
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
				<td>Quantity Surveying and Valuation -1</td>
				<td><input type="number" name="qsv_first" placeholder="20 Number"></td>
				<td>Quantity Surveying and Valuation -2</td>
				<td><input type="number" name="qsv_second" placeholder="20 Number"></td>
				<td>Quantity Surveying and Valuation -3</td>
				<td><input type="number" name="qsv_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Construction Management, Accounts and Entrepreneurship Development -1</td>
				<td><input type="number" name="cmaed_first" placeholder="20 Number"></td>
				<td>Construction Management, Accounts and Entrepreneurship Development -2</td>
				<td><input type="number" name="cmaed_second" placeholder="20 Number"></td>
				<td>Construction Management, Accounts and Entrepreneurship Development -3</td>
				<td><input type="number" name="cmaed_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td> Design of Steel Structure -1</td>
				<td><input type="number" name="dss_first" placeholder="20 Number"></td>
				<td> Design of Steel Structure -2</td>
				<td><input type="number" name="dss_second" placeholder="20 Number"></td>
				<td> Design of Steel Structure -3</td>
				<td><input type="number" name="dss_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Steel Structure Drawing -1</td>
				<td><input type="number" name="ssd_first" placeholder="20 Number"></td>
				<td>Steel Structure Drawing -2</td>
				<td><input type="number" name="ssd_second" placeholder="20 Number"></td>
				<td>Steel Structure Drawing -3</td>
				<td><input type="number" name="ssd_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Software Application in Civil Engineering-1</td>
				<td><input type="number" name="sace_first" placeholder="20 Number"></td>
				<td>Software Application in Civil Engineering -2</td>
				<td><input type="number" name="sace_second" placeholder="20 Number"></td>
				<td>Software Application in Civil Engineering-3</td>
				<td><input type="number" name="sace_third" placeholder="50 Number"></td>
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