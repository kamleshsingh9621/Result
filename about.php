<?php
include "header.php";
 include "Result/slider.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>about</title>
	<style type="text/css">
		
		   		/* BEST SECTION START */

		.best{
			width: 100%;
			height: auto;
			background: none;
			margin-top: 20px;
			display: flex;
		}
		.best_box{
			width: 300px;
			height: 250px;
			justify-content:space-between;
			background: white;
			margin: 20px 0px 0px 80px;
			border-radius: 10px;
			box-shadow: 20px 0px 30px black;
		}
		.best_box:hover{
			background: black;
			color: white;
		}
		
		.best_box h2{
			font-weight: bold;
			text-align: center;
		}
		.best_box p{
			margin: 20px 0px 0px 10px;
		}


			/* BEST SECTION END */

		
	</style>
</head>
<body>
	<!--******** BEST SECTION START ********-->

		<div class="best">
			<div class="best_box">
				<h2>BEST EDUCATION</h2>
				<p>College is important for many reasons, including long-term financial gain, job stability, career satisfaction and success outside of the workplace. With more and more occupations requiring advanced education, a college degree can be critical to your success in today's workforce.</p>
			</div>
			<div class="best_box">
				<h2>BEST TEACHERS</h2>
				<p>What can I write about my best teacher? She is a very sweet and kind person. She explains everything in an easy and fun way. Whenever we are not able to understand anything, she patiently teaches it again and again. She is very disciplined, punctual and sometimes strict too.</p>
			</div>
			<div class="best_box">
				<h2>BEST STUDENTS</h2>
				<p>Why Being a college student is important? College is important for many reasons, including long-term financial gain, job stability, career satisfaction and success outside of the workplace. With more and more occupations requiring advanced education, a college degree can be critical to your success in today's workforce.</p>
			</div>
		</div><br><hr>


		<!--******** BEST SECTION END ********-->


</body>
</html>
<?php
 include "Result/footer.php";
?>