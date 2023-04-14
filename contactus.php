
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

<?php
 include "header.php";
 include "Result/slider.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>contact us</title>
	<style type="text/css">
    
    *{
    font-family: poppins;
    box-sizing: border-box;
    text-decoration: none;
}

body{
    margin: 0%;
    
}

h1{
	text-align: center;
	align-items: center;
	margin-top: 30px;
	font-size: 33px;
    font-weight: bold;
}
.conversation{
	margin:50px 0px 0px 0px;
	background: #3099a1;

}
.conversation p{
	font-size: 30px;
	margin:0px 0px 0px 40px;
}
.form{
    width: 500px;
    height: 370px;
    margin: 0px 0px 0px 0px;
    background: #3099a1;
}
input[type="text"]{
    width: 400px;
    height: 40px;
    background-color: #3099a1;
    font-size: 19px;
    color: black;
    margin:20px 0px 0px 30px;
    border-radius: none;
}
::-webkit-input-placeholder{
    font-size: 19px;
    color: black;
}
input[type="email"]{
    width: 400px;
    height: 40px;
    background-color: #3099a1;
    font-size: 19px;
    color: white;
    margin:20px 0px 0px 30px;
    border-radius: none;
}
.textarea{
     width: 400px;
    height: 100px;
    background-color: #3099a1;
    font-size: 19px;
    color: black;
    resize: none;
    margin:20px 0px 0px 30px;
    border:1px solid black;

}
input[type="submit"]{
    width: 120px;
    height: 40px;
    background-color: #3099a1;
    font-size: 19px;
    color: black;
    margin:20px 0px 0px 160px;
    border-radius: none;
    box-shadow: 2px 2px 0px black;

}
input[type="submit"]:active{
    box-shadow: 0px 0px 0px #3099a1;
    transition: active 2s;
}
.conversation img{
	width: 670px;
	height: 365px;
	margin: -365px 0px 0px 550px;
}

</style>
</head>
<body>


<h1>Let's Start a Conversation</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.9337621567!2d80.80242503190256!3d26.848929330925085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1680193752509!5m2!1sen!2sin" width="1220" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<div class="conversation">
	
    <div class="form">
    	<p>Ask How We Can Help You :</p>
        <form method="post" autocomplete="off">
            <table>
                <tr>
                    <td><input type="text" name="name" placeholder="Your Name..."></td>
                </tr>
                 <tr>
                    <td><input type="email" name="email" placeholder="Your Email..."></td>
                </tr>
                <tr>
                <td><textarea class="textarea" placeholder="Write Query....." name="message"></textarea>
                </td></tr>
                 <tr>
                    <td><input type="submit" name="submit" value="send message"></td>
                </tr>
            </table>
            
        </form>
        
    </div>
	<img src="images/conversation.jpg">
</div>
</body>
</html>

<?php
 include "Result/footer.php";
?>