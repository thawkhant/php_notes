
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body style="background: #ccc;"> 

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
						<h3>Register</h3>
						<form method="POST">

					<div class="mb-3">
						<label for="">Name</label>
						<input type="text" name="name" class="form-control">
					</div>

					<div class="mb-3">
						<label for="">Email</label>
						<input type="email" name="email" class="form-control">
					</div>

					<div class="mb-3">
						<label for="">Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<div class="mb-3">
						<label for="">Confirm Password</label>
						<input type="password" name="confirmpassword" class="form-control">
					</div>

					<button type="submit" class="btn bg-dark text-white float-end" name="register">Register</button>

				</form>
					</div>
				</div>
			</div>
		</div>
	</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>



   <?php

   	session_start();

   	function checkStrongPassword($password){
     
    // echo "$password";

    $upperStatus = false;
    $lowerStatus = false;
    $numberStatus = false;
    $specialStatus = false;

    if(preg_match('/[A-Z]/',$password)){
    	$upperStatus = true;
    }


    if(preg_match('/[a-z]/',$password)){
    	$lowerStatus = true;
    }


    if(preg_match('/[0-9]/',$password)){
    	$numberStatus = true;
    }


    if(preg_match('/[!@#$%&*~`]/',$password)){
    	$specialStatus = true;
    }

    if($upperStatus === true && $lowerStatus === true && $numberStatus === true && $specialStatus === true){
    	// echo "Strong Password";

    	return true;
    }else{
    	// echo "Weak Password";

    	return false;
    }

   	}


   //	checkStrongPassword("p@SS0");



   
    if (isset($_POST['register'])){
    	$name = $_POST['name'];
    	$email = $_POST['email'];
    	$password = $_POST['password'];
    	$confirmpassword = $_POST['confirmpassword'];


    	if($name != "" && $email != "" && $password != "" && $confirmpassword != ""){
    		// echo strlen($password);  // tocheck user input

    	if(strlen($password) >= 6 && strlen($confirmpassword) >= 6){
          
          if($password === $confirmpassword){

            $status = checkStrongPassword($password);
          //  var_dump($status);

             if($status){

              $_SESSION['email']  = $email;
               $_SESSION['password'] = password_hash($password,PASSWORD_BCRYPT);

               echo "Register Successfully!";
           }else{
           	echo "Your Password is not Strong Pasword!(eg.contain A~Z a~z 0~9 !@##$)";
           }

          }else{
          	echo "Password not same . Type Again!";
          }

    	}else{
    		echo "Password must be longer than 6";
    	}

    }else{
      echo "Need to fiil ";
    }


    };
  
   ?>

</body>
</html>