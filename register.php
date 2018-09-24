<?php

//Creating a Connection
$conn = mysqli_connect('localhost','root','','personaldiary');

//If the Connection does not work
if(!$conn)
{
	die("Connection Error" .$mysqli_connect_error());
}


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
            <div class="line text-center text-info" style="color: purple;">        
              
			  <p>Please Enter the Details Here</p><br>
			  
				<div class="text-info" style=" border-style:double; border-width:9px; color: purple;"><br>
				
					<form action="" method="post">
						
								<h1 class="text-info" style="color: purple;">Your Name</h1><input type="text" name="name"></input><br><br>
								
								<h1 class="text-info" style="color: purple;">Your UserName</h1><input type="text" name="username"></input><br><br>
								
								
								
								
							   
							   <h1 class="text-info" style="color: purple;">Your Email</h1><input style="width:250px;" type="email" name="email"></input><br><br>
							   
							   <h1 class="text-info" style="color: purple;">Your New Password</h1><input type="password"  name="password"></input><br><br>
								
								<h1 class="text-info" style="color: purple;">Confirm Your Password</h1><input type="password"  name="confirmpassword"></input><br><br>
							   
							   
							   
						
						
						<br><br><input class="text-info" style="color: purple;" type="submit" value="Submit Details" name="submit"></input>
						
					</form>
					<br>
				
				</div>
			  
			  <?php
			  
				if(isset($_REQUEST['submit']))
				{
					
					$name = $_POST['name'];
					$username = $_POST['username'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$confirmpassword = $_POST['confirmpassword'];
					
					
					$sqlregister = "INSERT INTO registration(name, username, email, password) values('$name', '$username', '$email', '$password')";
					
					if($name=="" || $username=="" || $email=="" || $password=="" || $confirmpassword=="")
					{
						echo "<script>alert('Please Enter every detail!');</script>";
					}
					
					else if($password!=$confirmpassword)
					{
							echo "<script>alert('Passwords does not match!');</script>";
					}					
					else
					{
						
						if(mysqli_query($conn, $sqlregister))
						{
							echo "<br>Registered to the Database Successfully!";
						}
						else
						{
							echo "Error: " .mysqli_connect_error();
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