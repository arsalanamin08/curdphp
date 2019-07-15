<?php
	include 'conn.php';
	$q="select * from records";
	$query=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="col-lg-12"><br><br>
		<h1 class="text-primary text-center">PHONE BOOK</h1><br>
		<div class="col-lg-12 text-center">
			<a href="login.php" class="text-white"><button class="btn btn-outline-danger col-lg-2">Logout</button></a><br><br>
			<a href="insert.php" class="text-white"><button class="btn btn-outline-success col-lg-2">Add new record</button></a><br><br>
		</div>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="bg-warning text-black text-center">
				<th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Address</th>
				<th>Contact</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
			<?php
				include 'conn.php';
				$q="select * from records";
				$query=mysqli_query($con,$q);
				while ($res=mysqli_fetch_array($query))
				{
			?>
			<tr class="text-center">
				<td><?php echo $res['id'];?></td>
				<td><?php echo $res['firstname'];?></td>
				<td><?php echo $res['lastname'];?></td>
				<td><?php echo $res['address'];?></td>
				<td><?php echo $res['contact'];?></td>
				<td><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-outline-danger">Delete</button></a></td>
				<td><a href="update.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-outline-primary">Update</button></a></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
	</div>
</body>
</html>