


<html>
<head>
<title>Index</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fasthand&display=swap" rel="stylesheet">

<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

<style type="text/css">
    
    *{
    font-family: poppins;
    box-sizing: border-box;
    text-decoration: none;
}

body{
    margin: 0%;
    background:url(bg.jpg)no-repeat; 
    background-size: 1260px auto; 
}

section.section-1,section.section-2{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: black;
}
.logo img{
    width: 120px;
    height: 70px;
}

div.block-1{
    display: flex;
    align-items: center;
}

div.block-1 div:first-child{
    margin-right: 40px;
}

div.phone-apointment{
    display: flex;
    align-items: center;
}

div.social-btn ul li i{
    font-size: 22px;
    margin: 10px 7px;
    color: dimgray;
}

div.social-btn ul li i:hover{
    color: steelblue;
}

ul{
    list-style: none;
    padding: 0;
    margin: 0;
    cursor: default;
}

li{
    display: inline-block;
}

div.phone-number{
    font-size: 18px;
    padding: 5px 10px;
    border: 1px solid red;
    border-radius: 20px;
    background-color: white;
}

div.phone-number i{
    transform: rotateY(180deg);
}

div.appointment button{
    border: none;
    background-color: #211163;
    font-size: 18px;
    color: white;
    padding: 10px 12px;
    border-radius: 30px;
    outline: none;
    margin: 0px 15px;
    transition: box-shadow 0.5s;
}

div.appointment button:hover{
    box-shadow: 0px 0px 15px white;
}

nav{
    background-color: #211163;
}

nav ul{
    text-align: center;
}

nav li{
    text-align: center;
}

nav ul li a{
    font-size: 18px;
    display: block;
    color: white;
    padding: 8px 10px;
    margin: 0px 5px;
    font-weight: 500;
    border-top: 4px solid transparent;    
    border-bottom: 4px solid transparent;
    border-radius: 2px;
    transition-property: border-bottom,background-color;
    transition-duration: 0.4s;
}

nav ul li a:hover{
    background-color: black;
    border-bottom: 4px solid white;
}
#toggle{
    display: none;
}

#toggle-btn{
    display: none;
    text-align: right;
}

#toggle-btn i{
    font-size: 25px;
    padding: 7px;
    background-color: white;
    margin: 10px;
    border-radius: 5px;
    cursor: pointer;
}
.logo{
    font-family: 'Fasthand', cursive;
  background: -webkit-linear-gradient(red, green, blue, pink);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: bold;
  font-size: 23px;


}
.logo:hover{
    transition: 4s;
    font-family: 'Fasthand', cursive;
  background: -webkit-linear-gradient(green, blue, red);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;

}



























@media screen and (min-width: 500px) and (max-width: 768px)
{
    
    body{
        background:url(.jpg)no-repeat;
        background-size: 765px 800px; 
       
    }
section.section-1{
    font-size: 14px;
    flex-direction: column;
}

div.block-1{
    flex-direction: row;
}

div.block-1 div:first-child{
    margin-right: 40px;
}

div.social-btn ul li i{
    font-size: 14px;
}

section.section-2{
    flex-direction: column;
    padding-bottom: 12px;
}

div.phone-number{
    font-size: 12px;
}

div.appointment button{
    font-size: 12px;
}

#toggle-btn{
    display: block;
}

#toggle-btn i{
    font-size: 20px;
    padding: 8px;
}

nav > ul{
    display: none;
}

#toggle:checked + ul{
    display: block;
}

nav ul li{
    display: block;
    text-align: left;
}

nav ul li a{
    font-size: 14px;
}    
 }

@media screen and (max-width: 500px)
{
   body{
      background:url(i2.jpg)no-repeat;
        background-size: 500px 850px; 

    }
section.section-1{
    font-size: 14px;
}

div.block-1{
    flex-direction: column;
}

div.block-1 div:first-child{
    margin-right: 0px;
}

div.social-btn ul li i{
    font-size: 14px;
}

section.section-2{
    flex-direction: column;
    padding-bottom: 12px;
}

div.phone-number{
    font-size: 16px;
}

div.appointment button{
    font-size: 14px;
}

#toggle-btn{
    display: block;
}

nav > ul{
    display: none;
}

#toggle:checked + ul{
    display: block;
}

nav ul li{
    display: block;
    text-align: left;
}


nav ul li a{
    font-size: 16px;
}
}




</style>

</head>
<body>

<header>
    
    <section class="section-2">
        <div class="logo">Tech Carnival<br>&nbsp;&nbsp;&nbsp;2k23</div>
        <div class="phone-apointment">
            <div class="phone-number"><i class="fas fa-phone"></i>+91 75258 18779</div>
            <div class="appointment"><button type="button">successed150@gmail.com</button></div>
        </div>
    </section>

    <nav>

        <div id="toggle-btn">
            <label for="toggle">
                <i class="fas fa-bars"></i>
            </label>   
        </div>

        <input type="checkbox" id="toggle">
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i> HOME</a></li>
            <li><a href="index.php"><i class="fas fa-medkit"></i> SERVICES</a></li>
            <li><a href="index.php"><i class="fa fa-clone" aria-hidden="true"></i> RESULT</a></li>
            <li><a href="index.php"><i class="fa fa-sticky-note" aria-hidden="true"></i> PREV PAPER</a></li>
            <li><a href="index.php"><i class="fas fa-address-book"></i> CONTACT US</a></li>
            <li><a href="index.php"><i class="fas fa-question-circle"></i> ABOUT US</a></li>
        </ul>
    </nav>

</header>

</body>
</div>
</html>