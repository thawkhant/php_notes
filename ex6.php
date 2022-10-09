<!DOCTYPE html>
<html>
<head>
	<title>Ex6</title>
</head>
<body>
    <h1>Constants Declaration Vs Variable Declaration</h1>
	Constants is look like const in js
	<hr/>
	


	<?php  
    
    //  define(name, value, case-insensitive);

    // var let const

    $name = "Thaw Khant";  // local scope in php sir
    $arr = ["mango","apple","orange"];  
    define("NAME", $arr,false);  // it look like const in javascript  // a nout mar case sensitive shi tay dal but i have a little error // defalult ka false
    


   function showMessage(){
   	$name = "Thaw Khant";
   	echo NAME['1'];
   	echo $name;
   };

   showMessage();
    


   



	?>
</body>
</html>