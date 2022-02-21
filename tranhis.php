<html>
	<head>
	<link rel="icon" type="image/x-icon" href="logo.png">
		<title>Transaction History</title>
		
	</head>
	<body>
		<?php include 'navigation.php' ?>
		<h1 class="pt-5" align="center"> TRANSACTION HISTORY </h1>
		<p align="center">Here are the transaction details.<p>
		
		<div class="container text-center py-4">
			<div class="table-responsive-sm">
				<table class="table table-hover table-striped table-condensed table-bordered">
					<thead>
					<tr>
					  <th class="text-center">S.No.</th>
					  <th class="text-center">Sender</th>
					  <th class="text-center">Receiver</th>
					  <th class="text-center">Amount</th>
					  <th class="text-center">Date & Time</th>
					</tr>
					</thead>
					<tbody>
						<?php 
							include 'config.php';
							$sql = "SELECT * from transactions ORDER BY time ASC";
							$query = mysqli_query($conn, $sql);
							
							while($rows = mysqli_fetch_assoc($query)){
						?>
							<tr>
								<td><?php echo $rows['id'] ?></td>
								<td><?php echo $rows['sender'] ?></td>
								<td><?php echo $rows['reciever'] ?></td>
								<td><?php echo $rows['amount'] ?></td>
								<td><?php echo $rows['time'] ?></td>
							</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
			<?php include 'footer.php' ?>
		
	</body>
</html>