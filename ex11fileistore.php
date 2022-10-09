<!DOCTYPE html>
<html>
<head>
	<title>File Store</title>
</head>
<body>
	

	<h2>File Store</h2>

	<form method="POST" enctype="multipart/form-data">
		<label>Choosen Your Image</label><br/>
		<input type="file" name="userProfile">
		<br/><br/>
		<input type="submit" name="storeProfile" value="Save">
	</form>

	<?php
        
        if (isset($_POST['storeProfile'])){
            echo "<pre>";
        	// print_r($_FILES);
        	// var_dump($_FILES);

        	$imgName = $_FILES['userProfile']['name'];
        	$tmpName = $_FILES['userProfile']['tmp_name'];
        	// print_r($imgName);
        	// echo "<br/>";
        	// print_r($tmpName);
        	// echo "<br/>";

        	// $target = "imageStorage/" . $imgName;
        	// move_uploaded_file($tmpName, $target);
        	// echo "<h1 style='color:green';>Successfully Uploaded</h1>";

        	 $target = "uploadfile/" . $imgName;
        	 if(move_uploaded_file($tmpName, $target)){
                move_uploaded_file($tmpName, $target);
                echo "success";
        	 }else{
        	 	echo "error";
        	 }
        }


	?>
</body>
</html>