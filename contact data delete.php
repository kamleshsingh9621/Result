<?php
mysql_connect("localhost","root","");
mysql_select_db(webs);

$id = $_GET['id'];
$deletequery = "delete from contact_form where id=$id";
$query = mysql_query($deletequery);

if($query){
    header('location:contact user.php');
  }
  else{
    echo "<script> alert('data not deleted');</script>";
  }



?>