<!-- 
Data Types
Interger, double, boolean, null, string, array, object, undefined

=> variable ko $ nae kyal nyar dal

=>output ko var_dump(#abc) nat htoke  // print($)


 -->

<?php

 // $name = 'sithu';

 // var_dump($name);
 // print($name);
 // print_r($name);
 // echo $name;
 
 //echo "<pre>";
 //var_dump($_SERVER);
 //print_r($_SERVER);

  // $name = "Thaw Khant";
  // echo $name;

   // $num1 = 10;
   // $num2 = 20;
   // echo $num1 + $num2;
   
   // concatinate
   // $first = "Thaw";
   // $last = "Khant";
   // echo $first .  $last ;

   
   // Array
   $array = ['one','two','three'];
   
   $assoArray = [
   'name' => 'Maung Maung',
   'role' => 'Developer'
   ];


   echo "<pre>";
  // var_dump($array);
   print_r($assoArray);

   echo $assoArray['name'];
   echo $array[0]."<hr>";

 //========================

    $fruits = "apple";

   // if($fruits == 'mango'){
   // 	echo "This is mango";
   // }else{
   // 	echo "This is other fruits";
   // }

  //======================
  
  $result = $fruits == 'mango' ? "This is mango" : "This is other";
  // result htal ko htal lite dar // assign cha lite dar

  echo $result;


  

?>