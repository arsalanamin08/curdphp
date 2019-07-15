<?php
	include 'conn.php';
	if (isset($_POST['done']))
	{
		if(isset($_POST['firstname']) && $_POST['firstname'] !='')
		{
			$firstname=$_POST['firstname'];
		}
		elseif(isset($_POST['lastname']) && $_POST['lastname'] !='')
		{
			$firstname=$_POST['lastname'];
		}
		elseif(isset($_POST['address']) && $_POST['address'] !='')
		{
			$address=$_POST['address'];
		}
		elseif(isset($_POST['contact']) && $_POST['contact'] !='')
		{
			$contact=$_POST['contact'];
		}
		$id=$_GET['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$q="update records set id=$id, firstname='$firstname', lastname='$lastname', address='$address', contact='$contact' where id=$id";
		$query=mysqli_query($con,$q);
	}
	elseif (isset($_POST['done2']))
	{
		header('location:display.php');
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
	<div class="col-lg-6 m-auto"><br><div class="col-lg-3 m-auto"><a href="login.php" class="text-white"><button class="btn btn-outline-danger col-lg-12">Logout</button></a></div><br>
		<form method="post">
			<div class="card">
				<div class="card-header bg-warning">
					<h1 class="text-black text-center">
						Update
					</h1>
				</div><br>
				<label>
					Firstname:
				</label>
				<input type="text" name="firstname" class="form-control" value="<?php if(isset($_POST['firstname'])) echo trim($_POST['firstname']);?>" required><br>
				<label>
					Lastname:
				</label>
				<input type="text" name="lastname" class="form-control" value="<?php if(isset($_POST['lastname'])) echo trim($_POST['lastname']);?>" required><br>
				<label>
					Address:
				</label>
				<input type="text" name="address" class="form-control" value="<?php if(isset($_POST['address'])) echo trim($_POST['address']);?>" required><br>
				<label>
					Contact:
				</label>
				<input type="text" name="contact" class="form-control" value="<?php if(isset($_POST['contact'])) echo trim($_POST['contact']);?>" required><br>
				<button class="btn btn-outline-primary" type="submit" name="done">
					Update
				</button>
				<h1 class="text-center text-danger">
					<?php
						if (isset($_POST['done']))
							{
								echo "Record updated successfully!";
							}
					?>
				</h1>
			</div>
		</form>
		<div>
			<form method="post">
				<button class="btn btn-outline-success col-lg-12" type="submit" name="done2">View updated records</button><br><br>
			</form>
		</div>
	</div>
</body>
</html>