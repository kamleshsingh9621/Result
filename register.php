<?php
 include "master.php";
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
<title>login</title>
<style type="text/css">
      .lcontainer{
        width: 700px;
        height: 450px;
        margin:50px 0px 0px 300px;
        background: white;
        box-shadow: 20px 0px 35px black;
      }
      .ltitle{
        text-align: center;
        font-weight: bold;
        font-size: 28px;
      }
      .details{
        font-size: 25px;
        margin-left: 10px;
        font-weight: bold;
      }
      input[type="text"]{
        width: 670px;
        height: 45px;
        margin-left: 15px;
      }
      input[type="email"]{
        width: 670px;
        height: 45px;
        margin-left: 15px;
      }
      input[type="password"]{
        width: 670px;
        height: 45px;
        margin-left: 15px;
      }
      input[type="submit"]{
        width: 150px;
        height: 45px;
        margin:20px 0px 0px 250px;
        border-radius: 10px;
        font-weight: bold;
        background: white;
        color: black;
        font-size: 21px;
        border: 1px solid grey;
      }
      input[type="submit"]:hover{
        background: blue;
        color: white;
      }


       
     </style>

  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      
   </head>
<body>
  <div class="lcontainer">
    <div class="ltitle">Registration</div>
    <div class="content">
      <form action="" method="post" autocomplete="off">
        <div class="user-details">
           <div class="input-box">
            <span class="details">Full Name</span><br>
            <input type="text" name="name" placeholder="Enter your Full Name *">
         
          <div class="input-box">
            <span class="details">Email</span><br>
            <input type="email" name="email" placeholder="Enter your Email *">
          </div>
 
          <div class="input-box">
            <span class="details">Password</span><br>
            <input type="password" name="password" placeholder="Enter your password *" >
          </div>

          <div class="input-box">
            <span class="details">Confirm Password</span><br>
            <input type="password" name="cpassword" placeholder="Enter your Re-Password *" >
          </div>
          
        </div>

        <div class="lbutton">
          <input type="submit" name="login" value="Register">
        </div>
          
      </form>
      
      
    </div>
  </div>

</body>
</html>
