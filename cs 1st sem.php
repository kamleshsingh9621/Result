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

	$communication_first = $_POST['communication_first'];
	$communication_second = $_POST['communication_second'];
	$communication_third = $_POST['communication_third'];

	$math_first = $_POST['math_first'];
	$math_second = $_POST['math_second'];
	$math_third = $_POST['math_third'];

	$Physics_first = $_POST['Physics_first'];
	$Physics_second = $_POST['Physics_second'];
	$Physics_third = $_POST['Physics_third'];

	$chemistry_first = $_POST['chemistry_first'];
	$chemistry_second = $_POST['chemistry_second'];
	$chemistry_third = $_POST['chemistry_third'];

	$information_tech_first = $_POST['information_tech_first'];
	$information_tech_second = $_POST['information_tech_second'];
	$information_tech_third = $_POST['information_tech_third'];

	$technical_drawing_first = $_POST['technical_drawing_first'];
	$technical_drawing_second = $_POST['technical_drawing_second'];
	$technical_drawing_third = $_POST['technical_drawing_third'];

	$first_sessional = $communication_first + $math_first + $Physics_first + $chemistry_first + $information_tech_first + $technical_drawing_first;

	$second_sessional = $communication_second + $math_second + $Physics_second + $chemistry_second + $information_tech_second + $technical_drawing_second;

	$third_sessional = $communication_third + $math_third + $Physics_third + $chemistry_third + $information_tech_third + $technical_drawing_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into csfirst (roll, name, communication_first, communication_second, communication_third,  math_first, math_second, math_third, Physics_first, Physics_second, Physics_third, chemistry_first, chemistry_second, chemistry_third, technical_drawing_first, technical_drawing_second, technical_drawing_third, information_tech_first, information_tech_second, information_tech_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $communication_first, $communication_second, $communication_third,  $math_first, $math_second, $math_third, $Physics_first, $Physics_second, $Physics_third, $chemistry_first, $chemistry_second, $chemistry_third, $technical_drawing_first, $technical_drawing_second, $technical_drawing_third, $information_tech_first, $information_tech_second, $information_tech_third,$first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>cs 1st sem result upload</title>
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
				<td><input type="number" name="communication_first" placeholder="20 Number"></td>
				<td>Communication Skill-2</td>
				<td><input type="number" name="communication_second" placeholder="20 Number"></td>
				<td>Communication Skill-3</td>
				<td><input type="number" name="communication_third" placeholder="50 Number"></td>
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
				<td>Applied Chemistry-1</td>
				<td><input type="number" name="chemistry_first" placeholder="20 Number"></td>
				<td>Applied Chemistry-2</td>
				<td><input type="number" name="chemistry_second" placeholder="20 Number"></td>
				<td>Applied Chemistry-3</td>
				<td><input type="number" name="chemistry_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Information Technology-1</td>
				<td><input type="number" name="information_tech_first" placeholder="20 Number"></td>
				<td>Information Technology-2</td>
				<td><input type="number" name="information_tech_second" placeholder="20 Number"></td>
				<td>Information Technology-3</td>
				<td><input type="number" name="information_tech_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Technical Drawing-1</td>
				<td><input type="number" name="technical_drawing_first" placeholder="20 Number"></td>
				<td>Technical Drawing-2</td>
				<td><input type="number" name="technical_drawing_second" placeholder="20 Number"></td>
				<td>Technical Drawing-3</td>
				<td><input type="number" name="technical_drawing_third" placeholder="50 Number"></td>
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