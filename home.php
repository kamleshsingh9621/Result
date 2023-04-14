<?php 
include "prev paper/slider.php";
 ?><br><hr>
 <?php
error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db(webs);
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $result="insert into contact_form(name,email,message)values('$name','$email','$message')";
    if(mysql_query($result))
    {
        echo " ";
    }
    else
    {
        echo " ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<style type="text/css">
		.home_container{
			width: 100%;
			height: auto;
		}



		/* MEETING SECTION START */
		.meeting{
			width: 100%;
			height: auto;
			background: none;
			display: flex;
			margin-top: 20px;
		}
		.meeting_left{
			width: 100%;
			height: auto;
			background: none;
		}
		.meeting_box{
			width: 310px;
			height: 350px;
			justify-content:space-between;
			background: #1784bf;
			margin: 20px 0px 0px 35px;
			border-radius: 10px;
			box-shadow: 20px 0px 30px black;
		}
		.meeting_center{
			width: 100%;
			height: auto;
			background: none;
		}
		.center_box{
			width: 350px;
			height: 600px;
			background: #54b8ae;
			margin:90px 0px 0px 30px;
			border-radius: 30px;		
		}
		.meeting_right{
			width: 100%;
			height: auto;
			background: none;
		}
		.admission_button{
			text-decoration: none;
			font-size: 20px;
			color: white;
			background: blue;
			border-radius: 10px;
			padding: 12px;
			margin:0px 0px 0px 100px;
		}
		.admission_button:hover{
			color: black;
			text-decoration: none;
			background: #211bc4;
		}
		.meeting_image{
			width: 310px;
			height: 170px;
		}
		.meeting_title{
			color: black;
			text-align: center;
			padding: 10px 0px;
			font-weight: bold;
		}
		.meeting_content{
			color: black;
			padding: 0px 15px;
		}
		
		
		

		/* MEETING SECTION END */



		/* FEW FACT SECTION START */


		.fact{
			width: 100%;
			height: auto;
			background: none;
			display: flex;
		}
		
		.fact_box{
			width: 170px;
			height: 150px;
			background: none;
			margin: 30px 0px 0px 100px;

		}
		.fact_box_title{
			padding: 25px 37px;
			font-weight: bold;
			color: black;
			font-size: 40px;

		}
		.fact_box_content{
			color: black;
			text-align: center;
			font-weight: bold;
			font-size: 20px;

		}

		/* FEW FACT SECTION END */


		/* COMMENT SECTION START */

		.comment{
			width: 100%;
			height: auto;
			background: none;
			display: flex;
		}
		.comment_form{
			width: 550px;
			height: auto;
			background: none;
		}
		form{
			width:480px;
			background: #dce0dd; 
			margin-left: 30px;
			margin-top: 50px;
			box-shadow: 10px 0px 20px black;
		}
		input[type="text"]{
			width: 450px;
			height: 40px;
			margin-top: 20px;

		}
		input[type="email"]{
			width: 450px;
			height: 40px;
			margin-top: 30px;

		}
		.message{
			width: 450px;
			height: 100px;
			margin-top: 30px;
			resize: none;
		}
		input[type="submit"]{
			width: 120px;
			height: 40px;
			margin-top: 10px;
			margin-left: 170px;
			box-shadow: 5px 5px 0px grey;

		}
		input[type="submit"]:active{
			box-shadow: 0px 0px 0px grey;

		}
		.comment_show{
			width: 95%;
			height:500px;
			background: none;
			margin-top: 30px;
			border: 2px solid black;
		}
		.all_comment{
			width: 95%;
			height: 470px;
			overflow: auto;
			margin-left: 30px;
			margin-top: 10px;
			background: #dce0dd;

		}
		/* COMMENT SECTION END */



	</style>
</head>
<body>
	<div class="home_container">


		


		 <!--****** MEETING SECTION START ******--> 
		
		<h1 style="text-align: center; font-weight: bold;">UPCOMING MEETING</h1>
		<hr>
		<div class="meeting">

			<div class="meeting_left">
				<div class="meeting_box">
					<img src="images/img2.jpg" class="meeting_image">
					<h5 class="meeting_title">LECTURERS MEETING</h5>
					<p class="meeting_content">The classroom lecture is a special form of communication in which voice, gesture, movement, facial expression, and eye contact can either complement or detract from the content.</p>
				</div>
				<div class="meeting_box">
					<img src="images/img3.jpg" class="meeting_image">
					<h5 class="meeting_title">ONLINE TEACHING</h5>
					<p class="meeting_content">Online education offers extensive benefits to students by giving a manageable schedule, student enhancement and augmented education access and choice.</p>
				</div>
			</div>
			<div class="meeting_center">
				<div class="center_box">
					<marquee behavior="alternate" style
					width="300px;">
					<h5 style="margin-top: 30px; font-weight: bold;">ADMISSION FOR DIPLOMA & B. TECH IN AMBALIKA COLLEGE</h5>
					</marquee><br><br>
					<p style="margin-left: 20px;">B.Tech in computer science and engineering is very good at this university. As there is a good scope in CSE, many students pursue it. In our batch, there is a total of a hundred students. Students can get a job in cybersecurity, networking, data scientist, software programmer, etc.<br><br><br>

					M.Tech with good salary packages include Project Manager, Senior Engineer, Research Associate, Development Engineer, Construction Manager, Machinery Engineer, Maintenance Manager, Software Developer, Researcher, etc. Apart from this, students can also go for a career in the teaching profession after completing their M.Tech</p><br><br>
					<a href="#" class="admission_button">ADMISSION</a>
				</div>
				
			</div>
			<div class="meeting_left">
				<div class="meeting_box">
					<img src="images/img4.jpg" class="meeting_image">
					<h5 class="meeting_title">HIGHER EDUCATION</h5>
					<p class="meeting_content">After going to college, you may have improved career opportunities, receive higher pay, experience greater cultural awareness, and have a life with more choices and possibilities</p>
				</div>
				<div class="meeting_box">
					<img src="images/img6.jpg" class="meeting_image">
					<h5 class="meeting_title">STUDENT'S LIBRARY</h5>
					<p class="meeting_content">A place in which literary, musical, artistic, or reference materials (such as books, manuscripts, recordings, or films) are kept for use but not for sale.</p>
				</div>	
			</div>
		</div><br><br>
		
       <!--****** MEETING SECTION END *****--> 



       <!--****** FEW FACT SECTION START ******-->
       <h1 style="font-weight: bold;">A Few Facts About Ambalika Engineering College Lucknow</h1><br>
       <hr style="background: black; font-weight: bold;">
       <div class="fact">       
       		<div class="fact_box">
       			<h2 class="fact_box_title">85 %</h2>
       			<p class="fact_box_content">Students Placement</p>
        	</div>
        	<div class="fact_box">
       			<h2 class="fact_box_title">190 +</h2>
       			<p class="fact_box_content">Current Faculty</p>
        	</div>
        	<div class="fact_box">
       			<h2 class="fact_box_title">200</h2>
       			<p class="fact_box_content">Acre Green Area</p>       	
        	</div>
        	<div class="fact_box">
       			<h2 class="fact_box_title">3000</h2>
       			<p class="fact_box_content">Students</p>
        	</div>
       
       	
       </div><br><br><br><hr>

       <!--****** FEW FACT SECTION END ******-->



       <!--****** COMMENT SECTION START ******--> 
       <h1 style="font-weight: bold;">Leave A Comment For Any Query....</h1>
       <hr style="background: black;">
       <div class="comment">
       	<div class="comment_form">
       		<form method="post">
       			<table>
       				<tr>
       					<td><input type="text" name="name" placeholder="Enter Your Name *"></td>
       				</tr>
       				<tr>
       					<td><input type="email" name="email" placeholder="Enter Your Email *"></td>
       				</tr>
       				<tr>
       					<td><textarea name="message" placeholder="Enter Your Query..." class="message"></textarea></td>
       				</tr>
       				<tr>
       					<td><input type="submit" name="submit" value="POST"></td>
       				</tr>
       			</table>

       			
       		</form>
       		
       	</div>
       	<div class="comment_show">
       		<div class="all_comment">
				<?php
				mysql_connect("localhost","root","");
				mysql_select_db(webs);
				$selectquery = "select * from contact_form";
				$result = mysql_query($selectquery);
				while($row = mysql_fetch_assoc($result)){
			?>	
					<div style="background: #c5d4c9; height: auto;">
					<h5 style="font-weight: bold;"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $row['name'];?></h5>
					<small style="margin-left: 30px; font-weight: bold; margin-top: -5px;"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $row['email'];?></small>
					<p style="margin-left: 30px;"><i class="fa fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $row['message'];?></p></div>	<br><br><br>
			<?php	
				}			
			?>	
		</div>
       		
       	</div>
       	
       </div> <br><br>


       <!--****** COMMENT  SECTION END ******-->    




	</div>
</body>
</html>
<?php
 include "Result/footer.php";
?>