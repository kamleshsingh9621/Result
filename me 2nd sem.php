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

	$m_first = $_POST['m_first'];
	$m_second = $_POST['m_second'];
	$m_third = $_POST['m_third'];

	$math_first = $_POST['math_first'];
	$math_second = $_POST['math_second'];
	$math_third = $_POST['math_third'];

	$Physics_first = $_POST['Physics_first'];
	$Physics_second = $_POST['Physics_second'];
	$Physics_third = $_POST['Physics_third'];

	$mce_first = $_POST['mce_first'];
	$mce_second = $_POST['mce_second'];
	$mce_third = $_POST['mce_third'];

	$ewt_first = $_POST['ewt_first'];
	$ewt_second = $_POST['ewt_second'];
	$ewt_third = $_POST['ewt_third'];

	$first_sessional = $m_first + $math_first + $Physics_first + $mce_first + $ewt_first;

	$second_sessional = $m_second + $math_second + $Physics_second + $mce_second + $ewt_second;

	$third_sessional = $m_third + $math_third + $Physics_third + $mce_third + $ewt_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 450;



	$result = "insert into mesecond (roll, name, m_first, m_second, m_third,  math_first, math_second, math_third, Physics_first, Physics_second, Physics_third, mce_first, mce_second, mce_third, ewt_first, ewt_second, ewt_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $m_first, $m_second, $m_third,  $math_first, $math_second, $math_third, $Physics_first, $Physics_second, $Physics_third, $mce_first, $mce_second, $mce_third, $ewt_first, $ewt_second, $ewt_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>me 2nd sem result upload</title>
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
				<td> Applied Mechanics-1</td>
				<td><input type="number" name="m_first" placeholder="20 Number"></td>
				<td> Applied Mechanics-2</td>
				<td><input type="number" name="m_second" placeholder="20 Number"></td>
				<td> Applied Mechanics-3</td>
				<td><input type="number" name="m_third" placeholder="50 Number"></td>
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
				<td>Applied Physics-1</td>
				<td><input type="number" name="Physics_first" placeholder="20 Number"></td>
				<td>Applied Physics-2</td>
				<td><input type="number" name="Physics_second" placeholder="20 Number"></td>
				<td>Applied Physics-3</td>
				<td><input type="number" name="Physics_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Basics of Mechanical & Civil Engg.-1</td>
				<td><input type="number" name="mce_first" placeholder="20 Number"></td>
				<td>Basics of Mechanical & Civil Engg.-2</td>
				<td><input type="number" name="mce_second" placeholder="20 Number"></td>
				<td>Basics of Mechanical & Civil Engg.-3</td>
				<td><input type="number" name="mce_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td> Elementary Workshop Tech.-1</td>
				<td><input type="number" name="ewt_first" placeholder="20 Number"></td>
				<td> Elementary Workshop Tech.-2</td>
				<td><input type="number" name="ewt_second" placeholder="20 Number"></td>
				<td> Elementary Workshop Tech.-3</td>
				<td><input type="number" name="ewt_third" placeholder="50 Number"></td>
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