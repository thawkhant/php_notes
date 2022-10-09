<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	
	Array Build in function
	<hr/>

	<?php
    $xyz = [1,10,5,2,6,70];
	$arr = ['apple','mango','banana','orange',10,20];
	echo count($arr)."<br/>";
	echo ($arr[0])."<br/>";
	echo current($arr)."<br/>"; // a shay shone khan ko htoke pay dal
	echo end($arr)."<br/>";  // array yae nout shone khan ko htoke pay dal
	echo array_rand($arr)."<br/>"; // array ye index dwe ko random htoke pay dar
	echo $arr[array_rand($arr)]."<br/>" ; // array ye word ko random htoke pay dar  ****
	echo array_sum($arr)."<br/>";  // number dwe mar bal sum dal ***
	$number = range(0, 20);   // create new array 
	echo "<pre>";
	var_dump($number)."<br/>";

	echo in_array("apple", $arr) ? "true" : "false";  // simple array htal mar shi lar so dar sint dar ****
	echo "<br/>";
	echo  in_array("golliza" , $arr) ? "true" : "false";

	$person = [         // That's accessoriate Array
      'name'=>"thaw khant",
      'job' => "Programmer",
      'address' => 'Myeik'
	 ];
       echo "<br/>";
	  echo array_key_exists("name",$person) ? "true" : "false";    //accessoriate array tway mar shi lar  shar phot
      echo "<br/>";
	  echo array_key_exists("salary",$person) ? "true" : "false";  
      
      echo "<pre>";
	  var_dump(array_keys($person));   // keys only htoke dar

	  echo "<pre>";
	  var_dump(array_values($person));  // values only htoke dar

	  $name = "I am thawkhant";

	  echo "<pre/>";
	  var_dump(explode(" ",$name));    // string ka nay array ko chain dar


	  echo implode("/", $arr)."<br/>";  // array ka nay string ko pyan change dar

	  echo join("|",$arr);  // join ka implode nat tu dal


	  // add back
	  array_push($arr,"strawberry");
	  echo "<pre/>";
	  var_dump($arr);

	    // add front
	  array_unshift($arr, "sugar");
	  echo "<pre/>";
	  var_dump($arr);


	  // remove back
	  array_pop($arr);

	  // remove front
	  array_shift($arr);
	   echo "<pre/>";
	  var_dump($arr);

     // sorting a to z
	  echo "<pre/>";
	  sort($arr);

	  for($i=0; $i<count($arr); $i++){
	  	echo $arr[$i]."<br/>";
	  };
      
      // Reverse Sort 
	  rsort($arr);

	  for($i=0; $i<count($arr); $i++){
	  	echo $arr[$i]."<br/>";
	  };

	  // -----------------------------------------------------------
      
	  rsort($xyz);

	  for($i=0; $i<count($xyz); $i++){
	  	echo $xyz[$i]."<br/>";
	  };


	  // -----------------------------------------------------------

	      // Accessorate Array twe ko sortin si dar  
	                      // ksort key ascending
	                      // asort value ascending

	                      // arsort value descending
	                      // krsort key descending

      

      asort($person); 
      echo "<pre/>";
	  var_dump($person);

	  arsort($person); 
      echo "<pre/>";
	  var_dump($person);

	  ksort($person); 
      echo "<pre/>";
	  var_dump($person);

	   krsort($person); 
      echo "<pre/>";
	  var_dump($person);


	  // random si lite dar //value ko ya dal
	  shuffle($arr);
	  echo "<pre/>";
	  var_dump($arr);



	


 






	?>
</body>
</html>