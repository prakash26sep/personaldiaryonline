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
		
					.fancy {
			  text-align: center;

			  /* Same trick as previsouly used to make circles */
			  box-sizing: border-box;
			  width     : 300px;
			  height    : 300px;
			  padding   : 80px 1em 0 1em;

			  /* We make room for the "ears" of our cloud */
			  margin    : 0 100px;

			  position: relative;

			  background-color: #A4C9CF;

			  /* Well, actually we are not making a full circle
				 as we want the bottom of our cloud to be flat.
				 Feel free to tweak this example to make a cloud
				 that isn't flat at the bottom ;) */
			  border-radius: 100% 100% 0 0;
			}

			/* Those are common style that apply to both our ::before
			   and ::after pseudo elements. */
			.fancy::before,
			.fancy::after {
			  /* This is required to be allowed to display the
				 pseudo-elements, event if the value is an empty
				 string */
			  content: '';

			  /* We positionnate our pseudo-elements on the left and
				 right sides of the box, but always at the bottom */
			  position: absolute;
			  bottom  : 0;

			  /* This makes sure our pseudo-elements will be below
				 the box content whatever happens. */
			  z-index : -1;

			  background-color: #A4C9CF;
			  border-radius: 100%;
			}

			.fancy::before {
			  /* This is the  size of the clouds left ear */
			  width  : 125px;
			  height : 125px;

			  /* We sligthly move it to the left */
			  left    : -80px;

			  /* To make sure that the bottom of the cloud
				 remains flat, we must make the bottom right
				 corner of the left ear square. */
			  border-bottom-right-radius: 0;
			}

			.fancy::after {
			  /* This is the size of the clouds left ear */
			  width  : 100px;
			  height : 100px;

			  /* We sligthly move it to the right */
			  right   : -60px;

			  /* To make sure that the bottom of the cloud
				 remains flat, we must make the bottom left
				 corner of the right ear square. */
			  border-bottom-left-radius: 0;
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
				   
              
			  <center>
			  <br><br><br>
			  <p>Diary Entry</p><br>
			 
			  <!-- Learn about this code on MDN: https://developer.mozilla.org/en-US/docs/Learn/CSS/Howto/create_fancy_boxes -->

				<div class="fancy">Hi! I want to be fancy.</div>
				<br><br>
			
			</center>
            
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