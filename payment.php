<html>
	<head>
	<link rel="icon" type="image/x-icon" href="logo.png">
		<title>Transfer Money</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	</head>
	
	<style>
	.left-col{
			display: block;
			box-shadow: 0 8px 24px rgb(149 157 165 / 50%);
			border-radius:20px;
		}
	</style>
	
	<body>
	
	<?php
		include 'config.php';
		
		if(isset($_POST['submit']))
		{
			$from = $_POST['from'];
			$to = $_POST['to'];
			$amount = $_POST['amount'];
			
			$sql = "SELECT * from users where id='$from'";
			$query = mysqli_query($conn, $sql);
			$sql1 = mysqli_fetch_array($query);
			
			$sql = "SELECT * from users where id='$to'";
			$query = mysqli_query($conn, $sql);
			$sql2 = mysqli_fetch_array($query);
			
			if(($amount) < 0){
				echo "<script type='text/javascript'>";
				echo "alert('Oops! Zero value cannot be transferred')";
				echo "</script>";
			}
			else if($amount > $sql1['balance']){
				echo "<script type='text/javascript'>";
				echo "alert('Oops! Insufficient Balance')";
				echo "</script>";
			}
			else if($amount == 0){
				echo "<script type='text/javascript'>";
				echo "alert('Oops! Amount cannot be zero')";
				echo "</script>";
			}
			else if($from == $to){
				echo "<script type='text/javascript'>";
				echo "alert('Oops! Sender and Reciever cannot be same')";
				echo "</script>";
			}
			else{
				date_default_timezone_set('Asia/Kolkata');
				//deduting balance from sender account
				$newbalance = $sql1['balance'] - $amount;
				$sql = "UPDATE users set balance=$newbalance where id='$from'";
				mysqli_query($conn, $sql);
				
				//adding balance to reciever account
				$newbalance = $sql2['balance'] + $amount;
				$sql = "UPDATE users set balance=$newbalance where id='$to'";
				mysqli_query($conn, $sql);
				
				$sender=$sql1['name'];
				$reciever=$sql2['name'];
				$sql = "INSERT into transactions(`sender`, `reciever`, `amount`) values ('$sender', '$reciever','$amount')";
				$query = mysqli_query($conn, $sql);
				if($query)
				{
					echo "
					<script type='text/javascript'>;
					alert('Hurray ! Transaction Successful');
					window.location='index.php';
					</script>
					";
				}
			}
		}
	?>
		<?php include 'navigation.php'; ?>
		<div class="pt-5">
			
		</div>
		<div class="container">
			<div class="row">
				<div class="left-col col-lg-6 col-md-6 col-12 py-5">
				<h1 align="center"> TRANSFER MONEY </h1>
				<p align="center">Transfer money from one account to another.</p><br>
				<form method="POST" class="tabletext" name="tcredit">
					<label>FROM</label>
					<select class="form-control mx-auto" name="from" required style="width:100%">
						<option value="" disabled selected >Select</option>
						<?php
							include 'config.php';
							$sql = "SELECT * from users";
							$result = mysqli_query($conn, $sql);
							if(!$result){
								echo "Error" . $sql . "<br>" . mysqli_error($conn);
							}
							while($rows = mysqli_fetch_assoc($result)){
								?>
								<option class="table" value="<?php echo $rows['id']; ?>">
									<?php echo $rows['name']; ?> (Balance:<?php echo $rows['balance']; ?>)
								</option>
							<?php
							}
							?>	
					</select>
					<br>
					<label>TO</label>
					<select name="to" class="form-control mx-auto" style="width:100%;" required>
						<option value="" disabled selected>Select</option>
						
						<?php
							include 'config.php';
							$sql2 = "SELECT * from users";
							$result2 = mysqli_query($conn, $sql2);
							if(!$result2){
								echo "Error" . $sql2 . "<br>" . mysqli_error($conn);
							}
							while($rows2 = mysqli_fetch_assoc($result2)){
								?>
								<option class="table" value="<?php echo $rows2['id'];?>">
									<?php echo $rows2['name']; ?> (Balance: <?php echo $rows2['balance'];?>)
								</option>
								<?php
							}
							?>
					<select>
					<br>
					<label>Enter Amount</label>
					<input type="text" class="form-control mx-auto" name="amount" placeholder="Enter Amount" style="width:100%;" required><br><br>
					<div class="form control text-center">
					<button class="btn btn-success" name="submit" type="submit" id="btn" align="center">Transfer</button>
					</div>
				</form>
				</div>
				<div class="col-lg-6 col-md-6 col-12 py-5 my-auto">
					<img src="payment.gif" class="img-fluid aboutimg" id="logo">
				</div>
			</div>
		</div>
		<br>
		<?php include 'footer.php';?>
	</body>
</html>