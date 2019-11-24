<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
  <html>
    <head>
	    <title>Home</title>
	    <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    
        </div>
        <div class="topnav" id="myTopnav">
          <a href="#home" >Home</a>
          <div class="dropdown">
          <button class="dropbtn">Database 
            <i class="fa fa-caret-down"></i>
          </button>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
        </div> 
          <a href="#contact">Contact</a>
        <li style="float:right"><?php  if (isset($_SESSION['username'])) : ?><a class="active" href="index.php?logout='1'">Logout</a><?php endif ?>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

        <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="error success" >
            <h3>
              <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
              ?>
            </h3>
          </div>
        <?php endif ?>
    	

        <script>
          function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
              x.className += " responsive";
            } else {
              x.className = "topnav";
            }
          }
      </script>


    

		
</body>
</html>