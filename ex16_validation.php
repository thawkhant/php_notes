<!DOCTYPE html>
<html>
<head>
    <title>Validation</title>	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

	<?php  
      $errorName = $errorAddress = $errorEmail = $errorPhone = "";
       $name1 = $email1 = $phone1 = $address1 = "";

     if(isset($_POST['btnSave'])){
        
        if($_POST['name'] == null || $_POST['name'] == "" || empty($_POST['name'])){
          $errorName = "Please Fill Name Field!";
        }else{
        	$name1 = $_POST['name'];
        }

          if($_POST['email'] == null || $_POST['email'] == "" || empty($_POST['email'])){
          $errorEmail = "Please Fill Email Field!";
        }else{
        	$email1 = $_POST['email'];
        }

          if($_POST['phone'] == null || $_POST['phone'] == "" || empty($_POST['phone'])){
          $errorPhone = "Please Fill Phone Field!";
        }else{
        	$phone1 = $_POST['phone'];
        }

          if($_POST['address'] == null || $_POST['address'] == "" || empty($_POST['address'])){
          $errorAddress = "Please Fill Address Field!";
        }else{
        	$address1 = $_POST['address'];
        }

        if($name1 != "" && $email1 != "" && $address1 != "" && $phone1 != ""){
        	echo $name1 . "<br/>";
        	echo $email1 . "<br/>";
        	echo $address1 . "<br/>";
        	echo $phone1 . "<br/>";
        }


     	
     }
  
	?>

	<div class="container mt-5">
		<div class="row">
			<div class="col-6 offset-3  shadow">
				
				<form method="POST">

				  <div class="my-3 px-5">
					<label for="">Name</label>
					<input type="text" name="name" class="form-control" placeholder="Enter Name">
					<small class="text-danger"><?php echo $errorName; ?></small>
				</div>

				<div class="my-3 px-5">
					<label for="">Email</label>
					<input type="email" name="email" class="form-control" placeholder="Eg: example@gmail.com">
					<small class="text-danger"><?php echo $errorEmail; ?></small>
				</div>

				<div class="my-3 px-5">
					<label for="">Phone</label>
					<input type="number" name="phone" class="form-control" placeholder="Eg:  09..........">
					<small class="text-danger"><?php echo $errorPhone; ?></small>
				</div>


				<div class="my-3 px-5">
					<label for="">Address</label>
					<textarea name="address" class="form-control" cols="30" rows="10" placeholder="Enter address"></textarea>
					<small class="text-danger"><?php echo $errorAddress; ?></small>
				</div>

                <div class="my-3 px-5 d-flex justify-content-end">
                	<input type="submit" value="Save" class="btn bg-dark text-white btn-md" name="btnSave"> 
                </div>
	
				</form>

			</div>
		</div>
	</div>

	
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>