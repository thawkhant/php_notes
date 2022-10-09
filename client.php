<!DOCTYPE html>
<html>
<head>
	<title>Client Side</title>
</head>
<body>
	<h1>Client Side</h1>

	<!-- GET | POST

	GET => <a href=""></a>
	POST => <form action="" method="POST"></form> -->


	<a href="./server.php?name=thawkhant&job=programmer&address=myeik">Server</a>

	<form action="./server.php" method="GET" enctype="multipart/form-data">
		<label>First Name</label><input type="text" name="firstName"><br/>
		<label>Second Name</label><input type="text" name="secondName"><br/>
		<select name="country">
			<option value="mm">Myanmar</option>
			<option value="th">Thailand</option>
		</select>
		<br/>
		<input type="file" name="myImg"><br/>
		<button type="submit">Click to Send</button>
	</form>


  <!--   <form action="./server.php" method="POST">
		<label>First Name</label><input type="text" name="firstName" required><br/>
		<label>Second Name</label><input type="text" name="secondName" required><br/>
		<button type="submit">Click to Send</button>
	</form> -->

	<!-- GET Method
	http://localhost/php-lesson/server.php?firstName=sss&secondName=ssss
 -->

 <!-- POST Method
 http://localhost/php-lesson/server.php -->



</body>
</html>





   <!-- GET Method -->
<!--  http://localhost/php-lesson/client.php?name=thawkhant&job=programmer
 => http://localhost/php-lesson/server.php
 => http://localhost/php-lesson/server.php?name=thawkhant&job=&address=myeik -->