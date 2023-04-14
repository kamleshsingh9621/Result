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

	$iwt_first = $_POST['iwt_first'];
	$iwt_second = $_POST['iwt_second'];
	$iwt_third = $_POST['iwt_third'];

	$math_first = $_POST['math_first'];
	$math_second = $_POST['math_second'];
	$math_third = $_POST['math_third'];

	$evs_first = $_POST['evs_first'];
	$evs_second = $_POST['evs_second'];
	$evs_third = $_POST['evs_third'];

	$dcn_first = $_POST['dcn_first'];
	$dcn_second = $_POST['dcn_second'];
	$dcn_third = $_POST['dcn_third'];

	$ds_first = $_POST['ds_first'];
	$ds_second = $_POST['ds_second'];
	$ds_third = $_POST['ds_third'];

	$de_first = $_POST['de_first'];
	$de_second = $_POST['de_second'];
	$de_third = $_POST['de_third'];


	$first_sessional = $iwt_first + $math_first + $evs_first + $dcn_first + $ds_first + $de_first;

	$second_sessional = $iwt_second + $math_second + $evs_second + $dcn_second + $ds_second + $de_second;

	$third_sessional = $iwt_third + $math_third + $evs_third + $dcn_third + $ds_third + $de_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into csthird (roll, name, iwt_first, iwt_second, iwt_third,  math_first, math_second, math_third, evs_first, evs_second, evs_third, dcn_first, dcn_second, dcn_third, ds_first, ds_second, ds_third, de_first, de_second, de_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $iwt_first, $iwt_second, $iwt_third,  $math_first, $math_second, $math_third, $evs_first, $evs_second, $evs_third, $dcn_first, $dcn_second, $dcn_third, $ds_first, $ds_second, $ds_third, $de_first, $de_second, $de_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>cs 3rd sem result upload</title>
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
				<td>IWT</td>
				<td><input type="number" name="iwt_first" placeholder="20 Number"></td>
				<td>IWT</td>
				<td><input type="number" name="iwt_second" placeholder="20 Number"></td>
				<td>IWT</td>
				<td><input type="number" name="iwt_third" placeholder="50 Number"></td>
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
				<td>EVS</td>
				<td><input type="number" name="evs_first" placeholder="20 Number"></td>
				<td>EVS</td>
				<td><input type="number" name="evs_second" placeholder="20 Number"></td>
				<td>EVS</td>
				<td><input type="number" name="evs_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>DCN</td>
				<td><input type="number" name="dcn_first" placeholder="20 Number"></td>
				<td>DCN</td>
				<td><input type="number" name="dcn_second" placeholder="20 Number"></td>
				<td>DCN</td>
				<td><input type="number" name="dcn_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>DS</td>
				<td><input type="number" name="ds_first" placeholder="20 Number"></td>
				<td>DS</td>
				<td><input type="number" name="ds_second" placeholder="20 Number"></td>
				<td>DS</td>
				<td><input type="number" name="ds_third" placeholder="50 Number"></td>
			</tr>
			<tr>
				<td>DE</td>
				<td><input type="number" name="de_first" placeholder="20 Number"></td>
				<td>DE</td>
				<td><input type="number" name="de_second" placeholder="20 Number"></td>
				<td>DE</td>
				<td><input type="number" name="de_third" placeholder="50 Number"></td>
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