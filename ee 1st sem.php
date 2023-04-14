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

	$math_first = $_POST['math_first'];
	$math_second = $_POST['math_second'];
	$math_third = $_POST['math_third'];

	$Physics_first = $_POST['Physics_first'];
	$Physics_second = $_POST['Physics_second'];
	$Physics_third = $_POST['Physics_third'];

	$chemistry_first = $_POST['chemistry_first'];
	$chemistry_second = $_POST['chemistry_second'];
	$chemistry_third = $_POST['chemistry_third'];

	$it_first = $_POST['it_first'];
	$it_second = $_POST['it_second'];
	$it_third = $_POST['it_third'];

	$ed_first = $_POST['ed_first'];
	$ed_second = $_POST['ed_second'];
	$ed_third = $_POST['ed_third'];

	$first_sessional = $comm_first + $math_first + $Physics_first + $chemistry_first + $it_first + $ed_first;

	$second_sessional = $comm_second + $math_second + $Physics_second + $chemistry_second + $it_second + $ed_second;

	$third_sessional = $comm_third + $math_third + $Physics_third + $chemistry_third + $it_third + $ed_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 540;



	$result = "insert into eefirst (roll, name, comm_first, comm_second, comm_third,  math_first, math_second, math_third, Physics_first, Physics_second, Physics_third, chemistry_first, chemistry_second, chemistry_third, it_first, it_second, it_third, ed_first, ed_second, ed_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $comm_first, $comm_second, $comm_third,  $math_first, $math_second, $math_third, $Physics_first, $Physics_second, $Physics_third, $chemistry_first, $chemistry_second, $chemistry_third, $it_first, $it_second, $it_third, $ed_first, $ed_second, $ed_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
				<td><input type="number" name="comm_first" placeholder="20 Number"></td>
				<td>Communication Skill-2</td>
				<td><input type="number" name="comm_second" placeholder="20 Number"></td>
				<td>Communication Skill-3</td>
				<td><input type="number" name="comm_third" placeholder="50 Number"></td>
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
				<td><input type="number" name="it_first" placeholder="20 Number"></td>
				<td>Information Technology-2</td>
				<td><input type="number" name="it_second" placeholder="20 Number"></td>
				<td>Information Technology-3</td>
				<td><input type="number" name="it_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Engineering Drawing-1</td>
				<td><input type="number" name="ed_first" placeholder="20 Number"></td>
				<td>Engineering Drawing-2</td>
				<td><input type="number" name="ed_second" placeholder="20 Number"></td>
				<td>Engineering Drawing-3</td>
				<td><input type="number" name="ed_third" placeholder="50 Number"></td>
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