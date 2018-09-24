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
  
	<style>
		
		ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
			}
			
			.circle {
			  width: 130px;
			  height: 130px;
			  line-height: 140px;
			  border-radius: 50%; /* the magic */
			  -moz-border-radius: 50%;
			  -webkit-border-radius: 50%;
			  text-align: center;
			  color: white;
			  font-size: 16px;
			  text-transform: uppercase;
			  font-weight: 700;
			  margin: 0 auto 40px;
			}

			.blue {
			  background-color: #3498db;  
			}
			.green {
			  background-color: #16a085;
			}
			.red {
			  background-color: #e74c3c;
			}
		
		
		
	</style>
  
  
  
    <script type="text/javascript">
		function noenter() {
		return !(window.event && window.event.keyCode == 13); }
	</script>
  
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
               <li><a href="home.php">Main</a></li>
                <li><a href="diaryentry.php">Diary Entry</a></li>
				<li><a href="diarycheck.php">Diary Check</a></li>				
                <li><p class="text-info" style="color: red;"><a href="signout.php">Signout</a></p></li>
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
              
			  
			  
			  <h1 style="color: violet;">My Diary</h1><br><br>
			  
			  
				
					
					
					<?php
					
					$showquery = "SELECT  entrydate, entry from $_SESSION[id]";

					$result = mysqli_query($conn, $showquery);
					
						$no =0;
						while ($row = mysqli_fetch_array($result))
						{
							
							$no = $no+1;
							
							
							echo '<div class="text-info" style="border-style: double; background-color: plum; border-width:10px; border-radius: 100px 100px 20px 20px; color:purple;">';
							echo 
									
									
						'<ul style="list-style-type: none";><li>' ."<br>" ."<div style='border-style:double;' class='circle red'>" .$row['entrydate'] ."</div>" .'</li>' .'<li><h2>' .$row['entry'] ."</h2></li></ul><br> ";
									
								
							echo '</div>' .'<br><br>';
							
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