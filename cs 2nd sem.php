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

	$bee_first = $_POST['bee_first'];
	$bee_second = $_POST['bee_second'];
	$bee_third = $_POST['bee_third'];

	$math_first = $_POST['math_first'];
	$math_second = $_POST['math_second'];
	$math_third = $_POST['math_third'];

	$Physics_first = $_POST['Physics_first'];
	$Physics_second = $_POST['Physics_second'];
	$Physics_third = $_POST['Physics_third'];

	$multi_ani_first = $_POST['multi_ani_first'];
	$multi_ani_second = $_POST['multi_ani_second'];
	$multi_ani_third = $_POST['multi_ani_third'];

	$c_first = $_POST['c_first'];
	$c_second = $_POST['c_second'];
	$c_third = $_POST['c_third'];


	$first_sessional = $bee_first + $math_first + $Physics_first + $multi_ani_first + $c_first;

	$second_sessional = $bee_second + $math_second + $Physics_second + $multi_ani_second + $c_second;

	$third_sessional = $bee_third + $math_third + $Physics_third + $multi_ani_third + $c_third;

	$total_sessional = $first_sessional + $second_sessional + $third_sessional;

	$percentage = $total_sessional * 100 / 450;



	$result = "insert into cssecond (roll, name, bee_first, bee_second, bee_third,  math_first, math_second, math_third, Physics_first, Physics_second, Physics_third, multi_ani_first, multi_ani_second, multi_ani_third, c_first, c_second, c_third, first_sessional, second_sessional, third_sessional, total_sessional, per)values($roll, '$name', $bee_first, $bee_second, $bee_third,  $math_first, $math_second, $math_third, $Physics_first, $Physics_second, $Physics_third, $multi_ani_first, $multi_ani_second, $multi_ani_third, $c_first, $c_second, $c_third, $first_sessional, $second_sessional, $third_sessional, $total_sessional, $percentage)";

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
	<title>cs 2nd sem result upload</title>
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
				<td>Basic of Electrical & Electronics</td>
				<td><input type="number" name="bee_first" placeholder="20 Number"></td>
				<td>Basic of Electrical & Electronics</td>
				<td><input type="number" name="bee_second" placeholder="20 Number"></td>
				<td>Basic of Electrical & Electronics</td>
				<td><input type="number" name="bee_third" placeholder="50 Number"></td>
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
				<td>Multimedia & Animation</td>
				<td><input type="number" name="multi_ani_first" placeholder="20 Number"></td>
				<td>Multimedia & Animation</td>
				<td><input type="number" name="multi_ani_second" placeholder="20 Number"></td>
				<td>Multimedia & Animation</td>
				<td><input type="number" name="multi_ani_third" placeholder="50 Number"></td>
			</tr>

			<tr>
				<td>Computer Programming using C</td>
				<td><input type="number" name="c_first" placeholder="20 Number"></td>
				<td>Computer Programming using C</td>
				<td><input type="number" name="c_second" placeholder="20 Number"></td>
				<td>Computer Programming using C</td>
				<td><input type="number" name="c_third" placeholder="50 Number"></td>
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