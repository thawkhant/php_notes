<!DOCTYPE html>
<html>
<head>
	<title>Storage 1</title>
</head>
<body>
   

<?php  
  
  session_start();

  // session_destroy();   // session delete

  echo $_SESSION['name'];  // session call loke dar
  echo "<br/>";
  echo $username;
  
?>


</body>
</html>