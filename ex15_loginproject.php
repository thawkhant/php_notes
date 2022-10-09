
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body style="background:#ccc;"> 

	<div class="container mt-4">
		<div class="row">
			<div class="col-4">
				<div class="text-center">
					<a href="ex15_loginproject.php">
						<button class="btn btn-primary text-white mb-3" style="width:200px;">Login</button>
					</a>
				</div>

				<div class="text-center">
					<a href="ex15_register.php">
						<button class="btn btn-success text-white mb-3" style="width:200px;">Register</button>
					</a>
				</div>

				<div class="text-center">
					<a href="ex15_logout.php">
						<button class="btn btn-danger text-white mb-3" style="width:200px;">Logout</button>
					</a>
				</div>
			</div>

			<div class="col-5">
				<div class="card">
					<div class="card-body">
						<form method="POST">

					<div class="mb-3">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control">
					</div>

					<div class="mb-3">
						<label for="">Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<button type="submit" class="btn bg-dark text-white float-end"  name="login">Login</button>

				</form>
					</div>
				</div>
			</div>
		</div>
	</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
<?php
   session_start();
  if(isset($_POST['login'])){
	$userEmail = $_POST['email'];
	$userPassword = $_POST['password'];

	// echo $userEmail;
	// echo $userPassword;


	


	if($userEmail != "" || $userPassword != ""){
		if($userEmail == $_SESSION['email'] && password_verify($userPassword, $_SESSION['password'])){
			echo "Welcome You login Successfully";
		}else{
			echo "Login Fail! Try Again...";
		}
	}else{
		echo "Need to fill informations";
	}

  }

?>

</body>
</html>
