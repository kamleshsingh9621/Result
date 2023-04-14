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

	$fc_first = $_POST['fc_first'];
	$fc_second = $_POST['fc_second'];
	$fc_third = $_POST['fc_third'];

	$math_first = $_POST['math_first'];
	$math_second = $_POST['math_second'];
	$math_third = $_POST['math_third'];

	$mms_first = $_POST['mms_first'];
	$mms_second = $_POST['mms_second'];
	$mms_third = $_POST['mms_third'];

	$te_first = $_POST['te_first'];
	$te_second = $_POST['te_second'];
	$te_third = $_POST['te_third'];

	$mp_first = $_POST['mp_first'];
	$mp_second = $_POST['mp_second'];
	$mp_third = $_POST['mp_third'];

	$cp_first = $_POST['cp_first'];
	$cp_second = $_POST['cp_second'];
	$cp_third = $_POST['cp_third'];


	$first_sessional = $fc_first + $math_first + $mms_first + $te_first + $mp_first + $cp_first;

	$second_sessional = $fc_second + $math_second + $mms_second + $te_second + $mp_second + $cp_second;

	$third_sessional = $fc_third + $math_third + $mms_third + $te_third + $mp_third + $cp_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into methird (roll, name, fc_first, fc_second, fc_third,  math_first, math_second, math_third, mms_first, mms_second, mms_third, te_first, te_second, te_third, mp_first, mp_second, mp_third, cp_first, cp_second, cp_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $fc_first, $fc_second, $fc_third,  $math_first, $math_second, $math_third, $mms_first, $mms_second, $mms_third, $te_first, $te_second, $te_third, $mp_first, $mp_second, $mp_third, $cp_first, $cp_second, $cp_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>me 3rd sem result upload</title>
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
				<td>Functional Communication -1</td>
				<td><input type="number" name="fc_first" placeholder="20 Number"></td>
				<td> Functional Communication -2</td>
				<td><input type="number" name="fc_second" placeholder="20 Number"></td>
				<td> Functional Communication -3</td>
				<td><input type="number" name="fc_third" placeholder="50 Number"></td>
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
				<td>Materials & Material Science -1</td>
				<td><input type="number" name="mms_first" placeholder="20 Number"></td>
				<td>Materials & Material Science -2</td>
				<td><input type="number" name="mms_second" placeholder="20 Number"></td>
				<td>Materials & Material Science -3</td>
				<td><input type="number" name="mms_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td> Thermal Engineering -1</td>
				<td><input type="number" name="te_first" placeholder="20 Number"></td>
				<td> Thermal Engineering -2</td>
				<td><input type="number" name="te_second" placeholder="20 Number"></td>
				<td> Thermal Engineering -3</td>
				<td><input type="number" name="te_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Manufacturing Processes -1</td>
				<td><input type="number" name="mp_first" placeholder="20 Number"></td>
				<td>Manufacturing Processes -2</td>
				<td><input type="number" name="mp_second" placeholder="20 Number"></td>
				<td>Manufacturing Processes -3</td>
				<td><input type="number" name="mp_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td> Introduction To Computer Practical -1</td>
				<td><input type="number" name="cp_first" placeholder="20 Number"></td>
				<td> Introduction To Computer Practical -2</td>
				<td><input type="number" name="cp_second" placeholder="20 Number"></td>
				<td> Introduction To Computer Practical -3</td>
				<td><input type="number" name="cp_third" placeholder="50 Number"></td>
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