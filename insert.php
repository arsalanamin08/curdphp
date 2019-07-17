<?php
	session_start();
	if ($_SESSION['rows'] == 1)
	{
	include 'conn.php';
	if (isset($_POST['done']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$q="INSERT INTO `records`(`firstname`, `lastname`, `address`, `contact`) VALUES ('$firstname','$lastname','$address','$contact')";
		$query=mysqli_query($con,$q);
	}
	elseif (isset($_POST['done2']))
	{
		header('location:display.php');
	}
	}
	else
	{
		header("Location: login.php");
	}
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
	<div class="col-lg-6 m-auto"><br><div class="col-lg-3 m-auto"><a href="logout.php" class="text-white"><button class="btn btn-outline-danger col-lg-12">Logout</button></a></div><br>
		<form method="post">
			<div class="card">
				<div class="card-header bg-warning">
					<h1 class="text-black text-center">
						Add New Record
					</h1>
				</div><br>
				<label>
					Firstname:
				</label>
				<input type="text" name="firstname" class="form-control" required><br>
				<label>
					lastname:
				</label>
				<input type="text" name="lastname" class="form-control" required><br>
				<label>
					Address:
				</label>
				<input type="text" name="address" class="form-control" required><br>
				<label>
					Contact:
				</label>
				<input type="text" name="contact" class="form-control" required><br>
				<button class="btn btn-outline-success" type="submit" name="done">Submit</button>
				<h1 class="text-center text-danger">
					<?php
						if (isset($_POST['done']))
							{
								echo "Record added successfully!";
							}
					?>
				</h1>
			</div>
		</form>
		<div>
			<form method="post">
				<button class="btn btn-outline-primary col-lg-12" type="submit" name="done2">View records</button><br><br>
			</form>
		</div>
	</div>
</body>
</html>