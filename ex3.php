<!DOCTYPE html>
<html>
<head>
	<title>PHP ex3</title>
</head>
<body>

	strlen()<br/>
	str_word_count()<br/>
	strrev()<br/>
	str_shuffle()<br/>
	strpos(str,search)<br/>
	substr(str,start,end)<br/>
	strtoupper()<br/>
	strtolower()<br/>
	ucfirst()<br/>
	ucwords()<br/>
	strip_tags()<br/>
	str-replace(find,new,string)<br/>
	trim()<br/>
	str_split()<br/>
	explode()<br/>




	<h1>
		<i>This is testing</i>
	</h1>

	



	<?php
    
    //  strip_tags()   // to remove html tags bro
	$test = "<h1>
		<i>This is testing</i>
	</h1>";

	// echo $test;
	echo strip_tags($test)."<hr/>";


    // it's just for explode
    $name = "Handsome/Thaw/Khant";

   // $name = "Handsome Thaw Khant";
    echo $name."<br>";
    echo strlen($name)."<br>";  // to count length
    echo str_word_count($name)."<br>";  // count parse
    echo strrev($name)."<br>";   // to reverse words 
    echo str_shuffle($name)."<br>";  // random loke lite dar
    echo strpos($name,"Thaw")."<br>";   // bal nay yar mar shi dar lal // array format nat lar lot 0 ka nay sa dal
    echo "<br/>";
    echo $name[7]."<br/>";
    echo substr($name,0,4)."<br/>";  // (string,start point,end point)
    echo strtoupper($name)."<br/>";
    echo strtolower($name)."<br/>";
    echo ucfirst($name)."<br/>";  // Capitalize
    echo ucwords($name)."<br/>";
   // echo str_replace("Thaw", "Kyaw", $name)."<br/>";  // replace
   // var_dump(trim($name))."<br/>";  // trim ka space ko delete lote dal => left / right
   // var_dump(ltrim($name))."<br/>"; // left ka har ko bal delete dar
   // var_dump(rtrim($name))."<br/>";  // right ka har ko bal delete dar
   // var_dump(trim($name,'aaa'))."<br/>"; // i was delete aaa

    // str_split()  => used change from string to array
       echo "<pre>";
       var_dump(str_split($name));
       $arr = str_split($name);
       echo "<br/>";
       echo $arr[9];
       var_dump(str_split($name,5));   // 5 lone 1 khan nat pyat lite dar


     // explode also change form string to array
     
     var_dump(explode("/", $name,2));  // bal na khan pyat mal




    







	?>
</body>
</html>