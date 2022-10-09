<?php

  $name = "Kyaw Gyi";

  if($name === "Thaw Khant"){
  	echo "You right";
  }elseif($name === "Kyaw Gyi"){
  	echo "Sayar Gyi Ha!";
  }
  else{
  	echo "Yor Wrong";
  };

  echo '<hr><hr>You are the best';

  echo '<hr/>';

  $cars = ['Toyota','BMW','Honda'];

  // echo count($cars);
  
  // for loop
  for($i=0; $i<count($cars); $i++){
  	echo $cars[$i]."<br>";
  }


  // foreach loop
  foreach($cars as $item){
  	echo $item."<br>";
  }
  
  //while loop
  $num = 1;
  while($num <= 10){
  	echo $num."<br>";
  	$num++;
  }

  //do while loop
  $num2 = 1;
  do{
  	echo $num2."<br>";
  	$num2++;
  }while($num2 <= 10);




  // ==========================================================

  function outputMessage($x = "empty"){
  	echo $x;
  }

  outputMessage("Hello I am thaw thaw");

// -----------------------------


  function output($x,$y){
  	echo $x+$y;
  }

  output(10,20);

  // -----------------------------

  function abc($a,$b){
  	return $a+$b;
  }

  $output =  abc(10,10);
  echo $output;












