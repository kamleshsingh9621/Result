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

	$Physics_first = $_POST['Physics_first'];
	$Physics_second = $_POST['Physics_second'];
	$Physics_third = $_POST['Physics_third'];

	$chemistry_first = $_POST['chemistry_first'];
	$chemistry_second = $_POST['chemistry_second'];
	$chemistry_third = $_POST['chemistry_third'];

	$ed_first = $_POST['ed_first'];
	$ed_second = $_POST['ed_second'];
	$ed_third = $_POST['ed_third'];

	$first_sessional = $fc_first + $math_first + $Physics_first + $chemistry_first + $ed_first;

	$second_sessional = $fc_second + $math_second + $Physics_second + $chemistry_second + $ed_second;

	$third_sessional = $fc_third + $math_third + $Physics_third + $chemistry_third + $ed_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 450;



	$result = "insert into mefirst (roll, name, fc_first, fc_second, fc_third,  math_first, math_second, math_third, Physics_first, Physics_second, Physics_third, chemistry_first, chemistry_second, chemistry_third, ed_first, ed_second, ed_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $fc_first, $fc_second, $fc_third,  $math_first, $math_second, $math_third, $Physics_first, $Physics_second, $Physics_third, $chemistry_first, $chemistry_second, $chemistry_third, $ed_first, $ed_second, $ed_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>me 1st sem result upload</title>
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
				<td> Foundational Communication-1</td>
				<td><input type="number" name="fc_first" placeholder="20 Number"></td>
				<td> Foundational Communication-2</td>
				<td><input type="number" name="fc_second" placeholder="20 Number"></td>
				<td> Foundational Communication-3</td>
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