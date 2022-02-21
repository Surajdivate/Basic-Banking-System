<!Doctype html>
<html>
  <head>
  <link rel="icon" type="image/x-icon" href="logo.png">
      <title> Homepage </title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  </head>
  <style>
	#heading{
		font-family: 'Mochiy Pop P One', sans-serif;
		font-size:50px;
		color:black;
		text-shadow: 2px 2px 8px #6b6b47;
	}

	.fab {
		font-size: 10px;
		margin: 0 5px 0 5px;
		color:black;
	}
	
	#socialIcons{
		font-size:2rem;
		color:#198754;
		text-decoration:none;
		transition:0.5s;
	}
	
	#socialIcons:hover{
		color:black;
	}
	
	#letsConnect{
		vertialign:center;
	}
		
  </style>
  <body>

    <?php 
		include 'navigation.php'; 
	?>


	<section class="my-6 ">
        <div class="container-fluid py-3" >
          <div class="row" >
            <div class=" col-lg-6 col-md-6 col-12 py-5 my-auto">
              <img src="background.gif" class="img-fluid aboutimg py-7 my-auto" id="logo">
            </div>
            <div class="col-lg-6 col-md-6 col-12 py-3 ">
              <h2 class="display-1 py-5" id="heading"> Life Is Easy With <br>SD Bank...!</h2>
			  
				<p class="py-0"> 	We at Suraj Divate Bank have developed this basic banking system. This a user friendly banking system where user can transfer money to the customers of bank. Join the digital revolution with Suraj Divate Bank today.</p>
				
				<a href="payment.php" class="btn btn-success"> Transfer Money</a> <a href="tranhis.php" class="btn btn-success"> Transaction History</a><br><br>
				
				<p class="py-1">  Hello Friends I am Suraj Divate an Computer Science aspirant. Special Thanks to The Sparks Foundation for assigning such task for Web Development Interns 2022. <br>
				<div id="container">
				<div class="vertical-center"><b>LET'S CONNECT ! -> </b>
				<a id="socialIcons" href="https://www.linkedin.com/in/suraj-divate-6560201b2/" class="fab fa-linkedin"></a>
				
				<a id="socialIcons" href="https://github.com/Surajdivate" class="fab fa-github"></a></p>
				</div>
			</div>
          </div>
        </div>
    </section>
	<br>
	<br>


	<?php
		include 'footer.php';
	?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
