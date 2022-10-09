<!DOCTYPE html>
<html>
<head>
	<title>Math</title>
</head>
<body>

	pow(x,y) <br/>
	sqrt(x) <br/>
	abs(x) <br/>
	round(x) <br/>
	ceil(x) <br/>
	floor(x) <br/>
	rand(start,end) <br/>
	max() <br/>
	min() <br/>
	

	<?php
          
     echo pow(2, 3)."<br>";
     echo sqrt(9)."<br>";
     echo abs(-9)."<br>";  // chane + to -
     echo round(1.5)."<br>"; // nee sat yar ko you dar 5 htint kyaw yin 1 toe 5 out so ma toe buu
     echo ceil(1.1)."<br>";  // a myint value
     echo floor(1.9)."<br>"; // a nake ko yu dal
     echo rand(1,10)."<br>";


     $array = [2,6,3,4,7,8,1,10,11];
     echo max($array)."<br>";
     echo min($array);




          ?>
</body>
</html>