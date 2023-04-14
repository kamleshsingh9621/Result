<?php
 include "master.php";
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style type="text/css">
     	body{
     		background: #1a9799;
     	}
          .contact_user{
               margin:0px 0px 0px 100px;

          }
     	
     	table{
               width: 950px;
     		margin: 30px 0px 0px 140px;
     		background: white;
     		border: 3px solid black;
     		box-shadow: 0px 55px 65px black;
     	}
     	thead{
     		background: black;

     	}
     	th{
     		color: white;

     	}
     	th:nth-child(1){
     		width: 35px;
     	}
     	td:nth-child(1){
     		text-align: center;
     		background: black;
     		color: white;
     	}

          th:nth-child(2){
               width: 150px;
               text-align: center;
          }
          
          th:nth-child(3){
               width: 200px;
               text-align: center;
          }
          
     	
     	
     	
     	th:nth-child(4){
     		width: 350px;
               text-align: center;
     	}
     	td:nth-child(4){
     		text-align: center;
     	}
     	th:nth-child(5){
     		text-align: center;
               text-align: center;
     	}
     	
     	td:nth-child(5){
     		width: 35px;
               text-align: center;
     	}
     	
     	
     	
     	.edit{
     		color: green;
     	}
     	
     	.delete{
     		color: red;
     	}


     </style>
   </head>
<body>
	<div class="contact_user">
				<table border="1px">
			<thead >
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th colspan="2">Operation</th>
			</thead>
			<tbody>
				<?php
				mysql_connect("localhost","root","");
				mysql_select_db(webs);

				$selectquery = "select * from user";
				$result = mysql_query($selectquery);
				while($row = mysql_fetch_assoc($result)){

			?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['message'];?></td>
					
					<td><a href="user data delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash-o delete" aria-hidden="true"></i></a></td>
				</tr>
				
			<?php	
				
				}
				
			?>

			</tbody>
		</table>
	</div>
</body>

</html>