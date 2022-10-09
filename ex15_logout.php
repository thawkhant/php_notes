
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log Out</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
				
					 <div class="alert alert-success text-center" role="alert">
                    <span class="h5"> <b><i class="fa-solid fa-check"></i></b> You logout successfully!</span>
                    </div>
			</div>
		</div>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <?php
    session_start();
	
	session_destroy();
  ?>

</body>
</html>