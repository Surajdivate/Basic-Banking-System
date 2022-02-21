<html>
	<head>
	<link rel="icon" type="image/x-icon" href="logo.png">
		<title>Customer Details</title>
	</head>
	<body>
		<?php include 'navigation.php'; ?>
		<h1 class="pt-5" align="center"> Customer Details</h1>
		<p align="center">Here are the details of the valuable customers of SD bank. Be one of them today :)</p>
		<div class="container text-center py-5">
			<div  class="table-responsive-sm">
				<table class="table table-hover table-striped table-condensed table-bordered" >
					<thead>
						<tr align="center">
							<th>Account No.</th>
							<th>Name</th>
							<th>Email Id</th>
							<th>Balance</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include 'config.php';
							$sql = "SELECT * from users";
							$query = mysqli_query($conn, $sql);
							while($rows = mysqli_fetch_assoc($query)){
						?>
							<tr align="center">
								<td><?php echo $rows['id']; ?></td>
								<td><?php echo $rows['name']; ?></td>
								<td><?php echo $rows['email']; ?></td>
								<td><?php echo $rows['balance']; ?></td>
							</tr>
						<?php
							}
						?>
					<tbody>
				</table>
			</div>
		</div>
		
		<?php include 'footer.php'; ?>
	</body>
</html>