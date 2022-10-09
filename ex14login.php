<!DOCTYPE html>
<html>
<head>
	<title>Login Procress</title>
</head>
<body>
	<h3>Login Form</h3>

	<form method="POST">
		<label>Email</label> <input type="email" name="userEmail" /><br/>
		<label>Password</label> <input type="password" name="userPassword" /><br/>
		<input type="submit" name="loginBtn" value="Login">
	</form>

	<?php
       
       $email = "admin@gmail.com";
       // $password = "admin123";
        $password = '$2y$10$cMI9LtqDtFbMwQhdgg69h.aGWR8NQIjCTUane96BA0IBe8id/xlXq';
     //  $hashPassword = password_hash('admin123',PASSWORD_BCRYPT);
     //  echo $password . "<br/>";
     //  echo $hashPassword . "<br/>";

      // var_dump( password_verify($password,$hashPassword));   // password check dar

       if(isset($_POST['loginBtn'])){
     
       	$userEmail = $_POST['userEmail'];
       	$userPassword = $_POST['userPassword'];

       // 	echo $userEmail . $userPassword;

           // if($email === $userEmail && $password === $userPassword){     // normal standard
           // 	echo "<h3 style='color:green'>Login Success</h3>";
           // }else{
           // 	echo "Login Fail! Try Again";
           // }


           if($email === $userEmail &&  password_verify($userPassword, $password)){
           	echo "<h3 style='color:green'>Login Success</h3>";
           }else{
           	echo "Login Fail! Try Again";
           }


       }

	?>
</body>
</html>