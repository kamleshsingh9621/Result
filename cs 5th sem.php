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

	$se_first = $_POST['se_first'];
	$se_second = $_POST['se_second'];
	$se_third = $_POST['se_third'];

	$php_first = $_POST['php_first'];
	$php_second = $_POST['php_second'];
	$php_third = $_POST['php_third'];

	$python_first = $_POST['python_first'];
	$python_second = $_POST['python_second'];
	$python_third = $_POST['python_third'];

	$cahm_first = $_POST['cahm_first'];
	$cahm_second = $_POST['cahm_second'];
	$cahm_third = $_POST['cahm_third'];

	$iot_first = $_POST['iot_first'];
	$iot_second = $_POST['iot_second'];
	$iot_third = $_POST['iot_third'];

	$minor = $_POST['minor'];

	$first_sessional = $se_first + $php_first + $python_first + $cahm_first + $iot_first;

	$second_sessional = $se_second + $php_second + $python_second + $cahm_second + $iot_second;

	$third_sessional = $se_third + $php_third + $python_third + $cahm_third + $iot_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional + $minor;

	$percentage = $total_sessional * 100 / 550;



	$result = "insert into csfifth (roll, name, se_first, se_second, se_third,  php_first, php_second, php_third, python_first, python_second, python_third, cahm_first, cahm_second, cahm_third, iot_first, iot_second, iot_third, minor,  first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $se_first, $se_second, $se_third,  $php_first, $php_second, $php_third, $python_first, $python_second, $python_third, $cahm_first, $cahm_second, $cahm_third, $iot_first, $iot_second, $iot_third, $minor, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>cs 5th sem result upload</title>
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
				<td><input type="number" name="roll"></td>
				<td>Student Name</td>
				<td><input type="text" name="name"></td>
			</tr>


			
			<tr>
				<td>Software Engineering</td>
				<td><input type="number" name="se_first" placeholder="20 number"></td>
				<td>Software Engineering</td>
				<td><input type="number" name="se_second" placeholder="20 number"></td>
				<td>Software Engineering</td>
				<td><input type="number" name="se_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>Web Development using PHP</td>
				<td><input type="number" name="php_first" placeholder="20 number"></td>
				<td>Web Development using PHP</td>
				<td><input type="number" name="php_second" placeholder="20 number"></td>
				<td>Web Development using PHP</td>
				<td><input type="number" name="php_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>Computer Programming using Python</td>
				<td><input type="number" name="python_first" placeholder="20 number"></td>
				<td>Computer Programming using Python</td>
				<td><input type="number" name="python_second" placeholder="20 number"></td>
				<td>Computer Programming using Python</td>
				<td><input type="number" name="python_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>CAHM</td>
				<td><input type="number" name="cahm_first" placeholder="20 number"></td>
				<td>CAHM</td>
				<td><input type="number" name="cahm_second" placeholder="20 number"></td>
				<td>CAHM</td>
				<td><input type="number" name="cahm_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>Internet of Things</td>
				<td><input type="number" name="iot_first" placeholder="20 number"></td>
				<td>Internet of Things</td>
				<td><input type="number" name="iot_second" placeholder="20 number"></td>
				<td>Internet of Things</td>
				<td><input type="number" name="iot_third" placeholder="50 number"></td>
			</tr>

			<tr>
				<td>Minor Project</td>
				<td><input type="number" name="minor" placeholder="100 number"></td>
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