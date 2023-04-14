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

	$cad_first = $_POST['cad_first'];
	$cad_second = $_POST['cad_second'];
	$cad_third = $_POST['cad_third'];

	$m_first = $_POST['m_first'];
	$m_second = $_POST['m_second'];
	$m_third = $_POST['m_third'];

	$mee_first = $_POST['mee_first'];
	$mee_second = $_POST['mee_second'];
	$mee_third = $_POST['mee_third'];

	$it_first = $_POST['it_first'];
	$it_second = $_POST['it_second'];
	$it_third = $_POST['it_third'];


	$first_sessional =$math_first + $cad_first + $m_first + $mee_first + $it_first;

	$second_sessional =$math_second + $cad_second + $m_second + $mee_second + $it_second;

	$third_sessional =$math_third + $cad_third + $m_third + $mee_third + $it_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 450;



	$result = "insert into cesecond (roll, name, math_first, math_second, math_third, cad_first, cad_second, cad_third, m_first, m_second, m_third, mee_first, mee_second, mee_third, it_first, it_second, it_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $math_first, $math_second, $math_third, $cad_first, $cad_second, $cad_third, $m_first, $m_second, $m_third, $mee_first, $mee_second, $mee_third, $it_first, $it_second, $it_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>ce 2nd sem result upload</title>
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
				<td>Computer Aided Drawing -1</td>
				<td><input type="number" name="cad_first" placeholder="20 Number"></td>
				<td>Computer Aided Drawing -2</td>
				<td><input type="number" name="cad_second" placeholder="20 Number"></td>
				<td>Computer Aided Drawing -3</td>
				<td><input type="number" name="cad_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Applied Mechanics -1</td>
				<td><input type="number" name="m_first" placeholder="20 Number"></td>
				<td>Applied Mechanics -2</td>
				<td><input type="number" name="m_second" placeholder="20 Number"></td>
				<td>Applied Mechanics -3</td>
				<td><input type="number" name="m_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Basics of Mechanical and Electrical Engg.-1</td>
				<td><input type="number" name="mee_first" placeholder="20 Number"></td>
				<td>Basics of Mechanical and Electrical Engg.-2</td>
				<td><input type="number" name="mee_second" placeholder="20 Number"></td>
				<td>Basics of Mechanical and Electrical Engg.-3</td>
				<td><input type="number" name="mee_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td> Basics of Information Technology- 1</td>
				<td><input type="number" name="it_first" placeholder="20 Number"></td>
				<td> Basics of Information Technology- 2</td>
				<td><input type="number" name="it_second" placeholder="20 Number"></td>
				<td> Basics of Information Technology- 3</td>
				<td><input tyaee="number" name="it_third" placeholder="50 Number"></td>
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