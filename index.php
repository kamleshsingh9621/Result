<?php
mysql_connect("localhost","root","");
mysql_select_db(webs);
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $result=mysql_query("select username from admin_result where username='$username' and password='$password'");
  $count=mysql_num_rows($result);
  if($count>0)
  {
    session_start();
    $_SESSION["username"]=$username;
    header("location:dashboard.php");

  }
  else
  {
    echo "<script>alert('Please Enter Correct Username and Password !')</script>";
  }
}
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="login.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Admin Login</div>
    <div class="content">
      <form action="" method="post" autocomplete="off">
        <div class="user-details">
         
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username *">
          </div>
 
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password *" >
          </div>
          
        </div>

        <div class="button">
          <input type="submit" name="login" value="Login">
        </div>
          
      </form>
      
      
    </div>
  </div>

</body>
</html>
