<?php
mysql_connect("localhost","root","");
mysql_select_db(webs);

$id = $_GET['id'];
$deletequery = "delete from user where id=$id";
$query = mysql_query($deletequery);

if($query){
    header('location:user.php');
  }
  else{
    echo "<script> alert('data not deleted');</script>";
  }



?>