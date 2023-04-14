<?php
error_reporting(0);
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  margin-top: 70px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 14px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
h2 {
	color: white;
	padding: 3px 0px 0px 20px;
  font-size: 22px;
}
h3{
  color: white;
  text-align: center;
  align-items: center;
}
h4 {
  color: white;
  padding: 0px 0px 0px 10px;
}
.admin_logo{
  width: 100px;
  height: 100px;
  border-radius: 60%;
  padding:0px 0px;
  margin:0px 0px 0px 40px;
}


	</style>
</head>
<body>

<div class="sidenav">
  <img src="admin logo.png" class="admin_logo">
  <h3>Welcome, <br>Mr. <?php echo $_SESSION["username"];  ?></h3>
  <a href="dashboard.php"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Dashboard</a>
  <a href="user.php"><i class="fa fa-users"></i>&nbsp;&nbsp;Users</a>
  <a href="contact user.php"><i class="fa fa-phone"></i>&nbsp;&nbsp;Contact</a>
  <a href="#contact"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Gmail</a>
  <a href="#"><i class="fa fa-star" aria-hidden="true"></i>&nbsp;&nbsp;Rating</a>
  <button class="dropdown-btn">Pages
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="login.php">Login&nbsp;&nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i></a>
    <a href="register.php">Register&nbsp;&nbsp;<i class="fa fa-user-plus" aria-hidden="true"></i></a>
    <a href="404 error.php">404 Error&nbsp;&nbsp;<i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
  </div><br><br>
  <h2>Diploma</h2>
  <button class="dropdown-btn">Electrical
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="ee 1st sem.php">1st semester</a>
    <a href="ee 2nd sem.php">2nd semester</a>
    <a href="ee 3rd sem.php">3rd semester</a>
    <a href="ee 4th sem.php">4th semester</a>
    <a href="ee 5th sem.php">5th semester</a>
    <a href="ee 6th sem.php">6th semester</a>
  </div>

  <button class="dropdown-btn">Computer
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="cs 1st sem.php">1st semester</a>
    <a href="cs 2nd sem.php">2nd semester</a>
    <a href="cs 3rd sem.php">3rd semester</a>
    <a href="cs 4th sem.php">4th semester</a>
    <a href="cs 5th sem.php">5th semester</a>
    <a href="cs 6th sem.php">6th semester</a>
  </div>

  <button class="dropdown-btn">Civil
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="ce 1st sem.php">1st semester</a>
    <a href="ce 2nd sem.php">2nd semester</a>
    <a href="ce 3rd sem.php">3rd semester</a>
    <a href="ce 4th sem.php">4th semester</a>
    <a href="ce 5th sem.php">5th semester</a>
    <a href="ce 6th sem.php">6th semester</a>
  </div>

  <button class="dropdown-btn">Mechanical
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="me 1st sem.php">1st semester</a>
    <a href="me 2nd sem.php">2nd semester</a>
    <a href="me 3rd sem.php">3rd semester</a>
    <a href="me 4th sem.php">4th semester</a>
    <a href="me 5th sem.php">5th semester</a>
    <a href="me 6th sem.php">6th semester</a>
  </div><br>


  <h2>Settings</h2>
  <a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;Profile</a>
  <a href="logout.php"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;Logout</a>
 
<br><br><br><br><br>

  
</div>
</body>
<script type="text/javascript">
	//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</html>