<?php 
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>service</title>
  <style type="text/css">
   


.services{
width: 1220px;
height: 500px;
background-color: none;
box-shadow: 0px 0px 10px #adb9cc; 
}
.services img{
width: 1220px;
height: 500px;

}

.services h2{
  font-size: 50px;
  margin: -330px 0px 0px 310px;
  color: white;
}
.services p{
  font-size: 21px;
  margin: 0px 0px 0px 430px;
  color: white;
}
@media screen and (min-width: 500px) and (max-width: 768px){
  .services{
    width: 720px;
    
  }
  .services img{
    width: 720px;
    
  }
  .services h2{
  font-size: 40px;
  margin: -330px 0px 0px 120px;
}
.services p{
  font-size: 21px;
  margin: 0px 0px 0px 200px;  
}
}
.course{
  width: 1220px;
  height: 530px;
  background-color: none;
}
.course div{
  float: left;
  width: 235px;
  height: 230px;
  margin:30px 0px 0px 55px;
  background-color: none;
  box-shadow: 0px 25px 40px black;
}
.course div:hover{
    box-shadow: 0px 0px 25px red;
    color: white;
    background: black;

}
.course div img{
  width: 100px;
  height: 100px;
  text-align: center;
  align-items: center;
  margin: 5px 0px 0px 60px;
}
.course div h2{

font-size: 20px;
text-align: center;
}
.course div p{
    text-align: center;

}
@media screen and (min-width: 500px) and (max-width: 768px){
  .course{
    width: 720px;
  }
  .course div{
    width: 220px;
    height: 220px;
    margin: 30px 0px 0px 90px;
  }
  .course div img{
    width: 80px;
    height: 80px;
  }
}
 
 .contact_me{
  width: 1220px;
  height: auto;
  background: grey;
 }
 .project_title{
  padding-top:13px; 
  margin:0px 0px 0px 200px;
  color: black;
  font-weight: bold;
  font-size: 37px;

 }
 .project_subject{
  color: white;
  font-size: 20px;
  margin: 20px 0px 0px 50px;
 }
 .contact_button{
  width: 150px;
  height: 50px;
  background: white;
  color: black;
  margin:30px 0px 0px 50px;
  border-radius: 10px;
  text-align: center;
  text-align: center;
  padding: 13px 0px;
 }
 .button{
  text-decoration: none;
  font-size: 20px;
  color: black;
 }
 .button:hover{
  font-weight: bold;
 }
  
</style>
</head>
<body>

<div class="services">
  <img src="images/service.jpg">
  <h2>Get Ready to Our Services</h2>
  <p>Ambalika institute of professional studies <br>lucknow all sessional result here.......</p>
  
</div>


<div class="course">
  <div><img src="images/pc.jpg"><h2>Web Developement</h2><p>You can learn web developement <br>from this website.</p></div>
  <div><img src="images/pc1.jpg"><h2>Web Design</h2><p>You can learn web design <br>from this website.</p></div>
  <div><img src="images/pc2.jpg"><h2>Website Developer</h2><p>You can learn website developement <br>from this website.</p></div>
  <div><img src="images/pc3.jpg"><h2>Graphic Design</h2><p>You can learn Graphic Design <br>from this website.</p></div>
  <div><img src="images/pc4.jpg"><h2>Php Developement</h2><p>You can learn Php developement <br>from this website.</p></div>
  <div><img src="images/pc5.jpg"><h2>java Developement</h2><p>You can learn Java developement <br>from this website.</p></div>
  <div><img src="images/pc6.jpg"><h2>Photography</h2><p>You can learn Photography & Photoshop <br>from this website.</p></div>
  <div><img src="images/pc7.jpg"><h2>Apps Interface</h2><p>You can learn web developement <br>from this website.</p></div>
</div><br><br>

<div class="contact_me">
  <h1 class="project_title">Have a project on your mind ??</h1>
  <p class="project_subject">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic<br> country, in which roasted parts of sentences fly.</p>
<div class="contact_button">
  <a href="contactus.php" class="button">Contact me</a>
</div>
<br><br><br><br>

  
</div>


</body>
</html>
<?php
 include "Result/footer.php";
?>
