<!DOCTYPE html>
<html>
<head>
	<title>Ex 8</title>
</head>
<body>
	
    <h1>Encrypt | Decrypt</h1>
    <hr/>

	<?php  

     $name = "Thaw Khant";  // plain text
     $encName = md5($name);  // encrypt text
     $secName = sha1($name);
     $thirdName = crypt($name,"Po");  // $($name,"salt") // salt phyu dar
     echo $encName;
     echo "<br>";
     echo $secName;
     echo "<br>";
     echo $thirdName;


	?>

	<hr/>

	Password Hash

	<hr/>

	<?php 
 
     $password = "password123";


   // echo password_hash($password, PASSWORD_BCRYPT);    // password_hash("plaintext" , Algorithm)   ** strong  // reload dine change twar dal
   // echo "<br/>";
   // echo password_hash($password,PASSWORD_DEFAULT);   // ** strong

     $hashPassword = password_hash($password, PASSWORD_DEFAULT);
     echo $password;
     echo "<br>";
     echo $hashPassword;
     echo "<br>";
    // var_dump(password_verify($password,$hashPassword));          // Decrypt password  (plaintext,hashpassword) 
     var_dump(password_verify("password123", $hashPassword));    // true
     echo "<br>";
     echo password_verify($password,$hashPassword)? "Welcome" : "Try Again";




	 ?>
</body>
</html>