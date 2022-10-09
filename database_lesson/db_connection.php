<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Database Connection</title>
</head>
<body>
  <?php
   
   // mysqli_connect('hostname','userName','password','databaseName');
   // $connection =   mysqli_connect('localhost','root',''); // dar ka phpmyadmin net connect loke dar
    $connection =   mysqli_connect('localhost','root','','test');

  if($connection){
  	echo "database connect success";
  }else{
  	 die("connection fail...".mysqli_connectection_error()); // a nout ka har ka error message ko kyi chin lot
  }

  ?>
</body>
</html>