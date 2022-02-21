<html>
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--font awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<!--bootstrap 5 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	
	<style>

		#navbar {
			margin-bottom: 30px;
		}
		#icon{
			display: inline-block;
			font-weight: 500;	
			padding: 12px 15px;
			font-size: 18px;
			position: relative;
		}
		#navbarSupportedContent ul li {
			margin: 4px;
			padding: 2px;
			font-size: 1.1rem;
			font-weight: 500;
		}
		#navbarSupportedContent ul li::after {
			content: '';
			width: 0%;
			height: 2px;
			background: rgb(254, 252, 252);
			display: block;
			margin: auto;
			transition: 0.5s;
		}
		#navbarSupportedContent ul li:hover:after {
			width: 100%;
		}
		@media screen and (min-width: 768px) {
			#navbarSupportedContent ul li {
				line-height: 1rem;
			}
			#navbarSupportedContent ul li:hover:after {
				width: 0;
			}
		}
		@media screen and (max-width: 991px) {
			#navbarSupportedContent ul li {
				line-height: 1rem;
			}
			#navbarSupportedContent ul li:hover:after {
				width: 0%;
			}
		}
		
		
		
	</style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                  <a class="navbar-brand" href="index.php" id="icon">
					<img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					SURAJ DIVATE BANK
				  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto">
					
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">HOME<span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="payement.php">PAYEMENT</a>
							<ul class="dropdown-menu" >
								<li><a class="dropdown-item" href="payment.php">TRANSFER MONEY</a></li>
								<li><a class="dropdown-item" href="tranhis.php">TRANSACTION HISTORY</a></li>
							</ul>
						</li>
					
						<li class="nav-item">
							<a class="nav-link active" href="customer.php">CUSTOMERS</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link active" href="contactus.php">CONTACT US</a>
						</li>
					</ul>
				</div>	
			</div>
		</nav>
				
		<!--javascript bootstrap-->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/
		core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      
    </body>
</html>
