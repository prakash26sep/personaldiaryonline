<?php

//Creating a Connection
$conn = mysqli_connect('localhost','root','','personaldiary');

//If the Connection does not work
if(!$conn)
{
	die("Connection Error" .$mysqli_connect_error());
}
session_start();

?>

<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main Site</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>

  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="index.html" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="img/logo.jpg" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="img/logo.jpg" alt="">
            </a>
          </div>
          <div class="s-12 l-10 text-primary" style="color: purple;">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="index.php">Our Site</a></li>
                <li><a href="register.php">Register</a></li>             
                <li><a href="login.php">Login</a></li>
              </ul>
            </div>
          </div>  
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              
			  <center><img style="height:50px; width:100px;"  src="login.png"></img></center>
			  
			  <p>Login Here</p><br>
			  <div class="text-info" style="border-style: double; border-width:9px; color:purple;"><br>
			  
				<form action="" method="post">
					
					<h1 class="text-info" style="color: purple;">Your User Name</h1><input style="width:250px;" type="text" name="username"></input><br><br>
							   
					<h1 class="text-info" style="color: purple;">Your Password</h1><input type="password"  name="loginpassword"></input><br><br>
					
					<br>
					
					<input class="text-info" style="color: purple;" type="submit" value="Login" name="login"></input>
					
				</form>
				<br>
			  </div>
				
			  
			  <?php
			  
				if(isset($_REQUEST['login']))
				{
					
					
					$username= $_POST['username'];
					$loginpassword = $_POST['loginpassword'];
					
					
					
					
					$loginquery = "SELECT * FROM registration where username LIKE '$username' and password LIKE '$loginpassword' ";
					
					$loginresult = mysqli_query($conn, $loginquery);
					
					if($username=="" || $loginpassword=="")
					{
						echo "<br>Please Enter every detail.";
					}
				
					
					else
					{
					
						if(mysqli_num_rows($loginresult)>0)
						{
							$_SESSION[id] = $username;
							//header("Location:home.php");
							echo'<script> window.location = "home.php"; </script>';
						}
						else
						{
							echo "<script>alert('Account Does not Exist')</script>" ;
						}
					}
				  
				}
			  
			  
			  ?>
			  
            </div>  
          </header>
          </article>
	  </main>
	  
	  
      <!-- FOOTER -->
      <footer>
        

        <!-- Main Footer -->
       
        <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.80);">
        
        <!-- Bottom Footer -->
        <section class="padding p-3 mb-2 bg-primary text-white full-width" style="background-color: purple">
          <div class="text-center">
            <p class="text-size-12">Copyright 2018, Prakash Solutions - Ltd.</p>
            <p class="text-size-12">Contact Us for Digital Solutions @ www.prakashsolutions.com</p>
          </div>
        </section>
      </footer>
    </div>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>