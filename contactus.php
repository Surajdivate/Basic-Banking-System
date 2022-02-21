<html>
	<head>
	    <link rel="icon" type="image/x-icon" href="logo.png">
		<title>Contact Us</title>
		
	</head>
	<style>
		body {
			overflow-x: hidden; /* Hide scrollbars */
		}
		.img{
			position:relative;
			right:0;
			left:0;
		}
		.left-col{
			display: block;
			box-shadow: 0 8px 24px rgb(149 157 165 / 50%);
			border-radius:20px;
		}
	</style>
	</body>
	<?php
		include 'config.php';
		if(isset($_POST['submit']))
		{
			$contactname = $_POST['contactname'];
			$contactemail = $_POST['contactemail'];
			$contactphone = $_POST['contactphone'];
			$contactfeed = $_POST['contactfeed'];
			
			$sql = "INSERT into contact(`name`, `email`, `phone`, `feedback`) values('$contactname' ,'$contactemail', '$contactphone', '$contactfeed')";
			$query = mysqli_query($conn, $sql);
			if($query)
			{
				echo "
					<script type='text/javascript'>
					alert('Thank You for your valuable feedback');
					window.location='index.php';
					</script>
				";
			}
		}
		
	?>
		<?php include 'navigation.php' ?>
		<div class="container">
			<div class="row py-3">
				<div class="left-col col-lg-6 col-md-6 col-12 py-3">
					<h1 style="font-size:45px;" class="center pt-5">Contact/ Feedback Form</h1>
					<p>Contact us for queries and send your valuable feedback for our improvement.</p>
					<form class="tabletext py-3" method="POST" name="contactform">
						<label>Name</label>
						<input type="text" class="form-control" name="contactname" style="width:100%;"required>
						<br>
						<label>Email Id</label>
						<input type="text" class="form-control" name="contactemail" style="width:100%;" required>
						<br>
						<label>Phone Number (optional)</label>
						<input type="tel" pattern="[0-9]{10}" class="form-control" name="contactphone" style="width:100%;" >
						<br>
						<label>Queries/ Feedback</label>
						<textarea class="form-control" name="contactfeed" style="width:100%;" required></textarea>
						<br><br>
						<button class="btn btn-success" name="submit">Submit</button>
					
					</form>
				</div>
				
				<div class="col col-lg-6 col-md-6 col-12 my-auto">
					<img class="img-fluid aboutimg px-3" src="contact.gif">
				</div>
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
<html>